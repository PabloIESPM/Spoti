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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">INFORMES ANUALES</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Transparencia y resultados: Conoce el desempeño y crecimiento de GameShelf
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="#informes" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Ver informes
                    </a>
                    <a href="#contacto" class="text-sm font-semibold leading-6 text-white">
                        Contacto para inversores <span aria-hidden="true">→</span>
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

            <!-- Resumen ejecutivo -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Resumen ejecutivo</h2>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 mb-4">
                        GameShelf ha experimentado un crecimiento significativo durante el último año fiscal, consolidándose como una plataforma de referencia para los aficionados a los videojuegos. Nuestra comunidad ha crecido un <span class="font-medium text-indigo-600">78%</span> respecto al año anterior, alcanzando más de <span class="font-medium text-indigo-600">2.3 millones</span> de usuarios activos mensuales.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Durante este periodo, hemos expandido nuestras asociaciones con desarrolladores y editores, implementado nuevas funcionalidades solicitadas por la comunidad y mejorado la infraestructura técnica para garantizar una experiencia fluida incluso con picos de tráfico significativos.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-indigo-50 rounded-lg p-4 text-center">
                            <p class="text-sm text-indigo-700 font-medium">Usuarios registrados</p>
                            <p class="text-3xl font-bold text-indigo-900 mt-2">4.7M</p>
                            <p class="text-xs text-indigo-600 mt-1">+78% vs año anterior</p>
                        </div>
                        <div class="bg-indigo-50 rounded-lg p-4 text-center">
                            <p class="text-sm text-indigo-700 font-medium">Juegos en la base de datos</p>
                            <p class="text-3xl font-bold text-indigo-900 mt-2">87K</p>
                            <p class="text-xs text-indigo-600 mt-1">+34% vs año anterior</p>
                        </div>
                        <div class="bg-indigo-50 rounded-lg p-4 text-center">
                            <p class="text-sm text-indigo-700 font-medium">Reseñas publicadas</p>
                            <p class="text-3xl font-bold text-indigo-900 mt-2">12.5M</p>
                            <p class="text-xs text-indigo-600 mt-1">+115% vs año anterior</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informes disponibles -->
            <div class="mb-12" id="informes">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Informes anuales disponibles</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Informe 2024 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="relative">
                            <div class="aspect-w-16 aspect-h-9 w-full bg-indigo-100">
                                <div class="flex items-center justify-center h-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4 bg-indigo-600 text-white text-xs font-medium px-2.5 py-1 rounded">
                                Último
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900">Informe Anual 2024</h3>
                            <p class="text-sm text-gray-600 mt-2 mb-4">Resultados completos del año fiscal 2024, análisis de crecimiento y proyecciones para 2025.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Financiero</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Métricas</span>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Estrategia</span>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="/informes/2024" class="flex-1 text-center bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded text-sm font-medium">
                                    Ver online
                                </a>
                                <a href="/informes/2024/pdf" class="flex-1 text-center border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 px-4 rounded text-sm font-medium flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Descargar PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informe 2023 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="aspect-w-16 aspect-h-9 w-full bg-gray-100">
                            <div class="flex items-center justify-center h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900">Informe Anual 2023</h3>
                            <p class="text-sm text-gray-600 mt-2 mb-4">Análisis del año de lanzamiento de la plataforma y resultados del primer ejercicio completo.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Financiero</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Métricas</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Lanzamiento</span>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="/informes/2023" class="flex-1 text-center bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded text-sm font-medium">
                                    Ver online
                                </a>
                                <a href="/informes/2023/pdf" class="flex-1 text-center border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 px-4 rounded text-sm font-medium flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Descargar PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informe 2022 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="aspect-w-16 aspect-h-9 w-full bg-gray-100">
                            <div class="flex items-center justify-center h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900">Memoria fundacional 2022</h3>
                            <p class="text-sm text-gray-600 mt-2 mb-4">Documento de constitución, plan de negocio inicial y ronda de financiación semilla.</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Fundacional</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Inversión</span>
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">Estrategia</span>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="/informes/2022" class="flex-1 text-center bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded text-sm font-medium">
                                    Ver online
                                </a>
                                <a href="/informes/2022/pdf" class="flex-1 text-center border border-gray-300 hover:bg-gray-50 text-gray-700 py-2 px-4 rounded text-sm font-medium flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Descargar PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Métricas clave -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Métricas clave de crecimiento</h2>
                </div>
                <div class="bg-white rounded-lg shadow p-6 overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="flex flex-col">
                            <span class="text-sm text-gray-500 mb-1">MAU (Usuarios activos mensuales)</span>
                            <div class="flex items-end gap-2">
                                <span class="text-2xl font-bold text-gray-900">2.3M</span>
                                <span class="text-sm text-green-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    78%
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm text-gray-500 mb-1">Retención a 30 días</span>
                            <div class="flex items-end gap-2">
                                <span class="text-2xl font-bold text-gray-900">68%</span>
                                <span class="text-sm text-green-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    12%
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm text-gray-500 mb-1">Tiempo promedio en plataforma</span>
                            <div class="flex items-end gap-2">
                                <span class="text-2xl font-bold text-gray-900">16.5 min</span>
                                <span class="text-sm text-green-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    23%
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm text-gray-500 mb-1">Interacciones diarias por usuario</span>
                            <div class="flex items-end gap-2">
                                <span class="text-2xl font-bold text-gray-900">8.7</span>
                                <span class="text-sm text-green-600 font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    45%
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="relative h-64 mb-6">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-full h-full bg-indigo-50 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-indigo-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="text-indigo-400 text-sm font-medium ml-2">[Gráfico de crecimiento anual de usuarios]</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h3 class="text-md font-medium text-gray-900 mb-3">Distribución demográfica</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Edad</p>
                                    <ul class="space-y-1">
                                        <li class="flex justify-between items-center text-xs">
                                            <span>18-24</span>
                                            <span class="font-medium">32%</span>
                                        </li>
                                        <li class="flex justify-between items-center text-xs">
                                            <span>25-34</span>
                                            <span class="font-medium">43%</span>
                                        </li>
                                        <li class="flex justify-between items-center text-xs">
                                            <span>35-44</span>
                                            <span class="font-medium">18%</span>
                                        </li>
                                        <li class="flex justify-between items-center text-xs">
                                            <span>45+</span>
                                            <span class="font-medium">7%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Plataformas favoritas</p>
                                    <ul class="space-y-1">
                                        <li class="flex justify-between items-center text-xs">
                                            <span>PC</span>
                                            <span class="font-medium">47%</span>
                                        </li>
                                        <li class="flex justify-between items-center text-xs">
                                            <span>PlayStation</span>
                                            <span class="font-medium">28%</span>
                                        </li>
                                        <li class="flex justify-between items-center text-xs">
                                            <span>Xbox</span>
                                            <span class="font-medium">18%</span>
                                        </li>
                                        <li class="flex justify-between items-center text-xs">
                                            <span>Nintendo</span>
                                            <span class="font-medium">7%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h3 class="text-md font-medium text-gray-900 mb-3">Géneros más populares</h3>
                            <div class="space-y-2">
                                <div>
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>RPG</span>
                                        <span>28%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 28%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>Acción/Aventura</span>
                                        <span>24%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 24%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>FPS</span>
                                        <span>17%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 17%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>Estrategia</span>
                                        <span>12%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 12%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>Simulación</span>
                                        <span>9%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 9%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-1">
                                        <span>Otros</span>
                                        <span>10%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 10%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modelo de negocio -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Modelo de negocio y sostenibilidad</h2>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="p-6 border-b md:border-b-0 md:border-r border-gray-200">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Suscripciones Premium</h3>
                            <p class="text-sm text-gray-600">Plan mensual y anual que proporciona funciones avanzadas como estadísticas personalizadas, personalización de perfil y cero publicidad.</p>
                            <div class="mt-4 bg-indigo-50 rounded p-3">
                                <div class="flex justify-between items-center text-xs mb-1">
                                    <span class="font-medium">Cuota conversión</span>
                                    <span>8.7%</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="font-medium">Retención</span>
                                    <span>92% anual</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-b md:border-b-0 md:border-r border-gray-200">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Publicidad segmentada</h3>
                            <p class="text-sm text-gray-600">Formatos publicitarios no intrusivos especializados en la industria del videojuego, con alta relevancia para la audiencia.</p>
                            <div class="mt-4 bg-indigo-50 rounded p-3">
                                <div class="flex justify-between items-center text-xs mb-1">
                                    <span class="font-medium">CTR promedio</span>
                                    <span>3.2%</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="font-medium">eCPM</span>
                                    <span>$9.70</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Acuerdos con publishers</h3>
                            <p class="text-sm text-gray-600">Colaboraciones con desarrolladores y distribuidores para análisis de datos, experiencias personalizadas y campañas de marketing.</p>
                            <div class="mt-4 bg-indigo-50 rounded p-3">
                                <div class="flex justify-between items-center text-xs mb-1">
                                    <span class="font-medium">Partners activos</span>
                                    <span>87</span>
                                </div>
                                <div class="flex justify-between items-center text-xs">
                                    <span class="font-medium">Crecimiento</span>
                                    <span>+34% anual</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Distribución de ingresos (2024)</h3>
                        <div class="flex items-center gap-4">
                            <div class="flex-1 bg-gray-200 h-6 rounded-full overflow-hidden">
                                <div class="flex h-full">
                                    <div class="bg-indigo-600 h-full" style="width: 45%"></div>
                                    <div class="bg-indigo-400 h-full" style="width: 30%"></div>
                                    <div class="bg-indigo-200 h-full" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="flex-none space-y-2">
                                <div class="flex items-center gap-1">
                                    <span class="inline-block w-3 h-3 bg-indigo-600 rounded-full"></span>
                                    <span class="text-xs">Suscripciones (45%)</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="inline-block w-3 h-3 bg-indigo-400 rounded-full"></span>
                                    <span class="text-xs">Publicidad (30%)</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <span class="inline-block w-3 h-3 bg-indigo-200 rounded-full"></span>
                                    <span class="text-xs">Asociaciones (25%)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecciones y estrategia -->
            <div class="mb-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Proyecciones y estrategia</h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Objetivos estratégicos 2025</h3>
                            <div class="space-y-6">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="text-sm font-semibold text-gray-900">Expansión internacional</h4>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">En progreso</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">Lanzamiento de la plataforma en 12 nuevos idiomas y adaptación a mercados emergentes de Asia y Latinoamérica.</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <span class="text-xs text-gray-500">Inicio: Ene 2025</span>
                                        <span class="text-xs text-gray-500">Finalización: Dic 2025</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="text-sm font-semibold text-gray-900">Lanzamiento de API pública</h4>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Planificado</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">Desarrollo de una API pública para integraciones de terceros, permitiendo acceso seguro a datos anónimos y estáticas.</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 15%"></div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <span class="text-xs text-gray-500">Inicio: Mar 2025</span>
                                        <span class="text-xs text-gray-500">Finalización: Sep 2025</span>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="text-sm font-semibold text-gray-900">Aplicaciones móviles nativas</h4>
                                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Completado</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">Desarrollo y lanzamiento de aplicaciones nativas para iOS y Android con soporte para notificaciones y modo offline.</p>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <span class="text-xs text-gray-500">Inicio: Jul 2024</span>
                                        <span class="text-xs text-gray-500">Finalización: Feb 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Proyecciones financieras</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Ingresos anuales (millones USD)</h4>
                                    <div class="flex items-end gap-2 mb-1">
                                        <div class="bg-indigo-100 h-16 w-12 rounded flex items-end">
                                            <div class="bg-indigo-600 w-full h-6 rounded-b"></div>
                                        </div>
                                        <div class="bg-indigo-100 h-16 w-12 rounded flex items-end">
                                            <div class="bg-indigo-600 w-full h-9 rounded-b"></div>
                                        </div>
                                        <div class="bg-indigo-100 h-16 w-12 rounded flex items-end">
                                            <div class="bg-indigo-600 w-full h-12 rounded-b"></div>
                                        </div>
                                        <div class="bg-indigo-100 h-16 w-12 rounded flex items-end">
                                            <div class="bg-indigo-600 w-full h-16 rounded-b"></div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>2023</span>
                                        <span>2024</span>
                                        <span>2025</span>
                                        <span>2026</span>
                                    </div>
                                    <div class="flex justify-between items-center text-xs font-medium mt-1">
                                        <span>$2.1M</span>
                                        <span>$3.8M</span>
                                        <span>$5.6M</span>
                                        <span>$8.2M</span>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-gray-200">
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">EBITDA (% sobre ingresos)</h4>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="text-2xl font-bold text-gray-900">28%</span>
                                        <span class="text-sm text-green-600 font-medium flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            7%
                                        </span>
                                    </div>
                                    <p class="text-xs text-gray-600">Proyección 2025: 35% (Crecimiento +7% vs 2024)</p>
                                </div>

                                <div class="pt-4 border-t border-gray-200">
                                    <h4 class="text-sm font-medium text-gray-700 mb-2">Próxima ronda de financiación</h4>
                                    <p class="text-xs text-gray-600 mb-1">Serie B planificada para Q3 2025</p>
                                    <div class="flex justify-between items-center text-xs">
                                        <span class="font-medium">Objetivo:</span>
                                        <span>$25M</span>
                                    </div>
                                    <div class="flex justify-between items-center text-xs">
                                        <span class="font-medium">Valoración estimada:</span>
                                        <span>$150-175M</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contacto para inversores -->
            <div id="contacto" class="bg-indigo-50 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Contacto para inversores</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Información de contacto</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Email</h4>
                                    <p class="text-sm text-indigo-600">inversores@gameshelf.com</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Teléfono</h4>
                                    <p class="text-sm text-gray-600">+34 91 123 45 67</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Dirección</h4>
                                    <p class="text-sm text-gray-600">Calle Gran Vía 32, 4º planta<br>28013 Madrid, España</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Contacto</h4>
                                    <p class="text-sm text-gray-600">Elena Martínez<br>Directora de Relaciones con Inversores</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Solicitar información</h3>
                        <form>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
                                    <input type="text" id="name" name="name" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                    <input type="text" id="company" name="company" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
                                    <textarea id="message" name="message" rows="3" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="privacy" name="privacy" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="privacy" class="text-gray-500">He leído y acepto la política de privacidad</label>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded text-sm font-medium">
                                        Enviar solicitud
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Preguntas frecuentes -->
            <div class="mt-12">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Preguntas frecuentes</h2>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <dl class="divide-y divide-gray-200">
                        <div class="px-6 py-4">
                            <dt class="text-sm font-medium text-gray-900">¿Cómo puedo invertir en GameShelf?</dt>
                            <dd class="mt-2 text-sm text-gray-600">
                                Actualmente estamos en proceso de preparación para nuestra ronda Serie B que se abrirá en Q3 2025. Si estás interesado en participar, por favor contacta con nuestro departamento de inversores para más información sobre el proceso y requisitos.
                            </dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-sm font-medium text-gray-900">¿Cuál es la estrategia de crecimiento a largo plazo?</dt>
                            <dd class="mt-2 text-sm text-gray-600">
                                Nuestra estrategia se centra en tres pilares: (1) expansión internacional a mercados de alto crecimiento, (2) desarrollo de nuevas funcionalidades y servicios premium, y (3) consolidación de acuerdos con los principales actores de la industria para enriquecer la experiencia de usuario y diversificar fuentes de ingresos.
                            </dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-sm font-medium text-gray-900">¿Tenéis planes de salida a bolsa?</dt>
                            <dd class="mt-2 text-sm text-gray-600">
                                Aunque no descartamos una posible OPV en el futuro, actualmente nuestro enfoque está en el crecimiento sostenible y la consolidación de la plataforma. Estimamos que una posible salida a bolsa podría considerarse en un horizonte de 3-5 años, dependiendo de las condiciones del mercado.
                            </dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-sm font-medium text-gray-900">¿Cuál es la participación actual de los fundadores?</dt>
                            <dd class="mt-2 text-sm text-gray-600">
                                El equipo fundador mantiene aproximadamente un 45% de la participación de la compañía. Los inversores de la ronda semilla y Serie A poseen alrededor del 35% y 20% respectivamente. Nuestro compromiso es mantener una participación significativa del equipo fundador para garantizar la alineación de intereses a largo plazo.
                            </dd>
                        </div>
                        <div class="px-6 py-4">
                            <dt class="text-sm font-medium text-gray-900">¿Cómo protegéis vuestros datos y propiedad intelectual?</dt>
                            <dd class="mt-2 text-sm text-gray-600">
                                Contamos con una sólida estrategia de protección de IP que incluye el registro de marcas, patentes sobre algoritmos de recomendación y protección de secretos comerciales. Además, implementamos procesos rigurosos de seguridad de datos conformes a GDPR y otras regulaciones internacionales de privacidad.
                            </dd>
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