<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="antialiased bg-white dark:bg-gray-900">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="bg-white dark:bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-4 m-auto bg-white lg:px-8 dark:bg-gray-900" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="<?php echo esc_url(home_url()); ?>" class="-m-1.5 p-1.5">
                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                        <img class="w-auto h-8" src="<?php echo esc_url(get_field('logo', 'option')); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-gray-200" id="mobile-menu-button">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="<?php echo esc_url(home_url()); ?>/metodo-de-creacion" class="relative px-4 py-2 text-sm font-semibold leading-6 text-gray-900 transition-all duration-300 rounded-full shadow-sm group bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 hover:from-blue-100 hover:to-indigo-100 dark:hover:from-blue-800/30 dark:hover:to-indigo-800/30 dark:text-white hover:shadow-md">
                        <span class="relative z-10">Método de creación</span>
                        <span class="absolute inset-0 transition-opacity duration-300 rounded-full opacity-0 group-hover:opacity-100 bg-gradient-to-r from-blue-500/10 to-indigo-500/10"></span>
                    </a>
                    <a href="<?php echo esc_url(home_url()); ?>/proyectos" class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 dark:text-white">Proyectos</a>
                    <a href="<?php echo esc_url(home_url()); ?>/bitacora" class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 dark:text-white">Bitácora</a>
                    <a href="<?php echo esc_url(home_url()); ?>/sobre-mi" class="px-4 py-2 text-sm font-semibold leading-6 text-gray-900 dark:text-white">Sobre mí</a>
                </div>
            </nav>

            <!-- Mobile menu -->
            <div class="hidden lg:hidden" role="dialog" aria-modal="true" id="mobile-menu">
                <div class="fixed inset-0 z-50"></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="<?php echo esc_url(home_url()); ?>" class="-m-1.5 p-1.5">
                            <span class="sr-only"><?php bloginfo('name'); ?></span>
                            <img class="w-auto h-8" src="<?php echo esc_url(get_field('logo', 'option')); ?>" alt="<?php bloginfo('name'); ?>">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-mobile-menu">
                            <span class="sr-only">Cerrar menú</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flow-root mt-6">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="py-6 space-y-2">
                                <a href="<?php echo esc_url(home_url()); ?>/proyectos" class="block px-3 py-2 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Proyectos</a>
                                <a href="<?php echo esc_url(home_url()); ?>/bitacora" class="block px-3 py-2 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Bitácora</a>
                                <a href="<?php echo esc_url(home_url()); ?>/sobre-mi" class="block px-3 py-2 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Sobre mí</a>
                                <a href="<?php echo esc_url(home_url()); ?>/metodo-de-creacion" class="block px-3 py-2 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Método de creación</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>