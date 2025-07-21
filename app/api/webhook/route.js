import { NextResponse } from 'next/server';

import { exec, execSync, spawn } from 'child_process';
import crypto from 'crypto';
import { promisify } from 'util';

const execAsync = promisify(exec);

/**
 * Utilidad para logging estilo Vercel con timestamps y formato mejorado
 */
const logger = {
    info: (message, data) => {
        const timestamp = new Date().toISOString();
        console.log(`[${timestamp}] ℹ️  ${message}`, data ? JSON.stringify(data, null, 2) : '');
    },
    success: (message, data) => {
        const timestamp = new Date().toISOString();
        console.log(`[${timestamp}] ✅ ${message}`, data ? JSON.stringify(data, null, 2) : '');
    },
    error: (message, error) => {
        const timestamp = new Date().toISOString();
        console.error(`[${timestamp}] ❌ ${message}`);
        if (error) {
            console.error(`[${timestamp}] 📋 Error details:`, error);
        }
    },
    warn: (message, data) => {
        const timestamp = new Date().toISOString();
        console.warn(`[${timestamp}] ⚠️  ${message}`, data ? JSON.stringify(data, null, 2) : '');
    },
    deploy: (step, message, data) => {
        const timestamp = new Date().toISOString();
        console.log(`[${timestamp}] 🚀 [STEP ${step}] ${message}`, data ? JSON.stringify(data, null, 2) : '');
    },
};

/**
 * Ejecuta un comando y retorna el resultado con logging detallado
 */
async function executeCommand(command, step, description) {
    logger.deploy(step, `${description}...`);

    try {
        const startTime = Date.now();
        const { stdout, stderr } = await execAsync(command, {
            cwd: '/home/dhg/domains/diegoherreragre.dev/dhg',
            maxBuffer: 1024 * 1024 * 10, // 10MB buffer
        });

        const duration = Date.now() - startTime;

        if (stdout) {
            logger.success(`${description} completado en ${duration}ms`, {
                command,
                output: stdout.trim().slice(-500), // Últimos 500 chars
            });
        }

        if (stderr) {
            logger.warn(`${description} - stderr`, {
                command,
                stderr: stderr.trim(),
            });
        }

        return { stdout, stderr, success: true };
    } catch (error) {
        logger.error(`${description} falló`, {
            command,
            error: error.message,
            code: error.code,
            stdout: error.stdout?.toString(),
            stderr: error.stderr?.toString(),
        });
        throw error;
    }
}

/**
 * Proceso de deployment con logging detallado estilo Vercel
 */
async function runDeployment() {
    const deploymentId = `deploy-${Date.now()}`;
    logger.info(`🚀 Iniciando deployment`, { deploymentId });

    try {
        // Información del sistema
        await executeCommand('pwd', 1, 'Verificando directorio actual');
        await executeCommand('whoami', 2, 'Verificando usuario');
        await executeCommand('node --version', 3, 'Verificando versión de Node.js');
        await executeCommand('pnpm --version', 4, 'Verificando versión de pnpm');

        // Git operations
        await executeCommand('git status', 5, 'Verificando estado del repositorio');
        await executeCommand('git fetch origin', 6, 'Descargando últimos cambios');
        await executeCommand('git reset --hard origin/main', 7, 'Reseteando a origin/main');
        await executeCommand('git log --oneline -5', 8, 'Mostrando últimos commits');

        // Dependencies
        await executeCommand('rm -rf node_modules', 9, 'Eliminando carpeta node_modules');
        await executeCommand('pnpm install', 10, 'Instalando dependencias');

        // Build process
        await executeCommand('rm -rf .next', 11, 'Eliminando carpeta .next');
        await executeCommand('pnpm run build', 12, 'Compilando aplicación');

        // Prisma operations
        await executeCommand('pnpm prisma generate', 13, 'Generando cliente Prisma');
        await executeCommand('pnpm prisma validate', 14, 'Validando esquema Prisma');

        // Reload application
        await executeCommand('pnpm run reload', 15, 'Recargando aplicación');

        logger.success('🎉 Deployment completado exitosamente', { deploymentId });
    } catch (error) {
        logger.error('💥 Deployment falló', {
            deploymentId,
            error: error.message,
            stack: error.stack,
        });
        throw error;
    }
}

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
    const signature = request.headers.get('x-hub-signature');
    const event = request.headers.get('x-github-event');

    const secret = process.env.GITHUB_SECRET;
    const hmac = crypto.createHmac('sha1', secret);
    const digest = `sha1=${hmac.update(rawBody).digest('hex')}`;

    if (signature !== digest) {
        logger.warn('🚫 Firma inválida recibida. Descartando petición.');
        return NextResponse.json({ status: 'error', message: 'Invalid signature' }, { status: 401 });
    }

    let payload;
    try {
        payload = JSON.parse(rawBody);
        logger.info('🔔 Webhook recibido correctamente', {
            ref: payload.ref,
            repository: payload.repository?.full_name,
            pusher: payload.pusher?.name,
            event,
            commits: payload.commits?.length || 0,
        });
    } catch (err) {
        logger.error('❌ Error al parsear payload', err);
        return NextResponse.json({ status: 'error', message: 'Invalid payload' }, { status: 400 });
    }

    const ref = payload.ref;
    const isMain = ref === 'refs/heads/main';

    // Solo actuamos ante push a main
    if (event === 'push' && isMain) {
        logger.success("✅ Push a 'main' detectado. Iniciando deployment...");

        // Ejecutar deployment asíncrono con logging mejorado
        setImmediate(async () => {
            try {
                await runDeployment();
            } catch (error) {
                logger.error('� Error crítico en deployment', error);
            }
        });
    } else {
        logger.info(`ℹ️ Evento ignorado: ${event} en ref ${ref}`);
    }

    return NextResponse.json({
        status: 'ok',
        message: isMain && event === 'push' ? 'Deployment iniciado' : 'Evento procesado',
    });
}
