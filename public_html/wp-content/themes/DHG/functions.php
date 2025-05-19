<?php

/********************************************************************************************/
/***************************** ENQUEUE SCRIPTS Y ESTILOS ************************************/
/********************************************************************************************/

function dhg_enqueue_scripts()
{
    wp_enqueue_style('google-material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], '1.0.0', false);
    wp_enqueue_style('dhg-style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_enqueue_style('dhg-tailwind', get_template_directory_uri() . '/dist/tailwind.css', [], '3.4.17', false);
    wp_enqueue_script('dhg-navbar', get_template_directory_uri() . '/dist/navbar.js', [], '1.0.0', true);
    wp_enqueue_script('alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js', [], '3.13.3', true);
    wp_enqueue_script('dhg-contactoScroll', get_template_directory_uri() . '/src/js/contactoScroll.js', [], '1.0.0', true);
    wp_enqueue_style('monsterrar-font', 'https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], '1.0.0', false);
    wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', [], '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'dhg_enqueue_scripts');

/********************************************************************************************/
/*************** ACF INSCRIPCIONES CAMPOS Y PÁGINA DE OPCIONES ******************************/
/********************************************************************************************/

function dhg_acf_fields_banner()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_banner',
            'title' => 'Banner',
            'fields' => [
                [
                    'key' => 'field_banner_title',
                    'label' => 'Título del banner',
                    'name' => 'banner_title',
                    'type' => 'text',
                    'instructions' => 'Título del banner',
                    'required' => 1,
                ],
                [
                    'key' => 'field_banner_true',
                    'label' => 'Mostrar banner',
                    'name' => 'banner_true',
                    'type' => 'true_false',
                    'instructions' => 'Mostrar banner',
                    'ui' => 1,
                    'on_text' => 'Mostrar',
                    'off_text' => 'Ocultar',
                    'on' => true,
                    'off' => false,
                ],
                [
                    'key' => 'field_banner_description',
                    'label' => 'Descripción del banner',
                    'name' => 'banner_description',
                    'type' => 'text',
                    'instructions' => 'Descripción del banner',
                    'required' => 1,
                ],
                [
                    'key' => 'field_banner_link',
                    'label' => 'Enlace del banner',
                    'name' => 'banner_link',
                    'type' => 'url',
                    'instructions' => 'Enlace del banner',
                    'required' => 1,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'dhg-options',
                    ],
                ],
            ],
        ]);
    }
}
add_action('acf/init', 'dhg_acf_fields_banner');

function dhg_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Opciones del tema',
            'menu_title' => 'Opciones del tema',
            'menu_slug' => 'dhg-options',
            'capability' => 'edit_posts',
            'redirect' => false,
        ]);
    }
}
add_action('acf/init', 'dhg_acf_options_page');

function dhg_acf_fields_options_page()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_625d564e5cf2e',
            'title' => 'Opciones del tema',
            'fields' => [
                [
                    'key' => 'field_625d565a5cf2f',
                    'label' => 'Logo',
                    'name' => 'logo',
                    'type' => 'image',
                    'instructions' => 'Logo de la empresa',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ],
                [
                    'key' => 'field_img_mobile',
                    'label' => 'Imagen móvil',
                    'name' => 'img_mobile',
                    'type' => 'image',
                    'instructions' => 'Imagen móvil',
                    'required' => 1,
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ],
                [
                    'key' => 'field_ga4_img',
                    'label' => 'Imagen GA4',
                    'name' => 'ga4_img',
                    'type' => 'image',
                    'instructions' => 'Imagen GA4',
                    'required' => 1,
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ],
                [
                    'key' => 'field_hero_title',
                    'label' => 'Título del Hero',
                    'name' => 'hero_title',
                    'type' => 'text',
                    'instructions' => 'Título principal del hero section',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ],
                ],
                [
                    'key' => 'field_hero_description',
                    'label' => 'Descripción del Hero',
                    'name' => 'hero_description',
                    'type' => 'textarea',
                    'instructions' => 'Descripción del hero section',
                    'required' => 1,
                    'wrapper' => [
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ],
                ],
                [
                    'key' => 'field_hero_image_mobile',
                    'label' => 'Imagen del Hero (Mobile)',
                    'name' => 'hero_image_mobile',
                    'type' => 'image',
                    'instructions' => 'Imagen principal del hero section para móvil (max 640px)',
                    'required' => 1,
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => [
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ],
                ],
                [
                    'key' => 'field_hero_image_tablet',
                    'label' => 'Imagen del Hero (Tablet)',
                    'name' => 'hero_image_tablet',
                    'type' => 'image',
                    'instructions' => 'Imagen principal del hero section para tablet (max 1024px)',
                    'required' => 1,
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => [
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ],
                ],
                [
                    'key' => 'field_hero_image_desktop',
                    'label' => 'Imagen del Hero (Desktop)',
                    'name' => 'hero_image_desktop',
                    'type' => 'image',
                    'instructions' => 'Imagen principal del hero section para desktop (max 1920px)',
                    'required' => 1,
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => [
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ],
                ],
                [
                    'key' => 'field_hero_buttons',
                    'label' => 'Botones del Hero',
                    'name' => 'hero_buttons',
                    'type' => 'repeater',
                    'instructions' => 'Botones del hero section',
                    'required' => 0,
                    'min' => 0,
                    'max' => 2,
                    'layout' => 'table',
                    'button_label' => 'Añadir botón',
                    'sub_fields' => [
                        [
                            'key' => 'field_button_text',
                            'label' => 'Texto del botón',
                            'name' => 'button_text',
                            'type' => 'text',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_button_url',
                            'label' => 'URL del botón',
                            'name' => 'button_url',
                            'type' => 'url',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_button_style',
                            'label' => 'Estilo del botón',
                            'name' => 'button_style',
                            'type' => 'select',
                            'choices' => [
                                'primary' => 'Primario',
                                'secondary' => 'Secundario',
                            ],
                            'default_value' => 'primary',
                            'required' => 1,
                        ],
                    ],
                ],
                [
                    'key' => 'field_social_media',
                    'label' => 'Redes sociales',
                    'name' => 'social_media',
                    'type' => 'repeater',
                    'instructions' => 'Redes sociales',
                    'required' => 0,
                    'min' => 0,
                    'max' => 3,
                    'layout' => 'block',
                    'button_label' => 'Añadir red social',
                    'sub_fields' => [
                        [
                            'key' => 'field_facebook',
                            'label' => 'Facebook',
                            'name' => 'facebook',
                            'type' => 'url',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_instagram',
                            'label' => 'Instagram',
                            'name' => 'instagram',
                            'type' => 'url',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_github',
                            'label' => 'GitHub',
                            'name' => 'github',
                            'type' => 'url',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_linkedin',
                            'label' => 'LinkedIn',
                            'name' => 'linkedin',
                            'type' => 'url',
                            'required' => 1,
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'dhg-options',
                    ],
                ],
            ],
        ]);
    }
}
add_action('acf/init', 'dhg_acf_fields_options_page');

