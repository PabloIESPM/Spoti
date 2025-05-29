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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">SALA DE PRENSA</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Recursos, comunicados y todo lo que necesitas saber sobre GameShelf para los medios
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="#contacto-prensa" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Contactar con prensa
                    </a>
                    <a href="#kit-prensa" class="text-sm font-semibold leading-6 text-white">
                        Descargar kit de prensa <span aria-hidden="true">→</span>
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

            <!-- GameShelf en los medios -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">GameShelf en los medios</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Aparición 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="/api/placeholder/400/200" alt="GameShelf en IGN" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>15 de marzo, 2025</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">"GameShelf revoluciona cómo los jugadores catalogan sus experiencias"</h3>
                            <p class="text-gray-600 mb-4 text-sm">IGN España destaca nuestra plataforma como "el nuevo estándar para los amantes de los videojuegos que quieren llevar un registro detallado de sus aventuras virtuales".</p>
                            <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-500">
                                <span class="text-sm font-medium">Leer artículo completo</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Aparición 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="/api/placeholder/400/200" alt="GameShelf en 3DJuegos" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>2 de febrero, 2025</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">"Una comunidad en crecimiento: el éxito de GameShelf"</h3>
                            <p class="text-gray-600 mb-4 text-sm">3DJuegos analiza el rápido crecimiento de nuestra comunidad y cómo estamos transformando la forma en que los jugadores interactúan con sus colecciones digitales.</p>
                            <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-500">
                                <span class="text-sm font-medium">Leer artículo completo</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Aparición 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="/api/placeholder/400/200" alt="GameShelf en Eurogamer" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>10 de enero, 2025</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">"El 'Letterboxd' de los videojuegos ya está aquí"</h3>
                            <p class="text-gray-600 mb-4 text-sm">Eurogamer España destaca nuestra interfaz intuitiva y la capacidad de crear listas temáticas que "elevan la experiencia de catalogar videojuegos a un nuevo nivel".</p>
                            <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-500">
                                <span class="text-sm font-medium">Leer artículo completo</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comunicados de prensa -->
            <div class="mb-12" id="comunicados">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Comunicados de prensa</h2>
                    <a href="/prensa/archivo" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Ver archivo completo <span aria-hidden="true">→</span>
                    </a>
                </div>
                <div class="space-y-6">
                    <!-- Comunicado 1 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 mb-4">
                                    Lanzamiento
                                </span>
                                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2">GameShelf alcanza 500.000 usuarios registrados</h3>
                                <p class="text-sm text-gray-500 mb-4">Publicado el 5 de abril, 2025</p>
                            </div>
                            <div class="flex-shrink-0">
                                <button class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">
                                    Descargar PDF
                                </button>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">La plataforma social para amantes de los videojuegos celebra un hito importante en su crecimiento y anuncia nuevas funcionalidades para mejorar la experiencia de la comunidad.</p>
                        <a href="/prensa/comunicado-500k" class="inline-flex items-center text-indigo-600 hover:text-indigo-500">
                            <span class="text-sm font-medium">Leer comunicado completo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>

                    <!-- Comunicado 2 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 mb-4">
                                    Actualización
                                </span>
                                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2">Nueva función de estadísticas personalizadas y análisis de juego</h3>
                                <p class="text-sm text-gray-500 mb-4">Publicado el 20 de marzo, 2025</p>
                            </div>
                            <div class="flex-shrink-0">
                                <button class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">
                                    Descargar PDF
                                </button>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">GameShelf lanza una innovadora función de estadísticas que permite a los usuarios analizar sus hábitos de juego, géneros favoritos y tiempo dedicado a cada título de su biblioteca.</p>
                        <a href="/prensa/estadisticas-personalizadas" class="inline-flex items-center text-indigo-600 hover:text-indigo-500">
                            <span class="text-sm font-medium">Leer comunicado completo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>

                    <!-- Comunicado 3 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 mb-4">
                                    Colaboración
                                </span>
                                <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2">GameShelf se asocia con desarrolladores indie para mejorar la visibilidad de sus títulos</h3>
                                <p class="text-sm text-gray-500 mb-4">Publicado el 12 de febrero, 2025</p>
                            </div>
                            <div class="flex-shrink-0">
                                <button class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">
                                    Descargar PDF
                                </button>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Nueva iniciativa para destacar juegos independientes de calidad dentro de la plataforma, ofreciendo un espacio especial para que estudios emergentes muestren sus creaciones.</p>
                        <a href="/prensa/colaboracion-indie" class="inline-flex items-center text-indigo-600 hover:text-indigo-500">
                            <span class="text-sm font-medium">Leer comunicado completo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kit de prensa -->
            <div class="mb-12 bg-indigo-50 rounded-xl p-8" id="kit-prensa">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Kit de prensa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <p class="text-gray-700 mb-4">Descarga nuestro kit de prensa que incluye toda la información necesaria sobre GameShelf, incluyendo:</p>
                        <ul class="list-disc pl-5 mb-6 text-gray-600 space-y-2">
                            <li>Logos e imágenes en alta resolución</li>
                            <li>Información sobre la empresa y el equipo</li>
                            <li>Datos y estadísticas clave</li>
                            <li>Capturas de pantalla de la plataforma</li>
                            <li>Guía de marca y uso correcto de nuestros activos</li>
                        </ul>
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Descargar kit de prensa (ZIP, 25MB)
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-lg bg-white p-4 shadow">
                            <img src="/api/placeholder/180/120" alt="Logo GameShelf" class="mx-auto h-24 w-auto object-contain">
                            <p class="mt-2 text-xs text-center text-gray-500">Logo principal</p>
                        </div>
                        <div class="rounded-lg bg-white p-4 shadow">
                            <img src="/api/placeholder/180/120" alt="Logo GameShelf versión oscura" class="mx-auto h-24 w-auto object-contain">
                            <p class="mt-2 text-xs text-center text-gray-500">Logo versión oscura</p>
                        </div>
                        <div class="rounded-lg bg-white p-4 shadow">
                            <img src="/api/placeholder/180/120" alt="Isotipo GameShelf" class="mx-auto h-24 w-auto object-contain">
                            <p class="mt-2 text-xs text-center text-gray-500">Isotipo</p>
                        </div>
                        <div class="rounded-lg bg-white p-4 shadow">
                            <img src="/api/placeholder/180/120" alt="Capturas de pantalla" class="mx-auto h-24 w-auto object-contain">
                            <p class="mt-2 text-xs text-center text-gray-500">Capturas de pantalla</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Datos y estadísticas -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Datos y estadísticas</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">500K+</div>
                        <p class="text-gray-600">Usuarios registrados</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">15M+</div>
                        <p class="text-gray-600">Juegos catalogados</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">250K+</div>
                        <p class="text-gray-600">Reseñas publicadas</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">50K+</div>
                        <p class="text-gray-600">Listas creadas</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">120+</div>
                        <p class="text-gray-600">Países con usuarios activos</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6 text-center">
                        <div class="text-4xl font-bold text-indigo-600 mb-2">4.8/5</div>
                        <p class="text-gray-600">Valoración promedio en tiendas de apps</p>
                    </div>
                </div>
            </div>

            <!-- Contacto de prensa -->
            <div id="contacto-prensa" class="bg-indigo-50 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Contacto para prensa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <p class="text-gray-700 mb-4">Si eres periodista o representante de un medio y necesitas más información, entrevistas con nuestro equipo o material adicional, no dudes en contactarnos:</p>
                        <div class="bg-white rounded-lg p-6 shadow mt-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Departamento de Prensa</h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-gray-600">prensa@gameshelf.com</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="text-gray-600">+34 91 123 45 67</span>
                                </div>
                                <div class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-600">C/ Gran Vía 123, 4º<br>28013 Madrid, España</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form class="bg-white shadow-md rounded-lg p-6">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
                                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="media" class="block text-sm font-medium text-gray-700 mb-1">Medio que representas</label>
                                <input type="text" id="media" name="media" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                                <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- FAQ para prensa -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Preguntas frecuentes</h2>
                <div class="space-y-4">
                    <div class="bg-white shadow rounded-lg">
                        <button class="flex justify-between items-center w-full px-6 py-4 text-left">
                            <span class="text-lg font-medium text-gray-900">¿Cuándo se fundó GameShelf?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">GameShelf fue fundada en junio de 2024 por un grupo de apasionados desarrolladores y jugadores que buscaban crear una plataforma social dedicada específicamente a los videojuegos, con funcionalidades inspiradas en otros servicios populares de catalogación cultural como Letterboxd e IMDb.</p>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded-lg">
                        <button class="flex justify-between items-center w-full px-6 py-4 text-left">
                            <span class="text-lg font-medium text-gray-900">¿Qué diferencia a GameShelf de otras plataformas similares?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">GameShelf se distingue por su enfoque en la experiencia personal del jugador, permitiendo no solo catalogar juegos completados, sino también seguir el progreso, crear listas temáticas personalizadas, y conectar con una comunidad de jugadores con intereses similares. Nuestras funciones de análisis y estadísticas personalizadas proporcionan una visión única de los hábitos de juego de los usuarios.</p>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded-lg">
                        <button class="flex justify-between items-center w-full px-6 py-4 text-left">
                            <span class="text-lg font-medium text-gray-900">¿Es GameShelf gratuito?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">Sí, GameShelf ofrece un plan básico completamente gratuito que permite a los usuarios catalogar sus juegos, escribir reseñas y conectar con otros jugadores. También ofrecemos una suscripción Premium con funcionalidades adicionales como estadísticas avanzadas, personalización mejorada y la eliminación de publicidad.</p>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded-lg">
                        <button class="flex justify-between items-center w-full px-6 py-4 text-left">
                            <span class="text-lg font-medium text-gray-900">¿Cómo se financia GameShelf?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">GameShelf se financia a través de una combinación de suscripciones Premium, publicidad no intrusiva en la versión gratuita, y colaboraciones estratégicas con desarrolladores y editores de videojuegos para promocionar nuevos lanzamientos.</p>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded-lg">
                        <button class="flex justify-between items-center w-full px-6 py-4 text-left">
                            <span class="text-lg font-medium text-gray-900">¿Está disponible GameShelf en dispositivos móviles?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">Sí, GameShelf está disponible como aplicación móvil tanto para dispositivos iOS como Android, ofreciendo todas las funcionalidades de la versión web en una interfaz optimizada para dispositivos móviles. También contamos con una versión web responsive accesible desde cualquier navegador.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recursos multimedia para prensa -->
            <div class="mt-12 mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Recursos multimedia</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Captura de pantalla de GameShelf" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-1">Interfaz principal</h3>
                            <p class="text-xs text-gray-500 mb-3">Vista de la página de inicio (1920x1080)</p>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Descargar imagen
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Captura de pantalla de GameShelf móvil" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-1">Versión móvil</h3>
                            <p class="text-xs text-gray-500 mb-3">App para iOS y Android (1080x1920)</p>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Descargar imagen
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Equipo de GameShelf" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-1">Equipo fundador</h3>
                            <p class="text-xs text-gray-500 mb-3">Foto del equipo fundador (2500x1667)</p>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Descargar imagen
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Logo de GameShelf" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-1">Logotipo oficial</h3>
                            <p class="text-xs text-gray-500 mb-3">Formato PNG transparente (2000x500)</p>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Descargar imagen
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Oficinas de GameShelf" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-1">Oficinas principales</h3>
                            <p class="text-xs text-gray-500 mb-3">Madrid, España (3000x2000)</p>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Descargar imagen
                            </button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="w-full h-48 bg-gray-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-900 mb-1">Video presentación</h3>
                            <p class="text-xs text-gray-500 mb-3">Tour por las funcionalidades (MP4, 1080p)</p>
                            <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Descargar video
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enlaces a redes sociales -->
            <div class="bg-indigo-50 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Síguenos en redes sociales</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="#" class="flex items-center justify-center bg-white p-4 rounded-lg shadow hover:shadow-md transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">Facebook</span>
                    </a>
                    <a href="#" class="flex items-center justify-center bg-white p-4 rounded-lg shadow hover:shadow-md transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">Twitter</span>
                    </a>
                    <a href="#" class="flex items-center justify-center bg-white p-4 rounded-lg shadow hover:shadow-md transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">Instagram</span>
                    </a>
                    <a href="#" class="flex items-center justify-center bg-white p-4 rounded-lg shadow hover:shadow-md transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        <span class="text-gray-700 font-medium">YouTube</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
