<?php /* Template Name: Bitacora Individual */ ?>

<?php get_header(); ?>

<div class="min-h-screen py-12 bg-gradient-to-b from-gray-50 to-gray-200 dark:from-gray-900 dark:to-gray-800">
    <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <?php if (have_posts()) : while (have_posts()) : the_post();
                $acf_imagen = get_field('imagen');
                $imagen = $acf_imagen ? $acf_imagen : get_the_post_thumbnail_url(get_the_ID(), 'large');
                $resumen = get_field('resumen');
                $autor = get_the_author_meta('display_name');
                $fecha = get_field('fecha');
                $tags = get_field('tags');
                $contenido = get_field('contenido');
        ?>
                <article class="p-8 border border-gray-200 shadow-xl bg-white/80 dark:bg-gray-900/80 rounded-3xl dark:border-gray-800 backdrop-blur-lg">
                    <div class="mb-8">
                        <?php if ($imagen): ?>
                            <img src="<?php echo esc_url($imagen); ?>" alt="<?php the_title_attribute(); ?>" class="object-cover w-full mb-4 h-96 rounded-2xl">
                        <?php endif; ?>
                        <div class="flex items-center gap-2 mb-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="font-semibold"><?php echo esc_html($autor); ?></span>
                            <span>·</span>
                            <span><?php echo esc_html($fecha); ?></span>
                        </div>
                        <?php if ($tags) : ?>
                            <div class="flex flex-wrap gap-2 mb-2">
                                <?php
                                if (is_array($tags)) {
                                    foreach ($tags as $tag_id) {
                                        $tag = get_term($tag_id, 'post_tag');
                                        if ($tag && !is_wp_error($tag)) {
                                            echo '<span class="inline-block px-2 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded dark:bg-blue-800 dark:text-blue-200">' . esc_html($tag->name) . '</span>';
                                        }
                                    }
                                } else {
                                    // Si es un solo tag (no array)
                                    $tag = get_term($tags, 'post_tag');
                                    if ($tag && !is_wp_error($tag)) {
                                        echo '<span class="inline-block px-2 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded dark:bg-blue-800 dark:text-blue-200">' . esc_html($tag->name) . '</span>';
                                    }
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h1 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white"><?php the_title(); ?></h1>
                    <?php if ($resumen): ?>
                        <p class="mb-6 text-lg italic text-gray-700 dark:text-gray-300"><?php echo esc_html($resumen); ?></p>
                    <?php endif; ?>
                    <div class="editor-content">
                        <?php if ($contenido) {
                            echo apply_filters('the_content', $contenido);
                        } else {
                            the_content();
                        } ?>
                    </div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
    <section class="flex flex-col items-center justify-center mt-8 hover:animate-bounce">
        <button class="flex flex-row items-center justify-center px-4 py-2 text-white transition-colors bg-blue-500 rounded-md hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <a href="<?php echo esc_url(home_url()); ?>/bitacora">Volver a la bitácora</a>
        </button>
    </section>
</div>


<style>
    /* Estilos para el contenido del editor WYSIWYG */
    .editor-content {
        color: #1E2938;
        /* text-gray-700 */
    }

    @media (prefers-color-scheme: dark) {
        .editor-content {
            color: #E6E6E6;
        }
    }

    .editor-content img {
        max-width: 100%;
        height: auto;
    }

    .editor-content ul,
    .editor-content ol {
        margin-left: 2em;
        list-style-position: inside;
    }

    .editor-content h1,
    .editor-content h2,
    .editor-content h3,
    .editor-content h4,
    .editor-content h5,
    .editor-content h6 {
        font-weight: bold;
        margin-top: 1.5em;
        margin-bottom: 0.5em;
    }

    .editor-content blockquote {
        border-left: 4px solid #3b82f6;
        padding-left: 1em;
        color: #6b7280;
        font-style: italic;
        background: #f3f4f6;
    }

    .editor-content table {
        width: 100%;
        border-collapse: collapse;
    }

    .editor-content th,
    .editor-content td {
        border: 1px solid #e5e7eb;
        padding: 0.5em;
    }
</style>

<?php get_footer(); ?>