function dhg_acf_fields_testimonials()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_testimonials',
            'title' => 'Testimonios',
            'fields' => [
                [
                    'key' => 'field_testimonials',
                    'label' => 'Testimonios',
                    'name' => 'testimonios',
                    'type' => 'repeater',
                    'instructions' => 'Añade los testimonios de tus clientes',
                    'required' => 0,
                    'layout' => 'block',
                    'button_label' => 'Añadir testimonio',
                    'sub_fields' => [
                        [
                            'key' => 'field_testimonio_foto',
                            'label' => 'Foto',
                            'name' => 'foto',
                            'type' => 'image',
                            'required' => 1,
                            'return_format' => 'url',
                            'preview_size' => 'medium',
                            'library' => 'all',
                        ],
                        [
                            'key' => 'field_testimonio_descripcion',
                            'label' => 'Descripción',
                            'name' => 'descripcion',
                            'type' => 'textarea',
                            'required' => 1,
                            'rows' => 4,
                            'maxlength' => 500,
                        ],
                        [
                            'key' => 'field_testimonio_nombre',
                            'label' => 'Nombre',
                            'name' => 'nombre',
                            'type' => 'text',
                            'required' => 1,
                            'maxlength' => 100,
                        ],
                        [
                            'key' => 'field_testimonio_cargo',
                            'label' => 'Cargo',
                            'name' => 'cargo',
                            'type' => 'text',
                            'required' => 1,
                            'maxlength' => 100,
                        ],
                        [
                            'key' => 'field_testimonio_website',
                            'label' => 'Website',
                            'name' => 'website',
                            'type' => 'url',
                            'required' => 1,
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'dhg-options',
                    ],
                ],
            ],
        ]);
    }
}
add_action('acf/init', 'dhg_acf_fields_testimonials');

function dhg_acf_fields_proyectos_repeater()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_proyectos_repeater',
            'title' => 'Proyectos (Bento Grid)',
            'fields' => [
                [
                    'key' => 'field_proyectos_repeater',
                    'label' => 'Proyectos',
                    'name' => 'proyectos_repeater',
                    'type' => 'repeater',
                    'instructions' => 'Agrega los proyectos para el grid tipo bento',
                    'required' => 0,
                    'layout' => 'block',
                    'button_label' => 'Añadir proyecto',
                    'sub_fields' => [
                        [
                            'key' => 'field_proyecto_titulo',
                            'label' => 'Título',
                            'name' => 'titulo',
                            'type' => 'text',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_imagen',
                            'label' => 'Imagen',
                            'name' => 'imagen',
                            'type' => 'image',
                            'required' => 1,
                            'return_format' => 'url',
                            'preview_size' => 'medium',
                            'library' => 'all',
                        ],
                        [
                            'key' => 'field_proyecto_nombre_cliente',
                            'label' => 'Nombre del cliente',
                            'name' => 'nombre_cliente',
                            'type' => 'text',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_logo_cliente',
                            'label' => 'Logo del cliente',
                            'name' => 'logo_cliente',
                            'type' => 'image',
                            'required' => 1,
                            'return_format' => 'url',
                            'preview_size' => 'medium',
                            'library' => 'all',
                        ],
                        [
                            'key' => 'field_proyecto_resumen_proyecto',
                            'label' => 'Resumen del proyecto',
                            'name' => 'resumen_proyecto',
                            'type' => 'textarea',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_enlace',
                            'label' => 'Enlace',
                            'name' => 'enlace',
                            'type' => 'url',
                            'required' => 0,
                        ],
                        [
                            'key' => 'field_proyecto_stack_php',
                            'label' => 'PHP',
                            'name' => 'stack_php',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_mysql',
                            'label' => 'MySQL',
                            'name' => 'stack_mysql',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_wordpress',
                            'label' => 'WordPress',
                            'name' => 'stack_wordpress',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_alpinejs',
                            'label' => 'Alpine.js',
                            'name' => 'stack_alpinejs',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_tailwind',
                            'label' => 'Tailwind',
                            'name' => 'stack_tailwind',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_nodejs',
                            'label' => 'Node.js',
                            'name' => 'stack_nodejs',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_produccion',
                            'label' => 'Producción',
                            'name' => 'stack_produccion',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_desarrollo',
                            'label' => 'Desarrollo',
                            'name' => 'stack_desarrollo',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_diseno',
                            'label' => 'Diseño',
                            'name' => 'stack_diseno',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_stack_migracion',
                            'label' => 'Migración',
                            'name' => 'stack_migracion',
                            'type' => 'true_false',
                            'required' => 0,
                            'ui' => 1,
                        ],
                        [
                            'key' => 'field_proyecto_color',
                            'label' => 'Color principal',
                            'name' => 'color',
                            'type' => 'color_picker',
                            'required' => 0,
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'proyectos.php',
                    ],
                ],
            ],
        ]);
    }
}
add_action('acf/init', 'dhg_acf_fields_proyectos_repeater');

