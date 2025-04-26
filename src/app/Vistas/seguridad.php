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
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Seguridad y Privacidad</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Tu experiencia en GameShelf es importante para nosotros. Conoce cómo protegemos tus datos y mantenemos segura tu cuenta.
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

            <!-- Seguridad de la Cuenta -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Seguridad de tu cuenta</h2>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Contraseñas seguras</h3>
                            <p class="text-sm text-gray-600 mb-4">Para proteger tu cuenta, te recomendamos utilizar una contraseña única y segura que:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li>Tenga al menos 12 caracteres</li>
                                <li>Combine letras mayúsculas y minúsculas</li>
                                <li>Incluya números y símbolos</li>
                                <li>No contenga información personal fácil de adivinar</li>
                                <li>No sea utilizada en otras plataformas</li>
                            </ul>
                            <p class="text-sm text-gray-600">Considera utilizar un gestor de contraseñas para generar y almacenar contraseñas complejas de forma segura.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Autenticación en dos factores</h3>
                            <p class="text-sm text-gray-600 mb-4">Añade una capa extra de seguridad a tu cuenta activando la autenticación en dos factores (2FA). Esta medida requiere:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li>Tu contraseña habitual</li>
                                <li>Un código temporal enviado a tu teléfono o generado por una aplicación de autenticación</li>
                            </ul>
                            <div class="mt-4">
                                <a href="/configuracion/seguridad" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Activar 2FA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Dispositivos conectados</h3>
                            <p class="text-sm text-gray-600 mb-4">Revisa regularmente qué dispositivos tienen acceso a tu cuenta. Si detectas un dispositivo desconocido, puedes cerrarlo remotamente y cambiar tu contraseña inmediatamente.</p>

                            <div class="mt-4">
                                <a href="/configuracion/dispositivos" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Ver dispositivos conectados
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Privacidad -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Privacidad de datos</h2>
                </div>

                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Datos que recopilamos</h3>
                            <p class="text-sm text-gray-600 mb-4">En GameShelf recopilamos la siguiente información:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li><span class="font-medium">Datos de perfil:</span> Nombre de usuario, dirección de correo electrónico y foto de perfil opcional</li>
                                <li><span class="font-medium">Datos de uso:</span> Juegos guardados, reseñas, valoraciones y listas creadas</li>
                                <li><span class="font-medium">Datos técnicos:</span> Dirección IP, tipo de dispositivo y navegador para mejorar la seguridad y la experiencia</li>
                            </ul>
                            <p class="text-sm text-gray-600">No vendemos tus datos personales a terceros bajo ninguna circunstancia.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Opciones de privacidad</h3>
                            <p class="text-sm text-gray-600 mb-4">Puedes personalizar la visibilidad de tu actividad en GameShelf:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li>Controlar quién puede ver tu colección de juegos</li>
                                <li>Decidir si tus reseñas son públicas, solo para amigos o privadas</li>
                                <li>Ocultar juegos específicos de tu perfil público</li>
                                <li>Elegir si apareces en las búsquedas de usuarios</li>
                            </ul>
                            <div class="mt-4">
                                <a href="/configuracion/privacidad" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Ajustar configuración de privacidad
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Eliminación de datos</h3>
                            <p class="text-sm text-gray-600 mb-4">Respetamos tu derecho a eliminar tus datos. Puedes:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li>Descargar una copia de todos tus datos</li>
                                <li>Eliminar contenido específico (reseñas, valoraciones, listas)</li>
                                <li>Solicitar la eliminación completa de tu cuenta y todos los datos asociados</li>
                            </ul>
                            <p class="text-sm text-gray-600">La eliminación de datos es permanente y no se puede deshacer. Algunas interacciones (como comentarios) podrían permanecer anónimas para mantener la integridad de las conversaciones.</p>
                            <div class="mt-4">
                                <a href="/configuracion/datos" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Gestionar mis datos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Moderación y contenido -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Moderación y contenido</h2>
                </div>

                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Normas de la comunidad</h3>
                            <p class="text-sm text-gray-600 mb-4">En GameShelf mantenemos un entorno respetuoso y constructivo con estas normas:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li>No se permite el acoso, insultos o comportamiento tóxico hacia otros usuarios</li>
                                <li>Las reseñas deben centrarse en el juego, no en ataques personales a desarrolladores</li>
                                <li>No se permite el spam o la autopromoción excesiva</li>
                                <li>El contenido debe ser apropiado para todos los públicos</li>
                                <li>No se permite la publicación de información falsa intencionadamente</li>
                            </ul>
                            <p class="text-sm text-gray-600">Los usuarios que violen repetidamente estas normas pueden ver sus cuentas limitadas o suspendidas.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Reportar contenido inapropiado</h3>
                            <p class="text-sm text-gray-600 mb-4">Si encuentras contenido que viola nuestras normas, puedes reportarlo para que nuestro equipo lo revise. Puedes reportar:</p>
                            <ul class="list-disc pl-5 mb-4 text-sm text-gray-600 space-y-2">
                                <li>Perfiles de usuario</li>
                                <li>Reseñas y comentarios</li>
                                <li>Listas y colecciones</li>
                                <li>Mensajes privados</li>
                            </ul>
                            <p class="text-sm text-gray-600">Todos los reportes son analizados por moderadores humanos en un plazo de 24-48 horas.</p>
                            <div class="mt-4">
                                <a href="/ayuda/reportar" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cómo reportar contenido
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preguntas Frecuentes -->
            <div>
                <div class="flex items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Preguntas frecuentes sobre seguridad</h2>
                </div>

                <div class="divide-y divide-gray-200 bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué debo hacer si creo que mi cuenta ha sido comprometida?</h3>
                        <p class="text-sm text-gray-600">Si sospechas que alguien ha accedido a tu cuenta sin autorización, sigue estos pasos inmediatamente:</p>
                        <ol class="list-decimal pl-5 mt-3 text-sm text-gray-600 space-y-2">
                            <li>Cambia tu contraseña inmediatamente</li>
                            <li>Revisa los dispositivos conectados y cierra sesión en todos</li>
                            <li>Activa la autenticación de dos factores si no la tienes</li>
                            <li>Contacta con nuestro equipo de soporte para una revisión adicional</li>
                        </ol>
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo protege GameShelf mis datos personales?</h3>
                        <p class="text-sm text-gray-600">Protegemos tus datos mediante:</p>
                        <ul class="list-disc pl-5 mt-3 text-sm text-gray-600 space-y-2">
                            <li>Cifrado de extremo a extremo para la información sensible</li>
                            <li>Conexiones seguras mediante HTTPS</li>
                            <li>Verificación regular de seguridad por terceros</li>
                            <li>Almacenamiento seguro con acceso restringido a la información personal</li>
                            <li>Anonimización de datos para análisis internos</li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Por qué recibo correos electrónicos de GameShelf?</h3>
                        <p class="text-sm text-gray-600">Enviamos correos electrónicos por los siguientes motivos:</p>
                        <ul class="list-disc pl-5 mt-3 text-sm text-gray-600 space-y-2">
                            <li>Confirmación de acciones (registro, cambios de contraseña)</li>
                            <li>Alertas de seguridad (inicios de sesión desde nuevos dispositivos)</li>
                            <li>Notificaciones de actividad (si las has activado)</li>
                            <li>Novedades importantes sobre la plataforma</li>
                        </ul>
                        <p class="text-sm text-gray-600 mt-3">Puedes personalizar las notificaciones por correo electrónico desde la configuración de tu cuenta.</p>
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿GameShelf utiliza cookies?</h3>
                        <p class="text-sm text-gray-600">Sí, utilizamos cookies para:</p>
                        <ul class="list-disc pl-5 mt-3 text-sm text-gray-600 space-y-2">
                            <li>Mantener tu sesión activa</li>
                            <li>Recordar tus preferencias</li>
                            <li>Analizar el uso del sitio para mejorarlo</li>
                            <li>Personalizar tu experiencia</li>
                        </ul>
                        <p class="text-sm text-gray-600 mt-3">Puedes gestionar tus preferencias de cookies desde la configuración o eliminarlas desde tu navegador.</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-12 bg-indigo-50 rounded-xl p-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">¿Tienes más preguntas sobre seguridad?</h2>
                <p class="mb-6 text-gray-600 max-w-2xl mx-auto">Nuestro equipo está aquí para ayudarte con cualquier duda relacionada con la seguridad o privacidad de tu cuenta.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/contacto" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Contactar con soporte
                    </a>
                    <a href="/ayuda/seguridad" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Ver centro de ayuda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
