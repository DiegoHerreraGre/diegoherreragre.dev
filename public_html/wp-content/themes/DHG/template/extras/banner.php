<?php

// Get fields from options page
$banner_true = get_field('banner_true', 'option');
$banner_title = get_field('banner_title', 'option');
$banner_description = get_field('banner_description', 'option');
$banner_link = get_field('banner_link', 'option');

// Verificar si existe la cookie antes de mostrar el banner
$cookie_exists = false;
if (isset($_COOKIE['banner_cerrado'])) {
    $cookie_hash = $_COOKIE['banner_cerrado'];
    $hash_calculado = wp_hash('banner_cerrado');
    if ($cookie_hash === $hash_calculado) {
        $cookie_exists = true;
    }
}

if ($banner_true && !$cookie_exists) {
?>
    <div class="relative isolate flex items-center gap-x-6 bg-gradient-to-r from-blue-400 to-blue-700 px-6 py-2.5 sm:px-3.5 sm:before:flex-1 z-50" role="alert" id="banner">
        <p class="text-lg font-bold text-white animate-pulse">
            <a href="<?php echo esc_url($banner_link); ?>" class="inline-flex items-center transition-colors duration-200 group hover:text-blue-100">
                <strong class="font-semibold"><?php echo esc_html($banner_title); ?></strong>
                <svg viewBox="0 0 2 2" class="mx-2 inline size-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <span class="text-blue-100"><?php echo esc_html($banner_description); ?></span>
                <span class="ml-1 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true">&rarr;</span>
            </a>
        </p>
        <div class="flex justify-end flex-1">
            <button type="button"
                class="-m-3 p-3 focus-visible:outline-offset-[-4px] hover:bg-blue-700/50 rounded-full transition-colors duration-200"
                aria-label="Cerrar banner" onclick="cerrarBanner()">
                <svg class="text-white size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        const crearCookie = async () => {
            const fechaExpiracion = new Date();
            <?php $cookie_hash = wp_hash('banner_cerrado'); ?>
            fechaExpiracion.setHours(fechaExpiracion.getHours() + 1);
            document.cookie = 'banner_cerrado=<?php echo $cookie_hash; ?>; expires=' + fechaExpiracion.toUTCString() + '; path=/; samesite=strict; secure';
        }

        const cerrarBanner = async () => {
            const banner = document.querySelector('#banner');
            banner.style.display = 'none';
            await crearCookie();
        }
    </script>
<?php
}
