<div class="relative px-6 py-24 bg-white dark:bg-gray-900 isolate sm:py-12 lg:px-8" id="contacto">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 dark:from-[#ff80b5] dark:to-[#9089fc] sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-4xl font-bold tracking-tight text-transparent text-gray-900 dark:text-white text-balance sm:text-5xl bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text">¡Contáctame!</h2>
        <p class="max-w-xl pb-10 mx-auto mt-4 text-gray-600 dark:text-gray-400 text-lg/8">¡Déjame un mensaje y te responderé lo antes posible! Estoy aquí para ayudarte con cualquier consulta que tengas.</p>
    </div>

    <?php
    $recaptcha_token = wp_create_nonce('contacto_home');
    ?>

    <form class="max-w-2xl p-6 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 contact-form" action="" method="post">
        <?php wp_nonce_field('contacto_home', 'contacto_home_nonce'); ?>
        <input type="hidden" name="action" value="contacto_home">
        <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>">
        <input type="hidden" name="recaptcha_token" id="recaptcha_token" value="<?php echo $recaptcha_token; ?>">
        <input type="hidden" name="tipo" value="contacto">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('contacto_home'); ?>">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="field-grid">
                <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                <input type="text" name="nombre" id="nombre" required placeholder="Nombre"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="field-grid">
                <label for="apellido" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Apellido</label>
                <input type="text" name="apellido" id="apellido" required placeholder="Apellido"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="field-grid">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" required placeholder="tuemail@dominio.com"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="field-grid">
                <label for="telefono" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" required placeholder="123456789"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="field-grid">
                <label for="rut" class="block text-sm font-medium text-gray-700 dark:text-gray-300">RUT</label>
                <input type="text" name="rut" id="rut" required placeholder="12345678-9"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="field-grid">
                <label for="plan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Plan</label>
                <input readonly type="text" name="plan" id="plan" required placeholder="Plan" data-value
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm opacity-50 cursor-not-allowed dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white">
            </div>
            <div class="field-grid sm:col-span-2">
                <label for="mensaje" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mensaje</label>
                <textarea name="mensaje" id="mensaje" required placeholder="Escribe tu mensaje aquí..."
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm dark:border-gray-600 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-white"></textarea>
            </div>
        </div>

        <button data-form-contacto-button="Enviar" data-loading-text="Enviando..." data-form-id="contacto-form" type="submit" class="w-full px-4 py-2 mt-6 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
            Enviar
        </button>

        <div id="form-messages" class="hidden mt-4">
            <div id="sending-message" class="flex items-center justify-center hidden">
                <svg class="w-8 h-8 text-indigo-600 animate-spin dark:text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span class="ml-2 text-gray-700 dark:text-gray-300">Enviando mensaje...</span>
            </div>
            <div id="success-message" class="hidden p-4 text-green-700 bg-green-100 rounded-md dark:bg-green-900 dark:text-green-300">
                <svg class="w-6 h-6 mb-2 text-green-500 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p>¡Mensaje enviado con éxito! Te contactaremos lo antes posible.</p>
            </div>
            <div id="error-message" class="hidden p-4 text-red-700 bg-red-100 rounded-md dark:bg-red-900 dark:text-red-300">
                <svg class="w-6 h-6 mb-2 text-red-500 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p id="error-text">Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.</p>
            </div>
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
            <p>Al enviar este formulario, aceptas nuestras
                <a href="<?php echo esc_url(home_url('/politica-privacidad')); ?>" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">Políticas de Privacidad</a> y
                <a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">Términos y Condiciones</a>.
            </p>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.contact-form');
        const submitButton = form.querySelector('button[type="submit"]');
        const formMessages = document.querySelector('#form-messages');
        const sendingMessage = document.querySelector('#sending-message');
        const successMessage = document.querySelector('#success-message');
        const errorMessage = document.querySelector('#error-message');
        const errorText = document.querySelector('#error-text');

        // Resetear mensajes
        function resetMessages() {
            formMessages.classList.add('hidden');
            sendingMessage.classList.add('hidden');
            successMessage.classList.add('hidden');
            errorMessage.classList.add('hidden');
        }

        // Mostrar mensaje de envío
        function showSendingMessage() {
            resetMessages();
            formMessages.classList.remove('hidden');
            sendingMessage.classList.remove('hidden');
        }

        // Mostrar mensaje de éxito
        function showSuccessMessage() {
            resetMessages();
            formMessages.classList.remove('hidden');
            successMessage.classList.remove('hidden');
            submitButton.disabled = false;
            submitButton.classList.remove('disabled:opacity-50', 'disabled:cursor-not-allowed', 'opacity-50', 'cursor-not-allowed');
            submitButton.textContent = 'Enviar';
            form.reset();
        }

        // Mostrar mensaje de error
        function showErrorMessage(message) {
            resetMessages();
            formMessages.classList.remove('hidden');
            errorMessage.classList.remove('hidden');
            errorText.textContent = message || 'Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.';
            submitButton.disabled = false;
            submitButton.classList.remove('disabled:opacity-50', 'disabled:cursor-not-allowed', 'opacity-50', 'cursor-not-allowed');
            submitButton.textContent = 'Enviar';
        }

        form.addEventListener('submit', function(event) {
            event.preventDefault();
            submitButton.disabled = true;
            submitButton.textContent = 'Enviando...';
            submitButton.classList.add('disabled:opacity-50', 'disabled:cursor-not-allowed', 'opacity-50', 'cursor-not-allowed');
            showSendingMessage();

            // Enviar datos del formulario mediante AJAX
            const data = new FormData(form);
            console.log('Enviando formulario...');
            fetch('/wp-admin/admin-ajax.php', {
                    method: 'POST',
                    body: data
                })
                .then(response => {
                    return response.text().then(text => {
                        try {
                            const jsonData = JSON.parse(text);
                            if (jsonData.success) {
                                showSuccessMessage();
                            } else {
                                showErrorMessage(jsonData.data.message);
                            }
                        } catch (e) {
                            console.error('Error al parsear JSON:', e);
                            showErrorMessage('Error en la respuesta del servidor. Por favor, intenta nuevamente.');
                        }
                    });
                })
                .catch(error => {
                    console.error('Error de conexión:', error);
                    showErrorMessage('Error de conexión. Por favor, verifica tu internet e intenta nuevamente.');
                });
        });
    });

    document.addEventListener('click', function(e) {
        // Busca el elemento más cercano con data-plan-id (soporta clicks en hijos)
        const planBtn = e.target.closest('[data-plan-id]');
        if (planBtn) {
            e.preventDefault();
            const plan = planBtn.getAttribute('data-plan-id');
            const inputPlan = document.querySelector('[data-value]');
            if (inputPlan) {
                inputPlan.value = plan;
            }
        }
    });
</script>