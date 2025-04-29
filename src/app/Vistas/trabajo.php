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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">OPORTUNIDADES DE TRABAJO</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Únete al equipo de GameShelf y ayúdanos a construir la mejor comunidad de videojuegos del mundo
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="#vacantes-actuales" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Ver vacantes actuales
                    </a>
                    <a href="#contacto" class="text-sm font-semibold leading-6 text-white">
                        Contáctanos <span aria-hidden="true">→</span>
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

            <!-- Sobre GameShelf -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Sobre GameShelf</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 mb-4">GameShelf nació con la misión de crear un espacio donde los amantes de los videojuegos pudieran descubrir, registrar y compartir su pasión. Inspirados en plataformas como Letterboxd e IMDb, estamos construyendo la comunidad definitiva para jugadores de todo el mundo.</p>

                    <p class="text-gray-700 mb-4">Desde nuestro lanzamiento, hemos crecido rápidamente y ahora buscamos personas talentosas y apasionadas por los videojuegos para unirse a nuestro equipo y ayudarnos a expandir la plataforma con nuevas características y experiencias.</p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="flex flex-col items-center text-center p-4 bg-indigo-50 rounded-lg">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Cultura colaborativa</h3>
                            <p class="text-sm text-gray-600">Fomentamos un ambiente de trabajo inclusivo donde todas las ideas son valoradas y el aprendizaje continuo es una prioridad.</p>
                        </div>

                        <div class="flex flex-col items-center text-center p-4 bg-indigo-50 rounded-lg">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Impacto global</h3>
                            <p class="text-sm text-gray-600">Tu trabajo llegará a millones de jugadores en todo el mundo, ayudándoles a descubrir y compartir sus experiencias de juego.</p>
                        </div>

                        <div class="flex flex-col items-center text-center p-4 bg-indigo-50 rounded-lg">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Flexibilidad y crecimiento</h3>
                            <p class="text-sm text-gray-600">Ofrecemos horarios flexibles, trabajo remoto y oportunidades claras de desarrollo profesional dentro de la empresa.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vacantes Actuales -->
            <div id="vacantes-actuales" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Vacantes Actuales</h2>

                <!-- Vacante 1 -->
                <div class="bg-white rounded-lg shadow mb-6 overflow-hidden">
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Desarrollador/a Frontend</h3>
                                <div class="flex mt-2 space-x-2">
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Remoto</span>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Tiempo completo</span>
                                </div>
                            </div>
                            <a href="#apply-form" class="rounded-md bg-indigo-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Aplicar
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Descripción</h4>
                        <p class="text-gray-700 mb-4">Buscamos un desarrollador frontend con experiencia en la creación de interfaces de usuario responsivas, accesibles y atractivas. Te unirás a nuestro equipo de desarrollo para mejorar la experiencia de usuario de GameShelf, implementar nuevas características y optimizar el rendimiento de la plataforma.</p>

                        <h4 class="text-lg font-medium text-gray-900 mb-3">Requisitos</h4>
                        <ul class="list-disc pl-5 mb-4 text-gray-700 space-y-2">
                            <li>2+ años de experiencia con HTML, CSS y JavaScript</li>
                            <li>Experiencia con frameworks modernos como React, Vue o Angular</li>
                            <li>Conocimiento de Tailwind CSS (preferible)</li>
                            <li>Atención al detalle y pasión por crear interfaces intuitivas</li>
                            <li>Conocimiento sobre buenas prácticas de accesibilidad web</li>
                            <li>Capacidad para trabajar en equipo y comunicarse efectivamente</li>
                            <li>Interés por los videojuegos (no es imprescindible ser un experto)</li>
                        </ul>

                        <h4 class="text-lg font-medium text-gray-900 mb-3">Beneficios</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Salario competitivo basado en experiencia</li>
                            <li>Trabajo remoto con flexibilidad horaria</li>
                            <li>Presupuesto anual para formación y desarrollo</li>
                            <li>Acceso a eventos y lanzamientos de videojuegos</li>
                            <li>Plan de participación en la empresa después del primer año</li>
                        </ul>
                    </div>
                </div>

                <!-- Vacante 2 -->
                <div class="bg-white rounded-lg shadow mb-6 overflow-hidden">
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Especialista en Contenido de Videojuegos</h3>
                                <div class="flex mt-2 space-x-2">
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Remoto</span>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Tiempo completo</span>
                                </div>
                            </div>
                            <a href="#apply-form" class="rounded-md bg-indigo-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Aplicar
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Descripción</h4>
                        <p class="text-gray-700 mb-4">¿Eres un apasionado de los videojuegos con excelentes habilidades de redacción? Buscamos a alguien que ayude a expandir y mantener nuestra base de datos de juegos, escribir artículos sobre lanzamientos próximos, crear guías editoriales y colaborar en la estrategia de contenidos de la plataforma.</p>

                        <h4 class="text-lg font-medium text-gray-900 mb-3">Requisitos</h4>
                        <ul class="list-disc pl-5 mb-4 text-gray-700 space-y-2">
                            <li>Conocimiento profundo de la industria de los videojuegos</li>
                            <li>Excelentes habilidades de redacción y edición en español</li>
                            <li>Experiencia previa creando contenido relacionado con videojuegos</li>
                            <li>Capacidad para investigar y sintetizar información</li>
                            <li>Familiaridad con sistemas de gestión de contenidos</li>
                            <li>Inglés fluido (nivel B2 o superior)</li>
                        </ul>

                        <h4 class="text-lg font-medium text-gray-900 mb-3">Beneficios</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Salario competitivo basado en experiencia</li>
                            <li>Trabajo remoto con flexibilidad horaria</li>
                            <li>Acceso anticipado a juegos para reseñas</li>
                            <li>Presupuesto para asistir a eventos de la industria</li>
                            <li>Oportunidades de crecimiento en el equipo editorial</li>
                        </ul>
                    </div>
                </div>

                <!-- Vacante 3 -->
                <div class="bg-white rounded-lg shadow mb-6 overflow-hidden">
                    <div class="p-6 border-b border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Community Manager</h3>
                                <div class="flex mt-2 space-x-2">
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Remoto</span>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Medio tiempo</span>
                                </div>
                            </div>
                            <a href="#apply-form" class="rounded-md bg-indigo-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Aplicar
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-medium text-gray-900 mb-3">Descripción</h4>
                        <p class="text-gray-700 mb-4">Estamos buscando un Community Manager entusiasta para gestionar nuestra presencia en redes sociales, interactuar con nuestra comunidad de usuarios y ayudar a construir una comunidad vibrante y participativa alrededor de GameShelf.</p>

                        <h4 class="text-lg font-medium text-gray-900 mb-3">Requisitos</h4>
                        <ul class="list-disc pl-5 mb-4 text-gray-700 space-y-2">
                            <li>Experiencia previa en gestión de comunidades online</li>
                            <li>Conocimiento de las principales plataformas de redes sociales</li>
                            <li>Excelentes habilidades de comunicación escrita</li>
                            <li>Capacidad para crear y coordinar calendarios de contenido</li>
                            <li>Familiaridad con herramientas de análisis de redes sociales</li>
                            <li>Pasión por los videojuegos y comprensión de la cultura gamer</li>
                        </ul>

                        <h4 class="text-lg font-medium text-gray-900 mb-3">Beneficios</h4>
                        <ul class="list-disc pl-5 text-gray-700 space-y-2">
                            <li>Salario competitivo por media jornada</li>
                            <li>Flexibilidad horaria total</li>
                            <li>Posibilidad de crecimiento a tiempo completo</li>
                            <li>Acceso a eventos exclusivos para creación de contenido</li>
                            <li>Formación continua en marketing digital</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Formulario de aplicación -->
            <div id="apply-form" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Aplicar a una vacante</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Nombre completo</label>
                                <input type="text" id="full-name" name="full-name" class="w-full rounded-md border border-gray-300 p-2 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Tu nombre completo">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                                <input type="email" id="email" name="email" class="w-full rounded-md border border-gray-300 p-2 focus:border-indigo-500 focus:ring-indigo-500" placeholder="tucorreo@ejemplo.com">
                            </div>
                        </div>

                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Puesto al que aplicas</label>
                            <select id="position" name="position" class="w-full rounded-md border border-gray-300 p-2 focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="">Selecciona una opción</option>
                                <option value="frontend">Desarrollador/a Frontend</option>
                                <option value="content">Especialista en Contenido de Videojuegos</option>
                                <option value="community">Community Manager</option>
                                <option value="other">Otro (especificar en la carta)</option>
                            </select>
                        </div>

                        <div>
                            <label for="portfolio" class="block text-sm font-medium text-gray-700 mb-1">LinkedIn o portfolio (URL)</label>
                            <input type="url" id="portfolio" name="portfolio" class="w-full rounded-md border border-gray-300 p-2 focus:border-indigo-500 focus:ring-indigo-500" placeholder="https://...">
                        </div>

                        <div>
                            <label for="cv" class="block text-sm font-medium text-gray-700 mb-1">Currículum (PDF)</label>
                            <input type="file" id="cv" name="cv" accept=".pdf" class="w-full rounded-md border border-gray-300 p-2 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <div>
                            <label for="cover" class="block text-sm font-medium text-gray-700 mb-1">Carta de presentación</label>
                            <textarea id="cover" name="cover" rows="4" class="w-full rounded-md border border-gray-300 p-2 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Cuéntanos por qué te gustaría unirte a GameShelf y qué puedes aportar..."></textarea>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-600">Acepto la <a href="/privacidad" class="text-indigo-600 hover:text-indigo-500">política de privacidad</a> y el tratamiento de mis datos para este proceso de selección</label>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Enviar aplicación
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Testimonios -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Lo que dice nuestro equipo</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Testimonio 1 -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="/api/placeholder/48/48" alt="Foto de perfil">
                            </div>
                            <div>
                                <div class="text-yellow-400 flex mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">"Trabajar en GameShelf ha sido una experiencia increíble. Como desarrollador, me siento valorado y tengo la libertad de proponer ideas innovadoras. El ambiente de trabajo es colaborativo y todos compartimos la pasión por crear la mejor plataforma para los amantes de los videojuegos."</p>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">Miguel Rodríguez</p>
                                            <p class="text-xs text-gray-500">Desarrollador Backend • 1 año en GameShelf</p>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonio 2 -->
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="/api/placeholder/48/48" alt="Foto de perfil">
                                </div>
                                <div>
                                    <div class="text-yellow-400 flex mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <p class="text-sm text-gray-700 mb-3">"Como especialista en contenido, cada día es un nuevo desafío emocionante. Poder combinar mi pasión por los videojuegos con mi trabajo es increíble. El equipo es diverso y todos aportamos perspectivas únicas que enriquecen la plataforma."</p>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">Laura Gómez</p>
                                        <p class="text-xs text-gray-500">Especialista en Contenido • 1.5 años en GameShelf</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preguntas frecuentes -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Preguntas frecuentes</h2>
                    <div class="bg-white rounded-lg shadow divide-y divide-gray-100">
                        <!-- Pregunta 1 -->
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo es el proceso de selección en GameShelf?</h3>
                            <p class="text-gray-700">Nuestro proceso de selección generalmente consta de 4 etapas: evaluación de currículum y carta de presentación, entrevista inicial con RRHH, prueba técnica o práctica relacionada con el puesto, y entrevista final con el equipo. Todo el proceso suele durar entre 2 y 3 semanas.</p>
                        </div>

                        <!-- Pregunta 2 -->
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">¿Ofrecen posibilidades de trabajo remoto?</h3>
                            <p class="text-gray-700">Sí, GameShelf es una empresa 100% remota. Nuestro equipo trabaja desde diferentes ciudades y países, lo que nos permite contar con el mejor talento independientemente de su ubicación. Utilizamos herramientas de colaboración que nos permiten mantener una comunicación fluida y eficiente.</p>
                        </div>

                        <!-- Pregunta 3 -->
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué oportunidades de crecimiento ofrece GameShelf?</h3>
                            <p class="text-gray-700">Fomentamos el desarrollo profesional de todos los miembros del equipo. Ofrecemos planes de carrera personalizados, formación continua y la posibilidad de rotar entre diferentes áreas para adquirir nuevas habilidades. A medida que la plataforma crece, surgen nuevas oportunidades para asumir mayores responsabilidades.</p>
                        </div>

                        <!-- Pregunta 4 -->
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">¿Es necesario ser un experto en videojuegos para trabajar en GameShelf?</h3>
                            <p class="text-gray-700">Depende del puesto. Para roles como especialista en contenido o community manager, un conocimiento profundo de la industria de videojuegos es esencial. Sin embargo, para posiciones técnicas como desarrollo o diseño, valoramos más tus habilidades profesionales, aunque siempre es un plus tener interés en el mundo de los videojuegos.</p>
                        </div>

                        <!-- Pregunta 5 -->
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">¿Aceptan candidaturas espontáneas?</h3>
                            <p class="text-gray-700">¡Absolutamente! Si no ves una vacante que se ajuste a tu perfil pero crees que puedes aportar valor a GameShelf, no dudes en enviarnos tu currículum a <a href="mailto:careers@gameshelf.com" class="text-indigo-600 hover:text-indigo-500">careers@gameshelf.com</a>. Siempre estamos atentos a incorporar talento excepcional a nuestro equipo.</p>
                        </div>
                    </div>
                </div>

                <!-- Contacto para más información -->
                <div id="contacto" class="bg-indigo-50 rounded-xl p-8">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">¿Tienes más preguntas?</h2>
                        <p class="text-gray-600 mt-2">Ponte en contacto con nuestro equipo de recursos humanos</p>
                    </div>
                    <div class="flex flex-col md:flex-row md:space-x-8 justify-center items-center">
                        <div class="flex items-center space-x-3 mb-4 md:mb-0">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <a href="mailto:careers@gameshelf.com" class="text-indigo-600 hover:text-indigo-500">careers@gameshelf.com</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <a href="/faq-empleo" class="text-indigo-600 hover:text-indigo-500">Preguntas frecuentes sobre empleo</a>
                        </div>
                    </div>
                    <div class="mt-8 text-center">
                        <a href="#apply-form" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Envía tu candidatura ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>