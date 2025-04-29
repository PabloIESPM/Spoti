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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Accesibilidad</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Estamos comprometidos con hacer que GameShelf sea accesible para todos los jugadores
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

            <!-- Introducción a la accesibilidad -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Nuestro compromiso con la accesibilidad</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 mb-4">
                        En GameShelf creemos que los videojuegos son para todos, y lo mismo aplica a nuestra plataforma. Nos esforzamos constantemente para asegurar que nuestra web sea accesible para personas con diversas discapacidades, incluyendo discapacidades visuales, auditivas, físicas, del habla, cognitivas, del lenguaje, de aprendizaje y neurológicas.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Nuestro objetivo es cumplir con las Pautas de Accesibilidad para el Contenido Web (WCAG) 2.1 de nivel AA y continuamos trabajando para mejorar la experiencia de usuario para todos.
                    </p>
                    <p class="text-gray-700">
                        Esta página detalla las características de accesibilidad disponibles en GameShelf, así como nuestros planes futuros para mejorar.
                    </p>
                </div>
            </div>

            <!-- Características actuales de accesibilidad -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Características de accesibilidad</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Navegación -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Navegación</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Estructura de encabezados consistente y correctamente anidada
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Navegación por teclado optimizada
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Enlaces y botones claramente identificables
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Orden de enfoque lógico y predecible
                            </li>
                        </ul>
                    </div>

                    <!-- Visualización -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Visualización</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Alto contraste entre texto y fondo
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Tamaño de texto ajustable
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Diseño responsive que se adapta a diferentes dispositivos
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Opción de modo oscuro para reducir la fatiga visual
                            </li>
                        </ul>
                    </div>

                    <!-- Compatibilidad con tecnología asistencial -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Tecnología asistencial</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Compatibilidad con lectores de pantalla
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Textos alternativos para imágenes
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Etiquetas ARIA donde son necesarias
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Formularios con etiquetas claras
                            </li>
                        </ul>
                    </div>

                    <!-- Contenido -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Contenido</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Lenguaje claro y sencillo
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Subtítulos en contenido multimedia
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Transcripciones para contenido de audio
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Separación de información por secciones lógicas
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Información sobre accesibilidad en videojuegos -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Accesibilidad en videojuegos</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 mb-4">
                        En GameShelf no solo nos preocupamos por la accesibilidad de nuestra plataforma, sino también por la accesibilidad en la industria de los videojuegos. Por eso, para cada juego en nuestra base de datos, recopilamos información sobre sus características de accesibilidad.
                    </p>

                    <h3 class="text-lg font-medium text-gray-900 mb-3">Categorías de accesibilidad que evaluamos:</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="font-medium text-indigo-800 mb-2">Visual</h4>
                            <ul class="space-y-1 text-gray-700 text-sm">
                                <li>• Opciones de tamaño de texto</li>
                                <li>• Configuraciones de contraste</li>
                                <li>• Modos daltónicos</li>
                                <li>• Asistencia visual para pistas y objetivos</li>
                            </ul>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="font-medium text-indigo-800 mb-2">Auditiva</h4>
                            <ul class="space-y-1 text-gray-700 text-sm">
                                <li>• Subtítulos completos</li>
                                <li>• Subtítulos para efectos sonoros</li>
                                <li>• Balance de volumen ajustable</li>
                                <li>• Sistemas de alertas visuales</li>
                            </ul>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="font-medium text-indigo-800 mb-2">Motor/Físico</h4>
                            <ul class="space-y-1 text-gray-700 text-sm">
                                <li>• Remapeo de controles</li>
                                <li>• Compatibilidad con dispositivos adaptativos</li>
                                <li>• Simplificación de comandos</li>
                                <li>• Opciones de asistencia para QTEs</li>
                            </ul>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="font-medium text-indigo-800 mb-2">Cognitivo</h4>
                            <ul class="space-y-1 text-gray-700 text-sm">
                                <li>• Nivel de dificultad ajustable</li>
                                <li>• Tutoriales interactivos</li>
                                <li>• Asistencia para objetivos y navegación</li>
                                <li>• Opciones para reducir estímulos visuales</li>
                            </ul>
                        </div>
                    </div>

                    <p class="text-gray-700">
                        En cada ficha de juego, podrás encontrar detalles sobre estas características, lo que te permitirá conocer qué juegos son más accesibles según tus necesidades específicas. Además, nuestra comunidad puede contribuir añadiendo información más detallada sobre la accesibilidad de diferentes títulos.
                    </p>
                </div>
            </div>

            <!-- Ayuda y soporte para accesibilidad -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Ayuda y soporte</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 mb-6">
                        Estamos comprometidos con mejorar continuamente la accesibilidad de GameShelf. Si encuentras algún problema de accesibilidad o tienes sugerencias para mejorarla, por favor contáctanos.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="border border-indigo-200 rounded-lg p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Reportar un problema</h3>
                            <p class="text-gray-700 mb-4">
                                ¿Has encontrado un problema de accesibilidad en nuestra plataforma? Háznoslo saber para poder solucionarlo.
                            </p>
                            <a href="/contacto?asunto=problema-accesibilidad" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                Reportar problema
                            </a>
                        </div>

                        <div class="border border-indigo-200 rounded-lg p-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Sugerir mejora</h3>
                            <p class="text-gray-700 mb-4">
                                ¿Tienes ideas sobre cómo podemos mejorar la accesibilidad? Nos encantaría escuchar tus sugerencias.
                            </p>
                            <a href="/contacto?asunto=sugerencia-accesibilidad" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                                Enviar sugerencia
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recursos adicionales -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Recursos adicionales sobre accesibilidad en videojuegos</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 mb-6">
                        Aquí tienes algunos recursos útiles si quieres aprender más sobre accesibilidad en videojuegos:
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="#" class="block bg-indigo-50 p-4 rounded-lg hover:bg-indigo-100 transition-colors">
                            <h3 class="text-lg font-medium text-indigo-800 mb-2">Game Accessibility Guidelines</h3>
                            <p class="text-gray-700 text-sm">Guía exhaustiva para desarrolladores sobre cómo hacer juegos más accesibles.</p>
                        </a>

                        <a href="#" class="block bg-indigo-50 p-4 rounded-lg hover:bg-indigo-100 transition-colors">
                            <h3 class="text-lg font-medium text-indigo-800 mb-2">AbleGamers</h3>
                            <p class="text-gray-700 text-sm">Organización sin ánimo de lucro dedicada a mejorar la accesibilidad en videojuegos.</p>
                        </a>

                        <a href="#" class="block bg-indigo-50 p-4 rounded-lg hover:bg-indigo-100 transition-colors">
                            <h3 class="text-lg font-medium text-indigo-800 mb-2">Can I Play That?</h3>
                            <p class="text-gray-700 text-sm">Reseñas de videojuegos enfocadas en características de accesibilidad.</p>
                        </a>
                    </div>

                    <div class="mt-6 text-center">
                        <a href="/blog/accesibilidad" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                            Ver todos nuestros artículos sobre accesibilidad <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