function dhg_acf_fields_bitacora()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_bitacora',
            'title' => 'Bitácora',
            'fields' => [
                [
                    'key' => 'field_bitacora_imagen',
                    'label' => 'Imagen',
                    'name' => 'imagen',
                    'type' => 'image',
                    'required' => 1,
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ],
                [
                    'key' => 'field_bitacora_titulo',
                    'label' => 'Título',
                    'name' => 'titulo',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'field_bitacora_resumen',
                    'label' => 'Resumen',
                    'name' => 'resumen',
                    'type' => 'textarea',
                    'required' => 1,
                ],
                [
                    'key' => 'field_bitacora_fecha',
                    'label' => 'Fecha',
                    'name' => 'fecha',
                    'type' => 'date_picker',
                    'required' => 1,
                ],
                [
                    'key' => 'field_bitacora_tags',
                    'label' => 'Tags',
                    'name' => 'tags',
                    'type' => 'taxonomy',
                    'taxonomy' => 'post_tag',
                ],
                [
                    'key' => 'field_bitacora_contenido',
                    'label' => 'Contenido',
                    'name' => 'contenido',
                    'type' => 'wysiwyg',
                    'required' => 1,
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'bitacora',
                    ],
                ],
            ],
        ]);
    }
}
add_action('acf/init', 'dhg_acf_fields_bitacora');

/********************************************************************************************/
/****************************** INSCRIPCIONES DE POSTS **************************************/
/********************************************************************************************/

function dhg_register_cpt_bitacora()
{
    $labels = [
        'name' => 'Bitácora',
        'singular_name' => 'Bitácora',
        'add_new' => 'Agregar nueva',
        'add_new_item' => 'Agregar nueva bitácora',
        'edit_item' => 'Editar bitácora',
        'new_item' => 'Nueva bitácora',
        'view_item' => 'Ver bitácora',
        'search_items' => 'Buscar bitácora',
        'not_found' => 'No se encontraron bitácoras',
        'not_found_in_trash' => 'No se encontraron bitácoras en la papelera',
        'menu_name' => 'Bitácora',
        'all_items' => 'Todas las bitácoras',
        'archives' => 'Archivos de bitácora',
        'attributes' => 'Atributos de bitácora',
        'insert_into_item' => 'Insertar en bitácora',
        'uploaded_to_this_item' => 'Subido a esta bitácora',
        'featured_image' => 'Imagen destacada',
        'set_featured_image' => 'Establecer imagen destacada',

    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'bitacora'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author', 'comments'],
        'menu_icon' => 'dashicons-welcome-write-blog',
        'show_in_rest' => true,
    ];
    register_post_type('bitacora', $args);
}
add_action('init', 'dhg_register_cpt_bitacora');

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'group_blog_fields',
        'title' => 'Campos de Blog',
        'fields' => [
            [
                'key' => 'field_blog_resumen',
                'label' => 'Resumen',
                'name' => 'resumen',
                'type' => 'textarea',
                'instructions' => 'Resumen breve del blog.',
                'required' => 1,
            ],
            [
                'key' => 'field_blog_imagen_destacada',
                'label' => 'Imagen destacada',
                'name' => 'imagen_destacada',
                'type' => 'image',
                'instructions' => 'Imagen principal del blog.',
                'required' => 1,
                'return_format' => 'url',
                'preview_size' => 'medium',
            ],
            [
                'key' => 'field_blog_tags',
                'label' => 'Tags',
                'name' => 'tags',
                'type' => 'taxonomy',
                'taxonomy' => 'post_tag',
                'field_type' => 'multi_select',
                'add_term' => 1,
                'save_terms' => 1,
                'load_terms' => 1,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'blog',
                ],
            ],
        ],
    ]);
}

/********************************************************************************************/
/************************************ COOKIE POP UP *****************************************/
/********************************************************************************************/

function cookie_pop_up()
{
    if (!isset($_COOKIE['cookie_consent'])) {
?>
        <div id="cookie-popup" class="fixed z-50 max-w-sm p-4 transition-transform duration-300 transform translate-y-full bg-white border border-gray-200 rounded-lg shadow-lg bottom-4 left-4">
            <p class="mb-4 text-sm text-gray-700">
                Utilizamos cookies para gestionar los datos. No almacenamos ningún tipo de información personal o sensible.
            </p>
            <button onclick="acceptCookies()" class="w-full px-4 py-2 text-white transition-colors bg-blue-500 rounded-lg hover:bg-blue-600">
                De acuerdo
            </button>
        </div>

        <script>
            function acceptCookies() {
                document.getElementById('cookie-popup').classList.add('translate-y-full');
                setTimeout(() => {
                    document.getElementById('cookie-popup').style.display = 'none';
                }, 300);

                // Establecer cookie de consentimiento por 1 año
                let date = new Date();
                date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
                document.cookie = "cookie_consent=1; expires=" + date.toUTCString() + "; path=/; SameSite=Lax";
            }

            // Mostrar popup con animación
            setTimeout(() => {
                document.getElementById('cookie-popup').classList.remove('translate-y-full');
            }, 1000);
        </script>
    <?php
    }
}
add_action('wp_footer', 'cookie_pop_up');

