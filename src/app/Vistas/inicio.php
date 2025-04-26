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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">GAMESHELF</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Descubre, registra y comparte tu experiencia con los videojuegos que amas
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="/registro" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Regístrate gratis
                    </a>
                    <a href="/explorar" class="text-sm font-semibold leading-6 text-white">
                        Explorar juegos <span aria-hidden="true">→</span>
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

            <!-- Juegos destacados -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Juegos destacados</h2>
                    <a href="/destacados" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Ver todos <span aria-hidden="true">→</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Juego 1 -->
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img src="/api/placeholder/300/400" alt="The Legend of Zelda: Tears of the Kingdom" class="h-full w-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                <div class="p-4 w-full">
                                    <div class="flex justify-between items-center">
                                        <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.5</div>
                                        <button class="text-white hover:text-indigo-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-sm font-medium text-gray-900">The Legend of Zelda: Tears of the Kingdom</h3>
                            <p class="mt-1 text-sm text-gray-500">Nintendo Switch • 2023</p>
                        </div>
                    </div>

                    <!-- Juego 2 -->
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img src="/api/placeholder/300/400" alt="Baldur's Gate 3" class="h-full w-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                <div class="p-4 w-full">
                                    <div class="flex justify-between items-center">
                                        <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.8</div>
                                        <button class="text-white hover:text-indigo-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-sm font-medium text-gray-900">Baldur's Gate 3</h3>
                            <p class="mt-1 text-sm text-gray-500">PC, PS5 • 2023</p>
                        </div>
                    </div>

                    <!-- Juego 3 -->
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img src="/api/placeholder/300/400" alt="Elden Ring" class="h-full w-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                <div class="p-4 w-full">
                                    <div class="flex justify-between items-center">
                                        <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.7</div>
                                        <button class="text-white hover:text-indigo-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-sm font-medium text-gray-900">Elden Ring</h3>
                            <p class="mt-1 text-sm text-gray-500">PC, PS5, Xbox Series X/S • 2022</p>
                        </div>
                    </div>

                    <!-- Juego 4 -->
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img src="/api/placeholder/300/400" alt="Final Fantasy VII Rebirth" class="h-full w-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                <div class="p-4 w-full">
                                    <div class="flex justify-between items-center">
                                        <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.3</div>
                                        <button class="text-white hover:text-indigo-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-sm font-medium text-gray-900">Final Fantasy VII Rebirth</h3>
                            <p class="mt-1 text-sm text-gray-500">PS5 • 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actividad reciente -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Actividad reciente</h2>
                    <a href="/actividad" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Ver toda la actividad <span aria-hidden="true">→</span>
                    </a>
                </div>
                <div class="space-y-6">
                    <!-- Actividad 1 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Usuario">
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between">
                                    <p class="text-sm font-medium text-gray-900">AlexGamer92</p>
                                    <p class="text-sm text-gray-500">Hace 2 horas</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-600">Ha valorado <span class="font-medium">Hollow Knight</span> con un 9.5/10</p>
                                <p class="mt-2 text-sm text-gray-700">"Una obra maestra del género metroidvania. El nivel de detalle en el mundo, la dificultad equilibrada y la banda sonora hacen de este juego una experiencia única."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Actividad 2 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Usuario">
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between">
                                    <p class="text-sm font-medium text-gray-900">MariaSouls</p>
                                    <p class="text-sm text-gray-500">Hace 5 horas</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-600">Ha añadido <span class="font-medium">Star Wars Jedi: Survivor</span> a su colección</p>
                                <div class="mt-2 flex items-center space-x-2">
                                    <img class="h-16 w-12 rounded object-cover" src="/api/placeholder/48/64" alt="Star Wars Jedi: Survivor">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">Star Wars Jedi: Survivor</p>
                                        <p class="text-xs text-gray-500">PC, PS5, Xbox Series X/S • 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listas populares -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Listas populares</h2>
                    <a href="/listas" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Explorar listas <span aria-hidden="true">→</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Lista 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="flex p-4 items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Usuario">
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">RPGMaster</p>
                                <h3 class="text-lg font-bold text-gray-900 mt-1">Los mejores RPGs de la última década</h3>
                                <p class="text-sm text-gray-600 mt-1">Una selección de los 10 mejores juegos de rol que han definido la década</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <div class="flex space-x-2 overflow-x-auto pb-2 scrollbar-thin">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 1">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 2">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 3">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 4">
                                <div class="h-24 w-16 rounded bg-gray-100 flex items-center justify-center flex-shrink-0">
                                    <span class="text-gray-500 text-sm font-medium">+6</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lista 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="flex p-4 items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Usuario">
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">RetroFan2000</p>
                                <h3 class="text-lg font-bold text-gray-900 mt-1">Gemas ocultas de los 90s</h3>
                                <p class="text-sm text-gray-600 mt-1">Juegos poco conocidos pero brillantes de la era dorada</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <div class="flex space-x-2 overflow-x-auto pb-2 scrollbar-thin">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 1">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 2">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 3">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 4">
                                <div class="h-24 w-16 rounded bg-gray-100 flex items-center justify-center flex-shrink-0">
                                    <span class="text-gray-500 text-sm font-medium">+12</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lista 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="flex p-4 items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="/api/placeholder/40/40" alt="Usuario">
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">IndieDevLover</p>
                                <h3 class="text-lg font-bold text-gray-900 mt-1">Joyas indie imprescindibles</h3>
                                <p class="text-sm text-gray-600 mt-1">Pequeños estudios, grandes experiencias</p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <div class="flex space-x-2 overflow-x-auto pb-2 scrollbar-thin">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 1">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 2">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 3">
                                <img class="h-24 w-16 rounded object-cover flex-shrink-0" src="/api/placeholder/64/96" alt="Juego 4">
                                <div class="h-24 w-16 rounded bg-gray-100 flex items-center justify-center flex-shrink-0">
                                    <span class="text-gray-500 text-sm font-medium">+8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Por qué unirse -->
            <div class="bg-indigo-50 rounded-xl p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">¿Por qué unirte a GAMESHELF?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Registra tu colección</h3>
                        <p class="text-sm text-gray-600">Mantén un seguimiento de todos los juegos que has jugado, quieres jugar o estás jugando actualmente.</p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Comparte tus opiniones</h3>
                        <p class="text-sm text-gray-600">Valora, reseña y descubre las opiniones de otros jugadores sobre tus títulos favoritos.</p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Conecta con la comunidad</h3>
                        <p class="text-sm text-gray-600">Descubre jugadores con gustos similares y sigue sus recomendaciones.</p>
                    </div>
                </div>
            </div>

            <!-- Próximos lanzamientos -->
            <div>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Próximos lanzamientos</h2>
                    <a href="/calendario" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Ver calendario <span aria-hidden="true">→</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Lanzamiento 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Juego próximo" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-sm font-medium text-gray-900">Dragon Age: The Veilguard</h3>
                                <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">28 días</div>
                            </div>
                            <p class="text-xs text-gray-500 mb-2">PC, PS5, Xbox Series X/S</p>
                            <div class="flex space-x-2">
                                <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                    Añadir a deseados
                                </button>
                                <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                    Recordar
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Lanzamiento 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Juego próximo" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-sm font-medium text-gray-900">Metaphor: ReFantazio</h3>
                                <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">45 días</div>
                            </div>
                            <p class="text-xs text-gray-500 mb-2">PC, PS5, Xbox Series X/S</p>
                            <div class="flex space-x-2">
                                <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                    Añadir a deseados
                                </button>
                                <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                    Recordar
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Juego próximo" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-sm font-medium text-gray-900">Metaphor: ReFantazio</h3>
                                <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">45 días</div>
                            </div>
                            <p class="text-xs text-gray-500 mb-2">PC, PS5, Xbox Series X/S</p>
                            <div class="flex space-x-2">
                                <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                    Añadir a deseados
                                </button>
                                <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                    Recordar
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="/api/placeholder/320/180" alt="Juego próximo" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-sm font-medium text-gray-900">Star Wars Outlaws</h3>
                                <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">45 días</div>
                            </div>
                            <p class="text-xs text-gray-500 mb-2">PC, PS5, Xbox Series X/S</p>
                            <div class="flex space-x-2">
                                <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                    Añadir a deseados
                                </button>
                                <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                    Recordar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
