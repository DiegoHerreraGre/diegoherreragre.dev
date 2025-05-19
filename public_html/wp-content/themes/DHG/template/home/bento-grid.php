<div class="py-12 bg-white dark:bg-gray-900 sm:py-12">
    <div class="max-w-2xl px-6 mx-auto lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-semibold text-center text-blue-600 dark:text-blue-400">Programación rápida y eficiente</h2>
        <p class="max-w-lg mx-auto mt-2 text-4xl font-semibold tracking-tight text-center text-balance text-gray-950 dark:text-white sm:text-5xl">Todo lo que necesitas para tu proyecto personal o empresarial</p>
        <div class="grid gap-4 mt-10 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white dark:bg-gray-800 lg:rounded-l-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pb-0 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-white max-lg:text-center">Desarrollo web con mobile first</p>
                        <p class="max-w-lg mt-2 text-gray-600 text-sm/6 dark:text-gray-400 max-lg:text-center">Poner a tu proyecto con un enfoque mobile first, asegurando que se vea y funcione correctamente en cualquier dispositivo.</p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                        <div class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-blue-700 dark:border-blue-600 bg-gradient-to-b from-[#04063E] via-[#0D0E4D] to-[#4743A8] shadow-2xl">
                            <?php $img_mobile = get_field('img_mobile', 'option'); ?>
                            <div class="flex items-center justify-center w-full h-full">
                                <img
                                    class="object-cover object-top scale-100"
                                    src="<?php echo $img_mobile; ?>"
                                    alt="<?php echo the_title(); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 dark:ring-white/5 lg:rounded-l-[2rem]"></div>
            </div>
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-white dark:bg-gray-800 max-lg:rounded-t-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-white max-lg:text-center">Desarrollo web con un enfoque SEO</p>
                        <p class="max-w-lg pb-2 mt-2 text-gray-600 text-sm/6 dark:text-gray-400 max-lg:text-center"><span class="font-bold">Tu proyecto con un enfoque SEO</span>, asegurando que se vea y funcione correctamente en cualquier dispositivo.</p>
                    </div>
                    <div class="flex items-center justify-center flex-1 px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                        <svg class="w-full h-full rounded-lg" viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                            <!-- Fondo con gradiente mejorado -->
                            <defs>
                                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#0f172a;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#1e293b;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#0f172a;stop-opacity:1" />
                                </linearGradient>
                                <!-- Efecto de brillo mejorado -->
                                <filter id="glow">
                                    <feGaussianBlur stdDeviation="3" result="coloredBlur" />
                                    <feMerge>
                                        <feMergeNode in="coloredBlur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                                <!-- Efecto de pulso -->
                                <filter id="pulse">
                                    <feGaussianBlur stdDeviation="2" result="blur" />
                                    <feComposite in="SourceGraphic" in2="blur" operator="over" />
                                </filter>
                            </defs>

                            <!-- Rectángulo de fondo con efecto de profundidad -->
                            <rect width="100%" height="100%" fill="url(#grad1)" />

                            <!-- Lupa de búsqueda mejorada con animación -->
                            <g filter="url(#glow)">
                                <circle cx="150" cy="150" r="60" fill="none" stroke="#60a5fa" stroke-width="8">
                                    <animate attributeName="r" values="60;65;60" dur="3s" repeatCount="indefinite" />
                                </circle>
                                <line x1="190" y1="190" x2="250" y2="250" stroke="#60a5fa" stroke-width="8">
                                    <animate attributeName="stroke-width" values="8;10;8" dur="3s" repeatCount="indefinite" />
                                </line>
                            </g>

                            <!-- Texto SEO con efecto de brillo y animación -->
                            <text x="200" y="150" font-family="Arial" font-size="24" fill="#ffffff" text-anchor="middle" filter="url(#pulse)">
                                <animate attributeName="fill" values="#ffffff;#ffffff;#ffffff" dur="2s" repeatCount="indefinite" />
                                Search Engine Optimization
                            </text>

                            <!-- Elementos decorativos mejorados con animaciones -->
                            <g opacity="0.8">
                                <circle cx="100" cy="100" r="5" fill="#60a5fa" filter="url(#glow)">
                                    <animate attributeName="opacity" values="0.8;0.4;0.8" dur="2s" repeatCount="indefinite" />
                                </circle>
                                <circle cx="300" cy="200" r="7" fill="#60a5fa" filter="url(#glow)">
                                    <animate attributeName="opacity" values="0.8;0.4;0.8" dur="3s" repeatCount="indefinite" />
                                </circle>
                                <circle cx="250" cy="80" r="4" fill="#60a5fa" filter="url(#glow)">
                                    <animate attributeName="opacity" values="0.8;0.4;0.8" dur="2.5s" repeatCount="indefinite" />
                                </circle>
                            </g>

                            <!-- Líneas de conexión animadas con diferentes velocidades -->
                            <g stroke="#60a5fa" stroke-width="2" opacity="0.4">
                                <line x1="100" y1="100" x2="150" y2="150">
                                    <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="1.5s" repeatCount="indefinite" />
                                </line>
                                <line x1="300" y1="200" x2="150" y2="150">
                                    <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="2s" repeatCount="indefinite" />
                                </line>
                                <line x1="250" y1="80" x2="150" y2="150">
                                    <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="1.8s" repeatCount="indefinite" />
                                </line>
                            </g>

                            <!-- Partículas flotantes con movimientos más complejos -->
                            <g>
                                <circle cx="50" cy="50" r="2" fill="#93c5fd" opacity="0.6">
                                    <animate attributeName="cy" values="50;30;50" dur="3s" repeatCount="indefinite" />
                                    <animate attributeName="cx" values="50;60;50" dur="4s" repeatCount="indefinite" />
                                </circle>
                                <circle cx="350" cy="250" r="3" fill="#93c5fd" opacity="0.6">
                                    <animate attributeName="cy" values="250;270;250" dur="4s" repeatCount="indefinite" />
                                    <animate attributeName="cx" values="350;340;350" dur="3s" repeatCount="indefinite" />
                                </circle>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 dark:ring-white/5 max-lg:rounded-t-[2rem]"></div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute bg-white rounded-lg inset-px dark:bg-gray-800"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-white max-lg:text-center">Seguridad y protección</p>
                        <p class="max-w-lg mt-2 text-gray-600 text-sm/6 dark:text-gray-400 max-lg:text-center">Protegemos tu proyecto con tecnologías de seguridad y protección, Firewalls, SSL, etc. y usando <span class="font-bold">PHP y MySQL</span>, asegurando que se vea y funcione correctamente en cualquier dispositivo.</p>
                    </div>
                    <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                        <svg class="h-[min(152px,40cqw)] w-full" viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                            <!-- Filtro de brillo mejorado -->
                            <defs>
                                <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="6" result="blur" />
                                    <feComposite in="SourceGraphic" in2="blur" operator="over" />
                                    <feColorMatrix type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0" result="coloredBlur" />
                                </filter>
                            </defs>

                            <!-- Escudo de seguridad con gradiente -->
                            <g transform="translate(200,150)">
                                <path d="M0,-100 L86.6,-50 L86.6,50 L0,100 L-86.6,50 L-86.6,-50 Z"
                                    fill="none"
                                    stroke="url(#shieldGradient)"
                                    stroke-width="8"
                                    filter="url(#glow)" />

                                <!-- Círculo interior con gradiente -->
                                <circle cx="0" cy="0" r="40"
                                    fill="none"
                                    stroke="url(#shieldGradient)"
                                    stroke-width="6"
                                    filter="url(#glow)" />

                                <!-- Símbolo de candado mejorado -->
                                <rect x="-15" y="-10" width="30" height="20"
                                    fill="none"
                                    stroke="url(#shieldGradient)"
                                    stroke-width="4"
                                    filter="url(#glow)" />
                                <path d="M-15,-10 Q-15,-25 0,-25 Q15,-25 15,-10"
                                    fill="none"
                                    stroke="url(#shieldGradient)"
                                    stroke-width="4"
                                    filter="url(#glow)" />
                            </g>

                            <!-- Gradientes definidos -->
                            <defs>
                                <linearGradient id="shieldGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#1d4ed8;stop-opacity:1" />
                                </linearGradient>
                            </defs>

                            <!-- Elementos decorativos mejorados -->
                            <g opacity="0.8">
                                <circle cx="50" cy="50" r="5" fill="#3b82f6" filter="url(#glow)">
                                    <animate attributeName="opacity" values="0.8;0.4;0.8" dur="2s" repeatCount="indefinite" />
                                </circle>
                                <circle cx="350" cy="250" r="7" fill="#3b82f6" filter="url(#glow)">
                                    <animate attributeName="opacity" values="0.8;0.4;0.8" dur="3s" repeatCount="indefinite" />
                                </circle>
                                <circle cx="300" cy="80" r="4" fill="#3b82f6" filter="url(#glow)">
                                    <animate attributeName="opacity" values="0.8;0.4;0.8" dur="2.5s" repeatCount="indefinite" />
                                </circle>
                            </g>

                            <!-- Líneas de conexión animadas con diferentes velocidades -->
                            <g stroke="url(#shieldGradient)" stroke-width="2" opacity="0.4">
                                <line x1="50" y1="50" x2="200" y2="150">
                                    <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="1.5s" repeatCount="indefinite" />
                                </line>
                                <line x1="350" y1="250" x2="200" y2="150">
                                    <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="2s" repeatCount="indefinite" />
                                </line>
                                <line x1="300" y1="80" x2="200" y2="150">
                                    <animate attributeName="stroke-dasharray" from="0,1000" to="1000,0" dur="1.8s" repeatCount="indefinite" />
                                </line>
                            </g>

                            <!-- Partículas flotantes con movimientos más complejos -->
                            <g>
                                <circle cx="100" cy="100" r="2" fill="#93c5fd" opacity="0.6">
                                    <animate attributeName="cy" values="100;80;100" dur="3s" repeatCount="indefinite" />
                                    <animate attributeName="cx" values="100;110;100" dur="4s" repeatCount="indefinite" />
                                </circle>
                                <circle cx="300" cy="200" r="3" fill="#93c5fd" opacity="0.6">
                                    <animate attributeName="cy" values="200;220;200" dur="4s" repeatCount="indefinite" />
                                    <animate attributeName="cx" values="300;290;300" dur="3s" repeatCount="indefinite" />
                                </circle>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="absolute rounded-lg shadow pointer-events-none inset-px ring-1 ring-black/5 dark:ring-white/5"></div>
            </div>
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white dark:bg-gray-800 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pb-0 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-white max-lg:text-center">Analytics Personalizado</p>
                        <p class="max-w-lg mt-2 text-gray-600 text-sm/6 dark:text-gray-400 max-lg:text-center">Implementamos <span class="font-bold"> eventos únicos y personalizados</span> para rastrear el comportamiento de tus usuarios y optimizar tu estrategia digital.</p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow">
                        <div class="absolute bottom-0 right-0 overflow-hidden bg-gray-900 shadow-2xl left-10 top-10 rounded-tl-xl dark:bg-gray-950">
                            <?php $ga4_img = get_field('ga4_img', 'option'); ?>
                            <img
                                class="object-cover object-left size-full"
                                src="<?php echo $ga4_img; ?>"
                                alt="<?php echo the_title(); ?>">
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
            </div>
        </div>
    </div>
</div>