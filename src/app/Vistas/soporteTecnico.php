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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">SOPORTE TÉCNICO</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Resolvemos tus dudas para que disfrutes al máximo de tu experiencia en GameShelf
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="#contacto" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Contactar con soporte
                    </a>
                    <a href="#faq" class="text-sm font-semibold leading-6 text-white">
                        Ver preguntas frecuentes <span aria-hidden="true">→</span>
                    </a>
                </div>
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

            <!-- Búsqueda de ayuda -->
            <div class="mb-12">
                <div class="flex flex-col items-center justify-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">¿En qué podemos ayudarte?</h2>
                    <div class="w-full max-w-md">
                        <div class="relative">
                            <input type="text" class="w-full py-3 px-4 pr-10 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Buscar ayuda...">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <!-- Categoría 1 -->
                    <div class="bg-white rounded-lg shadow p-6 hover:shadow-md transition-shadow">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Mi cuenta</h3>
                        <p class="text-sm text-gray-600 mb-4">Gestión del perfil, cambio de contraseña, configuración de privacidad</p>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Ver ayuda <span aria-hidden="true">→</span>
                        </a>
                    </div>

                    <!-- Categoría 2 -->
                    <div class="bg-white rounded-lg shadow p-6 hover:shadow-md transition-shadow">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Colección y listas</h3>
                        <p class="text-sm text-gray-600 mb-4">Añadir juegos, crear listas personalizadas, gestionar colección</p>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Ver ayuda <span aria-hidden="true">→</span>
                        </a>
                    </div>

                    <!-- Categoría 3 -->
                    <div class="bg-white rounded-lg shadow p-6 hover:shadow-md transition-shadow">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Reseñas y valoraciones</h3>
                        <p class="text-sm text-gray-600 mb-4">Escribir reseñas, problemas con valoraciones, políticas de contenido</p>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Ver ayuda <span aria-hidden="true">→</span>
                        </a>
                    </div>

                    <!-- Categoría 4 -->
                    <div class="bg-white rounded-lg shadow p-6 hover:shadow-md transition-shadow">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Problemas técnicos</h3>
                        <p class="text-sm text-gray-600 mb-4">Errores de la plataforma, problemas de visualización, rendimiento</p>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Ver ayuda <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div class="mb-12" id="faq">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Preguntas frecuentes</h2>

                <div class="space-y-6 max-w-3xl mx-auto">
                    <!-- Pregunta 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <button class="w-full text-left px-6 py-4 focus:outline-none flex justify-between items-center">
                            <span class="text-lg font-medium text-gray-900">¿Cómo puedo cambiar mi nombre de usuario?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">
                                Para cambiar tu nombre de usuario, dirígete a la configuración de tu cuenta. En el apartado "Perfil", encontrarás la opción para modificar tu nombre de usuario. Ten en cuenta que solo puedes cambiar tu nombre de usuario una vez cada 30 días, y que si otro usuario ya tiene el nombre que deseas, no podrás utilizarlo.
                            </p>
                        </div>
                    </div>

                    <!-- Pregunta 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <button class="w-full text-left px-6 py-4 focus:outline-none flex justify-between items-center">
                            <span class="text-lg font-medium text-gray-900">¿Cómo puedo añadir un juego que no está en la base de datos?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">
                                Si no encuentras un juego en nuestra base de datos, puedes solicitar su adición. Ve a la página "Explorar" y usa la opción "Solicitar nuevo juego" en la parte inferior. Rellena el formulario con toda la información que tengas sobre el juego. Nuestro equipo revisará la solicitud y, si es aprobada, el juego se añadirá a la base de datos en un plazo de 48-72 horas.
                            </p>
                        </div>
                    </div>

                    <!-- Pregunta 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <button class="w-full text-left px-6 py-4 focus:outline-none flex justify-between items-center">
                            <span class="text-lg font-medium text-gray-900">¿Por qué no puedo publicar mi reseña?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">
                                Existen varias razones por las que podrías tener problemas para publicar una reseña:
                            </p>
                            <ul class="list-disc pl-5 mt-2 text-gray-600 space-y-1">
                                <li>Tu reseña es demasiado corta (mínimo 200 caracteres)</li>
                                <li>Incluye contenido que viola nuestras normas comunitarias</li>
                                <li>Ya has publicado una reseña para este juego</li>
                                <li>Tu cuenta es nueva y tiene restricciones temporales</li>
                            </ul>
                            <p class="text-gray-600 mt-2">
                                Si crees que hay un error, contacta con nuestro equipo de soporte para revisar tu caso.
                            </p>
                        </div>
                    </div>

                    <!-- Pregunta 4 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <button class="w-full text-left px-6 py-4 focus:outline-none flex justify-between items-center">
                            <span class="text-lg font-medium text-gray-900">¿Cómo puedo eliminar mi cuenta?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">
                                Para eliminar tu cuenta, ve a "Configuración de cuenta" y selecciona la opción "Eliminar cuenta" en la parte inferior. Tendrás que confirmar esta acción introduciendo tu contraseña. Ten en cuenta que la eliminación de la cuenta es permanente y no se pueden recuperar tus datos, colecciones, reseñas o listas una vez eliminada. Te recomendamos exportar tus datos antes de eliminar tu cuenta.
                            </p>
                        </div>
                    </div>

                    <!-- Pregunta 5 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <button class="w-full text-left px-6 py-4 focus:outline-none flex justify-between items-center">
                            <span class="text-lg font-medium text-gray-900">¿Cómo reporto contenido inapropiado?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">
                                Para reportar reseñas, comentarios o perfiles que consideres inapropiados, utiliza el botón "Reportar" que aparece junto a dicho contenido. Selecciona el motivo del reporte y proporciona detalles adicionales si es necesario. Nuestro equipo de moderación revisará el reporte y tomará las medidas adecuadas según nuestras normas comunitarias. Gracias por ayudarnos a mantener GameShelf como un espacio respetuoso para todos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guías rápidas -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Guías rápidas</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Guía 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Imagen de guía" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Cómo crear listas personalizadas</h3>
                            <p class="text-sm text-gray-600 mb-4">Aprende a organizar tu colección con listas temáticas y compartirlas con la comunidad.</p>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                Ver guía completa <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Guía 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Imagen de guía" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Escribir reseñas efectivas</h3>
                            <p class="text-sm text-gray-600 mb-4">Consejos para crear reseñas de calidad que sean útiles para otros jugadores.</p>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                Ver guía completa <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Guía 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Imagen de guía" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Personalizar tu perfil</h3>
                            <p class="text-sm text-gray-600 mb-4">Cómo configurar tu perfil para destacar tus gustos y estadísticas de juego.</p>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                Ver guía completa <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contacto -->
            <div id="contacto" class="bg-indigo-50 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Contacta con nosotros</h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Formas de contacto -->
                    <div class="lg:col-span-1 space-y-6">
                        <!-- Email -->
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">Para problemas con tu cuenta o consultas generales:</p>
                            <a href="mailto:soporte@gameshelf.com" class="text-indigo-600 font-medium">soporte@gameshelf.com</a>
                        </div>

                        <!-- Discord -->
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900">Discord</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">Únete a nuestra comunidad para recibir ayuda más rápida:</p>
                            <a href="https://discord.gg/gameshelf" class="text-indigo-600 font-medium">discord.gg/gameshelf</a>
                        </div>

                        <!-- Centro de ayuda -->
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center space-x-3 mb-4">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900">Base de conocimientos</h3>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">Consulta nuestra documentación completa:</p>
                            <a href="/ayuda" class="text-indigo-600 font-medium">Centro de ayuda completo</a>
                        </div>
                    </div>

                    <!-- Formulario de contacto -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Envíanos un mensaje</h3>
                            <form>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2 px-3 border">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" id="email" name="email" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2 px-3 border">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="asunto" class="block text-sm font-medium text-gray-700 mb-1">Asunto</label>
                                    <select id="asunto" name="asunto" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-2 px-3 border">
                                        <option value="">Selecciona un tema</option>
                                        <option value="cuenta">Problemas con mi cuenta</option>
                                        <option value="coleccion">Colección y listas</option>
                                        <option value="resenas">Reseñas y valoraciones</option>
                                        <option value="tecnico">Problema técnico</option>
                                        <option value="sugerencia">Sugerencia</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                                    <textarea id="mensaje" name="mensaje" rows="5" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-5 px-3 border"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <span class="ml-2 text-sm text-gray-600">Acepto la política de privacidad y el tratamiento de mis datos</span>
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Enviar mensaje
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Solución de problemas comunes -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Solución de problemas comunes</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Problema 1 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">La página no carga correctamente</h3>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Si experimentas problemas al cargar GameShelf, prueba estos pasos:</p>
                            <ol class="list-decimal pl-5 space-y-2 text-sm text-gray-600">
                                <li>Limpia la caché de tu navegador</li>
                                <li>Asegúrate de tener la última versión de tu navegador</li>
                                <li>Desactiva las extensiones que puedan estar interfiriendo</li>
                                <li>Comprueba tu conexión a internet</li>
                            </ol>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="text-sm text-indigo-700">
                                <span class="font-medium">Consejo:</span> Si utilizas bloqueadores de anuncios, prueba a añadir GameShelf como sitio de confianza.
                            </p>
                        </div>
                    </div>

                    <!-- Problema 2 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">No puedo iniciar sesión</h3>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Si tienes problemas para acceder a tu cuenta:</p>
                            <ol class="list-decimal pl-5 space-y-2 text-sm text-gray-600">
                                <li>Utiliza la opción "¿Olvidaste tu contraseña?" para restablecerla</li>
                                <li>Comprueba que tu dirección de email esté escrita correctamente</li>
                                <li>Verifica que las mayúsculas/minúsculas sean correctas</li>
                                <li>Asegúrate de que tu cuenta no esté suspendida (revisa tu email)</li>
                            </ol>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="text-sm text-indigo-700">
                                <span class="font-medium">Nota:</span> Si has intentado iniciar sesión varias veces sin éxito, es posible que tu cuenta esté bloqueada temporalmente por seguridad. Espera 30 minutos antes de intentarlo de nuevo.
                            </p>
                        </div>
                    </div>

                    <!-- Problema 3 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">No puedo subir imágenes</h3>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Si tienes problemas para subir imágenes a tu perfil o reseñas:</p>
                            <ol class="list-decimal pl-5 space-y-2 text-sm text-gray-600">
                                <li>Verifica que la imagen no supere los 5MB de tamaño</li>
                                <li>Asegúrate de que el formato sea JPG, PNG o GIF</li>
                                <li>Comprueba que la resolución esté dentro de los límites (máx. 2000x2000px)</li>
                                <li>Intenta con una imagen diferente para descartar problemas con el archivo</li>
                            </ol>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="text-sm text-indigo-700">
                                <span class="font-medium">Consejo:</span> Para una mejor experiencia, recomendamos imágenes en proporción 1:1 para avatares y 16:9 para capturas de juegos.
                            </p>
                        </div>
                    </div>

                    <!-- Problema 4 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">La aplicación móvil se cierra inesperadamente</h3>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600 mb-2">Si la app de GameShelf se cierra de repente:</p>
                            <ol class="list-decimal pl-5 space-y-2 text-sm text-gray-600">
                                <li>Actualiza la aplicación a la última versión</li>
                                <li>Reinicia tu dispositivo</li>
                                <li>Libera espacio de almacenamiento en tu dispositivo</li>
                                <li>Desinstala y vuelve a instalar la aplicación</li>
                            </ol>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg">
                            <p class="text-sm text-indigo-700">
                                <span class="font-medium">Nota:</span> Si sigues experimentando cierres, envíanos un informe incluyendo el modelo de tu dispositivo y sistema operativo para que podamos investigar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actualizaciones y mantenimiento -->
            <div class="mt-12 bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Estado del servicio y mantenimiento planificado</h2>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <div class="h-3 w-3 rounded-full bg-green-500 mr-2"></div>
                        <p class="text-sm font-medium text-gray-900">Todos los sistemas funcionan correctamente</p>
                    </div>
                    <p class="text-sm text-gray-600">Última comprobación: 26 de abril de 2025, 10:45 CEST</p>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Próximos mantenimientos</h3>
                    <div class="space-y-4">
                        <div class="bg-amber-50 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm font-medium text-amber-800">Mantenimiento programado</p>
                                    <p class="text-xs text-amber-700 mt-1">28 de abril, 03:00 - 05:00 CEST</p>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-amber-100 text-amber-800">Próximo</span>
                            </div>
                            <p class="text-sm text-amber-700 mt-2">
                                La plataforma estará en modo de solo lectura durante la actualización de la base de datos. Las colecciones y perfiles serán accesibles, pero no se podrán realizar cambios durante este período.
                            </p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Actualización de la API</p>
                                    <p class="text-xs text-gray-600 mt-1">15 de mayo, 04:00 - 06:00 CEST</p>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-200 text-gray-800">Planificado</span>
                            </div>
                            <p class="text-sm text-gray-600 mt-2">
                                Implementación de nuevas funciones para desarrolladores. Esta actualización no afectará al uso normal de la plataforma para la mayoría de los usuarios.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <a href="/estado" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        Ver historial completo de incidencias <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <!-- Comunidad de ayuda -->
            <div class="mt-12 mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Comunidad de ayuda</h2>
                <div class="bg-indigo-50 rounded-xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Únete a nuestra comunidad de jugadores</h3>
                            <p class="text-gray-600 mb-6">
                                Además de nuestro soporte oficial, contamos con una activa comunidad de jugadores dispuestos a ayudarte. Comparte tus experiencias, resuelve dudas y forma parte de discusiones sobre tus juegos favoritos.
                            </p>
                            <div class="space-y-4">
                                <a href="/foro" class="flex items-center text-indigo-600 hover:text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    Foros de GameShelf
                                </a>
                                <a href="https://discord.gg/gameshelf" class="flex items-center text-indigo-600 hover:text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                    Servidor de Discord
                                </a>
                                <a href="https://reddit.com/r/gameshelf" class="flex items-center text-indigo-600 hover:text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h.5A2.5 2.5 0 0020.5 5.5v-.565M19 3a2 2 0 00-2-2H7a2 2 0 00-2 2m14 0v.5a2.5 2.5 0 01-2.5 2.5H4.5A2.5 2.5 0 012 3.5V3z" />
                                    </svg>
                                    Subreddit oficial
                                </a>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Preguntas recientes de la comunidad</h3>
                            <div class="space-y-4">
                                <div class="border-b border-gray-100 pb-3">
                                    <h4 class="text-sm font-medium text-gray-900 mb-1">¿Cómo puedo sincronizar mi cuenta con Steam?</h4>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs text-gray-500">Respondida • 12 respuestas</span>
                                        <a href="#" class="text-xs text-indigo-600 hover:text-indigo-500">Ver</a>
                                    </div>
                                </div>
                                <div class="border-b border-gray-100 pb-3">
                                    <h4 class="text-sm font-medium text-gray-900 mb-1">¿Es posible exportar mi colección a Excel?</h4>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs text-gray-500">Respondida • 8 respuestas</span>
                                        <a href="#" class="text-xs text-indigo-600 hover:text-indigo-500">Ver</a>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 mb-1">¿Cómo se calculan las puntuaciones medias?</h4>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs text-gray-500">Respondida • 15 respuestas</span>
                                        <a href="#" class="text-xs text-indigo-600 hover:text-indigo-500">Ver</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="/foro" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    Ver todas las preguntas <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4 text-center">¿Te ha resultado útil esta página?</h2>
                <p class="text-gray-600 text-center mb-6">Ayúdanos a mejorar nuestro centro de soporte con tus comentarios</p>
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center justify-center space-x-2 bg-green-100 hover:bg-green-200 text-green-800 font-medium py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                        <span>Sí, me ha ayudado</span>
                    </button>
                    <button class="flex items-center justify-center space-x-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2" />
                        </svg>
                        <span>No, necesito más ayuda</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>