<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="relative isolate pt-14">
        <div class="absolute inset-x-0 overflow-hidden -top-40 -z-10 transform-gpu blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#60a5fa] to-[#3b82f6] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="pt-4 pb-12 sm:py-12 lg:pb-12">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-gray-900 text-balance dark:text-white sm:text-7xl"><?php echo esc_html(get_field('hero_title', 'option')); ?></h1>
                    <p class="mt-8 text-lg font-medium text-gray-500 text-pretty dark:text-gray-400 sm:text-xl/8"><?php echo esc_html(get_field('hero_description', 'option')); ?></p>
                    <div class="flex flex-wrap items-center justify-center mt-10 gap-x-6 gap-y-4">
                        <?php if (have_rows('hero_buttons', 'option')) : ?>
                            <?php while (have_rows('hero_buttons', 'option')) : the_row(); ?>
                                <?php
                                $button_text = get_sub_field('button_text');
                                $button_url = get_sub_field('button_url');
                                $button_style = get_sub_field('button_style');
                                $button_class = $button_style === 'primary'
                                    ? 'rounded-md bg-blue-600 px-12 py-8 text-xl font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600'
                                    : 'rounded-md bg-white px-12 py-8 text-xl font-semibold text-gray-900 shadow-sm hover:bg-gray-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 border border-gray-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700';
                                ?>
                                <a href="<?php echo esc_url($button_url); ?>" class="<?php echo $button_class; ?>" id="contacto-button" data-contacto-button="<?php echo esc_attr($button_text); ?>">
                                    <?php echo esc_html($button_text); ?>
                                    <?php if ($button_style === 'secondary') : ?>
                                        <span aria-hidden="true">→</span>
                                    <?php endif; ?>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="flow-root mt-16 sm:mt-24">
                    <div class="p-2 -m-2 rounded-xl bg-gray-900/5 ring-1 ring-inset ring-gray-900/10 dark:ring-white/10 dark:bg-gray-800 dark:border-white/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                        <picture data-image-id="hero-image">
                            <source media="(min-width: 1024px)" srcset="<?php echo esc_url(get_field('hero_image_desktop', 'option')); ?>">
                            <source media="(min-width: 640px)" srcset="<?php echo esc_url(get_field('hero_image_tablet', 'option')); ?>">
                            <img src="<?php echo esc_url(get_field('hero_image_mobile', 'option')); ?>" alt="<?php echo esc_attr(get_field('hero_title', 'option')); ?>" class="rounded-md shadow-2xl ring-1 ring-gray-900/10 dark:ring-white/10">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#60a5fa] to-[#3b82f6] opacity-30 dark:from-[#60a5fa] dark:to-[#3b82f6] sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>

    <?php get_template_part('template/home/bento-grid'); ?>

    <?php get_template_part('template/home/pricing-section'); ?>

    <?php get_template_part('template/home/testimonials'); ?>

    <?php get_template_part('template/home/contacto-form'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>