/********************************************************************************************/
/***************************** Manejo de envío de formulario ********************************/
/********************************************************************************************/
/**
 * Configura el envío de correos a través de SMTP
 * 
 * @return void
 */
function dhg_smtp_setup()
{
    add_action('phpmailer_init', 'dhg_phpmailer_init');
}
add_action('plugins_loaded', 'dhg_smtp_setup');

/**
 * Configura los parámetros de PHPMailer para usar SMTP
 * 
 * @param PHPMailer $phpmailer Instancia de PHPMailer
 * @return void
 */
function dhg_phpmailer_init($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'mail.mtmdigital.cl';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = 'nodemailer@mtmdigital.cl';
    $phpmailer->Password = 'MtmDigital2025*';
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Port = 587;
    $phpmailer->From = 'nodemailer@mtmdigital.cl';
    $phpmailer->FromName = 'MTM Digital';
}

function manejar_envio_formulario()
{
    if (isset($_POST['action']) && $_POST['action'] == 'enviar_formulario') {
        $nombre = sanitize_text_field($_POST['nombre']);
        $apellido = sanitize_text_field($_POST['apellido']);
        $email = sanitize_email($_POST['email']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $rut = sanitize_text_field($_POST['rut']);
        $mensaje = sanitize_textarea_field($_POST['mensaje']);
        $plan = sanitize_text_field($_POST['plan']);
    }
}
add_action('wp_ajax_enviar_formulario', 'manejar_envio_formulario');
add_action('wp_ajax_nopriv_enviar_formulario', 'manejar_envio_formulario');

function crear_tabla_registros_contactos()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'registros_contactos';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        apellido VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        telefono VARCHAR(255) NOT NULL,
        rut VARCHAR(255) NOT NULL,
        plan VARCHAR(255) NOT NULL,
        mensaje TEXT NOT NULL,
        fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('init', 'crear_tabla_registros_contactos');

function validar_rut_chileno($rut)
{
    // Normalizar RUT: eliminar puntos, guión y espacios, y convertir a mayúsculas
    $rut = preg_replace('/[^0-9kK]/', '', $rut);
    $rut = strtoupper($rut);

    // Debe tener al menos 2 caracteres (número + dígito verificador)
    if (strlen($rut) < 2) {
        return false;
    }

    $dv = substr($rut, -1);
    $numero = substr($rut, 0, -1);

    // Validar que la parte numérica contenga solo dígitos
    if (!ctype_digit($numero)) {
        return false;
    }

    // Cálculo del dígito verificador mediante módulo 11
    $suma = 0;
    $multiplicador = 2;
    for ($i = strlen($numero) - 1; $i >= 0; $i--) {
        $suma += (int)$numero[$i] * $multiplicador;
        $multiplicador = ($multiplicador == 7) ? 2 : $multiplicador + 1;
    }
    $resto = $suma % 11;
    $dv_calculado = 11 - $resto;

    if ($dv_calculado == 11) {
        $dv_calculado = '0';
    } elseif ($dv_calculado == 10) {
        $dv_calculado = 'K';
    } else {
        $dv_calculado = (string)$dv_calculado;
    }

    // Comparación estricta para asegurar coincidencia exacta
    return $dv_calculado === $dv;
}

function enviar_correo_contacto($nombre, $apellido, $email, $telefono, $rut, $mensaje)
{
    $to = 'dherrera@mtm.cl';
    $subject = 'Nuevo mensaje de contacto';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $message = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo mensaje de contacto</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            .header {
                background-color: #3b82f6;
                color: white;
                padding: 15px;
                text-align: center;
                border-radius: 5px 5px 0 0;
            }
            .content {
                background-color: #f9fafb;
                padding: 20px;
                border: 1px solid #e5e7eb;
                border-radius: 0 0 5px 5px;
            }
            .field {
                margin-bottom: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid #e5e7eb;
            }
            .field-name {
                font-weight: bold;
                color: #1f2937;
            }
            .footer {
                margin-top: 20px;
                font-size: 12px;
                text-align: center;
                color: #6b7280;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h2>Nuevo mensaje de contacto</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="field-name">Nombre:</span> ' . $nombre . ' ' . $apellido . '
            </div>
            <div class="field">
                <span class="field-name">Email:</span> ' . $email . '
            </div>
            <div class="field">
                <span class="field-name">Teléfono:</span> ' . $telefono . '
            </div>
            <div class="field">
                <span class="field-name">RUT:</span> ' . $rut . '
            </div>
            <div class="field">
                <span class="field-name">Mensaje:</span><br>
                ' . nl2br($mensaje) . '
            </div>
        </div>
        <div class="footer">
            <p>Este mensaje fue enviado desde el formulario de contacto del sitio web.</p>
        </div>
    </body>
    </html>
    ';

    wp_mail($to, $subject, $message, $headers);
}
add_action('wp_ajax_enviar_formulario', 'manejar_envio_formulario');
add_action('wp_ajax_nopriv_enviar_formulario', 'manejar_envio_formulario');

function contacto_home_form_handler()
{
    // Asegurarse de que no haya salida antes de enviar JSON
    ob_start();
    // Usar error_log para depuración en lugar de archivo
    error_log(date('[Y-m-d H:i:s]') . " Inicio del manejo del formulario");

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'contacto_home') {
        error_log(date('[Y-m-d H:i:s]') . " Acción contacto_home detectada");

        // Verificar nonce para seguridad
        if (!wp_verify_nonce($_POST['contacto_home_nonce'], 'contacto_home')) {
            error_log(date('[Y-m-d H:i:s]') . " Error de nonce");
            wp_send_json_error(['message' => 'Error de seguridad. Intenta nuevamente.']);
            ob_end_flush();
            return;
        }
        error_log(date('[Y-m-d H:i:s]') . " Nonce verificado correctamente");

        // Sanitizar los datos del formulario con verificación de existencia
        $nombre = isset($_POST['nombre']) ? sanitize_text_field($_POST['nombre']) : '';
        $apellido = isset($_POST['apellido']) ? sanitize_text_field($_POST['apellido']) : '';
        $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
        $telefono = isset($_POST['telefono']) ? sanitize_text_field($_POST['telefono']) : '';
        $rut = isset($_POST['rut']) ? sanitize_text_field($_POST['rut']) : '';
        $mensaje = isset($_POST['mensaje']) ? sanitize_textarea_field($_POST['mensaje']) : '';
        error_log(date('[Y-m-d H:i:s]') . " Datos del formulario procesados: Nombre=$nombre");

        // Obtener y sanitizar token de reCAPTCHA
        $recaptcha_token = isset($_POST['recaptcha_token']) ? sanitize_text_field($_POST['recaptcha_token']) : '';

        // Validar reCAPTCHA v3
        $secret_key = DHG_CLAVE_PRIVADA;
        $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
            'body' => [
                'secret'   => $secret_key,
                'response' => $recaptcha_token,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ]
        ]);
        $body   = wp_remote_retrieve_body($response);
        $result = json_decode($body, true);
        error_log(date('[Y-m-d H:i:s]') . " Respuesta de reCAPTCHA recibida");

        if (empty($result['success']) || (isset($result['score']) && $result['score'] < 0.5)) {
            error_log(date('[Y-m-d H:i:s]') . " Error de reCAPTCHA: score=" . (isset($result['score']) ? $result['score'] : 'N/A'));
            wp_send_json_error(['message' => 'Error de verificación. Intenta nuevamente.']);
            ob_end_flush();
            return;
        }
        error_log(date('[Y-m-d H:i:s]') . " reCAPTCHA verificado correctamente");

        // Validar el RUT
        if (empty($rut) || !validar_rut_chileno($rut)) {
            error_log(date('[Y-m-d H:i:s]') . " RUT inválido: $rut");
            wp_send_json_error(['message' => 'RUT inválido. Por favor, verifica e intenta nuevamente.']);
            ob_end_flush();
            return;
        }
        error_log(date('[Y-m-d H:i:s]') . " RUT verificado correctamente: $rut");

        // Si todo es válido, guardar datos y enviar correo
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'telefono' => $telefono,
            'rut' => $rut,
            'mensaje' => $mensaje
        ];
        error_log(date('[Y-m-d H:i:s]') . " Preparando datos para guardar");

        // Guardar datos en la base de datos
        global $wpdb;
        $table_name = $wpdb->prefix . 'registros_contactos';
        $wpdb->insert(
            $table_name,
            $data,
            ['%s', '%s', '%s', '%s', '%s', '%s']
        );
        if ($wpdb->last_error) {
            error_log(date('[Y-m-d H:i:s]') . " Error al insertar datos: " . $wpdb->last_error);
            wp_send_json_error(['message' => 'Error al procesar tu solicitud. Intenta nuevamente.']);
            ob_end_flush();
            return;
        }
        error_log(date('[Y-m-d H:i:s]') . " Datos guardados en la base de datos");

        // Enviar correo
        enviar_correo_contacto($nombre, $apellido, $email, $telefono, $rut, $mensaje);
        error_log(date('[Y-m-d H:i:s]') . " Correo enviado");

        // Enviar respuesta de éxito
        error_log(date('[Y-m-d H:i:s]') . " Enviando respuesta de éxito");
        wp_send_json_success(['message' => 'Formulario enviado con éxito.']);
        ob_end_flush();
        return;
    }
    error_log(date('[Y-m-d H:i:s]') . " Condición no cumplida para contacto_home");
    ob_end_flush();
}
add_action('wp_ajax_contacto_home', 'contacto_home_form_handler');
add_action('wp_ajax_nopriv_contacto_home', 'contacto_home_form_handler');

