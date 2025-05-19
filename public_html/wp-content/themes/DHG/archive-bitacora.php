<?php /* Template Name: Bitacora */ ?>

<?php get_header(); ?>

<div class="min-h-screen py-12 mt-20 bg-gradient-to-b from-gray-50 to-gray-200 dark:from-gray-900 dark:to-gray-800">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mb-12 text-5xl font-extrabold tracking-tight text-center text-gray-900 dark:text-white drop-shadow-lg">
            Bitácora de pensamiento
        </h2>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'bitacora',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
        ];
        $blog_query = new WP_Query($args);
        if ($blog_query->have_posts()) : ?>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                $i = 0;
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    $resumen = get_field('resumen');
                    $imagen = get_field('imagen') ?: get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $autor_id = get_the_author_meta('ID');
                    $autor = get_the_author_meta('display_name');
                    $fecha = get_the_date('d M Y');
                    $enlace = get_permalink();
                    $is_first = ($i === 0);
                ?>
                    <?php if ($is_first): ?>
                        <div class="relative group rounded-3xl overflow-hidden shadow-2xl bg-white/90 dark:bg-gray-900/90 backdrop-blur-lg border border-gray-200 dark:border-gray-800 transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl col-span-1 sm:col-span-2 lg:col-span-3 flex flex-col lg:flex-row">
                            <div class="relative w-full h-64 overflow-hidden lg:w-2/5 lg:h-auto">
                                <img src="<?php echo esc_url($imagen); ?>" alt="<?php the_title_attribute(); ?>" class="object-cover w-full h-full transition duration-300 group-hover:scale-105 group-hover:opacity-80" loading="lazy">
                                <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                            </div>
                            <div class="flex flex-col justify-between w-full p-8 lg:w-3/5">
                                <div>
                                    <h3 class="flex items-center gap-2 mb-4 text-3xl font-extrabold text-gray-900 dark:text-white">
                                        <a href="<?php echo esc_url($enlace); ?>" class="flex items-center gap-2 transition-colors duration-200 hover:underline hover:text-indigo-600 dark:hover:text-indigo-400" title="<?php the_title_attribute(); ?>">
                                            <span class="text-3xl font-extrabold text-gray-900 break-words dark:text-white line-clamp-2"><?php the_title(); ?></span>
                                            <svg class="flex-shrink-0 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    </h3>
                                    <p class="mb-4 text-lg text-gray-700 dark:text-gray-300 line-clamp-4">
                                        <?php echo esc_html($resumen); ?>
                                    </p>
                                    <div class="flex items-center gap-2 mb-2 text-base text-gray-500 dark:text-gray-400">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded bg-indigo-100 text-indigo-700 dark:bg-indigo-900 dark:text-indigo-200 text-xs font-semibold">
                                            <svg class="w-4 h-4 mr-1 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 2a6 6 0 016 6c0 4.418-6 10-6 10S4 12.418 4 8a6 6 0 016-6zm0 8a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                            <?php echo esc_html($autor); ?>
                                        </span>
                                        <span>·</span>
                                        <span class="inline-flex items-center px-2 py-0.5 rounded bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-300 text-xs font-semibold">
                                            <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6 2a1 1 0 00-1 1v1H5a3 3 0 00-3 3v8a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3h-1V3a1 1 0 00-1-1H6zm0 2h8v1H6V4zm-1 3h10a1 1 0 011 1v8a1 1 0 01-1 1H5a1 1 0 01-1-1V8a1 1 0 011-1z" />
                                            </svg>
                                            <?php echo esc_html($fecha); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="relative group rounded-3xl overflow-hidden shadow-xl bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg border border-gray-200 dark:border-gray-800 transition-all duration-300 hover:scale-[1.025] hover:shadow-2xl flex flex-col">
                            <div class="relative w-full h-56 overflow-hidden sm:h-64 md:h-56 lg:h-48 xl:h-56">
                                <img src="<?php echo esc_url($imagen); ?>" alt="<?php the_title_attribute(); ?>" class="object-cover w-full h-full transition duration-300 group-hover:scale-105 group-hover:opacity-80" loading="lazy">
                                <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                            </div>
                            <div class="flex flex-col justify-between h-56 p-6">
                                <div>
                                    <h3 class="flex items-center gap-2 mb-2 text-2xl font-bold text-gray-900 dark:text-white" title="<?php the_title_attribute(); ?>">
                                        <a href="<?php echo esc_url($enlace); ?>" class="flex items-center gap-2 transition-colors duration-200 hover:underline hover:text-indigo-600 dark:hover:text-indigo-400">
                                            <span class="break-words line-clamp-2"><?php the_title(); ?></span>
                                            <svg class="flex-shrink-0 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                    </h3>
                                    <p class="mb-2 text-base text-gray-700 dark:text-gray-300 line-clamp-3">
                                        <?php echo esc_html($resumen); ?>
                                    </p>
                                    <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded bg-indigo-100 text-indigo-700 dark:bg-indigo-900 dark:text-indigo-200 text-xs font-semibold">
                                            <svg class="w-4 h-4 mr-1 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 2a6 6 0 016 6c0 4.418-6 10-6 10S4 12.418 4 8a6 6 0 016-6zm0 8a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                            <?php echo esc_html($autor); ?>
                                        </span>
                                        <span>·</span>
                                        <span class="inline-flex items-center px-2 py-0.5 rounded bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-300 text-xs font-semibold">
                                            <svg class="w-4 h-4 mr-1 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6 2a1 1 0 00-1 1v1H5a3 3 0 00-3 3v8a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3h-1V3a1 1 0 00-1-1H6zm0 2h8v1H6V4zm-1 3h10a1 1 0 011 1v8a1 1 0 01-1 1H5a1 1 0 01-1-1V8a1 1 0 011-1z" />
                                            </svg>
                                            <?php echo esc_html($fecha); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;
                    $i++; ?>
                <?php endwhile; ?>
            </div>
            <div class="flex justify-center mt-12">
                <?php
                $big = 999999999;
                echo paginate_links([
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $blog_query->max_num_pages,
                    'prev_text' => __('« Anterior'),
                    'next_text' => __('Siguiente »'),
                    'type' => 'list',
                ]);
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="mt-12 text-center text-gray-500 dark:text-gray-400">Aún no hay blogs publicados.</div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>