#!/usr/bin/env node

/**
 * Script de prueba para el webhook de deployment
 * Simula una llamada de GitHub para probar el sistema de logging
 */

import crypto from "crypto";

const WEBHOOK_URL = "http://localhost:22110/api/webhook";
const GITHUB_SECRET = process.env.GITHUB_SECRET || "test-secret";

// Payload simulado de GitHub
const payload = {
  ref: "refs/heads/main",
  repository: {
    full_name: "DiegoHerreraGre/diegoherreragre.dev",
    name: "diegoherreragre.dev"
  },
  pusher: {
    name: "DiegoHerreraGre",
    email: "diego@diegoherreragre.dev"
  },
  commits: [
    {
      id: "abc123",
      message: "test: webhook deployment",
      author: {
        name: "Diego Herrera",
        email: "diego@diegoherreragre.dev"
      }
    }
  ]
};

const rawBody = JSON.stringify(payload);

// Generar firma HMAC
const hmac = crypto.createHmac("sha1", GITHUB_SECRET);
const signature = `sha1=${hmac.update(rawBody).digest("hex")}`;

console.log("🧪 Enviando webhook de prueba...");
console.log("📋 Payload:", JSON.stringify(payload, null, 2));
console.log("🔐 Signature:", signature);

fetch(WEBHOOK_URL, {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    "X-Hub-Signature": signature,
    "X-GitHub-Event": "push",
    "User-Agent": "GitHub-Hookshot/test"
  },
  body: rawBody
})
.then(response => response.json())
.then(data => {
  console.log("✅ Respuesta del webhook:", data);
  console.log("🔍 Revisa la consola del servidor para ver los logs del deployment");
})
.catch(error => {
  console.error("❌ Error:", error);
});
