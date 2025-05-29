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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">GUÍA DE USUARIO</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Todo lo que necesitas saber para aprovechar al máximo tu experiencia en GameShelf
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="#primeros-pasos" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Primeros pasos
                    </a>
                    <a href="#funciones-avanzadas" class="text-sm font-semibold leading-6 text-white">
                        Funciones avanzadas <span aria-hidden="true">→</span>
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

            <!-- Índice de contenidos -->
            <div class="mb-12 bg-indigo-50 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Índice de contenidos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="#primeros-pasos" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">1</span>
                        </div>
                        <span class="text-gray-900 font-medium">Primeros pasos</span>
                    </a>
                    <a href="#perfil-usuario" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">2</span>
                        </div>
                        <span class="text-gray-900 font-medium">Tu perfil de usuario</span>
                    </a>
                    <a href="#coleccion-juegos" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">3</span>
                        </div>
                        <span class="text-gray-900 font-medium">Gestionar tu colección</span>
                    </a>
                    <a href="#valoraciones-resenas" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">4</span>
                        </div>
                        <span class="text-gray-900 font-medium">Valoraciones y reseñas</span>
                    </a>
                    <a href="#listas-personalizadas" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">5</span>
                        </div>
                        <span class="text-gray-900 font-medium">Listas personalizadas</span>
                    </a>
                    <a href="#comunidad" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">6</span>
                        </div>
                        <span class="text-gray-900 font-medium">Comunidad y social</span>
                    </a>
                    <a href="#funciones-avanzadas" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">7</span>
                        </div>
                        <span class="text-gray-900 font-medium">Funciones avanzadas</span>
                    </a>
                    <a href="#preguntas-frecuentes" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">8</span>
                        </div>
                        <span class="text-gray-900 font-medium">Preguntas frecuentes</span>
                    </a>
                    <a href="#soporte" class="flex items-center p-4 bg-white rounded-lg hover:bg-gray-50">
                        <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                            <span class="text-sm font-bold">9</span>
                        </div>
                        <span class="text-gray-900 font-medium">Soporte técnico</span>
                    </a>
                </div>
            </div>

            <!-- Primeros pasos -->
            <div id="primeros-pasos" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">1. Primeros pasos</h2>
                </div>

                <div class="space-y-8">
                    <!-- Registro -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Cómo registrarte</h3>
                        <p class="text-sm text-gray-600 mb-6">Crear una cuenta en GameShelf es rápido y sencillo. Sigue estos pasos para comenzar:</p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                    <span class="font-bold">1</span>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Accede a la página de registro</h4>
                                <p class="text-xs text-gray-600">Haz clic en "Regístrate gratis" en la página de inicio o en el botón de registro en la esquina superior derecha.</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                    <span class="font-bold">2</span>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Completa el formulario</h4>
                                <p class="text-xs text-gray-600">Introduce tu nombre de usuario, correo electrónico y contraseña. También puedes registrarte con tu cuenta de Google o Apple.</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                    <span class="font-bold">3</span>
                                </div>
                                <h4 class="text-sm font-medium text-gray-900 mb-2">Verifica tu cuenta</h4>
                                <p class="text-xs text-gray-600">Recibirás un correo de confirmación. Haz clic en el enlace para verificar tu cuenta y comenzar a usar GameShelf.</p>
                            </div>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-indigo-800">Consejo:</h4>
                                    <p class="text-xs text-indigo-700 mt-1">Elige un nombre de usuario que represente tu identidad como jugador. Este nombre será visible para otros usuarios y no podrá cambiarse más adelante.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Explorar la interfaz -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Explorar la interfaz</h3>
                        <p class="text-sm text-gray-600 mb-6">Familiarízate con las principales secciones de GameShelf:</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Inicio</h4>
                                </div>
                                <p class="text-xs text-gray-600">La página principal muestra juegos destacados, actividad reciente de la comunidad, listas populares y próximos lanzamientos.</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Explorar</h4>
                                </div>
                                <p class="text-xs text-gray-600">Descubre nuevos juegos, filtrados por plataforma, género, año de lanzamiento y más criterios personalizables.</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd" />
                                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Mi colección</h4>
                                </div>
                                <p class="text-xs text-gray-600">Accede a todos los juegos que has añadido a tu colección, organizados por estado (jugando, completados, pendientes, abandonados).</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Comunidad</h4>
                                </div>
                                <p class="text-xs text-gray-600">Encuentra otros usuarios, sigue su actividad y descubre recomendaciones basadas en gustos similares.</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Perfil</h4>
                                </div>
                                <p class="text-xs text-gray-600">Tu espacio personal donde puedes ver y editar tu información, reseñas, listas y estadísticas de juego.</p>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Listas</h4>
                                </div>
                                <p class="text-xs text-gray-600">Crea y descubre colecciones temáticas de juegos organizadas por criterios personalizados.</p>
                            </div>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-indigo-800">Navegación en móviles:</h4>
                                    <p class="text-xs text-indigo-700 mt-1">En dispositivos móviles, encontrarás el menú principal en el icono de hamburguesa ubicado en la esquina superior derecha de la pantalla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tu perfil de usuario -->
            <div id="perfil-usuario" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">2. Tu perfil de usuario</h2>
                </div>

                <div class="space-y-8">
                    <!-- Personalización del perfil -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Personalizar tu perfil</h3>
                        <p class="text-sm text-gray-600 mb-6">Haz que tu perfil refleje tu personalidad como jugador:</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Información básica</h4>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Foto de perfil: Sube una imagen que te represente (máximo 2MB)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Nombre de usuario: Visible para toda la comunidad (no se puede cambiar)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Biografía: Cuéntale a la comunidad sobre ti (máximo 160 caracteres)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Ubicación: País o ciudad donde juegas (opcional)</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Preferencias de juego</h4>
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Plataformas: Selecciona las consolas y dispositivos que utilizas</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Géneros favoritos: Indica los tipos de juegos que más disfrutas</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>IDs de jugador: Añade tus nombres de usuario en otras plataformas (PSN, Xbox, Nintendo, Steam, etc.)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Redes sociales: Conecta tus cuentas para compartir actividad (Twitter, Instagram, Discord)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Cómo editar tu perfil:</h4>
                            <ol class="list-decimal list-inside space-y-2 text-sm text-gray-600 pl-4">
                                <li>Haz clic en tu foto de perfil en la esquina superior derecha</li>
                                <li>Selecciona "Perfil" en el menú desplegable</li>
                                <li>Haz clic en el botón "Editar perfil"</li>
                                <li>Realiza los cambios deseados y guarda</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Privacidad y configuración -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Privacidad y configuración</h3>
                        <p class="text-sm text-gray-600 mb-6">Controla quién puede ver tu actividad y cómo interactúas con GameShelf:</p>

                        <div class="space-y-6">
                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Opciones de privacidad</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Perfil público</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Mostrar colección</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Mostrar actividad reciente</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Permitir comentarios</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Preferencias de notificaciones</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Notificaciones por correo</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Notificaciones en la web</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Alertas de lanzamientos</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-indigo-600 transform translate-x-4"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <span class="text-xs text-gray-700">Newsletter semanal</span>
                                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                            <span class="block overflow-hidden h-6 rounded-full bg-gray-300">
                                                <span class="block h-6 w-6 rounded-full bg-gray-600 transform"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gestionar tu colección -->
            <div id="coleccion-juegos" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">3. Gestionar tu colección</h2>
                </div>

                <div class="space-y-8">
                    <!-- Añadir juegos -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Añadir juegos a tu colección</h3>
                        <p class="text-sm text-gray-600 mb-6">Construye tu biblioteca personal de videojuegos:</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Métodos para añadir juegos</h4>
                                <ul class="space-y-4 text-sm text-gray-600">
                                    <li class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">1</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-800">Desde la página del juego</p>
                                            <p class="text-xs mt-1">Haz clic en el botón "+" o "Añadir a mi colección" en cualquier página de detalles del juego.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">2</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-800">Búsqueda rápida</p>
                                            <p class="text-xs mt-1">Utiliza la barra de búsqueda para encontrar un juego específico y añadirlo directamente desde los resultados.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">3</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-800">Importación masiva</p>
                                            <p class="text-xs mt-1">Importa tu biblioteca desde otras plataformas como Steam, PlayStation o Xbox (disponible en la sección "Configuración").</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Estados de juego</h4>
                                <div class="space-y-3">
                                    <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                        <div class="h-4 w-4 rounded-full bg-blue-500 mr-2"></div>
                                        <span class="text-xs font-medium text-blue-900">Jugando</span>
                                        <span class="text-xs text-blue-700 ml-auto">Juegos que estás jugando actualmente</span>
                                    </div>
                                    <div class="flex items-center p-2 bg-green-50 rounded-lg">
                                        <div class="h-4 w-4 rounded-full bg-green-500 mr-2"></div>
                                        <span class="text-xs font-medium text-green-900">Completado</span>
                                        <span class="text-xs text-green-700 ml-auto">Juegos que has terminado</span>
                                    </div>
                                    <div class="flex items-center p-2 bg-yellow-50 rounded-lg">
                                        <div class="h-4 w-4 rounded-full bg-yellow-500 mr-2"></div>
                                        <span class="text-xs font-medium text-yellow-900">Pendiente</span>
                                        <span class="text-xs text-yellow-700 ml-auto">Juegos que quieres jugar en el futuro</span>
                                    </div>
                                    <div class="flex items-center p-2 bg-red-50 rounded-lg">
                                        <div class="h-4 w-4 rounded-full bg-red-500 mr-2"></div>
                                        <span class="text-xs font-medium text-red-900">Abandonado</span>
                                        <span class="text-xs text-red-700 ml-auto">Juegos que dejaste sin terminar</span>
                                    </div>
                                    <div class="flex items-center p-2 bg-purple-50 rounded-lg">
                                        <div class="h-4 w-4 rounded-full bg-purple-500 mr-2"></div>
                                        <span class="text-xs font-medium text-purple-900">Rejugando</span>
                                        <span class="text-xs text-purple-700 ml-auto">Juegos que ya completaste y estás volviendo a jugar</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">Información adicional al añadir un juego:</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 text-xs text-gray-600">
                                <div class="bg-white p-2 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Plataforma</span>
                                    <span>Selecciona dónde juegas</span>
                                </div>
                                <div class="bg-white p-2 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Fecha de inicio</span>
                                    <span>Cuándo empezaste a jugar</span>
                                </div>
                                <div class="bg-white p-2 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Fecha de finalización</span>
                                    <span>Cuándo terminaste el juego</span>
                                </div>
                                <div class="bg-white p-2 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Horas jugadas</span>
                                    <span>Tiempo total invertido</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Organizar y filtrar -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Organizar y filtrar tu colección</h3>
                        <p class="text-sm text-gray-600 mb-6">Mantén tu biblioteca ordenada y fácil de navegar:</p>

                        <div class="space-y-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Opciones de visualización</h4>
                                <div class="flex flex-wrap gap-3">
                                    <div class="flex items-center p-2 bg-white rounded border border-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                        <span class="text-xs">Cuadrícula</span>
                                    </div>
                                    <div class="flex items-center p-2 bg-white rounded border border-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-xs">Lista</span>
                                    </div>
                                    <div class="flex items-center p-2 bg-white rounded border border-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
                                        </svg>
                                        <span class="text-xs">Estadísticas</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Filtros disponibles</h4>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
                                    <div class="space-y-2">
                                        <p class="font-medium text-gray-800">Por estado</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full">Jugando</span>
                                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full">Completado</span>
                                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full">Pendiente</span>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <p class="font-medium text-gray-800">Por plataforma</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full">PC</span>
                                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full">PS5</span>
                                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full">Switch</span>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <p class="font-medium text-gray-800">Por género</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full">RPG</span>
                                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full">Acción</span>
                                            <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full">Aventura</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Opciones de ordenación</h4>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <div class="p-2 bg-white rounded border border-gray-200 text-xs text-center">
                                        <span>Fecha añadido</span>
                                    </div>
                                    <div class="p-2 bg-white rounded border border-gray-200 text-xs text-center">
                                        <span>Valoración</span>
                                    </div>
                                    <div class="p-2 bg-white rounded border border-gray-200 text-xs text-center">
                                        <span>Título</span>
                                    </div>
                                    <div class="p-2 bg-white rounded border border-gray-200 text-xs text-center">
                                        <span>Año lanzamiento</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Valoraciones y reseñas -->
            <div id="valoraciones-resenas" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">4. Valoraciones y reseñas</h2>
                </div>

                <div class="space-y-8">
                    <!-- Cómo valorar juegos -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Cómo valorar y reseñar juegos</h3>
                        <p class="text-sm text-gray-600 mb-6">Comparte tu opinión sobre los juegos que has experimentado:</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Sistema de valoración</h4>
                                <p class="text-xs text-gray-600 mb-4">GameShelf utiliza una escala del 1 al 10 para valorar los juegos:</p>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">9.0 - 10</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-green-500 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Obra maestra</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">8.0 - 8.9</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-green-400 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Excelente</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">7.0 - 7.9</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-green-300 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Muy bueno</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">6.0 - 6.9</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-yellow-300 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Bueno</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">5.0 - 5.9</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-yellow-400 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Aceptable</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">3.0 - 4.9</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-red-300 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Mediocre</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-16 text-center">
                                            <span class="text-xs font-medium text-gray-800">1.0 - 2.9</span>
                                        </div>
                                        <div class="ml-2 flex-grow">
                                            <div class="h-2 bg-red-500 rounded"></div>
                                        </div>
                                        <div class="ml-2 w-24">
                                            <span class="text-xs">Malo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Escribir una reseña</h4>
                                <p class="text-xs text-gray-600 mb-4">Para compartir tu experiencia de juego de forma detallada:</p>
                                <div class="space-y-4">
                                    <div class="bg-gray-50 p-3 rounded-lg">
                                        <h5 class="text-xs font-medium text-gray-900 mb-2">Elementos de una buena reseña:</h5>
                                        <ul class="list-disc list-inside text-xs text-gray-600 space-y-1">
                                            <li>Una valoración numérica (1-10)</li>
                                            <li>Título conciso que resuma tu opinión</li>
                                            <li>Análisis de jugabilidad, historia, gráficos y sonido</li>
                                            <li>Mención de puntos fuertes y débiles</li>
                                            <li>Evitar spoilers importantes (o marcarlos claramente)</li>
                                        </ul>
                                    </div>
                                    <div class="border border-gray-200 rounded-lg p-3">
                                        <h5 class="text-xs font-medium text-gray-900 mb-2">Pasos para escribir una reseña:</h5>
                                        <ol class="list-decimal list-inside text-xs text-gray-600 space-y-1">
                                            <li>Navega a la página del juego que quieres reseñar</li>
                                            <li>Haz clic en "Escribir reseña"</li>
                                            <li>Asigna una puntuación (obligatorio)</li>
                                            <li>Escribe tu reseña (mínimo 100 caracteres)</li>
                                            <li>Utiliza las etiquetas para categorizar tu reseña (opcional)</li>
                                            <li>Marca la casilla de "contiene spoilers" si es necesario</li>
                                            <li>Haz clic en "Publicar reseña"</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-indigo-800">Recuerda:</h4>
                                    <p class="text-xs text-indigo-700 mt-1">Las reseñas más útiles suelen ser equilibradas y constructivas. Una crítica honesta pero respetuosa es más valiosa para la comunidad que una reseña excesivamente positiva o negativa sin argumentos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sistema de valoración avanzado -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Sistema de valoración avanzado</h3>
                        <p class="text-sm text-gray-600 mb-6">Además de la puntuación general, puedes valorar aspectos específicos de cada juego:</p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Jugabilidad</h4>
                                </div>
                                <p class="text-xs text-gray-600 mb-2">Evalúa los controles, la fluidez y la mecánica del juego.</p>
                                <div class="flex items-center">
                                    <div class="flex-1">
                                        <div class="h-1 bg-gray-200 rounded">
                                            <div class="h-1 bg-indigo-600 rounded" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <span class="ml-2 text-xs font-medium text-gray-700">8.0</span>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Historia</h4>
                                </div>
                                <p class="text-xs text-gray-600 mb-2">Valora la trama, los personajes y la narrativa.</p>
                                <div class="flex items-center">
                                    <div class="flex-1">
                                        <div class="h-1 bg-gray-200 rounded">
                                            <div class="h-1 bg-indigo-600 rounded" style="width: 90%"></div>
                                        </div>
                                    </div>
                                    <span class="ml-2 text-xs font-medium text-gray-700">9.0</span>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Gráficos</h4>
                                </div>
                                <p class="text-xs text-gray-600 mb-2">Evalúa la calidad visual y el diseño artístico.</p>
                                <div class="flex items-center">
                                    <div class="flex-1">
                                        <div class="h-1 bg-gray-200 rounded">
                                            <div class="h-1 bg-indigo-600 rounded" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <span class="ml-2 text-xs font-medium text-gray-700">8.5</span>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Sonido</h4>
                                </div>
                                <p class="text-xs text-gray-600 mb-2">Valora la banda sonora, efectos y voces.</p>
                                <div class="flex items-center">
                                    <div class="flex-1">
                                        <div class="h-1 bg-gray-200 rounded">
                                            <div class="h-1 bg-indigo-600 rounded" style="width: 75%"></div>
                                        </div>
                                    </div>
                                    <span class="ml-2 text-xs font-medium text-gray-700">7.5</span>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Longevidad</h4>
                                </div>
                                <p class="text-xs text-gray-600 mb-2">Evalúa la duración y el contenido del juego.</p>
                                <div class="flex items-center">
                                    <div class="flex-1">
                                        <div class="h-1 bg-gray-200 rounded">
                                            <div class="h-1 bg-indigo-600 rounded" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <span class="ml-2 text-xs font-medium text-gray-700">7.0</span>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                    </svg>
                                    <h4 class="text-sm font-medium text-gray-900">Dificultad</h4>
                                </div>
                                <p class="text-xs text-gray-600 mb-2">Valora el nivel de desafío que presenta.</p>
                                <div class="flex items-center">
                                    <div class="flex-1">
                                        <div class="h-1 bg-gray-200 rounded">
                                            <div class="h-1 bg-indigo-600 rounded" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    <span class="ml-2 text-xs font-medium text-gray-700">6.0</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-yellow-50 p-4 rounded-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-yellow-800">Importante:</h4>
                                    <p class="text-xs text-yellow-700 mt-1">La valoración por categorías es opcional, pero enriquece tu reseña y ayuda a otros usuarios a entender mejor los puntos fuertes y débiles del juego desde diferentes aspectos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listas personalizadas -->
            <div id="listas-personalizadas" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">5. Listas personalizadas</h2>
                </div>

                <div class="space-y-8">
                    <!-- Crear listas -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Crear y gestionar listas</h3>
                        <p class="text-sm text-gray-600 mb-6">Organiza juegos según tus propios criterios o temáticas:</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Tipos de listas</h4>
                                <div class="space-y-3">
                                    <div class="p-3 bg-indigo-50 rounded-lg">
                                        <h5 class="text-xs font-semibold text-indigo-900 mb-1">Listas temáticas</h5>
                                        <p class="text-xs text-indigo-800">Agrupa juegos por tema como "Juegos con los mejores finales" o "Mi saga Final Fantasy favorita".</p>
                                    </div>
                                    <div class="p-3 bg-purple-50 rounded-lg">
                                        <h5 class="text-xs font-semibold text-purple-900 mb-1">Listas personales</h5>
                                        <p class="text-xs text-purple-800">Organiza juegos para ti mismo como "Juegos que quiero comprar" o "Pendientes para verano".</p>
                                    </div>
                                    <div class="p-3 bg-blue-50 rounded-lg">
                                        <h5 class="text-xs font-semibold text-blue-900 mb-1">Listas de recomendación</h5>
                                        <p class="text-xs text-blue-800">Recomienda juegos a otros como "Imprescindibles para nuevos jugadores" o "Si te gustó Zelda...".</p>
                                    </div>
                                    <div class="p-3 bg-green-50 rounded-lg">
                                        <h5 class="text-xs font-semibold text-green-900 mb-1">Rankings</h5>
                                        <p class="text-xs text-green-800">Ordena juegos según tu preferencia como "Top 10 RPGs de todos los tiempos".</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Cómo crear una lista</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">1</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-800">Ir a tu perfil</p>
                                            <p class="text-xs text-gray-600 mt-1">Navega a tu perfil y haz clic en la pestaña "Listas".</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">2</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-800">Crear nueva lista</p>
                                            <p class="text-xs text-gray-600 mt-1">Pulsa el botón "Nueva lista" y completa la información básica: título, descripción y privacidad.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">3</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-800">Añadir juegos</p>
                                            <p class="text-xs text-gray-600 mt-1">Busca y añade juegos a tu lista mediante el buscador integrado.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">4</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-800">Ordenar y personalizar</p>
                                            <p class="text-xs text-gray-600 mt-1">Arrastra los juegos para reordenarlos y añade comentarios personalizados a cada entrada si lo deseas.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3 flex-shrink-0">
                                            <span class="text-xs">5</span>
                                        </div>
                                        <div>
                                            <p class="text-xs font-medium text-gray-800">Publicar</p>
                                            <p class="text-xs text-gray-600 mt-1">Guarda tu lista y compártela con la comunidad si lo deseas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Opciones de privacidad para tus listas</h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="p-3 bg-white rounded border border-gray-200">
                                    <div class="flex items-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-xs font-medium text-gray-900">Pública</span>
                                    </div>
                                    <p class="text-xs text-gray-600">Visible para todos los usuarios. Aparecerá en tu perfil y puede ser descubierta en el explorador de listas.</p>
                                </div>
                                <div class="p-3 bg-white rounded border border-gray-200">
                                    <div class="flex items-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                        </svg>
                                        <span class="text-xs font-medium text-gray-900">Solo seguidores</span>
                                    </div>
                                    <p class="text-xs text-gray-600">Solo visible para usuarios que te siguen. Aparecerá en tu perfil solo para ellos.</p>
                                </div>
                                <div class="p-3 bg-white rounded border border-gray-200">
                                    <div class="flex items-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-xs font-medium text-gray-900">Privada</span>
                                    </div>
                                    <p class="text-xs text-gray-600">Solo visible para ti. Útil para listas personales como "Juegos que quiero comprar".</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Descubrir listas -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Descubrir listas de la comunidad</h3>
                        <p class="text-sm text-gray-600 mb-6">Explora listas creadas por otros usuarios para descubrir nuevos juegos:</p>

                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="text-sm font-medium text-gray-900 mb-3">Listas destacadas</h4>
                                    <p class="text-xs text-gray-600 mb-3">El equipo de GameShelf selecciona semanalmente las mejores listas creadas por la comunidad.</p>
                                    <a href="#" class="text-xs font-medium text-indigo-600 hover:text-indigo-800">Ver listas destacadas →</a>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <h4 class="text-sm font-medium text-gray-900 mb-3">Listas populares</h4>
                                    <p class="text-xs text-gray-600 mb-3">Las listas con más me gusta y shares en las últimas semanas.</p>
                                    <a href="#" class="text-xs font-medium text-indigo-600 hover:text-indigo-800">Ver listas populares →</a>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Explorar por categorías</h4>
                                <div class="flex flex-wrap gap-2">
                                    <a href="#" class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-xs hover:bg-indigo-100">Rankings</a>
                                    <a href="#" class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-xs hover:bg-indigo-100">Recomendaciones</a>
                                    <a href="#" class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-xs hover:bg-indigo-100">Historia de los videojuegos</a>
                                    <a href
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comunidad y social -->
            <div id="comunidad" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">6. Comunidad y social</h2>
                </div>

                <div class="space-y-8">
                    <!-- Interacción comunitaria -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Conectar con otros jugadores</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-indigo-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <div class="h-8 w-8 bg-indigo-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-sm font-medium text-gray-900">Seguir usuarios</h4>
                                </div>
                                <p class="text-xs text-gray-600">Descubre jugadores con gustos similares y sigue su actividad para ver sus últimas valoraciones, listas y logros.</p>
                            </div>

                            <div class="bg-purple-50 p-4 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <div class="h-8 w-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-sm font-medium text-gray-900">Actividad social</h4>
                                </div>
                                <p class="text-xs text-gray-600">Comenta y reacciona a las reseñas, listas y actualizaciones de otros usuarios. Usa etiquetas @ para mencionar amigos.</p>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-gray-900 mb-3">Funciones sociales clave</h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
                                <div class="bg-white p-3 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Feed de actividad</span>
                                    <span>Sigue las actualizaciones de usuarios y juegos que sigues</span>
                                </div>
                                <div class="bg-white p-3 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Sistema de mensajes</span>
                                    <span>Envía mensajes privados a otros miembros</span>
                                </div>
                                <div class="bg-white p-3 rounded border border-gray-200">
                                    <span class="font-medium block mb-1">Logros sociales</span>
                                    <span>Desbloquea insignias por interacciones comunitarias</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grupos y eventos -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Grupos y eventos</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Grupos temáticos</h4>
                                <p class="text-xs text-gray-600 mb-4">Únete a comunidades sobre géneros específicos, plataformas o temas particulares:</p>
                                <ul class="space-y-2 text-xs">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Discusiones organizadas por temas
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Retos y eventos exclusivos
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Competiciones amistosas
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-yellow-50 p-4 rounded-lg">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Eventos comunitarios</h4>
                                <p class="text-xs text-gray-600 mb-4">Participa en eventos especiales organizados por GameShelf:</p>
                                <div class="flex items-center text-xs mb-2">
                                    <span class="w-16 font-medium">Maratones:</span>
                                    <span>Completa juegos específicos en tiempo limitado</span>
                                </div>
                                <div class="flex items-center text-xs mb-2">
                                    <span class="w-16 font-medium">Votaciones:</span>
                                    <span>Elige los mejores juegos por categorías</span>
                                </div>
                                <div class="flex items-center text-xs">
                                    <span class="w-16 font-medium">Q&A:</span>
                                    <span>Charlas con desarrolladores y figuras de la industria</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Funciones Avanzadas -->
            <div id="funciones-avanzadas" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">7. Funciones Avanzadas</h2>
                </div>

                <div class="space-y-8">
                    <!-- Herramientas profesionales -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Para usuarios expertos</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Importar/Exportar datos</h4>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-xs text-gray-600 mb-3">Sincroniza tu colección con otras plataformas:</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 bg-white text-xs rounded-full border">Steam</span>
                                        <span class="px-2 py-1 bg-white text-xs rounded-full border">Xbox Live</span>
                                        <span class="px-2 py-1 bg-white text-xs rounded-full border">PSN</span>
                                        <span class="px-2 py-1 bg-white text-xs rounded-full border">CSV</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 class="text-sm font-medium text-gray-900 mb-3">Estadísticas avanzadas</h4>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center text-xs mb-2">
                                        <div class="w-2 h-2 bg-indigo-600 rounded-full mr-2"></div>
                                        <span>Gráficos de progreso</span>
                                    </div>
                                    <div class="flex items-center text-xs mb-2">
                                        <div class="w-2 h-2 bg-green-600 rounded-full mr-2"></div>
                                        <span>Análisis de hábitos de juego</span>
                                    </div>
                                    <div class="flex items-center text-xs">
                                        <div class="w-2 h-2 bg-purple-600 rounded-full mr-2"></div>
                                        <span>Comparativas con la comunidad</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="text-sm font-medium text-indigo-800 mb-2">API para desarrolladores</h4>
                            <p class="text-xs text-indigo-700">Accede a nuestros datos mediante nuestra API pública. Documentación disponible en developers.gameshelf.com</p>
                        </div>
                    </div>

                    <!-- Personalización avanzada -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Personalización avanzada</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
                            <div class="bg-gray-50 p-3 rounded-lg border border-gray-200">
                                <span class="font-medium block mb-1">Etiquetas personalizadas</span>
                                <span>Crea tus propias categorías para organizar juegos</span>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg border border-gray-200">
                                <span class="font-medium block mb-1">Filtros guardados</span>
                                <span>Guarda combinaciones complejas de filtros para acceso rápido</span>
                            </div>
                            <div class="bg-gray-50 p-3 rounded-lg border border-gray-200">
                                <span class="font-medium block mb-1">Temas visuales</span>
                                <span>Personaliza colores y diseño de tu perfil</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preguntas frecuentes -->
            <div id="preguntas-frecuentes" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">8. Preguntas frecuentes</h2>
                </div>

                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer">
                                <span class="text-sm font-medium text-gray-900">¿Cómo restablezco mi contraseña?</span>
                                <svg class="h-5 w-5 text-gray-500 group-open:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <svg class="h-5 w-5 text-gray-500 hidden group-open:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </summary>
                            <p class="mt-3 text-xs text-gray-600">Visita la página de recuperación de contraseña e introduce tu email. Recibirás un enlace para crear una nueva contraseña segura.</p>
                        </details>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-4">
                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer">
                                <span class="text-sm font-medium text-gray-900">¿Cómo reporto contenido inapropiado?</span>
                                <svg class="h-5 w-5 text-gray-500 group-open:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </summary>
                            <p class="mt-3 text-xs text-gray-600">Usa el botón 'Reportar' disponible en todas las reseñas y comentarios. Nuestro equipo revisará el contenido en 24 horas.</p>
                        </details>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-4">
                        <details class="group">
                            <summary class="flex justify-between items-center cursor-pointer">
                                <span class="text-sm font-medium text-gray-900">¿Hay aplicación móvil disponible?</span>
                                <svg class="h-5 w-5 text-gray-500 group-open:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </summary>
                            <p class="mt-3 text-xs text-gray-600">Actualmente ofrecemos una web responsive optimizada para móviles. La app nativa está en desarrollo.</p>
                        </details>
                    </div>
                </div>
            </div>

            <!-- Soporte Técnico -->
            <div id="soporte" class="mb-16 scroll-mt-24">
                <div class="border-b border-gray-200 pb-4 mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">9. Soporte Técnico</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-indigo-50 rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Contactar con soporte</h3>
                        <div class="space-y-4 text-xs">
                            <div class="bg-white p-3 rounded-lg">
                                <span class="font-medium block mb-1">📧 Email:</span>
                                <span>soporte@gameshelf.com (Respuesta en 24h)</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg">
                                <span class="font-medium block mb-1">📱 Chat en vivo:</span>
                                <span>Disponible de 9:00 a 18:00 (GMT+1)</span>
                            </div>
                            <div class="bg-white p-3 rounded-lg">
                                <span class="font-medium block mb-1">📌 Sistema de tickets:</span>
                                <span>Registra incidencias técnicas desde tu perfil</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Recursos útiles</h3>
                        <ul class="space-y-3 text-xs">
                            <li>
                                <a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Centro de ayuda completo
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Estado del servicio
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    Política de privacidad
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
