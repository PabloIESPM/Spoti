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
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
                    Recupera tu contraseña
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Te enviaremos un enlace para restablecer tu contraseña
                </p>
            </div>
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                    <!-- Correo electrónico -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">
                            Correo electrónico
                        </label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Pregunta de seguridad -->
                    <div>
                        <label for="security_question" class="block text-sm font-medium text-gray-900">
                            Pregunta de seguridad
                        </label>
                        <div class="mt-2">
                            <select id="security_question" name="security_question" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                <option value="">Selecciona una pregunta</option>
                                <option value="mascota">¿Cuál fue el nombre de tu primera mascota?</option>
                                <option value="escuela">¿A qué escuela primaria asististe?</option>
                                <option value="ciudad">¿En qué ciudad naciste?</option>
                                <option value="madre">¿Cuál es el nombre de soltera de tu madre?</option>
                                <option value="libro">¿Cuál es tu libro favorito?</option>
                            </select>
                        </div>
                    </div>

                    <!-- Respuesta a la pregunta de seguridad -->
                    <div>
                        <label for="security_answer" class="block text-sm font-medium text-gray-900">
                            Respuesta
                        </label>
                        <div class="mt-2">
                            <input type="text" name="security_answer" id="security_answer" required
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">La respuesta distingue entre mayúsculas y minúsculas</p>
                    </div>

                    <!-- Captcha - simulado con una imagen estática -->
                    <div>
                        <label for="captcha" class="block text-sm font-medium text-gray-900">
                            Verificación de seguridad
                        </label>
                        <div class="mt-2">
                            <div class="mb-2 bg-gray-100 p-2 rounded-md w-full flex justify-center">
                                <div class="h-10 w-32 bg-indigo-50 border border-indigo-200 flex items-center justify-center text-indigo-800 font-mono tracking-widest text-lg">
                                    4X7P9Z
                                </div>
                            </div>
                            <input type="text" name="captcha" id="captcha" required placeholder="Introduce el código mostrado arriba"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Enviar enlace de recuperación
                        </button>
                    </div>
                </form>

                <div class="mt-8 pb-6 text-center text-sm">
                    <a href="/inicioSesion" class="font-semibold text-indigo-600 hover:text-indigo-500 ">
                        Volver a iniciar sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>