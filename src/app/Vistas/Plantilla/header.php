<nav class="py-5 lg:fixed transition-all top-0 left-0 z-50 duration-500 w-full bg-white border-b border-indigo-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="w-full flex flex-col lg:flex-row">
            <div class="flex justify-between lg:flex-row">
                <a href="/inicio" class="flex items-center">
                    <svg width="164" height="33" viewBox="0 0 164 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Monograma GS con degradado -->
                        <defs>
                            <linearGradient id="grad-gs" x1="0" y1="0" x2="1" y2="1" gradientUnits="objectBoundingBox">
                                <stop offset="0%" stop-color="#9038FF"/>
                                <stop offset="100%" stop-color="#5551FF"/>
                            </linearGradient>
                        </defs>

                        <!-- Texto GS estilizado -->
                        <text x="0" y="24" font-family="Arial, sans-serif" font-size="28" font-weight="700" fill="url(#grad-gs)">
                            GS
                        </text>

                        <!-- Nombre de la marca -->
                        <text x="48" y="24" font-family="Arial, sans-serif" font-size="18" font-weight="600" fill="#101828">
                            GAMESHELF
                        </text>
                    </svg>
                </a>
                <button data-collapse-toggle="navbar" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Abrir menú principal</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden w-full lg:flex lg:pl-11 max-lg:mt-1 max-lg:overflow-y-auto" id="navbar">
                <ul class="flex lg:items-center lg:justify-center flex-col lg:gap-6 gap-4 max-lg:pt-4 max-lg:mb-4 lg:mt-0 lg:flex-row lg:mx-auto ">
                    <li>
                        <a href="/inicio" class="nav-link block lg:px-2 lg:text-left text-base text-gray-900 font-medium transition-all duration-500 hover:text-gray-500">Inicio</a>
                    </li>
                    <li>
                        <a href="/videojuegos" class="nav-link block lg:px-2 lg:text-left text-gray-900 text-base font-medium transition-all duration-500 hover:text-gray-500">Videojuegos</a>
                    </li>
                    <li>
                        <a href="/calendario" class="nav-link block lg:px-2 lg:text-left text-gray-900 text-base font-medium transition-all duration-500 hover:text-gray-500">Calendario</a>
                    </li>
                    <li class="relative">
                        <!-- Dropdown menu -->
                        <div id="menu1" aria-labelledby="menu1" class="animate-fade z-10 relative top-3 max-lg:mb-3 lg:absolute lg:top-14 lg:-left-80 bg-white rounded-lg shadow-lg max-lg:shadow-inner shadow-gray-200 xl:p-8 lg:p-4 p-2 lg:min-w-[800px] md:min-w-[500px] min-w-full hidden">
                            <div class="flex flex-col md:flex-row justify-between">
                                <ul class="text-sm text-gray-700 md:w-1/2" aria-labelledby="dropdownLargeButton">
                                    <h6 class="font-medium text-sm text-gray-500 mb-2">
                                        Funcionalidades
                                    </h6>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 transition-all duration-500 hover:bg-gray-50 hover:rounded-xl flex items-center">
                                            <div class="bg-orange-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <!-- Icono SVG -->
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Notificaciones
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    Las notificaciones en tiempo real te mantienen siempre al día.
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                            <div class="bg-emerald-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <!-- Icono SVG -->
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Análisis
                                                    <span class="bg-indigo-50 text-indigo-500 text-xs font-medium mr-2 px-2.5 py-1 rounded-full h-5 ml-4">Nuevo</span>
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    Analiza los datos para tomar decisiones empresariales más informadas y precisas.
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                            <div class="bg-blue-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <!-- Icono SVG -->
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Integraciones
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    Empieza aprovechando la integración con otros servicios.
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                            <div class="bg-blue-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M4.75 22.1667C4.75 26.5389 8.29441 30.0833 12.6667 30.0833H22.0227C22.9767 30.0833 23.75 29.31 23.75 28.3561V15.9773C23.75 15.0233 22.9767 14.25 22.0227 14.25H12.6667C8.29441 14.25 4.75 17.7944 4.75 22.1667Z" fill="#3B82F6"></path>
                                                    <path d="M33.25 14.2502C33.25 18.6224 29.7056 22.1668 25.3333 22.1668H15.9773C15.0233 22.1668 14.25 21.3935 14.25 20.4396V8.06077C14.25 7.10682 15.0233 6.3335 15.9773 6.3335H25.3333C29.7056 6.3335 33.25 9.87791 33.25 14.2502Z" fill="#3B82F6"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Integrations
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    Get started by taking advantage of integration
                                                    with other services
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- Menú Despliegue Usuario-->
                                    <li aria-labelledby="dropdownNavbarLink">
                                        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Menú
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                                <li>
                                                    <a href="javascript:;" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Resumen</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Mis descargas</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Facturación</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Recompensas</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="text-sm text-gray-700 dark:text-gray-400 md:w-1/2" aria-labelledby="dropdownLargeButton">
                                    <h6 class="font-medium text-sm text-gray-500 mb-2">
                                        Servicios
                                    </h6>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                            <div class="bg-rose-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M15.092 11.4813C16.0377 10.9509 17.2126 10.9509 18.1583 11.4813L25.4363 15.5637C26.3539 16.0783 26.9168 17.0148 26.9168 18.0265V26.3072C26.9168 27.3189 26.3539 28.2553 25.4363 28.77L18.1583 32.8523C17.2126 33.3828 16.0377 33.3828 15.092 32.8523L7.81401 28.77C6.89644 28.2553 6.3335 27.3189 6.3335 26.3072V18.0265C6.3335 17.0148 6.89644 16.0783 7.81401 15.5637L15.092 11.4813Z" fill="#F43F5E"></path>
                                                    <path d="M20.2043 4.82947C21.0987 4.30099 22.2098 4.30099 23.1041 4.82946L29.9869 8.8966C30.8547 9.40936 31.3871 10.3423 31.3871 11.3502V19.6001C31.3871 20.608 30.8547 21.541 29.9869 22.0537L23.1041 26.1209C22.2098 26.6494 21.0987 26.6494 20.2044 26.1209L13.3215 22.0537C12.4538 21.541 11.9214 20.608 11.9214 19.6001V11.3502C11.9214 10.3423 12.4538 9.40936 13.3215 8.8966L20.2043 4.82947Z" fill="#F43F5E"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Seguridad
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    Para garantizar tu privacidad, toda la información está altamente encriptada
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                            <div class="bg-indigo-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M11.1086 7.89499C11.4505 6.95739 12.342 6.3335 13.34 6.3335H23.5237C25.1727 6.3335 26.3199 7.97275 25.755 9.522L20.5597 23.772C20.2179 24.7096 19.3264 25.3335 18.3284 25.3335H8.14465C6.49564 25.3335 5.34848 23.6942 5.91332 22.145L11.1086 7.89499Z" fill="#4F46E5"></path>
                                                    <path d="M17.4416 14.228C17.7835 13.2904 18.675 12.6665 19.673 12.6665H29.8567C31.5057 12.6665 32.6529 14.3058 32.088 15.855L26.8927 30.105C26.5509 31.0426 25.6594 31.6665 24.6614 31.6665H14.4777C12.8286 31.6665 11.6815 30.0273 12.2463 28.478L17.4416 14.228Z" fill="#4F46E5"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Documentación
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    Una documentación bien organizada te ahorrará mucho tiempo
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:;" class="px-3 py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                            <div class="bg-cyan-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M24.5114 33.2423C26.9097 33.0921 29.1569 32.0322 30.7847 30.2836C32.4125 28.535 33.2952 26.2325 33.249 23.856C33.2028 21.4795 32.2312 19.2123 30.5366 17.5269C28.842 15.8415 26.5553 14.868 24.1529 14.8091H16.5879C15.6055 14.8091 14.8096 15.5892 14.8096 16.568V24.0221C14.8075 25.2655 15.06 26.4965 15.5517 27.6408C16.0433 28.7851 16.7641 29.8192 17.6706 30.6806C18.5771 31.5421 19.6505 32.2132 20.8261 32.6534C22.0018 33.0937 23.2554 33.294 24.5114 33.2423Z" fill="#06B6D4"></path>
                                                    <path d="M13.4894 4.75796C11.091 4.90819 8.84381 5.96805 7.21604 7.71666C5.58826 9.46527 4.7055 11.7677 4.75173 14.1442C4.79795 16.5207 5.76959 18.7879 7.46415 20.4733C9.15872 22.1587 11.4455 23.1323 13.8479 23.1912H21.4129C21.8845 23.1912 22.3368 23.0059 22.6703 22.676C23.0038 22.3461 23.1912 21.8988 23.1912 21.4323V13.9781C23.1932 12.7347 22.9408 11.5038 22.4491 10.3595C21.9574 9.21514 21.2366 8.18109 20.3301 7.31962C19.4236 6.45815 18.3503 5.78708 17.1746 5.34683C15.9989 4.90659 14.7454 4.70628 13.4894 4.75796Z" fill="#06B6D4"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 w-4/5">
                                                <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                    Soporte
                                                </h5>
                                                <p class="text-xs font-medium text-gray-400">
                                                    ¿Necesitas ayuda? Nuestro soporte está disponible en cualquier momento
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="relative">
                        <button data-target="menu2" class="dropdown-toggle flex items-center justify-between text-gray-900 text-center text-base font-medium transition-all duration-500 lg:px-2 mr-auto lg:text-left lg:m-0 hover:text-gray-500">
                            Comunidad
                            <svg class="w-3 h-2 ml-1.5" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L3.58579 3.58579C4.25245 4.25245 4.58579 4.58579 5 4.58579C5.41421 4.58579 5.74755 4.25245 6.41421 3.58579L9 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <!-- Menu Hamburguesa -->
                        <div id="menu2" aria-labelledby="menu2" class="dropdown-menu z-10 relative top-3 max-lg:mb-3 lg:absolute lg:top-14 font-normal bg-white rounded-lg shadow-md shadow-gray-200 w-64 xl:p-8 lg:p-4 p-2 hidden">
                            <ul class="text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <h6 class="text-sm text-gray-500 font-medium mb-2">
                                    Funcionalidades
                                </h6>
                                <li>
                                    <a href="javascript:;" class="block py-3 hover:text-prime-blue-700 text-base text-gray-900 font-semibold transition-all duration-500">Notificaciones</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="block py-3 hover:text-prime-blue-700 text-base text-gray-900 font-semibold transition-all duration-500">Analítica</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="block py-3 hover:text-prime-blue-700 text-base text-gray-900 font-semibold transition-all duration-500">Integraciones</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="block py-3 hover:text-prime-blue-700 text-base text-gray-900 font-semibold transition-all duration-500">Seguridad</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="block py-3 hover:text-prime-blue-700 text-base text-gray-900 font-semibold transition-all duration-500">Documentación</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="block py-3 hover:text-prime-blue-700 text-base text-gray-900 font-semibold transition-all duration-500">Soporte</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Inicio de sesion y registro-->
                <div class="flex lg:items-center w-full justify-start flex-col lg:flex-row lg:w-max gap-5 lg:ml-14 lg:justify-end">
                    <a href="/inicioSesion" class="bg-indigo-50 text-indigo-500 rounded-full cursor-pointer leading-6 font-medium text-center transition-all duration-500 py-2 px-5 text-sm hover:bg-indigo-100">
                        Iniciar Sesión
                    </a>
                    <a href="/registro" class="bg-indigo-500 text-white rounded-full cursor-pointer leading-6 font-medium text-center shadow-xs transition-all duration-500 py-2 px-5 text-sm hover:bg-indigo-600">
                        Registrarse
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>