/********************************************************************************************/
/***************************** Validación de reCAPTCHA **************************************/
/********************************************************************************************/

// Comentario: Bloque de código problemático que genera salida no deseada, comentado para evitar interferencias
/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el token enviado desde el formulario
    $recaptcha_token = $_POST['recaptcha_token'];

    // Tu clave secreta de reCAPTCHA
    $secret_key = DHG_CLAVE_PRIVADA;

    // URL de la API de verificación de reCAPTCHA
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secret_key,
        'response' => $recaptcha_token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    // Enviar solicitud a la API
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response, true);

    // Verificar la respuesta
    if ($result['success'] && $result['score'] >= 0.5) {
        // El usuario parece humano, procesa el formulario
        echo "Formulario enviado con éxito.";
        // Aquí va tu código para manejar el formulario (guardar datos, enviar email, etc.)
    } else {
        // Posible bot, rechaza el envío
        echo "Verificación fallida: posible bot detectado.";
    }
}
*/

/********************************************************************************************/
/********************************* SITEMAP XML **********************************************/
/********************************************************************************************/

// Registrar la regla de reescritura para el sitemap
add_action('init', 'custom_sitemap_rewrite');
function custom_sitemap_rewrite()
{
    add_rewrite_rule(
        '^sitemap\.xml$',
        'index.php?sitemap=1',
        'top'
    );
}

