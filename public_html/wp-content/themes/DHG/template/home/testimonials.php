<div class="py-16 bg-white dark:bg-gray-900 sm:py-24">
    <h3 class="pb-12 text-5xl font-semibold text-center text-blue-600">Testimonios</h3>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <?php if (have_rows('testimonios', 'option')) : ?>
            <?php
            $testimonios = [];
            while (have_rows('testimonios', 'option')) : the_row();
                $testimonios[] = [
                    'foto' => get_sub_field('foto'),
                    'descripcion' => get_sub_field('descripcion'),
                    'nombre' => get_sub_field('nombre'),
                    'cargo' => get_sub_field('cargo'),
                    'website' => get_sub_field('website'),
                ];
            endwhile;
            // Mezclar aleatoriamente el array de testimonios
            shuffle($testimonios);
            ?>
            <div
                x-data="testimonialCarousel"
                x-init="init(<?php echo htmlspecialchars(json_encode($testimonios), ENT_QUOTES, 'UTF-8'); ?>)"
                @mouseenter="stop()" @mouseleave="start()"
                class="relative min-h-[32rem]">
                <!-- Slides -->
                <div class="relative min-h-[32rem]">
                    <template x-for="(testimonio, i) in testimonios" :key="i">
                        <div
                            x-show="active === i"
                            x-transition:enter="transition-opacity duration-700"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity duration-700"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="absolute inset-0 w-full h-full px-6 py-20 overflow-hidden bg-blue-600 shadow-xl sm:rounded-3xl sm:px-10 sm:py-24 md:px-12 lg:px-20"
                            :class="{'z-20 pointer-events-auto': active === i, 'z-10 pointer-events-none': active !== i}">
                            <img class="absolute inset-0 object-cover size-full brightness-150 saturate-0" :src="testimonio.foto" alt="Foto Testimonio">
                            <div class="absolute inset-0 bg-blue-600/90 mix-blend-multiply"></div>
                            <div class="absolute -left-80 -top-56 transform-gpu blur-3xl" aria-hidden="true">
                                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#60a5fa] to-[#3b82f6] opacity-[0.45]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                            </div>
                            <div class="hidden md:absolute md:bottom-16 md:left-[50rem] md:block md:transform-gpu md:blur-3xl" aria-hidden="true">
                                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#60a5fa] to-[#3b82f6] opacity-25" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                            </div>
                            <div class="relative max-w-2xl mx-auto lg:mx-0">
                                <div class="flex items-center gap-2 mt-4">
                                    <a x-show="testimonio.website" :href="testimonio.website" target="_blank" class="text-white transition-colors hover:text-gray-300" aria-label="Sitio web del testimonio">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        <p class="mt-2 text-white">Ver sitio web</p>
                                    </a>
                                </div>
                                <figure>
                                    <blockquote class="mt-6 text-lg font-semibold text-white sm:text-xl/8">
                                        <p class="text-justify text-white" x-text="testimonio.descripcion"></p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-base text-white">
                                        <div class="font-semibold" x-text="testimonio.nombre"></div>
                                        <div class="mt-1 text-sm text-white/80" x-text="testimonio.cargo"></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </template>
                </div>
                <!-- Indicadores -->
                <div class="absolute z-30 flex gap-2 -translate-x-1/2 bottom-4 left-1/2">
                    <template x-for="(t, idx) in testimonios" :key="idx">
                        <button @click="active = idx" :class="{'bg-white/80': active === idx, 'bg-white/40': active !== idx}" class="w-3 h-3 transition-all rounded-full"></button>
                    </template>
                </div>
            </div>
        <?php else : ?>
            <p class="text-center text-white">No hay testimonios disponibles.</p>
        <?php endif; ?>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('testimonialCarousel', () => ({
            active: 0,
            testimonios: [],
            interval: null,
            init(data) {
                this.testimonios = data;
                this.start();
            },
            start() {
                this.stop();
                this.interval = setInterval(() => {
                    this.next();
                }, 10000);
            },
            stop() {
                clearInterval(this.interval);
            },
            next() {
                this.active = (this.active + 1) % this.testimonios.length;
            },
            prev() {
                this.active = (this.active - 1 + this.testimonios.length) % this.testimonios.length;
            }
        }));
    });
</script>