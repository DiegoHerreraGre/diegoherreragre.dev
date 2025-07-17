import { NextResponse } from "next/server";

import { exec } from "child_process";
import crypto from "crypto";

export const config = {
  api: {
    bodyParser: false,
  },
};

/**
 * Handles incoming GitHub webhook POST requests.
 *
 * Verifies the request signature using the shared secret, parses the payload,
 * and triggers deployment steps if the event is a push to the 'main' branch.
 * Logs detailed information about each step and process for better traceability.
 *
 * @param {Request} request - The incoming HTTP request object containing the webhook payload.
 * @returns {Promise<Response>} JSON response indicating the result of the operation.
 *
 * @async
 *
 * @example
 * // This route expects GitHub webhook requests with the following headers:
 * // - x-hub-signature: HMAC signature for verification
 * // - x-github-event: Type of GitHub event (e.g., "push")
 *
 * @throws {401} If the signature verification fails.
 * @throws {400} If the payload cannot be parsed as JSON.
 *
 * @description
 * Steps performed on push to 'main':
 * 1. Change to project directory.
 * 2. Fetch latest changes from origin.
 * 3. Reset HEAD to origin/main.
 * 4. Install dependencies with pnpm.
 * 5. Build the project.
 * 6. Generate Prisma client.
 * 7. Validate Prisma schema.
 * 8. Apply database changes with Prisma db push.
 * 9. Reload the application.
 */
export async function POST(request) {
  const rawBody = await request.text();
  const signature = request.headers.get("x-hub-signature");
  const event = request.headers.get("x-github-event");

  const secret = process.env.GITHUB_SECRET;
  const hmac = crypto.createHmac("sha1", secret);
  const digest = `sha1=${hmac.update(rawBody).digest("hex")}`;

  if (signature !== digest) {
    console.warn("[WEBHOOK] 🚫 Firma inválida recibida. Descartando petición.");
    return NextResponse.json(
      { status: "error", message: "Invalid signature" },
      { status: 401 }
    );
  }

  let payload;
  try {
    payload = JSON.parse(rawBody);
    console.info("[WEBHOOK] 🔔 Payload recibido correctamente:", {
      ref: payload.ref,
      repository: payload.repository?.full_name,
      pusher: payload.pusher?.name,
      event,
    });
  } catch (err) {
    console.error("[WEBHOOK] ❌ Error al parsear payload:", err);
    return NextResponse.json(
      { status: "error", message: "Invalid payload" },
      { status: 400 }
    );
  }

  const ref = payload.ref;
  const isMain = ref === "refs/heads/main";

  // Solo actuamos ante push a main
  if (event === "push" && isMain) {
    console.log("[DEPLOY] ✅ Push a 'main' detectado. Iniciando proceso de actualización...");

    // Script para asegurar repo actualizado y build
    const updateScript = `
      echo "[DEPLOY] 1️⃣ Cambiando a directorio del proyecto..."
      cd /home/dhg/domains/diegoherreragre.dev/dhg

      echo "[DEPLOY] 2️⃣ Fetch de últimos cambios desde origin..."
      git fetch origin

      echo "[DEPLOY] 3️⃣ Reseteando HEAD a origin/main..."
      git reset --hard origin/main

      echo "[DEPLOY] 4️⃣ Instalando dependencias con pnpm..."
      pnpm install

      echo "[DEPLOY] 5️⃣ Compilando proyecto con pnpm build..."
      pnpm build

      echo "[DEPLOY] 6️⃣ Generando cliente Prisma..."
      pnpm prisma generate

      echo "[DEPLOY] 7️⃣ Validando esquema Prisma..."
      pnpm prisma validate

      echo "[DEPLOY] 8️⃣ Aplicando cambios de BD con Prisma db push..."
      pnpm prisma db push

      echo "[DEPLOY] 9️⃣ Recargando aplicación..."
      pnpm run reload

      echo "[DEPLOY] 🚀 Despliegue finalizado correctamente."
    `;

    exec(updateScript, (err, stdout, stderr) => {
      if (err) {
        console.error("[DEPLOY] ❌ Error durante el despliegue:", err);
        return;
      }
      console.log("[DEPLOY] 🟢 STDOUT del proceso:\n", stdout);
      if (stderr) console.warn("[DEPLOY] 🟡 STDERR del proceso:\n", stderr);
    });
  } else {
    console.log(`[WEBHOOK] ℹ️ Evento ignorado: ${event} en ref ${ref}`);
  }

  return NextResponse.json({ status: "ok" });
}