// Detectar la solicitud del sitemap y generar el XML
add_action('template_redirect', 'custom_sitemap_generate');
function custom_sitemap_generate()
{
    if (get_query_var('sitemap')) {
        header('Content-Type: application/xml; charset=UTF-8');
        echo '<?xml version="1.0" encoding="UTF-8"?>';
    ?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
            <?php
            // Obtener páginas
            $pages = get_posts(array(
                'post_type' => 'page',
                'post_status' => 'publish',
                'numberposts' => -1
            ));
            foreach ($pages as $page) {
            ?>
                <url>
                    <loc><?php echo esc_url(get_permalink($page->ID)); ?></loc>
                    <lastmod><?php echo get_the_modified_date('Y-m-d', $page->ID); ?></lastmod>
                    <changefreq>monthly</changefreq>
                    <priority>0.8</priority>
                </url>
            <?php
            }

            // Obtener entradas
            $posts = get_posts(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'numberposts' => -1
            ));
            foreach ($posts as $post) {
            ?>
                <url>
                    <loc><?php echo esc_url(get_permalink($post->ID)); ?></loc>
                    <lastmod><?php echo get_the_modified_date('Y-m-d', $post->ID); ?></lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>0.6</priority>
                </url>
            <?php
            }

            // Puedes añadir más tipos de contenido como categorías, etiquetas, etc.
            // Ejemplo: Añadir categorías
            $categories = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => true,
            ));
            foreach ($categories as $category) {
            ?>
                <url>
                    <loc><?php echo esc_url(get_term_link($category)); ?></loc>
                    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>0.4</priority>
                </url>
            <?php
            }
            ?>
        </urlset>
    <?php
        exit; // Terminar la ejecución para evitar cargar el resto de la página
    }
}

// Registrar la variable de consulta personalizada
add_filter('query_vars', 'custom_sitemap_query_vars');
function custom_sitemap_query_vars($vars)
{
    $vars[] = 'sitemap';
    return $vars;
}

/********************************************************************************************/
/********************************* ROBOTS.TXT ***********************************************/
/********************************************************************************************/

// Desactivar el robots.txt por defecto de WordPress
add_filter('robots_txt', '__return_empty_string', 100);

// Crear un robots.txt dinámico
add_action('do_robotstxt', 'custom_robots_txt');
function custom_robots_txt()
{
    // Establecer el tipo de contenido como texto plano
    header('Content-Type: text/plain; charset=UTF-8');

    // Definir las reglas del robots.txt
    $output = "User-agent: *\n";
    $output .= "Disallow: /wp-admin/\n";
    $output .= "Allow: /wp-admin/admin-ajax.php\n";
    $output .= "Disallow: /?s=*\n"; // Bloquear búsquedas internas
    $output .= "Disallow: /trackback/\n";
    $output .= "Disallow: /comments/feed/\n";
    $output .= "Disallow: /wp-content/cache/\n"; // Bloquear carpetas de caché
    $output .= "Disallow: /*.pdf$\n"; // Ejemplo: bloquear PDFs
    $output .= "Allow: /wp-content/uploads/\n";
    $output .= "Allow: /wp-content/themes/\n";
    $output .= "Allow: /wp-content/plugins/\n";

    // Añadir el sitemap generado previamente
    $output .= "\nSitemap: " . esc_url(home_url('/sitemap.xml')) . "\n";

    // Incluir reglas específicas para Googlebot (opcional)
    $output .= "\nUser-agent: Googlebot\n";
    $output .= "Disallow: /pagina-no-indexada/\n"; // Ejemplo de página específica

    // Imprimir el contenido
    echo $output;
    exit; // Terminar la ejecución
}


/********************************************************************************************/
/********************************* SECURITY.TXT *********************************************/
/********************************************************************************************/

// Registrar la regla de reescritura para security.txt
add_action('init', 'custom_security_txt_rewrite');
function custom_security_txt_rewrite()
{
    add_rewrite_rule(
        '^(?:\.well-known/)?security\.txt$',
        'index.php?security_txt=1',
        'top'
    );
}

// Registrar la variable de consulta personalizada
add_filter('query_vars', 'custom_security_txt_query_vars');
function custom_security_txt_query_vars($vars)
{
    $vars[] = 'security_txt';
    return $vars;
}

// Generar el contenido de security.txt
add_action('template_redirect', 'custom_security_txt_generate');
function custom_security_txt_generate()
{
    if (get_query_var('security_txt')) {
        // Establecer el tipo de contenido como texto plano
        header('Content-Type: text/plain; charset=UTF-8');

        $generate_clave_pgp = password_hash('clave-pgp', PASSWORD_DEFAULT);

        // Definir el contenido de security.txt
        $output = "# security.txt para " . esc_url(home_url()) . "\n";
        $output .= "Contact: mailto:dherrera@mtm.com\n";
        $output .= "Expires: " . gmdate('Y-m-d\TH:i:s\Z', strtotime('+1 year')) . "\n";
        $output .= "Preferred-Languages: es, en\n";
        $output .= "Policy: https://diegoherreragre.dev/politica-de-seguridad/\n";
        $output .= "Acknowledgments: https://diegoherreragre.dev/agradecimientos/\n";
        $output .= "# Clave PGP: $generate_clave_pgp/\n";
        $output .= "Encryption: https://diegoherreragre.dev/clave-pgp.asc\n";

        // Imprimir el contenido
        echo $output;
        exit; // Terminar la ejecución
    }
}

/********************************************************************************************/
/********************************* GA4 PIXEL ************************************************/
/********************************************************************************************/

