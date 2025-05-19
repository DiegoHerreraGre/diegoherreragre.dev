<?php
/*
Template Name: 404
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHG - Página no encontrada</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <main class="grid min-h-full px-6 py-24 bg-white place-items-center dark:bg-gray-900 sm:py-32 lg:px-8">
        <div class="text-center">
            <div class="relative">
                <!-- Top gradient effect -->
                <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#60a5fa] to-[#3b82f6] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>

                <!-- 404 Icon -->
                <div class="flex justify-center mb-8">
                    <svg class="w-24 h-24 text-blue-600 dark:text-blue-400 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>

                <p class="text-base font-semibold text-blue-600 dark:text-blue-400 animate-pulse">404</p>
                <h1 class="mt-4 text-5xl font-semibold tracking-tight text-gray-900 transition-transform duration-300 text-balance dark:text-white sm:text-7xl hover:scale-105">Página no encontrada</h1>
                <p class="mt-6 text-lg font-medium text-gray-500 text-pretty dark:text-gray-400 sm:text-xl/8">Lo sentimos, no pudimos encontrar la página que estás buscando.</p>

                <!-- Decorative elements -->
                <div class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-96 h-96 opacity-10">
                    <svg class="w-full h-full animate-spin-slow" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="2" stroke-dasharray="283" stroke-dashoffset="75" />
                    </svg>
                </div>

                <div class="flex items-center justify-center mt-10 gap-x-6">
                    <a href="<?php echo esc_url(home_url()); ?>" class="group rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-all duration-200 hover:scale-105 z-50">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Volver al inicio
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('#contacto')); ?>" class="z-50 text-sm font-semibold text-gray-900 transition-all duration-200 group dark:text-white hover:text-gray-700 dark:hover:text-gray-300 hover:scale-105">
                        Contactarme
                        <span class="inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
                    </a>
                </div>

                <!-- Bottom gradient effect -->
                <div class="absolute inset-x-0 top-[calc(100%-8rem)] z-30 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-25rem)]" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/3 rotate-[30deg] bg-gradient-to-tr from-[#60a5fa] to-[#3b82f6] opacity-30 dark:from-[#60a5fa] dark:to-[#3b82f6] sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
            </div>
        </div>
    </main>

    <?php wp_footer(); ?>

</body>

</html>