<?php /* Template Name: Sobre mí */ ?>

<?php get_header(); ?>

<section class="relative z-50 py-24 mx-auto mt-16 overflow-hidden bg-white shadow-2xl rounded-3xl h-1/2 sm:py-32 dark:bg-gray-900 ring-2 ring-gray-900/5 dark:ring-white/5 max-w-7xl">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent dark:from-blue-900/20 dark:to-transparent"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-blue-100/30 via-transparent to-transparent dark:from-blue-800/20 dark:via-transparent dark:to-transparent"></div>

    <div class="relative max-w-4xl px-6 mx-auto lg:px-8">
        <div class="text-center">
            <h1 class="mb-8 text-6xl font-black tracking-tight text-transparent text-black dark:text-white bg-clip-text bg-gradient-to-r from-blue-600 via-blue-500 to-blue-800 dark:from-blue-400 dark:via-blue-300 dark:to-blue-600 animate-gradient-x">Sobre mí</h1>
            <p class="max-w-3xl mx-auto mb-8 text-xl leading-relaxed text-gray-700 dark:text-gray-300">
                ¡Hola! Soy <span class="font-bold text-blue-600 transition-colors duration-300 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300">Diego Herrera Gré</span>, desarrollador frontend y arquitecto de soluciones digitales. Mi pasión es crear productos robustos, eficientes y seguros, combinando lo mejor de la tecnología moderna con buenas prácticas de ingeniería de software.
            </p>
            <p class="max-w-3xl mx-auto mb-12 text-lg leading-relaxed text-gray-600 dark:text-gray-400">
                Trabajo principalmente con <span class="font-semibold text-blue-600 dark:text-blue-400">PHP</span>, <span class="font-semibold text-blue-600 dark:text-blue-400">WordPress</span>, <span class="font-semibold text-blue-600 dark:text-blue-400">JavaScript</span>, <span class="font-semibold text-blue-600 dark:text-blue-400">TailwindCSS</span> y <span class="font-semibold text-blue-600 dark:text-blue-400">Alpine.js</span>, pero mi diferencial es la integración de herramientas de vanguardia como <span class="font-bold text-blue-600 transition-colors duration-300 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300">Cursor AI</span> y <span class="font-bold text-blue-600 transition-colors duration-300 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300">Warp</span> para acelerar el desarrollo, mantener altos estándares de calidad y optimizar el flujo de trabajo.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2 md:gap-16">
            <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white shadow-sm rounded-xl hover:shadow-lg hover:scale-105 hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700">

                <div class="w-24 h-24 mb-4 [&>svg]:text-gray-900 dark:[&>svg]:text-white [&>svg]:transition-colors">
                    <?php echo file_get_contents(get_template_directory() . '/dist/svg/cursor.svg'); ?>
                </div>
                <a href="https://cursor.com/" target="_blank" rel="noopener noreferrer" class="text-center hover:underline hover:text-blue-600 dark:hover:text-blue-400">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">Cursor AI</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">AI Coding Copilot</span>
                </a>

            </div>
            <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white shadow-sm rounded-xl hover:shadow-lg hover:scale-105 hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-24 h-24 mb-4 [&>svg]:text-gray-900 dark:[&>svg]:text-white [&>svg]:transition-colors">
                    <?php echo file_get_contents(get_template_directory() . '/dist/svg/warp.svg'); ?>
                </div>
                <a href="https://warp.dev/" target="_blank" rel="noopener noreferrer" class="text-center hover:underline hover:text-blue-600 dark:hover:text-blue-400">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">Warp</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Terminal de próxima generación</span>
                </a>
            </div>
            <div class="flex flex-col items-center p-6 transition-all duration-300 bg-white shadow-sm rounded-xl hover:shadow-lg hover:scale-105 hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-24 h-24 mb-4 [&>svg]:text-gray-900 dark:[&>svg]:text-white [&>svg]:transition-colors">
                    <?php echo file_get_contents(get_template_directory() . '/dist/svg/webcrumbs.svg'); ?>
                </div>
                <a href="https://webcrumbs.ai/" target="_blank" rel="noopener noreferrer" class="text-center hover:underline hover:text-blue-600 dark:hover:text-blue-400">
                    <span class="text-lg font-semibold text-gray-900 dark:text-white">Webcrumbs</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Diseño AI de Frontend</span>
                </a>
            </div>
        </div>
        <div class="mt-16 text-center">
            <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Valores y filosofía</h2>
            <ul class="flex flex-col items-center gap-3 text-base text-gray-700 dark:text-gray-300">
                <li class="flex items-center gap-2 px-4 py-2 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">🔒 Seguridad y privacidad como prioridad</li>
                <li class="flex items-center gap-2 px-4 py-2 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">⚡️ Optimización y rendimiento en cada línea de código</li>
                <li class="flex items-center gap-2 px-4 py-2 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">🧩 Arquitectura escalable y mantenible</li>
                <li class="flex items-center gap-2 px-4 py-2 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">🤝 Comunicación transparente y colaboración</li>
                <li class="flex items-center gap-2 px-4 py-2 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">🚀 Aprendizaje continuo y adopción de nuevas tecnologías</li>
            </ul>
        </div>
        <div class="mt-16 text-center">
            <a href="<?php echo esc_url(home_url()); ?>/proyectos" class="inline-block px-8 py-4 text-lg font-semibold text-white transition-all duration-300 bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl hover:scale-105 dark:bg-blue-500 dark:hover:bg-blue-600">Ver mis proyectos</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>