function inscribir_ga4_pixel()
{
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H77H1X494E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-H77H1X494E');
    </script>
<?php
}
add_action('wp_head', 'inscribir_ga4_pixel');

/********************************************************************************************/
/***************************** EVENTOS GA4 PERSONALIZADOS ***********************************/
/********************************************************************************************/

add_action('wp_footer', 'inscribir_eventos_personalizados');
function inscribir_eventos_personalizados()
{
?>
    <script type="text/javascript" id="seguimientos-google-analytics">
        const utms = window.location.search;
        const utmParams = new URLSearchParams(utms);
        const utmSource = utmParams.get('utm_source');
        const utmMedium = utmParams.get('utm_medium');
        const utmCampaign = utmParams.get('utm_campaign');
        const utmTerm = utmParams.get('utm_term');
        const utmContent = utmParams.get('utm_content');

        const defaultParams = {
            utm_source: utmSource,
            utm_medium: utmMedium,
            utm_campaign: utmCampaign,
            utm_term: utmTerm,
            utm_content: utmContent,
            non_interaction: false,
            transport_type: 'beacon'
        };

        // Evento Contacto Button Click (click)
        document.addEventListener('click', function(e) {
            const contactoButton = e.target.closest('[data-contacto-button]');
            if (contactoButton) {
                gtag('event', 'contactoButtonClick', {
                    ...defaultParams,
                    contacto_button: contactoButton.getAttribute('data-contacto-button'),
                    engagement_type: 'click',
                    value: 1
                });
            }
        });

        // Evento Plan Item Hover (mouseenter)
        document.addEventListener('mouseenter', function(e) {
            const planId = e.target.closest('[data-plan-id]');
            if (planId) {
                gtag('event', 'planIdHover', {
                    ...defaultParams,
                    engagement_type: 'hover',
                    plan_id: planId.getAttribute('data-plan-id')
                });
            }
        });

        // Evento Formulario Contacto Submit (submit)
        document.addEventListener('submit', function(e) {
            const formId = e.target.closest('[data-form-id]');
            if (formId) {
                gtag('event', 'formSubmit', {
                    ...defaultParams,
                    form_id: formId.getAttribute('data-form-id'),
                    engagement_type: 'submit',
                    value: 1
                });
            }
        });

        // Evento Imagen Destacada Hover (mouseenter)
        document.addEventListener('mouseenter', function(e) {
            const imageId = e.target.closest('[data-image-id]');
            if (imageId) {
                gtag('event', 'imageIdHover', {
                    ...defaultParams,
                    engagement_type: 'hover',
                    image_id: imageId.getAttribute('data-image-id')
                });
            }
        });
    </script>
<?php
}

/********************************************************************************************/
/********************************* CREAR OG GRAPH *******************************************/
/********************************************************************************************/

function dhg_og_graph()
{
    // Obtener datos una sola vez para reutilizar
    $title = get_the_title();
    $excerpt = get_the_excerpt();
    $thumbnail = get_the_post_thumbnail_url();
    $permalink = get_the_permalink();
    $site_name = get_bloginfo('name');
    $author = get_the_author();

    // Validar que exista una imagen destacada
    if (!$thumbnail) {
        $thumbnail = get_template_directory_uri() . '/assets/images/default-og.webp';
    }

    // Generar meta tags Open Graph
    $og_tags = [
        ['property' => 'og:title', 'content' => $title],
        ['property' => 'og:description', 'content' => $excerpt],
        ['property' => 'og:image', 'content' => $thumbnail],
        ['property' => 'og:url', 'content' => $permalink],
        ['property' => 'og:type', 'content' => 'website'],
        ['property' => 'og:site_name', 'content' => $site_name],
        ['property' => 'og:locale', 'content' => 'es_ES'],
        ['property' => 'og:image:width', 'content' => '1200'],
        ['property' => 'og:image:height', 'content' => '630'],
        ['property' => 'og:image:alt', 'content' => $title],
        ['property' => 'og:image:secure_url', 'content' => $thumbnail],
        ['property' => 'og:author', 'content' => $author]
    ];

    // Generar meta tags Twitter Cards
    $twitter_tags = [
        ['name' => 'twitter:card', 'content' => 'summary_large_image'],
        ['name' => 'twitter:site', 'content' => '@' . $site_name],
        ['name' => 'twitter:title', 'content' => $title],
        ['name' => 'twitter:description', 'content' => $excerpt],
        ['name' => 'twitter:image', 'content' => $thumbnail],
        ['name' => 'twitter:image:alt', 'content' => $title],
        ['name' => 'twitter:creator', 'content' => '@' . $author]
    ];

    // Imprimir meta tags Open Graph
    foreach ($og_tags as $tag) {
        printf(
            '<meta property="%s" content="%s">' . PHP_EOL,
            esc_attr($tag['property']),
            esc_attr($tag['content'])
        );
    }

    // Imprimir meta tags Twitter Cards
    foreach ($twitter_tags as $tag) {
        printf(
            '<meta name="%s" content="%s">' . PHP_EOL,
            esc_attr($tag['name']),
            esc_attr($tag['content'])
        );
    }
}
add_action('wp_head', 'dhg_og_graph');

/********************************************************************************************/
/********************************* SEO Avanzado *********************************************/
/********************************************************************************************/

/**
 * Agrega meta tags SEO avanzados al <head> usando datos dinámicos del contenido.
 *
 * - Title dinámico (prioridad: SEO title > post/page title > site name)
 * - Description (excerpt, resumen, o contenido truncado)
 * - Canonical URL
 * - Robots (index/follow según contexto)
 * - Open Graph y Twitter Cards (mejorados)
 * - Author, Published/Modified time
 * - Compatibilidad con CPT "bitacora" y fallback seguro
 *
 * @return void
 * @since 1.0.0
 */
