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
                <!-- Encabezado de Términos de servicio -->
                <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-12 text-center shadow-2xl sm:px-16 mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Términos de Servicio</h2>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                        Por favor, lee detenidamente las condiciones de uso de GAMESHELF
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

                <!-- Contenido de los términos -->
                <div class="bg-white rounded-lg shadow-md p-8 mb-12">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">1. Introducción</h3>
                        <p class="text-gray-700 mb-3">Bienvenido a GAMESHELF. Al acceder o utilizar nuestra plataforma, aceptas estar sujeto a estos Términos de Servicio. Por favor, léelos cuidadosamente antes de utilizar nuestros servicios.</p>
                        <p class="text-gray-700 mb-3">GAMESHELF es una plataforma que permite a los usuarios registrar, valorar y compartir sus experiencias con videojuegos. Estos términos rigen tu uso de GAMESHELF y cualquier contenido, funcionalidad y servicios ofrecidos por nosotros.</p>
                        <p class="text-gray-700">Si no estás de acuerdo con estos términos, no podrás acceder ni utilizar nuestros servicios.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">2. Registro de cuenta</h3>
                        <p class="text-gray-700 mb-3">Para acceder a ciertas funciones de nuestra plataforma, deberás registrarte y crear una cuenta. Al hacerlo, aceptas proporcionar información precisa, actual y completa, y mantenerla actualizada.</p>
                        <p class="text-gray-700 mb-3">Eres responsable de mantener la confidencialidad de tu contraseña y de todas las actividades que ocurran bajo tu cuenta. Debes notificarnos inmediatamente sobre cualquier uso no autorizado de tu cuenta.</p>
                        <p class="text-gray-700">Nos reservamos el derecho de suspender o terminar tu cuenta si alguna información proporcionada durante el proceso de registro o después resulta ser inexacta, falsa o incompleta.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">3. Contenido del usuario</h3>
                        <p class="text-gray-700 mb-3">Al publicar contenido en GAMESHELF, como reseñas, calificaciones, comentarios o listas, nos otorgas una licencia mundial, no exclusiva, libre de regalías, sublicenciable y transferible para usar, reproducir, distribuir, preparar trabajos derivados, mostrar y ejecutar dicho contenido.</p>
                        <p class="text-gray-700 mb-3">Conservas todos los derechos sobre el contenido que publicas, pero eres responsable del mismo. No debes publicar contenido que:</p>
                        <ul class="list-disc pl-8 mb-3 text-gray-700">
                            <li>Sea ilegal, difamatorio, obsceno, ofensivo, amenazante o abusivo</li>
                            <li>Infrinja derechos de autor, marcas registradas u otros derechos de propiedad intelectual</li>
                            <li>Contenga software malicioso o código dañino</li>
                            <li>Represente falsamente tu identidad o afiliación con cualquier persona o entidad</li>
                            <li>Contenga información personal identificable de terceros sin su consentimiento</li>
                        </ul>
                        <p class="text-gray-700">Nos reservamos el derecho de eliminar cualquier contenido que consideremos inapropiado o que viole estos términos, sin previo aviso.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">4. Propiedad intelectual</h3>
                        <p class="text-gray-700 mb-3">GAMESHELF y todo su contenido, características y funcionalidad (incluyendo pero no limitado a toda la información, software, texto, gráficos, logotipos, imágenes y audio) son propiedad de GAMESHELF o de nuestros licenciantes y están protegidos por leyes de propiedad intelectual.</p>
                        <p class="text-gray-700 mb-3">No debes reproducir, distribuir, modificar, crear trabajos derivados, mostrar públicamente, realizar públicamente, republicar, descargar, almacenar o transmitir cualquier material de nuestra plataforma, excepto según lo permitido por estos términos.</p>
                        <p class="text-gray-700">Las marcas comerciales, logotipos y nombres de marcas de videojuegos que aparecen en GAMESHELF pertenecen a sus respectivos propietarios y su uso en nuestra plataforma no implica afiliación o respaldo por parte de dichos propietarios.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">5. Conducta del usuario</h3>
                        <p class="text-gray-700 mb-3">Al utilizar GAMESHELF, aceptas no:</p>
                        <ul class="list-disc pl-8 mb-3 text-gray-700">
                            <li>Utilizar la plataforma de cualquier manera que pueda dañar, deshabilitar o sobrecargar GAMESHELF</li>
                            <li>Utilizar robots, arañas u otros dispositivos automáticos para acceder a la plataforma</li>
                            <li>Intentar obtener acceso no autorizado a cualquier parte de la plataforma</li>
                            <li>Interferir con el uso y disfrute de la plataforma por parte de otros usuarios</li>
                            <li>Recopilar información de otros usuarios sin su consentimiento</li>
                            <li>Utilizar la plataforma para fines comerciales sin nuestro consentimiento previo por escrito</li>
                        </ul>
                        <p class="text-gray-700">El incumplimiento de estas reglas puede resultar en la suspensión o terminación de tu cuenta.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">6. Limitación de responsabilidad</h3>
                        <p class="text-gray-700 mb-3">GAMESHELF se proporciona "tal cual" y "según disponibilidad", sin garantías de ningún tipo, ya sean expresas o implícitas. No garantizamos que la plataforma sea ininterrumpida, segura o libre de errores.</p>
                        <p class="text-gray-700 mb-3">En ningún caso GAMESHELF será responsable por daños indirectos, incidentales, especiales, consecuentes o punitivos, incluyendo la pérdida de ganancias, datos o uso, ya sea en una acción de contrato, agravio o de otra manera, que surja de o en conexión con el uso o la imposibilidad de usar la plataforma.</p>
                        <p class="text-gray-700">Nuestra responsabilidad total por cualquier reclamo bajo estos términos no excederá la cantidad que hayas pagado a GAMESHELF (si la hubiera) durante los doce meses anteriores al acto que dio lugar a la responsabilidad.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">7. Cambios en los términos</h3>
                        <p class="text-gray-700 mb-3">Nos reservamos el derecho de modificar estos términos en cualquier momento. Publicaremos los términos modificados en esta página y actualizaremos la fecha de "Última actualización".</p>
                        <p class="text-gray-700">Es tu responsabilidad revisar periódicamente estos términos. Tu uso continuado de la plataforma después de la publicación de los términos modificados constituye tu aceptación de dichos cambios.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">8. Cancelación</h3>
                        <p class="text-gray-700 mb-3">Puedes cancelar tu cuenta en cualquier momento accediendo a la configuración de tu cuenta. Al cancelar tu cuenta, tu perfil dejará de estar visible, pero algunas de tus contribuciones públicas, como reseñas o valoraciones, pueden seguir siendo visibles para otros usuarios.</p>
                        <p class="text-gray-700">Nos reservamos el derecho de suspender o terminar tu acceso a la plataforma, con o sin previo aviso, por cualquier conducta que consideremos una violación de estos términos o que sea perjudicial para otros usuarios o para nosotros.</p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">9. Ley aplicable</h3>
                        <p class="text-gray-700 mb-3">Estos términos se regirán e interpretarán de acuerdo con las leyes de España, sin tener en cuenta sus disposiciones sobre conflicto de leyes.</p>
                        <p class="text-gray-700">Cualquier acción legal relacionada con estos términos se presentará exclusivamente en los tribunales ubicados en España, y por el presente aceptas la jurisdicción personal de dichos tribunales.</p>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">10. Contacto</h3>
                        <p class="text-gray-700 mb-3">Si tienes alguna pregunta sobre estos Términos de Servicio, por favor contáctanos a:</p>
                        <p class="text-gray-700">Email: legal@gameshelf.com</p>
                    </div>

                    <div class="mt-8 text-gray-500 text-sm">
                        <p>Última actualización: 25 de abril de 2025</p>
                    </div>
                </div>

                <!-- Call to action -->
                <div class="bg-indigo-50 rounded-xl p-8">
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">¿Dudas sobre nuestros términos?</h3>
                        <p class="text-gray-700 mb-6">Si tienes cualquier pregunta o inquietud sobre nuestros términos de servicio, no dudes en contactar con nuestro equipo de soporte.</p>
                        <div class="flex justify-center space-x-4">
                            <a href="/contacto" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Contactar con soporte
                            </a>
                            <a href="/faq" class="rounded-md bg-white px-4 py-2 text-sm font-semibold text-indigo-600 shadow-sm border border-indigo-200 hover:bg-gray-50">
                                Ver preguntas frecuentes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>