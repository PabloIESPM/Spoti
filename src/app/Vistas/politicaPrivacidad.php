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
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-8 text-center shadow-2xl sm:px-16 mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Política de Privacidad</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Conoce cómo protegemos y tratamos tus datos en GAMESHELF
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

            <!-- Contenido de la Política de Privacidad -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-12">
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Última actualización: Abril 2025</h3>
                    <p class="text-gray-600 mb-4">
                        En GAMESHELF, valoramos tu privacidad y nos comprometemos a proteger la información personal que compartes con nosotros. Esta política de privacidad explica cómo recopilamos, utilizamos y protegemos tus datos cuando utilizas nuestra plataforma.
                    </p>
                    <p class="text-gray-600">
                        Al registrarte y utilizar GAMESHELF, aceptas las prácticas descritas en esta política. Te recomendamos leerla detenidamente.
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">1. Información que recopilamos</h3>
                    <div class="bg-indigo-50 rounded-lg p-6 mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">1.1 Información proporcionada por ti</h4>
                        <ul class="list-disc pl-6 text-gray-600 space-y-2">
                            <li>Información de registro: nombre de usuario, dirección de correo electrónico y contraseña.</li>
                            <li>Información de perfil: foto de perfil, biografía, ubicación (opcional), plataformas de juego preferidas y géneros favoritos.</li>
                            <li>Contenido generado: reseñas, valoraciones, comentarios, listas y cualquier otro contenido que publiques en la plataforma.</li>
                            <li>Mensajes y comunicaciones: intercambios con otros usuarios a través de nuestras funciones de mensajería.</li>
                        </ul>
                    </div>

                    <div class="bg-indigo-50 rounded-lg p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">1.2 Información recopilada automáticamente</h4>
                        <ul class="list-disc pl-6 text-gray-600 space-y-2">
                            <li>Datos de uso: páginas visitadas, juegos consultados, tiempo pasado en la plataforma y patrones de navegación.</li>
                            <li>Información del dispositivo: tipo de dispositivo, sistema operativo, navegador, dirección IP y configuración de idioma.</li>
                            <li>Cookies y tecnologías similares: utilizamos cookies para mejorar tu experiencia, recordar tus preferencias y analizar el uso de nuestra plataforma.</li>
                        </ul>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">2. Cómo utilizamos tu información</h3>
                    <p class="text-gray-600 mb-4">Utilizamos la información recopilada para:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div class="bg-white border border-indigo-100 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <h4 class="font-medium text-gray-900">Proporcionar y mejorar el servicio</h4>
                            </div>
                            <p class="text-sm text-gray-600 pl-11">Gestionar tu cuenta, personalizar tu experiencia y desarrollar nuevas funcionalidades basadas en el comportamiento de los usuarios.</p>
                        </div>

                        <div class="bg-white border border-indigo-100 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </div>
                                <h4 class="font-medium text-gray-900">Personalización</h4>
                            </div>
                            <p class="text-sm text-gray-600 pl-11">Ofrecerte recomendaciones de juegos basadas en tus intereses, actividad y preferencias.</p>
                        </div>

                        <div class="bg-white border border-indigo-100 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                </div>
                                <h4 class="font-medium text-gray-900">Comunicaciones</h4>
                            </div>
                            <p class="text-sm text-gray-600 pl-11">Enviarte notificaciones, actualizaciones y responder a tus consultas o solicitudes.</p>
                        </div>

                        <div class="bg-white border border-indigo-100 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <div class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h4 class="font-medium text-gray-900">Análisis y estadísticas</h4>
                            </div>
                            <p class="text-sm text-gray-600 pl-11">Comprender cómo los usuarios interactúan con GAMESHELF para mejorar nuestros servicios y experiencia.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">3. Compartir información</h3>
                    <p class="text-gray-600 mb-4">Tu información puede ser compartida en las siguientes circunstancias:</p>
                    <div class="bg-indigo-50 rounded-lg p-6 mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Con otros usuarios</h4>
                        <p class="text-gray-600 mb-2">La información de perfil que elijas hacer pública, como tu nombre de usuario, foto de perfil, reseñas, valoraciones, listas y comentarios, será visible para otros usuarios de GAMESHELF.</p>
                        <p class="text-gray-600">Puedes controlar qué información se hace pública a través de tu configuración de privacidad.</p>
                    </div>

                    <div class="bg-indigo-50 rounded-lg p-6 mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Con proveedores de servicios</h4>
                        <p class="text-gray-600">Trabajamos con terceros que nos ayudan a operar, desarrollar y mejorar GAMESHELF. Estos proveedores tienen acceso limitado a tu información y están obligados contractualmente a protegerla.</p>
                    </div>

                    <div class="bg-indigo-50 rounded-lg p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">Con requisitos legales</h4>
                        <p class="text-gray-600">Podemos divulgar información si creemos de buena fe que es necesario para cumplir con una obligación legal, proteger nuestros derechos o los derechos de otros, investigar fraudes o responder a una solicitud gubernamental.</p>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">4. Tus derechos y opciones</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow p-5">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h4 class="text-md font-medium text-gray-900 mb-2">Configuración de cuenta</h4>
                            <p class="text-sm text-gray-600">Puedes actualizar, corregir o eliminar tu información personal a través de la configuración de tu cuenta en cualquier momento.</p>
                        </div>

                        <div class="bg-white rounded-lg shadow p-5">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                </svg>
                            </div>
                            <h4 class="text-md font-medium text-gray-900 mb-2">Configuración de privacidad</h4>
                            <p class="text-sm text-gray-600">Controla quién puede ver tu perfil, actividad y contenido a través de nuestras opciones de privacidad.</p>
                        </div>

                        <div class="bg-white rounded-lg shadow p-5">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-md font-medium text-gray-900 mb-2">Comunicaciones</h4>
                            <p class="text-sm text-gray-600">Puedes optar por no recibir correos electrónicos promocionales siguiendo las instrucciones de cancelación de suscripción incluidas en estos mensajes.</p>
                        </div>

                        <div class="bg-white rounded-lg shadow p-5">
                            <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                            <h4 class="text-md font-medium text-gray-900 mb-2">Eliminación de cuenta</h4>
                            <p class="text-sm text-gray-600">Puedes eliminar tu cuenta en cualquier momento desde la configuración. Ten en cuenta que algunos datos pueden permanecer en nuestras copias de seguridad por un tiempo limitado.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">5. Seguridad de los datos</h3>
                    <p class="text-gray-600 mb-4">
                        Implementamos medidas de seguridad técnicas, administrativas y físicas diseñadas para proteger tu información personal contra acceso no autorizado, pérdida o alteración. Sin embargo, ningún sistema de seguridad en Internet es completamente infalible.
                    </p>
                    <div class="bg-indigo-50 rounded-lg p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">Medidas de seguridad implementadas:</h4>
                        <ul class="list-disc pl-6 text-gray-600 space-y-2">
                            <li>Cifrado de datos sensibles, incluidas las contraseñas</li>
                            <li>Protocolos de conexión segura (HTTPS/SSL)</li>
                            <li>Acceso restringido a la información personal</li>
                            <li>Monitoreo regular de sistemas para detectar vulnerabilidades</li>
                            <li>Copias de seguridad periódicas</li>
                        </ul>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">6. Menores</h3>
                    <p class="text-gray-600 mb-4">
                        GAMESHELF está dirigido a personas mayores de 16 años. No recopilamos a sabiendas información personal de menores de 16 años. Si creemos que hemos recopilado información de un menor de 16 años, tomaremos medidas para eliminar esa información lo más rápido posible.
                    </p>
                    <p class="text-gray-600">
                        Si eres padre/madre o tutor y crees que tu hijo/a nos ha proporcionado información personal, por favor contáctanos para que podamos tomar las medidas necesarias.
                    </p>
                </div>

                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">7. Cambios en esta política</h3>
                    <p class="text-gray-600 mb-4">
                        Podemos actualizar esta política de privacidad periódicamente para reflejar cambios en nuestras prácticas o por otros motivos operativos, legales o reglamentarios. Te notificaremos sobre cualquier cambio material a través de un aviso en nuestra plataforma o por correo electrónico antes de que los cambios entren en vigor.
                    </p>
                    <p class="text-gray-600">
                        La fecha de la última actualización se indica al principio de esta política.
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3">8. Contacto</h3>
                    <p class="text-gray-600 mb-4">
                        Si tienes preguntas, inquietudes o solicitudes relacionadas con esta política de privacidad o sobre cómo tratamos tu información personal, contáctanos a través de:
                    </p>
                    <div class="bg-indigo-50 rounded-lg p-6 flex flex-col items-center justify-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Correo electrónico:</h4>
                        <p class="text-gray-600 font-medium">privacidad@gameshelf.com</p>
                        <a href="mailto:privacidad@gameshelf.com" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Contactar ahora
                        </a>
                    </div>
                </div>
            </div>

            <!-- Preguntas frecuentes sobre privacidad -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Preguntas frecuentes sobre privacidad</h2>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <button class="flex w-full text-left" onclick="toggleFAQ(this)">
                            <span class="text-md font-semibold text-gray-900 flex-grow">¿Cómo puedo ver los datos que GAMESHELF tiene sobre mí?</span>
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden mt-4 text-gray-600">
                            <p>Puedes solicitar una copia de tus datos personales a través de la sección "Configuración > Privacidad > Mis datos" de tu cuenta. Allí encontrarás la opción para descargar un archivo con toda la información que tenemos sobre ti. La solicitud puede tardar hasta 72 horas en procesarse.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <button class="flex w-full text-left" onclick="toggleFAQ(this)">
                            <span class="text-md font-semibold text-gray-900 flex-grow">¿Qué ocurre con mis reseñas y valoraciones si elimino mi cuenta?</span>
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden mt-4 text-gray-600">
                            <p>Cuando eliminas tu cuenta, puedes elegir entre dos opciones:</p>
                            <ul class="list-disc pl-6 mt-2 space-y-1">
                                <li>Eliminar todo tu contenido (reseñas, valoraciones, listas, etc.)</li>
                                <li>Mantener tu contenido de forma anónima (se eliminará tu nombre de usuario y datos personales pero se conservarán tus contribuciones)</li>
                            </ul>
                            <p class="mt-2">Esta elección se presenta durante el proceso de eliminación de la cuenta.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <button class="flex w-full text-left" onclick="toggleFAQ(this)">
                            <span class="text-md font-semibold text-gray-900 flex-grow">¿GAMESHELF comparte mis datos con desarrolladores o editores de videojuegos?</span>
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden mt-4 text-gray-600">
                            <p>Podemos compartir datos agregados y anónimos con desarrolladores y editores para ayudarles a entender cómo los jugadores reciben sus juegos. Estos datos nunca incluyen información personal identificable y siempre se presentan como estadísticas generales (por ejemplo, valoraciones medias o distribución demográfica de los jugadores).</p>
                            <p class="mt-2">Nunca compartimos tus datos personales individuales con terceros sin tu consentimiento explícito.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <button class="flex w-full text-left" onclick="toggleFAQ(this)">
                            <span class="text-md font-semibold text-gray-900 flex-grow">¿Cómo puedo controlar quién ve mi perfil y actividad?</span>
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden mt-4 text-gray-600">
                            <p>Puedes ajustar la visibilidad de tu perfil y actividad a través de "Configuración > Privacidad > Visibilidad", donde encontrarás las siguientes opciones:</p>
                            <ul class="list-disc pl-6 mt-2 space-y-1">
                                <li>Público: Visible para cualquier usuario de GAMESHELF</li>
                                <li>Solo seguidores: Visible solo para usuarios que sigues o te siguen</li>
                                <li>Privado: Visible solo para ti</li>
                            </ul>
                            <p class="mt-2">También puedes configurar la privacidad de manera específica para diferentes elementos como colección de juegos, reseñas, valoraciones y listas.</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <button class="flex w-full text-left" onclick="toggleFAQ(this)">
                            <span class="text-md font-semibold text-gray-900 flex-grow">¿Qué cookies utiliza GAMESHELF?</span>
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden mt-4 text-gray-600">
                            <p>Utilizamos diferentes tipos de cookies:</p>
                            <ul class="list-disc pl-6 mt-2 space-y-1">
                                <li><strong>Cookies esenciales:</strong> Necesarias para el funcionamiento de la plataforma (autenticación, preferencias básicas)</li>
                                <li><strong>Cookies funcionales:</strong> Mejoran tu experiencia recordando tus preferencias</li>
                                <li><strong>Cookies analíticas:</strong> Nos ayudan a entender cómo utilizas GAMESHELF para mejorar nuestros servicios</li>
                                <li><strong>Cookies de publicidad:</strong> Permiten mostrar anuncios más relevantes (estas cookies son opcionales)</li>
                            </ul>
                            <p class="mt-2">Puedes gestionar tus preferencias de cookies en cualquier momento desde "Configuración > Privacidad > Cookies".</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Compromiso de privacidad -->
            <div class="bg-indigo-50 rounded-xl p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Nuestro compromiso con tu privacidad</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Transparencia</h3>
                        <p class="text-sm text-gray-600">Nos comprometemos a ser claros sobre qué datos recopilamos y cómo los utilizamos, evitando lenguaje técnico o confuso.</p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Control</h3>
                        <p class="text-sm text-gray-600">Te proporcionamos herramientas sencillas para gestionar tus datos y configurar tu privacidad según tus preferencias.</p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Seguridad</h3>
                        <p class="text-sm text-gray-600">Implementamos las mejores prácticas de seguridad para proteger tus datos y actualizamos regularmente nuestros sistemas.</p>
                    </div>
                </div>
            </div>

            <!-- Enlaces relacionados -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Enlaces relacionados</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Enlace 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-5 flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Términos y condiciones</h3>
                                <p class="text-sm text-gray-600 mt-1">Nuestras reglas y normativas para el uso de GAMESHELF</p>
                                <a href="/terminos" class="mt-3 inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    Leer más <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Enlace 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-5 flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Centro de ayuda</h3>
                                <p class="text-sm text-gray-600 mt-1">Preguntas frecuentes y guías sobre privacidad y seguridad</p>
                                <a href="/ayuda/privacidad" class="mt-3 inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    Visitar <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Enlace 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-5 flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Contactar con soporte</h3>
                                <p class="text-sm text-gray-600 mt-1">¿Tienes un problema o pregunta específica?</p>
                                <a href="/contacto" class="mt-3 inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    Contactar ahora <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Script para las preguntas frecuentes -->
    <script>
        function toggleFAQ(element) {
            const content = element.nextElementSibling;
            const arrowIcon = element.querySelector('svg');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                arrowIcon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                arrowIcon.style.transform = 'rotate(0)';
            }
        }
    </script>

<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>