function dhg_advanced_seo_meta_tags()
{
    global $post, $wp;

    // 1. Title
    $site_name = get_bloginfo('name');
    $site_desc = get_bloginfo('description');
    $title = '';
    if (is_singular()) {
        $title = get_the_title($post);
    } elseif (is_home() || is_front_page()) {
        $title = $site_name . ' - ' . $site_desc;
    } elseif (is_category() || is_tag() || is_tax()) {
        $title = single_term_title('', false) . ' - ' . $site_name;
    } elseif (is_archive()) {
        $title = post_type_archive_title('', false) . ' - ' . $site_name;
    } elseif (is_search()) {
        $title = 'Buscar: ' . get_search_query() . ' - ' . $site_name;
    } else {
        $title = $site_name;
    }
    $title = wp_strip_all_tags($title);

    // 2. Description
    $description = '';
    if (is_singular('bitacora') && function_exists('get_field')) {
        $description = get_field('resumen', $post->ID);
    }
    if (!$description && has_excerpt($post)) {
        $description = get_the_excerpt($post);
    }
    if (!$description && !empty($post->post_content)) {
        $description = wp_trim_words(strip_shortcodes(wp_strip_all_tags($post->post_content)), 30, '...');
    }
    // Añadir soporte para taxonomías y tags
    if ((is_category() || is_tag() || is_tax()) && !$description) {
        $term = get_queried_object();
        if (!empty($term->description)) {
            $description = wp_strip_all_tags($term->description);
        } else {
            $description = sprintf('Artículos y recursos sobre %s en %s.', $term->name, $site_name);
        }
    }
    if (!$description) {
        $description = $site_desc;
    }
    $description = esc_attr($description);

    // 3. Canonical URL
    $canonical = '';
    if (is_singular() || is_home() || is_front_page()) {
        $canonical = get_permalink($post);
    } elseif (is_category() || is_tag() || is_tax()) {
        $canonical = get_term_link(get_queried_object());
    } elseif (is_archive()) {
        $canonical = get_post_type_archive_link(get_post_type());
    } elseif (is_search()) {
        $canonical = get_search_link();
    } else {
        $canonical = home_url(add_query_arg(array(), $wp->request));
    }
    $canonical = esc_url($canonical);

    // 4. Robots
    $robots = 'index,follow';
    if (is_search() || is_404()) {
        $robots = 'noindex,nofollow';
    }

    // 5. Author
    $author = '';
    if (is_singular() && isset($post->post_author)) {
        $author = get_the_author_meta('display_name', $post->post_author);
    } elseif ((is_category() || is_tag() || is_tax()) && isset($term->name)) {
        $author = $term->name;
    } else {
        $author = $site_name;
    }
    $author = esc_attr($author);

    // 6. Published/Modified time
    $published_time = is_singular() ? get_the_date('c', $post) : '';
    $modified_time = is_singular() ? get_the_modified_date('c', $post) : '';

    // 7. Imagen destacada
    $image = '';
    if (is_singular() && has_post_thumbnail($post)) {
        $image = get_the_post_thumbnail_url($post, 'full');
    } elseif (function_exists('get_field') && is_singular('bitacora')) {
        $image = get_field('imagen', $post->ID);
    } elseif ((is_category() || is_tag() || is_tax()) && isset($term->term_id)) {
        // Si la taxonomía tiene un campo personalizado de imagen (ejemplo: ACF), úsalo
        if (function_exists('get_field')) {
            $term_image = get_field('imagen', $term);
            if ($term_image) {
                $image = $term_image;
            }
        }
    }
    if (!$image) {
        $image = get_template_directory_uri() . '/assets/images/default-og.webp';
    }
    $image = esc_url($image);

    // 8. Output meta tags
    echo "\n<!-- SEO Avanzado DHG -->\n";
    printf('<title>%s</title>' . "\n", esc_html($title));
    printf('<meta name="description" content="%s">' . "\n", $description);
    printf('<link rel="canonical" href="%s">' . "\n", $canonical);
    printf('<meta name="robots" content="%s">' . "\n", esc_attr($robots));
    printf('<meta name="author" content="%s">' . "\n", $author);
    if ($published_time) {
        printf('<meta property="article:published_time" content="%s">' . "\n", esc_attr($published_time));
    }
    if ($modified_time) {
        printf('<meta property="article:modified_time" content="%s">' . "\n", esc_attr($modified_time));
    }
    // Open Graph
    printf('<meta property="og:title" content="%s">' . "\n", esc_attr($title));
    printf('<meta property="og:description" content="%s">' . "\n", $description);
    printf('<meta property="og:image" content="%s">' . "\n", $image);
    printf('<meta property="og:url" content="%s">' . "\n", $canonical);
    printf('<meta property="og:type" content="%s">' . "\n", is_singular() ? 'article' : 'website');
    printf('<meta property="og:site_name" content="%s">' . "\n", esc_attr($site_name));
    // Twitter Cards
    printf('<meta name="twitter:card" content="summary_large_image">' . "\n");
    printf('<meta name="twitter:title" content="%s">' . "\n", esc_attr($title));
    printf('<meta name="twitter:description" content="%s">' . "\n", $description);
    printf('<meta name="twitter:image" content="%s">' . "\n", $image);
    printf('<meta name="twitter:creator" content="@%s">' . "\n", str_replace(' ', '', strtolower($author)));
    echo "<!-- /SEO Avanzado DHG -->\n\n";
}
add_action('wp_head', 'dhg_advanced_seo_meta_tags', 1);
