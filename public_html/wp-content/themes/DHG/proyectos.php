<?php /* Template Name: Proyectos */ ?>

<?php get_header(); ?>

<section class="py-24 bg-white sm:py-32 dark:bg-gray-900">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto lg:max-w-none">
            <div class="text-center">
                <h2 class="text-4xl font-semibold tracking-tight text-black dark:text-white text-balance sm:text-5xl">Números que hablan por sí solos</h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-lg/8">Experiencia y confianza en cada proyecto que desarrollamos</p>
            </div>
            <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col p-8 dark:bg-white/5 bg-gray-900/5">
                    <dt class="font-semibold text-gray-800 dark:text-gray-200 text-sm/6">Eventos de GA4</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">50,000+</dd>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-blue-500 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col p-8 dark:bg-white/5 bg-gray-900/5">
                    <dt class="text-gray-800 ont-semibold dark:text-gray-200 text-sm/6">Tráfico web acumulado</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">500,000+</dd>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col p-8 dark:bg-white/5 bg-gray-900/5">
                    <dt class="text-gray-800 ont-semibold dark:text-gray-200 text-sm/6">Webs sin caídas</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">100%</dd>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col p-8 dark:bg-white/5 bg-gray-900/5">
                    <dt class="text-gray-800 ont-semibold dark:text-gray-200 text-sm/6">Protección 24/7</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">Siempre</dd>
                    <div class="mt-2">
                        <svg class="w-8 h-8 mx-auto text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
            </dl>
        </div>
    </div>
</section>

<section class="min-h-screen py-12 bg-gradient-to-b from-gray-50 to-gray-200 dark:from-gray-900 dark:to-gray-800">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mb-12 text-5xl font-extrabold tracking-tight text-center text-gray-900 dark:text-white drop-shadow-lg">Proyectos destacados</h2>
        <?php if (have_rows('proyectos_repeater')) :
            $proyectos = [];
            while (have_rows('proyectos_repeater')) : the_row();
                $proyectos[] = [
                    'titulo' => get_sub_field('titulo'),
                    'imagen' => get_sub_field('imagen'),
                    'resumen_proyecto' => get_sub_field('resumen_proyecto'),
                    'enlace' => get_sub_field('enlace'),
                    'logo_cliente' => get_sub_field('logo_cliente'),
                    'color' => get_sub_field('color') ?: '#3b82f6',
                    'stack_php' => get_sub_field('stack_php'),
                    'stack_mysql' => get_sub_field('stack_mysql'),
                    'stack_wordpress' => get_sub_field('stack_wordpress'),
                    'stack_alpinejs' => get_sub_field('stack_alpinejs'),
                    'stack_tailwind' => get_sub_field('stack_tailwind'),
                    'stack_nodejs' => get_sub_field('stack_nodejs'),
                    'stack_produccion' => get_sub_field('stack_produccion'),
                    'stack_desarrollo' => get_sub_field('stack_desarrollo'),
                    'stack_diseno' => get_sub_field('stack_diseno'),
                    'stack_migracion' => get_sub_field('stack_migracion'),
                ];
            endwhile;
            shuffle($proyectos);
        ?>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($proyectos as $proyecto): extract($proyecto); ?>
                    <div class="relative group rounded-3xl overflow-hidden shadow-xl bg-white/70 dark:bg-gray-900/70 backdrop-blur-lg border border-gray-200 dark:border-gray-800 transition-all duration-300 hover:scale-[1.025] hover:shadow-2xl">
                        <div class="relative w-full h-56 overflow-hidden sm:h-64 md:h-56 lg:h-48 xl:h-56">
                            <img src="<?php echo esc_url($imagen); ?>" alt="<?php echo esc_attr($titulo); ?>" class="object-cover w-full h-full transition duration-300 group-hover:scale-105 group-hover:opacity-80" loading="lazy">
                            <?php if ($logo_cliente): ?>
                                <div class="absolute z-10 flex items-center p-2 shadow-md top-4 left-4 bg-white/80 dark:bg-gray-800/80 rounded-xl">
                                    <img src="<?php echo esc_url($logo_cliente); ?>" alt="Logo <?php echo esc_attr($titulo); ?>" class="object-contain w-14 h-14" loading="lazy" />
                                </div>
                            <?php endif; ?>
                            <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        </div>
                        <div class="flex flex-col justify-between h-56 p-6">
                            <div>
                                <h3 class="flex items-center gap-2 mb-2 text-2xl font-bold text-gray-900 dark:text-white">
                                    <?php if ($enlace): ?>
                                        <a href="<?php echo esc_url($enlace); ?>" target="_blank" rel="noopener" class="flex items-center gap-2 transition-colors duration-200 hover:underline hover:text-blue-600 dark:hover:text-blue-400">
                                            <?php echo esc_html($titulo); ?>
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    <?php else: ?>
                                        <?php echo esc_html($titulo); ?>
                                    <?php endif; ?>
                                </h3>
                                <p class="mb-4 overflow-y-auto text-base text-gray-700 dark:text-gray-300 max-h-24"><?php echo esc_html($resumen_proyecto); ?></p>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-auto">
                                <?php if ($stack_php): ?>
                                    <span class="inline-block align-middle w-7 h-7 dark:text-white"><?php echo file_get_contents(get_template_directory() . '/dist/svg/php.svg'); ?></span>
                                <?php endif; ?>
                                <?php if ($stack_mysql): ?>
                                    <span class="inline-block text-gray-800 align-middle w-7 h-7 dark:text-white"><?php echo file_get_contents(get_template_directory() . '/dist/svg/sql.svg'); ?></span>
                                <?php endif; ?>
                                <?php if ($stack_wordpress): ?>
                                    <span class="inline-block text-gray-800 align-middle w-7 h-7 dark:text-white"><?php echo file_get_contents(get_template_directory() . '/dist/svg/wordpress.svg'); ?></span>
                                <?php endif; ?>
                                <?php if ($stack_alpinejs): ?>
                                    <span class="inline-block text-gray-800 align-middle w-7 h-7 dark:text-white"><?php echo file_get_contents(get_template_directory() . '/dist/svg/alpinejs.svg'); ?></span>
                                <?php endif; ?>
                                <?php if ($stack_tailwind): ?>
                                    <span class="inline-block align-middle w-7 h-7 text-cyan-500 dark:text-cyan-300"><?php echo file_get_contents(get_template_directory() . '/dist/svg/tailwindcss.svg'); ?></span>
                                <?php endif; ?>
                                <?php if ($stack_nodejs): ?>
                                    <span class="inline-block text-yellow-400 align-middle w-7 h-7 dark:text-yellow-300"><?php echo file_get_contents(get_template_directory() . '/dist/svg/nodejs.svg'); ?></span>
                                <?php endif; ?>
                                <?php if ($stack_produccion): ?>
                                    <span class="inline-flex items-center px-2 py-1 text-xs font-semibold rounded bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-200">Producción</span>
                                <?php endif; ?>
                                <?php if ($stack_desarrollo): ?>
                                    <span class="inline-flex items-center px-2 py-1 text-xs font-semibold text-orange-700 bg-orange-200 rounded dark:bg-orange-700 dark:text-orange-200">Desarrollo</span>
                                <?php endif; ?>
                                <?php if ($stack_diseno): ?>
                                    <span class="inline-flex items-center px-2 py-1 text-xs font-semibold text-pink-700 bg-pink-200 rounded dark:bg-pink-700 dark:text-pink-200">Diseño</span>
                                <?php endif; ?>
                                <?php if ($stack_migracion): ?>
                                    <span class="inline-flex items-center px-2 py-1 text-xs font-semibold text-purple-700 bg-purple-200 rounded dark:bg-purple-700 dark:text-purple-200">Migración</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="mt-12 text-center text-gray-500 dark:text-gray-400">Aún no hay proyectos cargados.</div>
        <?php endif; ?>
    </div>
