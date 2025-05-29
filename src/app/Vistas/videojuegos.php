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
            <!-- Encabezado de página con estilo azul -->
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-10 text-center shadow-2xl sm:px-16 mb-12">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Explorar Videojuegos</h1>
                <p class="mx-auto mt-4 max-w-2xl text-lg leading-8 text-indigo-50">
                    Descubre, filtra y organiza juegos de todas las plataformas y géneros
                </p>
                <div class="mt-6 flex flex-wrap justify-center gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Buscar juegos..." class="block w-64 rounded-md border-0 py-2.5 pl-10 pr-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <select class="block w-full rounded-md border-0 py-2.5 pl-3 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">Todas las plataformas</option>
                            <option value="ps5">PlayStation 5</option>
                            <option value="ps4">PlayStation 4</option>
                            <option value="xsx">Xbox Series X/S</option>
                            <option value="xone">Xbox One</option>
                            <option value="switch">Nintendo Switch</option>
                            <option value="pc">PC</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                    <div>
                        <select class="block w-full rounded-md border-0 py-2.5 pl-3 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">Todos los géneros</option>
                            <option value="action">Acción</option>
                            <option value="adventure">Aventura</option>
                            <option value="rpg">RPG</option>
                            <option value="strategy">Estrategia</option>
                            <option value="shooter">Shooter</option>
                            <option value="sports">Deportes</option>
                            <option value="simulation">Simulación</option>
                            <option value="puzzle">Puzzle</option>
                            <option value="platformer">Plataformas</option>
                        </select>
                    </div>
                    <div>
                        <select class="block w-full rounded-md border-0 py-2.5 pl-3 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="popularity">Ordenar por: Popularidad</option>
                            <option value="rating">Ordenar por: Puntuación</option>
                            <option value="release_date">Ordenar por: Fecha de lanzamiento</option>
                            <option value="alphabetical">Ordenar por: Alfabético</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 flex flex-wrap justify-center gap-2">
                    <div class="text-sm font-medium text-white mr-2">Filtros rápidos:</div>
                    <button type="button" class="rounded-full bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-medium text-white hover:bg-white/20">
                        Lanzamientos 2024
                    </button>
                    <button type="button" class="rounded-full bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-medium text-white hover:bg-white/20">
                        Top 100
                    </button>
                    <button type="button" class="rounded-full bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-medium text-white hover:bg-white/20">
                        Recomendados para ti
                    </button>
                    <button type="button" class="rounded-full bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-medium text-white hover:bg-white/20">
                        Indie
                    </button>
                    <button type="button" class="rounded-full bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-medium text-white hover:bg-white/20">
                        Mundo abierto
                    </button>
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

            <!-- Contenedor principal con filtro lateral y resultados -->
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Filtros laterales -->
                <div class="w-full lg:w-64 shrink-0">
                    <div class="bg-white rounded-lg shadow p-6 sticky top-24">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-bold text-gray-900">Filtros</h2>
                            <button type="button" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                Resetear
                            </button>
                        </div>

                        <!-- Filtro de plataformas -->
                        <div class="py-4 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-900 mb-3">Plataformas</h3>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input id="platform-pc" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-pc" class="ml-2 text-sm text-gray-700">PC</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="platform-ps5" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-ps5" class="ml-2 text-sm text-gray-700">PlayStation 5</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="platform-ps4" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-ps4" class="ml-2 text-sm text-gray-700">PlayStation 4</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="platform-xsx" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-xsx" class="ml-2 text-sm text-gray-700">Xbox Series X/S</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="platform-xone" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-xone" class="ml-2 text-sm text-gray-700">Xbox One</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="platform-switch" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-switch" class="ml-2 text-sm text-gray-700">Nintendo Switch</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="platform-mobile" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="platform-mobile" class="ml-2 text-sm text-gray-700">Mobile</label>
                                </div>
                            </div>
                        </div>

                        <!-- Filtro de géneros -->
                        <div class="py-4 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-900 mb-3">Géneros</h3>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input id="genre-action" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="genre-action" class="ml-2 text-sm text-gray-700">Acción</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="genre-adventure" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="genre-adventure" class="ml-2 text-sm text-gray-700">Aventura</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="genre-rpg" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="genre-rpg" class="ml-2 text-sm text-gray-700">RPG</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="genre-strategy" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="genre-strategy" class="ml-2 text-sm text-gray-700">Estrategia</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="genre-shooter" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="genre-shooter" class="ml-2 text-sm text-gray-700">Shooter</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="genre-simulation" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="genre-simulation" class="ml-2 text-sm text-gray-700">Simulación</label>
                                </div>
                            </div>
                            <button type="button" class="mt-2 text-sm text-indigo-600 hover:text-indigo-800">
                                Ver más
                            </button>
                        </div>

                        <!-- Filtro de premios -->
                        <div class="py-4 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-900 mb-3">Premios</h3>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input id="award-goty" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="award-goty" class="ml-2 text-sm text-gray-700">Game of the Year</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="award-bafta" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="award-bafta" class="ml-2 text-sm text-gray-700">BAFTA</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="award-dice" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="award-dice" class="ml-2 text-sm text-gray-700">D.I.C.E. Awards</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="award-golden" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="award-golden" class="ml-2 text-sm text-gray-700">Golden Joystick</label>
                                </div>
                            </div>
                        </div>

                        <!-- Filtro de duración -->
                        <div class="py-4 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-900 mb-3">Duración</h3>
                            <div class="space-y-4">
                                <div>
                                    <input type="range" min="0" max="100" value="50" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-indigo-600">
                                    <div class="flex justify-between text-xs text-gray-600 mt-1">
                                        <span>0h</span>
                                        <span>50h</span>
                                        <span>100h+</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2 text-sm">
                                    <div class="w-20">
                                        <input type="number" min="0" placeholder="Min" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <span class="text-gray-500">a</span>
                                    <div class="w-20">
                                        <input type="number" min="0" placeholder="Max" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <span class="text-gray-500">h</span>
                                </div>
                            </div>
                        </div>

                        <!-- Filtro de año -->
                        <div class="py-4 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-900 mb-3">Año de lanzamiento</h3>
                            <div class="space-y-4">
                                <div>
                                    <input type="range" min="1980" max="2025" value="2023" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-indigo-600">
                                    <div class="flex justify-between text-xs text-gray-600 mt-1">
                                        <span>1980</span>
                                        <span>2000</span>
                                        <span>2025</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-2 text-sm">
                                    <div class="w-20">
                                        <input type="number" min="1980" max="2025" placeholder="Desde" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <span class="text-gray-500">a</span>
                                    <div class="w-20">
                                        <input type="number" min="1980" max="2025" placeholder="Hasta" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Filtro de valoración -->
                        <div class="py-4 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-900 mb-3">Valoración</h3>
                            <div class="space-y-4">
                                <div>
                                    <input type="range" min="0" max="10" step="0.1" value="7" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-indigo-600">
                                    <div class="flex justify-between text-xs text-gray-600 mt-1">
                                        <span>0</span>
                                        <span>5</span>
                                        <span>10</span>
                                    </div>
                                </div>
                                <div class="text-center text-sm font-medium text-indigo-600">
                                    7.0+
                                </div>
                            </div>
                        </div>

                        <!-- Botones de acción -->
                        <div class="pt-4 border-t border-gray-200">
                            <button type="button" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Aplicar filtros
                            </button>
                            <button type="button" class="w-full mt-2 py-2 px-4 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Limpiar filtros
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Resultados -->
                <div class="flex-1">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-900">Resultados</h2>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500 mr-4">345 juegos encontrados</span>
                            <div class="flex border border-gray-300 rounded-md">
                                <button type="button" class="p-2 text-gray-600 hover:bg-gray-50 rounded-l-md bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </button>
                                <button type="button" class="p-2 text-gray-600 hover:bg-gray-50 rounded-r-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Grid de juegos -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Juego 1 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                                <img src="/api/placeholder/300/400" alt="The Legend of Zelda: Tears of the Kingdom" class="h-full w-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                    <div class="p-4 w-full">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.5</div>
                                            <button class="text-white hover:text-indigo-300 transition-colors">
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
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Aventura</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Mundo abierto</span>
                                </div>
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
                                            <button class="text-white hover:text-indigo-300 transition-colors">
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
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">RPG</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Estrategia</span>
                                </div>
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
                                            <button class="text-white hover:text-indigo-300 transition-colors">
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
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Acción</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">RPG</span>
                                </div>
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
                                            <button class="text-white hover:text-indigo-300 transition-colors">
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
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">RPG</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Aventura</span>
                                </div>
                            </div>
                        </div>

                        <!-- Juego 5 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                                <img src="/api/placeholder/300/400" alt="Hollow Knight" class="h-full w-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                    <div class="p-4 w-full">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.5</div>
                                            <button class="text-white hover:text-indigo-300 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Hollow Knight</h3>
                                <p class="mt-1 text-sm text-gray-500">PC, Switch, PS4, Xbox One • 2017</p>
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Plataformas</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Metroidvania</span>
                                </div>
                            </div>
                        </div>

                        <!-- Juego 6 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                                <img src="/api/placeholder/300/400" alt="Star Wars Jedi: Survivor" class="h-full w-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                    <div class="p-4 w-full">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">8.9</div>
                                            <button class="text-white hover:text-indigo-300 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Star Wars Jedi: Survivor</h3>
                                <p class="mt-1 text-sm text-gray-500">PC, PS5, Xbox Series X/S • 2023</p>
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Acción</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Aventura</span>
                                </div>
                            </div>
                        </div>

                        <!-- Juego 7 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                                <img src="/api/placeholder/300/400" alt="Hades II" class="h-full w-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                    <div class="p-4 w-full">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.2</div>
                                            <button class="text-white hover:text-indigo-300 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Hades II</h3>
                                <p class="mt-1 text-sm text-gray-500">PC • 2024 (Acceso anticipado)</p>
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Roguelike</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Acción</span>
                                </div>
                            </div>
                        </div>

                        <!-- Juego 8 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                                <img src="/api/placeholder/300/400" alt="Hellblade II: Senua's Saga" class="h-full w-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                    <div class="p-4 w-full">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.0</div>
                                            <button class="text-white hover:text-indigo-300 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Hellblade II: Senua's Saga</h3>
                                <p class="mt-1 text-sm text-gray-500">Xbox Series X/S, PC • 2024</p>
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Acción</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Aventura</span>
                                </div>
                            </div>
                        </div>

                        <!-- Juego 9 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200">
                                <img src="/api/placeholder/300/400" alt="Persona 3 Reload" class="h-full w-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                                    <div class="p-4 w-full">
                                        <div class="flex justify-between items-center">
                                            <div class="bg-indigo-600 text-white px-2 py-1 rounded text-xs font-medium">9.1</div>
                                            <button class="text-white hover:text-indigo-300 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Hellblade II: Senua's Saga</h3>
                                <p class="mt-1 text-sm text-gray-500">Xbox Series X/S, PC • 2024</p>
                                <div class="mt-2 flex flex-wrap gap-1">
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Acción</span>
                                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700">Aventura</span>
                                </div>
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