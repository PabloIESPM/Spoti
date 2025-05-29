<?php
include_once DIRECTORIO_PLANTILLA . "head.php";
include_once DIRECTORIO_PLANTILLA . "header.php";
?>
<!--Contenedor principal (diseño marco principal comun a todas la paginas de la web)-->
<div id="contenedorPrincipal" class="w-full flex-col justify-start items-center lg:gap-16 gap-10 inline-flex lg:pt-[180px] pt-12 lg:pb-28 pb-12">
    <div class="border border-indigo-300 rounded-lg w-full">
        <div class="p-8 flex justify-between items-center border-b border-indigo-100">
            <div class="block">
                <svg width="204" height="18" viewBox="0 0 204 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="8.78677" cy="8.78677" r="8.78677" transform="matrix(1 0 0 -1 0 17.6912)" fill="#E0E7FF"/>
                    <circle cx="8.78677" cy="8.78677" r="8.78677" transform="matrix(1 0 0 -1 28.1177 17.6912)" fill="#A5B4FC"/>
                    <circle cx="8.78677" cy="8.78677" r="8.78677" transform="matrix(1 0 0 -1 56.2353 17.6912)" fill="#E0E7FF"/>
                    <path d="M91.3824 8.9044C91.3824 13.7572 95.3164 17.6912 100.169 17.6912H195.066C199.919 17.6912 203.853 13.7572 203.853 8.9044C203.853 4.0516 199.919 0.117632 195.066 0.117632H100.169C95.3163 0.117632 91.3824 4.0516 91.3824 8.9044Z" fill="#E0E7FF"/>
                </svg>
            </div>
        </div>
        <!--EL contenido principal de la pagina (varia para cada pagina de la web)-->
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
                Contacta con nosotros
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Envíanos tus consultas, sugerencias o comentarios
            </p>
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md px-4 py-2">
            <!-- Información de contacto -->
            <div class="mb-8 bg-indigo-50 rounded-lg p-4">
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Email</p>
                        <p class="text-sm text-gray-600">soporte@tuempresa.com</p>
                    </div>
                </div>
                <div class="flex items-center mb-4">
                    <div class="flex-shrink-0 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Teléfono</p>
                        <p class="text-sm text-gray-600">+34 912 345 678</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Dirección</p>
                        <p class="text-sm text-gray-600">Calle Ejemplo 123, 28001 Madrid, España</p>
                    </div>
                </div>
            </div>

            <form class="space-y-5" action="#" method="POST">
                <!-- Nombre completo -->
                <div>
                    <label for="nombre_completo" class="block text-sm font-medium text-gray-900">
                        Nombre completo
                    </label>
                    <div class="mt-1">
                        <input type="text" name="nombre_completo" id="nombre_completo" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <!-- Correo electrónico -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">
                        Correo electrónico
                    </label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <!-- Teléfono (opcional) -->
                <div>
                    <label for="telefono" class="block text-sm font-medium text-gray-900">
                        Teléfono (opcional)
                    </label>
                    <div class="mt-1">
                        <input type="tel" name="telefono" id="telefono"
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                    </div>
                </div>

                <!-- Asunto -->
                <div>
                    <label for="asunto" class="block text-sm font-medium text-gray-900">
                        Asunto
                    </label>
                    <div class="mt-1">
                        <select id="asunto" name="asunto" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                            <option value="">Selecciona un asunto</option>
                            <option value="consulta">Consulta general</option>
                            <option value="soporte">Soporte técnico</option>
                            <option value="sugerencia">Sugerencia</option>
                            <option value="queja">Queja o reclamación</option>
                            <option value="colaboracion">Propuesta de colaboración</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>

                <!-- Mensaje -->
                <div>
                    <label for="mensaje" class="block text-sm font-medium text-gray-900">
                        Mensaje
                    </label>
                    <div class="mt-1">
                            <textarea id="mensaje" name="mensaje" rows="5" required
                                      class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm"
                                      placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>
                </div>

                <!-- Archivo adjunto (opcional) -->
                <div>
                    <label class="block text-sm font-medium text-gray-900">
                        Archivo adjunto (opcional)
                    </label>
                    <div class="mt-1">
                        <input type="file" name="archivo_adjunto" id="archivo_adjunto"
                               class="text-sm text-gray-500 file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
                        <p class="mt-1 text-xs text-gray-500">Puedes adjuntar un archivo (máx. 5MB) para ayudarnos a entender mejor tu consulta</p>
                    </div>
                </div>

                <!-- Preferencia de contacto -->
                <div>
                    <label class="block text-sm font-medium text-gray-900">
                        Preferencia de contacto
                    </label>
                    <div class="mt-2 flex gap-4">
                        <div class="flex items-center">
                            <input id="pref_email" name="preferencia_contacto" type="radio" value="email" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" checked>
                            <label for="pref_email" class="ml-2 block text-sm text-gray-900">Email</label>
                        </div>
                        <div class="flex items-center">
                            <input id="pref_telefono" name="preferencia_contacto" type="radio" value="telefono" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="pref_telefono" class="ml-2 block text-sm text-gray-900">Teléfono</label>
                        </div>
                    </div>
                </div>

                <!-- Casilla de privacidad -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="privacidad" name="privacidad" type="checkbox" required
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="privacidad" class="text-gray-700">
                            He leído y acepto la <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Política de Privacidad</a> y consiento el tratamiento de mis datos
                        </label>
                    </div>
                </div>

                <!-- Casilla de boletín informativo (opcional) -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="newsletter" name="newsletter" type="checkbox"
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="newsletter" class="text-gray-700">
                            Deseo recibir información sobre noticias y ofertas
                        </label>
                    </div>
                </div>

                <!-- Botón de envío -->
                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Enviar mensaje
                    </button>
                </div>
            </form>

            <div class="mt-8 pb-8 text-center text-sm">
                <a href="/inicio" class="font-semibold text-indigo-600 hover:text-indigo-500">
                    Volver a la página principal
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