</section>
<section>
    <div class="py-24 bg-white dark:bg-gray-900 sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid items-center max-w-lg grid-cols-4 mx-auto gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <div class="flex flex-col items-center col-span-2 lg:col-span-1">
                    <span class="inline-block w-12 h-12 mb-2 text-blue-600 dark:text-blue-400"><?php echo file_get_contents(get_template_directory() . '/dist/svg/php.svg'); ?></span>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">PHP</span>
                </div>
                <div class="flex flex-col items-center col-span-2 lg:col-span-1">
                    <span class="inline-block w-12 h-12 mb-2 text-cyan-500 dark:text-cyan-300"><?php echo file_get_contents(get_template_directory() . '/dist/svg/tailwindcss.svg'); ?></span>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">TailwindCSS</span>
                </div>
                <div class="flex flex-col items-center col-span-2 lg:col-span-1">
                    <span class="inline-block w-12 h-12 mb-2 text-yellow-400 dark:text-yellow-300"><?php echo file_get_contents(get_template_directory() . '/dist/svg/nodejs.svg'); ?></span>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Node.js</span>
                </div>
                <div class="flex flex-col items-center col-span-2 sm:col-start-2 lg:col-span-1">
                    <span class="inline-block w-12 h-12 mb-2 text-gray-800 dark:text-white"><?php echo file_get_contents(get_template_directory() . '/dist/svg/wordpress.svg'); ?></span>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">WordPress</span>
                </div>
                <div class="flex flex-col items-center col-span-2 col-start-2 sm:col-start-auto lg:col-span-1">
                    <span class="inline-block w-12 h-12 mb-2 text-gray-800 dark:text-white"><?php echo file_get_contents(get_template_directory() . '/dist/svg/alpinejs.svg'); ?></span>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Alpine.js</span>
                </div>
            </div>
            <div class="mt-12 text-center text-gray-500 dark:text-gray-300">
                <p class="max-w-2xl mx-auto text-lg/8">
                    El stack tecnológico que uso es una combinación de lo viejo y lo nuevo, lo que me permite tener un conocimiento profundo de las tecnologías y un enfoque moderno en el desarrollo web. PHP + TailwindCSS + Alpine.js + WordPress. Solidez y eficiencia de recursos.
                </p>
            </div>
            <div class="flex justify-center mt-16">
                <p class="relative rounded-full bg-gray-50 dark:bg-gray-800 px-4 py-1.5 text-sm/6 text-gray-600 dark:text-gray-300 ring-1 ring-inset ring-gray-900/5 dark:ring-white/10">
                    <span class="hidden md:inline">Si quieres leer un poco más sobre mi trabajo, puedes visitar mi bitácora.</span>
                    <a href="<?php echo esc_url(home_url()); ?>/bitacora" class="font-semibold text-blue-600 dark:text-blue-400"><span class="absolute inset-0" aria-hidden="true"></span> Ver bitácora <span aria-hidden="true">&rarr;</span></a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>