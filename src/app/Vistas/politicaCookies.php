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
            <!-- Header Section -->
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-10 text-center shadow-2xl sm:px-16 mb-12">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Política de Cookies</h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Información sobre el uso de cookies en GameShelf
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

            <!-- Contenido principal -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-12">
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">¿Qué son las cookies?</h2>
                    <p class="text-gray-700 mb-4">
                        Las cookies son pequeños archivos de texto que los sitios web almacenan en su dispositivo (ordenador, tablet, móvil) cuando los visita. Estas cookies ayudan a GameShelf a recordar información sobre su visita, como su idioma preferido y otras configuraciones. Esto puede hacer que su próxima visita sea más fácil y el sitio le resulte más útil.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Tipos de cookies que utilizamos</h2>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Cookies esenciales</h3>
                        <p class="text-gray-700 mb-2">
                            Son necesarias para el funcionamiento de nuestro sitio web. Sin estas cookies, no podríamos proporcionar muchos de los servicios que usted solicita, como iniciar sesión en su cuenta o gestionar su colección de juegos.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mb-4">
                            <li>Autenticación y seguridad</li>
                            <li>Gestión de sesión</li>
                            <li>Recordar preferencias básicas</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Cookies de rendimiento</h3>
                        <p class="text-gray-700 mb-2">
                            Recopilan información sobre cómo utiliza nuestro sitio web, como las páginas que visita con más frecuencia. Estos datos nos ayudan a optimizar el sitio y facilitar su navegación.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mb-4">
                            <li>Analíticas web</li>
                            <li>Medición del rendimiento</li>
                            <li>Detección de errores</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Cookies de funcionalidad</h3>
                        <p class="text-gray-700 mb-2">
                            Permiten que el sitio recuerde las elecciones que realiza (como su nombre de usuario, idioma o región) y proporcione funciones mejoradas y más personales.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mb-4">
                            <li>Recordar su perfil de usuario</li>
                            <li>Preferencias de visualización</li>
                            <li>Personalización de contenido</li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Cookies de publicidad</h3>
                        <p class="text-gray-700 mb-2">
                            Se utilizan para mostrar anuncios más relevantes para usted y sus intereses. También se utilizan para limitar el número de veces que ve un anuncio y para medir la efectividad de las campañas publicitarias.
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mb-4">
                            <li>Personalización de anuncios</li>
                            <li>Medición de la efectividad publicitaria</li>
                            <li>Recomendaciones de juegos basadas en intereses</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">¿Cómo utilizamos las cookies?</h2>
                    <p class="text-gray-700 mb-4">
                        En GameShelf utilizamos cookies para diversos fines, incluyendo:
                    </p>
                    <ul class="list-disc pl-6 text-gray-700 mb-6">
                        <li>Mantener su sesión iniciada mientras navega por diferentes páginas</li>
                        <li>Almacenar sus preferencias de visualización y personalización</li>
                        <li>Recopilar estadísticas anónimas sobre cómo se utiliza nuestro sitio web</li>
                        <li>Adaptar y mejorar la experiencia de usuario según sus intereses</li>
                        <li>Recordar los juegos que ha añadido a su colección o lista de deseos</li>
                        <li>Ofrecer recomendaciones personalizadas basadas en su actividad</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Cookies de terceros</h2>
                    <p class="text-gray-700 mb-6">
                        Algunos de nuestros socios (como proveedores de análisis web y redes publicitarias) también pueden utilizar cookies en nuestro sitio web. No tenemos acceso ni control sobre estas cookies. Esta política se aplica únicamente a las cookies utilizadas por GameShelf.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Control de cookies</h2>
                    <p class="text-gray-700 mb-4">
                        Usted puede controlar y administrar las cookies de varias maneras. Tenga en cuenta que eliminar o bloquear las cookies puede afectar a su experiencia de usuario y es posible que algunas partes de nuestro sitio web no funcionen correctamente.
                    </p>

                    <div class="bg-indigo-50 p-6 rounded-lg mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Configuración del navegador</h3>
                        <p class="text-gray-700 mb-4">
                            La mayoría de los navegadores le permiten ver qué cookies tiene y borrarlas individualmente o bloquear las cookies de un sitio web en particular o de todos los sitios web. Tenga en cuenta que si bloquea todas las cookies, muchos sitios web no funcionarán correctamente.
                        </p>
                        <p class="text-gray-700">
                            Puede encontrar información sobre cómo gestionar las cookies en diferentes navegadores en los siguientes enlaces:
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mt-2">
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-800">Chrome</a></li>
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-800">Firefox</a></li>
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-800">Safari</a></li>
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-800">Edge</a></li>
                            <li><a href="#" class="text-indigo-600 hover:text-indigo-800">Opera</a></li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Preferencias de cookies en GameShelf</h2>
                    <p class="text-gray-700 mb-6">
                        En su primera visita a nuestro sitio web, le presentamos un banner de cookies que le permite aceptar o rechazar las cookies no esenciales. Puede cambiar sus preferencias en cualquier momento a través del panel de "Configuración de cookies" ubicado en el pie de página de nuestro sitio web.
                    </p>

                    <div class="flex justify-center mb-6">
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-6 rounded-lg font-medium">
                            Configurar preferencias de cookies
                        </button>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Cambios en nuestra política de cookies</h2>
                    <p class="text-gray-700 mb-4">
                        Podemos actualizar nuestra política de cookies de vez en cuando para reflejar cambios en nuestras prácticas o por otros motivos operativos, legales o regulatorios. Le recomendamos que visite esta página periódicamente para estar al tanto de la información más reciente sobre nuestro uso de cookies.
                    </p>
                    <p class="text-gray-700 mb-6">
                        La última actualización de esta política de cookies se realizó el 25 de abril de 2025.
                    </p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Contacto</h2>
                    <p class="text-gray-700 mb-6">
                        Si tiene alguna pregunta sobre nuestra política de cookies, por favor contáctenos a través de <a href="mailto:privacy@gameshelf.com" class="text-indigo-600 hover:text-indigo-800">privacy@gameshelf.com</a> o utilice nuestro <a href="/contacto" class="text-indigo-600 hover:text-indigo-800">formulario de contacto</a>.
                    </p>
                </div>
            </div>

            <!-- FAQ sobre cookies -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Preguntas frecuentes sobre cookies</h2>
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Las cookies son peligrosas para mi dispositivo?</h3>
                        <p class="text-gray-700">
                            No, las cookies son solo archivos de texto pequeños y no pueden ejecutar código ni transmitir virus. Son completamente seguras y se utilizan ampliamente en casi todos los sitios web.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo usar GameShelf sin aceptar cookies?</h3>
                        <p class="text-gray-700">
                            Puede navegar por las áreas públicas de GameShelf sin aceptar cookies no esenciales. Sin embargo, para acceder a funciones como el registro de su colección, valoraciones o listas personalizadas, necesitamos utilizar cookies esenciales para el funcionamiento del servicio.
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo puedo ver qué cookies ha guardado GameShelf en mi dispositivo?</h3>
                        <p class="text-gray-700">
                            La mayoría de los navegadores tienen una función que le permite ver qué cookies están almacenadas en su dispositivo. Normalmente está en la sección de configuración o preferencias de su navegador, bajo "Privacidad" o "Cookies".
                        </p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cuánto tiempo permanecen las cookies en mi dispositivo?</h3>
                        <p class="text-gray-700">
                            Depende del tipo de cookie. Las cookies de sesión solo duran hasta que cierra su navegador. Las cookies persistentes permanecen en su dispositivo hasta que expiran o las elimine manualmente. En GameShelf, la mayoría de nuestras cookies persistentes tienen una duración máxima de 12 meses.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="bg-indigo-50 rounded-xl p-8 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">¿Tienes más preguntas sobre privacidad?</h2>
                <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
                    Consulta nuestra política de privacidad completa para obtener más información sobre cómo protegemos tus datos personales y respetamos tu privacidad en GameShelf.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="/privacidad" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-6 rounded-lg font-medium">
                        Política de privacidad
                    </a>
                    <a href="/terminos" class="border border-indigo-600 text-indigo-600 hover:bg-indigo-50 py-2 px-6 rounded-lg font-medium">
                        Términos de servicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
