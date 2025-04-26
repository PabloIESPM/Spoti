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
            <!-- Encabezado de página -->
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-10 text-center shadow-2xl sm:px-16 mb-12">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Calendario de Lanzamientos</h1>
                <p class="mx-auto mt-4 max-w-2xl text-lg leading-8 text-indigo-50">
                    Mantente al día con los próximos juegos y nunca te pierdas un estreno
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
                            <option value="xsx">Xbox Series X/S</option>
                            <option value="switch">Nintendo Switch</option>
                            <option value="pc">PC</option>
                            <option value="ps4">PlayStation 4</option>
                            <option value="xone">Xbox One</option>
                        </select>
                    </div>
                    <div>
                        <select class="block w-full rounded-md border-0 py-2.5 pl-3 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">Todos los géneros</option>
                            <option value="rpg">RPG</option>
                            <option value="accion">Acción</option>
                            <option value="aventura">Aventura</option>
                            <option value="shooter">Shooter</option>
                            <option value="estrategia">Estrategia</option>
                            <option value="deportes">Deportes</option>
                        </select>
                    </div>
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

            <!-- Navegación por meses -->
            <div class="mb-10">
                <div class="flex overflow-x-auto pb-2 scrollbar-thin gap-2 mb-4">
                    <button class="flex-shrink-0 bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium">Mayo 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Junio 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Julio 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Agosto 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Septiembre 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Octubre 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Noviembre 2025</button>
                    <button class="flex-shrink-0 bg-white text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg font-medium">Diciembre 2025</button>
                </div>
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-gray-900">Mayo 2025</h2>
                    <div class="flex gap-2">
                        <button class="text-gray-500 hover:text-indigo-600 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1">Anterior</span>
                        </button>
                        <button class="text-gray-500 hover:text-indigo-600 flex items-center">
                            <span class="mr-1">Siguiente</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Primera semana de Mayo -->
            <div class="mb-12">
                <div class="flex items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">1 - 7 de Mayo</h3>
                    <div class="ml-4 h-px bg-gray-200 flex-grow"></div>
                </div>

                <!-- Grid de juegos -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Juego 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Dragon Age: The Veilguard" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                2 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Dragon Age: The Veilguard</h4>
                                <p class="text-sm text-gray-500">PC, PS5, Xbox Series X/S</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">La esperada nueva entrega de la saga Dragon Age. Regresa a Thedas en una aventura épica de fantasía.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">RPG</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasía</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Acción</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        8,532 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Juego 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Senua's Saga: Hellblade II" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                4 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Senua's Saga: Hellblade II</h4>
                                <p class="text-sm text-gray-500">Xbox Series X/S, PC</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">Continuación de la aclamada historia de Senua, un viaje psicológico a través de la mitología nórdica.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Acción</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Aventura</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Psicológico</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        6,412 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Juego 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Path of Exile 2" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                7 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Path of Exile 2</h4>
                                <p class="text-sm text-gray-500">PC, PS5, Xbox Series X/S</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">La continuación del popular ARPG free-to-play. Nuevas clases, sistema de habilidades y una campaña completamente nueva.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">ARPG</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Free-to-play</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Multijugador</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        5,873 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segunda semana de Mayo -->
            <div class="mb-12">
                <div class="flex items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">8 - 14 de Mayo</h3>
                    <div class="ml-4 h-px bg-gray-200 flex-grow"></div>
                </div>

                <!-- Grid de juegos -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Juego 4 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Star Wars Outlaws" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                10 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Star Wars Outlaws</h4>
                                <p class="text-sm text-gray-500">PS5, Xbox Series X/S, PC</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">El primer juego de mundo abierto ambientado en Star Wars. Vive la vida de una forajida en una galaxia muy, muy lejana.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Acción</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Mundo abierto</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Aventura</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        9,124 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Juego 5 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Frostpunk 2" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                12 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Frostpunk 2</h4>
                                <p class="text-sm text-gray-500">PC</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">Continuación del aclamado juego de supervivencia y gestión en un mundo congelado. Nuevos desafíos morales en la ciudad de hielo.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Estrategia</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Supervivencia</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Gestión</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        4,851 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Juego 6 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Metaphor: ReFantazio" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                14 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Metaphor: ReFantazio</h4>
                                <p class="text-sm text-gray-500">PS5, Xbox Series X/S, PC</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">El nuevo RPG de los creadores de Persona. Un mundo de fantasía con elementos sociales y batallas por turnos.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">JRPG</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasía</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Por turnos</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        7,632 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercera semana de Mayo -->
            <div class="mb-12">
                <div class="flex items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">15 - 21 de Mayo</h3>
                    <div class="ml-4 h-px bg-gray-200 flex-grow"></div>
                </div>

                <!-- Grid de juegos -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Juego 7 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Monster Hunter Wilds" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                16 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Monster Hunter Wilds</h4>
                                <p class="text-sm text-gray-500">PS5, Xbox Series X/S, PC</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">La nueva entrega de la popular saga de caza de monstruos. Nuevos ecosistemas, criaturas y mecánicas de juego.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Acción</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Mundo abierto</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Cooperativo</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        11,205 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Juego 8 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Avowed" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                18 Mayo
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Avowed</h4>
                                <p class="text-sm text-gray-500">Xbox Series X/S, PC</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">Un nuevo RPG en primera persona ambientado en el mundo de Eora. Desarrollado por Obsidian Entertainment.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">RPG</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Primera persona</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasía</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        6,748 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Juego 9 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="Hollow Knight: Silksong" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                21 Mayo
                            </div>
                            <div class="absolute top-0 left-0 bg-yellow-500 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                Destacado
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">Hollow Knight: Silksong</h4>
                                <p class="text-sm text-gray-500">PC, Switch, PS5, Xbox Series X/S</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">La esperada secuela del aclamado metroidvania. Juega como Hornet en un reino totalmente nuevo con nuevas habilidades y enemigos.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Metroidvania</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Plataformas</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Indie</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        15,749 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cuarta semana de Mayo -->
            <div class="mb-12">
                <div class="flex items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">22 - 31 de Mayo</h3>
                    <div class="ml-4 h-px bg-gray-200 flex-grow"></div>
                </div>

                <!-- Grid de juegos -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Juego 10 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" alt="The Legend of Zelda: Echoes of Wisdom" class="w-full h-48 object-cover">
                            <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                24 Mayo
                            </div>
                            <div class="absolute top-0 left-0 bg-yellow-500 text-white text-xs font-bold px-2 py-1 m-2 rounded">
                                Destacado
                            </div>
                        </div>
                        <div class="p-4 flex-grow">
                            <div class="mb-2">
                                <h4 class="text-lg font-medium text-gray-900">The Legend of Zelda: Echoes of Wisdom</h4>
                                <p class="text-sm text-gray-500">Nintendo Switch</p>
                            </div>
                            <p class="text-sm text-gray-600 mb-4">La nueva aventura de Zelda donde la princesa es la protagonista. Usa el poder del eco para crear y resolver enigmas.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Aventura</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Acción</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Puzles</span>
                            </div>
                        </div>
                        <div class="p-4 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        14,321 interesados
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-xs bg-indigo-600 hover:bg-indigo-700 text-white py-1 px-2 rounded">
                                        Añadir
                                    </button>
                                    <button class="text-xs border border-gray-300 hover:bg-gray-50 text-gray-700 py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </button>
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
