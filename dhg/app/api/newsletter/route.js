import PermisionMiddleware from "@/middlewares/permisions.middlewares";
import { PrismaClient } from "@/lib/generated/prisma";
import { z } from "zod";
import { validateRecaptcha } from "@/config/recaptcha.config";
import { sendEmail } from "@/utils/email";
import {
  RECAPTCHA_ACTIONS,
  getMinScoreForAction,
} from "@/config/recaptcha-actions.config";

export async function GET(request) {
  return PermisionMiddleware(request);
}

export async function POST(request) {
  const prisma = new PrismaClient();
  try {
    const formData = await request.formData();
    const email = formData.get("email");
    const selectOption = formData.get("selectOption");
    const recaptchaToken = formData.get("recaptchaToken");

    if (!recaptchaToken) {
      return new Response(
        JSON.stringify({
          success: false,
          message: "Token de reCAPTCHA requerido",
        }),
        {
          status: 400,
          headers: { "Content-Type": "application/json" },
        }
      );
    }

    const environment = process.env.NODE_ENV || "production";
    const minScore = getMinScoreForAction(
      RECAPTCHA_ACTIONS.CONTACTO,
      environment
    );

    const recaptchaValidation = await validateRecaptcha(
      recaptchaToken,
      RECAPTCHA_ACTIONS.CONTACTO,
      minScore
    );

    if (!recaptchaValidation.success) {
      return new Response(
        JSON.stringify({
          success: false,
          error:
            "Verificación de seguridad falló. Por favor, inténtalo nuevamente.",
          recaptchaError: recaptchaValidation.error,
        }),
        {
          status: 400,
          headers: { "Content-Type": "application/json" },
        }
      );
    }

    const schema = z.object({
      email: z.string().email(),
      selectOption: z.string(),
    });

    try {
      const data = schema.parse({
        email,
        selectOption,
      });

      const contacto = await prisma.contacto.create({
        data,
      });
    } catch (validationError) {
      return new Response(
        JSON.stringify({ message: validationError.message }),
        {
          status: 400,
          headers: { "Content-Type": "application/json" },
        }
      );
    }

    const adminEmailContent = `
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Contacto Recibido</title>
    </head>
    <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
        <div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h1 style="color: #0066cc; text-align: center;">¡Nuevo Contacto Recibido!</h1>
            <p>Estimado administrador,</p>
            <p>Hemos recibido un nuevo contacto a través de nuestro formulario. A continuación, se detallan los datos del contacto:</p>
            <div style="background-color: #f5f5f5; padding: 15px; border-radius: 5px; margin-top: 20px;">
                <p><strong>Email del contacto:</strong> ${email}</p>
                <p><strong>Fecha de recepción:</strong> ${new Date().toLocaleString()}</p>
            </div>
            <p style="margin-top: 20px;">Por favor, proceda a revisar los detalles y tomar las acciones necesarias.</p>
            <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; text-align: center;">
                <p>Saludos,<br>Equipo de Soporte</p>
            </div>
        </div>
    </body>
    </html>
    `;

    // Email para el usuario
    const userEmailContent = `    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>¡Gracias por tu contacto!</title>
    </head>
    <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
        <div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h1 style="color: #0066cc; text-align: center;">¡Gracias por contactarme!</h1>
            <p>Hola,</p>
            <p>Quiero agradecerte por tomarte el tiempo de ponerte en contacto conmigo. Estoy emocionado de conocer más sobre tu proyecto y cómo puedo ayudarte a llevarlo al siguiente nivel.</p>
            <p>En las próximas 48 horas, me pondré en contacto contigo para discutir los detalles de tu proyecto. Durante nuestra conversación, abordaremos los siguientes puntos:</p>
            <ul style="list-style-type: disc; margin-left: 20px;">
                <li>Revisaremos los requerimientos específicos de tu proyecto.</li>
                <li>Te proporcionaré una cotización detallada y personalizada.</li>
                <li>Resolveré cualquier duda que puedas tener sobre el proceso.</li>
            </ul>
            <p>Estoy comprometido a ofrecerte el mejor servicio posible y espero que podamos trabajar juntos para hacer realidad tus ideas.</p>
            <p>¡Gracias nuevamente por considerar mis servicios!</p>
            <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; text-align: center;">
                <p>Saludos cordiales,<br>Diego Herrera Gre</p>
            </div>
        </div>
    </body>
    </html>
    `;

    // Enviar emails
    const adminEmail = "dherrera@mtm.cl";

    await Promise.all([
      sendEmail(adminEmail, "Nuevo contacto hecho", adminEmailContent, true),
      sendEmail(
        email,
        "¡Te contactaré muy prontamente!",
        userEmailContent,
        true
      ),
    ]);

    return new Response(
      JSON.stringify({
        message: "¡Gracias por suscribirte!",
        success: true,
      }),
      {
        status: 200,
        headers: { "Content-Type": "application/json" },
      }
    );
  } catch (error) {
    console.error("Newsletter error:", error);

    if (error.code === 11000) {
      return new Response(
        JSON.stringify({
          message: "Este email ya está registrado",
          success: false,
        }),
        {
          status: 400,
          headers: { "Content-Type": "application/json" },
        }
      );
    }

    return new Response(
      JSON.stringify({
        message: "Error processing subscription",
        success: false,
      }),
      {
        status: 500,
        headers: { "Content-Type": "application/json" },
      }
    );
  }
}

export async function PUT(request) {
  return PermisionMiddleware(request);
}

export async function DELETE(request) {
  return PermisionMiddleware(request);
}

export async function PATCH(request) {
  return PermisionMiddleware(request);
}

export async function OPTIONS(request) {
  return PermisionMiddleware(request);
}

export async function HEAD(request) {
  return PermisionMiddleware(request);
}
