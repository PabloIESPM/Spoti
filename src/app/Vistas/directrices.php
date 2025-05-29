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
            <!-- Cabecera de la página -->
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-12 text-center shadow-2xl sm:px-16 mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">DIRECTRICES COMUNITARIAS</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Construyamos juntos una comunidad respetuosa, inclusiva y apasionada por los videojuegos
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

            <!-- Introducción -->
            <div class="mb-12 bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Nuestra visión comunitaria</h2>
                <p class="text-gray-700 mb-4">
                    En GameShelf queremos crear un espacio donde todos los amantes de los videojuegos puedan compartir sus experiencias, opiniones y pasión de manera respetuosa y constructiva. Estas directrices han sido diseñadas para asegurar que nuestra comunidad siga siendo un lugar acogedor para todos, independientemente de su nivel de experiencia, plataforma preferida o gustos.
                </p>
                <p class="text-gray-700">
                    Al registrarte y participar en GameShelf, aceptas cumplir con estas directrices comunitarias. El incumplimiento de estas normas puede resultar en advertencias, restricciones temporales o, en casos graves, la suspensión permanente de tu cuenta.
                </p>
            </div>

            <!-- Principios fundamentales -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Principios fundamentales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Principio 1 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Respeto mutuo</h3>
                        </div>
                        <p class="text-gray-700">
                            Trata a todos los miembros con cortesía y consideración. Valoramos la diversidad de opiniones, experiencias y perspectivas. Las críticas deben ser constructivas y enfocadas en los juegos, no en las personas.
                        </p>
                    </div>

                    <!-- Principio 2 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Honestidad e integridad</h3>
                        </div>
                        <p class="text-gray-700">
                            Comparte opiniones sinceras y experiencias auténticas. No intentes manipular valoraciones o crear múltiples cuentas para influir en la percepción de un juego.
                        </p>
                    </div>

                    <!-- Principio 3 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Contenido apropiado</h3>
                        </div>
                        <p class="text-gray-700">
                            Mantén todas tus publicaciones y comentarios libres de contenido ofensivo, discriminatorio o inapropiado. Recuerda que GameShelf es un espacio donde personas de todas las edades y orígenes se reúnen para hablar de videojuegos.
                        </p>
                    </div>

                    <!-- Principio 4 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center mb-4">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Contribuciones de calidad</h3>
                        </div>
                        <p class="text-gray-700">
                            Esfuérzate por aportar contenido relevante y bien elaborado. Ya sea una reseña detallada, una lista temática o un comentario breve, busca siempre añadir valor a la conversación.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Normas específicas -->
            <div class="mb-12 bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Normas específicas</h2>

                <!-- Reseñas y valoraciones -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Reseñas y valoraciones</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-indigo-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Comparte opiniones honestas basadas en tu experiencia real con el juego.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-indigo-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Usa etiquetas de spoiler cuando reveles elementos importantes de la trama o giros narrativos.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-indigo-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Explica los motivos de tu valoración, no te limites a dar una puntuación sin contexto.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">No publiques reseñas malintencionadas con el único propósito de dañar la reputación de un juego.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">No copies reseñas de otros usuarios o sitios web sin atribución adecuada.</span>
                        </li>
                    </ul>
                </div>

                <!-- Comentarios e interacciones -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Comentarios e interacciones</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-indigo-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Mantén las discusiones centradas en los videojuegos y temas relacionados.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-indigo-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Respeta opiniones diferentes a la tuya y argumenta de manera constructiva.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">No insultes, acoses o amenaces a otros usuarios bajo ninguna circunstancia.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">No participes en "console wars" o discusiones tóxicas sobre qué plataforma es mejor.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">No publiques spam o contenido promocional no autorizado.</span>
                        </li>
                    </ul>
                </div>

                <!-- Contenido prohibido -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Contenido prohibido</h3>
                    <p class="text-gray-700 mb-4">GameShelf no permite bajo ninguna circunstancia:</p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Contenido que promueva la discriminación, el odio o la violencia contra cualquier grupo o individuo.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Material pornográfico o sexualmente explícito.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Contenido que infrinja derechos de autor o propiedad intelectual.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Información personal de otros usuarios sin su consentimiento explícito (doxxing).</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Enlaces a software ilegal, piratería o contenido que viole los términos de servicio de los desarrolladores.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-5 w-5 text-red-600 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="ml-2">Cualquier forma de estafa, fraude o actividad ilegal.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Moderación y sanciones -->
            <div class="mb-12 bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Moderación y sanciones</h2>
                <p class="text-gray-700 mb-4">
                    El equipo de moderación de GameShelf trabaja para mantener un entorno seguro y agradable para todos. Cuando se detecta una infracción de las directrices comunitarias, podemos tomar las siguientes medidas:
                </p>
                <div class="space-y-4">
                    <div class="p-4 border-l-4 border-yellow-400 bg-yellow-50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">Advertencia</h3>
                                <p class="text-sm text-yellow-700">
                                    Para infracciones leves o primeras faltas, enviaremos una advertencia explicando qué norma se ha infringido y cómo evitar problemas en el futuro.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-l-4 border-orange-400 bg-orange-50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-orange-800">Restricción temporal</h3>
                                <p class="text-sm text-orange-700">
                                    Para infracciones repetidas o más graves, podemos restringir temporalmente ciertas funcionalidades de la cuenta (como publicar comentarios o reseñas) durante un período determinado.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-l-4 border-red-400 bg-red-50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Suspensión permanente</h3>
                                <p class="text-sm text-red-700">
                                    Para las infracciones más graves o patrones persistentes de comportamiento inapropiado, podemos suspender permanentemente una cuenta. Esta medida se aplica en casos de acoso, amenazas, contenido ilegal o actividades que ponen en riesgo a la comunidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="text-xl font-semibold text-gray-900 mt-6 mb-4">Proceso de apelaciones</h3>
                <p class="text-gray-700 mb-4">
                    Si consideras que una sanción ha sido aplicada injustamente, puedes apelar la decisión contactando a nuestro equipo de moderación a través del formulario de contacto. Todas las apelaciones serán revisadas cuidadosamente, pero la decisión final queda a discreción del equipo de GameShelf.
                </p>
            </div>

            <!-- Reportar contenido inapropiado -->
            <div class="mb-12">
                <div class="bg-indigo-50 rounded-xl p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Reportar contenido inapropiado</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <p class="text-gray-700 mb-4">
                                Nuestra comunidad es más fuerte cuando todos colaboramos para mantenerla segura. Si encuentras contenido que infringe nuestras directrices, por favor repórtalo para que podamos revisarlo.
                            </p>
                            <p class="text-gray-700 mb-4">
                                Todos los reportes son confidenciales y se procesan lo más rápido posible. Recuerda proporcionar detalles específicos sobre la infracción para ayudarnos a tomar la mejor decisión.
                            </p>
                            <a href="/contacto" class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-2">
                                Contactar con el equipo de moderación
                            </a>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Cómo reportar contenido</h3>
                            <ol class="space-y-4 text-gray-700">
                                <li class="flex">
                                    <span class="h-6 w-6 rounded-full bg-indigo-100 text-indigo-800 text-sm font-medium flex items-center justify-center mr-3 flex-shrink-0">1</span>
                                    <span>Localiza el botón de "Reportar" junto al contenido (comentario, reseña, lista, perfil).</span>
                                </li>
                                <li class="flex">
                                    <span class="h-6 w-6 rounded-full bg-indigo-100 text-indigo-800 text-sm font-medium flex items-center justify-center mr-3 flex-shrink-0">2</span>
                                    <span>Selecciona el motivo del reporte en el menú desplegable.</span>
                                </li>
                                <li class="flex">
                                    <span class="h-6 w-6 rounded-full bg-indigo-100 text-indigo-800 text-sm font-medium flex items-center justify-center mr-3 flex-shrink-0">3</span>
                                    <span>Proporciona detalles adicionales si es necesario en el campo de texto.</span>
                                </li>
                                <li class="flex">
                                    <span class="h-6 w-6 rounded-full bg-indigo-100 text-indigo-800 text-sm font-medium flex items-center justify-center mr-3 flex-shrink-0">4</span>
                                    <span>Envía el reporte y nuestro equipo lo revisará lo antes posible.</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs sobre las directrices -->
            <div class="mb-12 bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Preguntas frecuentes</h2>

                <div class="space-y-6">
                    <!-- Pregunta 1 -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo publicar capturas de pantalla o videos de juegos?</h3>
                        <p class="text-gray-700">
                            Sí, siempre y cuando no contengan spoilers importantes sin la etiqueta correspondiente. También es importante respetar los derechos de autor y no publicar material de juegos que aún no han sido lanzados oficialmente o que están bajo acuerdos de confidencialidad (NDAs).
                        </p>
                    </div>

                    <!-- Pregunta 2 -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo promocionar mi canal de streaming o mi contenido sobre videojuegos?</h3>
                        <p class="text-gray-700">
                            La autopromoción está permitida con moderación y en contextos relevantes. Por ejemplo, puedes compartir tu canal al hablar sobre un juego específico que has cubierto, pero no debes hacer spam en múltiples discusiones o reseñas con enlaces a tu contenido.
                        </p>
                    </div>

                    <!-- Pregunta 3 -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué ocurre si alguien me está acosando en GameShelf?</h3>
                        <p class="text-gray-700">
                            Si experimentas acoso, bloquea al usuario inmediatamente y reporta el comportamiento a nuestro equipo de moderación con todos los detalles posibles. Tomamos muy en serio estas situaciones y actuaremos rápidamente para proteger a nuestra comunidad.
                        </p>
                    </div>

                    <!-- Pregunta 4 -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo tener múltiples cuentas?</h3>
                        <p class="text-gray-700">
                            No recomendamos tener múltiples cuentas, especialmente si se utilizan para eludir restricciones, manipular valoraciones o acosar a otros usuarios. Esto puede resultar en la suspensión de todas las cuentas asociadas.
                        </p>
                    </div>

                    <!-- Pregunta 5 -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Las directrices se aplican también a los mensajes privados?</h3>
                        <p class="text-gray-700">
                            Sí, nuestras directrices comunitarias se aplican a todas las interacciones dentro de GameShelf, incluidos los mensajes privados. El acoso, las amenazas o el comportamiento inapropiado en mensajes privados puede ser reportado y estará sujeto a las mismas sanciones.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Actualizaciones de las directrices -->
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Actualizaciones de las directrices</h2>
                <p class="text-gray-700 mb-4">
                    Estas directrices comunitarias pueden actualizarse periódicamente para reflejar nuevas situaciones o mejorar la experiencia de nuestra comunidad. Los cambios significativos serán notificados a través de anuncios en la plataforma.
                </p>
                <p class="text-gray-700 mb-4">
                    Te recomendamos revisar estas directrices regularmente para estar al tanto de cualquier actualización. Tu participación continua en GameShelf después de cualquier modificación constituye la aceptación de las directrices actualizadas.
                </p>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-sm text-gray-500">Última actualización: Abril 2025</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
