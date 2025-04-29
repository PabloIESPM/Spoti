<?php
include_once DIRECTORIO_PLANTILLA . "head.php";
include_once DIRECTORIO_PLANTILLA . "header.php";
?>
<!--Contenedor principal (diseño marco principal comun a todas la paginas de la web)-->
<div class="w-full flex-col justify-start items-center lg:gap-16 gap-10 inline-flex lg:pt-[180px] pt-12 lg:pb-28 pb-12">
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
        <div class="px-6 py-8 lg:px-8">
            <!-- Hero Section -->
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-12 text-center shadow-2xl sm:px-16 mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Verificación de Cuenta</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Obtén una insignia verificada y accede a funciones exclusivas para miembros de confianza
                </p>
                <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#gradient)" fill-opacity="0.25" />
                    <defs>
                        <radialGradient id="gradient">
                            <stop stop-color="white" />
                            <stop offset="1" stop-color="white" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>

            <!-- Información sobre verificación -->
            <div class="mb-12 bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">¿Qué es la verificación?</h2>
                <p class="mb-4 text-gray-700">La verificación en GameShelf es un proceso mediante el cual confirmamos la identidad de usuarios destacados de nuestra comunidad. Las cuentas verificadas reciben una insignia especial <span class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg></span> que aparece junto a su nombre de usuario.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Beneficios de la verificación</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Insignia verificada junto a tu nombre de usuario</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Mayor visibilidad para tus reseñas y listas</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Acceso a foros y discusiones exclusivas</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Participación en eventos de la comunidad</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Posibilidad de participar en programas beta</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">¿Quién puede solicitar verificación?</h3>
                        <p class="mb-4 text-gray-700">La verificación está disponible para usuarios que cumplan al menos uno de los siguientes criterios:</p>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Creadores de contenido (YouTubers, streamers, periodistas)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Profesionales de la industria de videojuegos</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Usuarios con más de 1.000 seguidores en GameShelf</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Miembros activos con más de 50 reseñas de calidad</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-600 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Figuras públicas reconocibles en la comunidad gamer</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Proceso de verificación -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Proceso de verificación</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-6">
                        <div class="space-y-8">
                            <!-- Paso 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 font-bold text-xl">
                                        1
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-medium text-gray-900">Completa el formulario de solicitud</h3>
                                    <p class="mt-2 text-gray-600">Rellena todos los campos requeridos y proporciona la información necesaria para verificar tu identidad.</p>
                                </div>
                            </div>

                            <!-- Paso 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 font-bold text-xl">
                                        2
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-medium text-gray-900">Proporciona pruebas de identidad</h3>
                                    <p class="mt-2 text-gray-600">Adjunta documentos o enlaces que confirmen tu identidad o tu relevancia en la comunidad de videojuegos.</p>
                                </div>
                            </div>

                            <!-- Paso 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 font-bold text-xl">
                                        3
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-medium text-gray-900">Revisión por nuestro equipo</h3>
                                    <p class="mt-2 text-gray-600">Nuestro equipo revisará tu solicitud en un plazo de 5-7 días hábiles. Te notificaremos por correo electrónico.</p>
                                </div>
                            </div>

                            <!-- Paso 4 -->
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 text-indigo-600 font-bold text-xl">
                                        4
                                    </div>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-lg font-medium text-gray-900">Obtén tu verificación</h3>
                                    <p class="mt-2 text-gray-600">Si tu solicitud es aprobada, recibirás la insignia de verificación y acceso a las funciones exclusivas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulario de solicitud -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Solicitar verificación</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <form class="p-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
                                <input type="text" id="nombre" name="nombre" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            <div>
                                <label for="usuario" class="block text-sm font-medium text-gray-700 mb-1">Nombre de usuario en GameShelf</label>
                                <input type="text" id="usuario" name="usuario" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                                <input type="email" id="email" name="email" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            <div>
                                <label for="categoria" class="block text-sm font-medium text-gray-700 mb-1">Categoría de verificación</label>
                                <select id="categoria" name="categoria" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccionar categoría</option>
                                    <option value="creador">Creador de contenido</option>
                                    <option value="profesional">Profesional de la industria</option>
                                    <option value="usuario">Usuario destacado</option>
                                    <option value="figura">Figura pública</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="justificacion" class="block text-sm font-medium text-gray-700 mb-1">¿Por qué deberías ser verificado?</label>
                            <textarea id="justificacion" name="justificacion" rows="4" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Describe tu relevancia en la comunidad y por qué deberías recibir la verificación..."></textarea>
                        </div>

                        <div>
                            <label for="enlaces" class="block text-sm font-medium text-gray-700 mb-1">Enlaces relevantes (redes sociales, portfolio, canal, etc.)</label>
                            <textarea id="enlaces" name="enlaces" rows="3" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Añade enlaces separados por comas..."></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Documentación de apoyo</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Sube un archivo</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">o arrastra y suelta</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, PDF hasta 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terminos" name="terminos" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terminos" class="font-medium text-gray-700">Acepto los términos y condiciones</label>
                                <p class="text-gray-500">Al enviar esta solicitud, confirmo que toda la información proporcionada es veraz y puede ser verificada.</p>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Enviar solicitud
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- FAQ -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Preguntas frecuentes</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <dl class="divide-y divide-gray-200">
                        <div class="px-6 py-4">
                            <dt class="text-lg font-medium text-gray-900">¿Cuánto tiempo tarda el proceso de verificación?</dt>
                            <dd class="mt-2 text-gray-600">El proceso de verificación suele tardar entre 5 y 7 días hábiles desde que se envía la solicitud completa. En períodos de alta demanda, puede extenderse hasta 14 días.</dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-lg font-medium text-gray-900">¿Qué ocurre si mi solicitud es rechazada?</dt>
                            <dd class="mt-2 text-gray-600">Si tu solicitud es rechazada, te enviaremos un correo explicando los motivos. Puedes volver a solicitar la verificación después de 30 días, abordando los problemas mencionados en el rechazo.</dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-lg font-medium text-gray-900">¿Puedo perder mi verificación?</dt>
                            <dd class="mt-2 text-gray-600">Sí, la verificación puede ser revocada si se incumplen nuestras normas comunitarias, se proporciona información falsa o si hay inactividad prolongada en la plataforma.</dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-lg font-medium text-gray-900">¿La verificación tiene algún coste?</dt>
                            <dd class="mt-2 text-gray-600">No, el proceso de verificación es completamente gratuito. GameShelf nunca te pedirá pagos para obtener o mantener tu verificación.</dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-lg font-medium text-gray-900">¿Necesito tener una cuenta premium para solicitar verificación?</dt>
                            <dd class="mt-2 text-gray-600">No, cualquier usuario que cumpla con los requisitos puede solicitar la verificación, independientemente del tipo de cuenta que tenga.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
