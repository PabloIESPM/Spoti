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
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-12 text-center shadow-2xl sm:px-16 mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Preguntas Frecuentes</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Todo lo que necesitas saber sobre GameShelf y cómo aprovechar al máximo la plataforma
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

            <!-- Navegación rápida -->
            <div class="mb-12">
                <div class="bg-indigo-50 rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Navegación rápida</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                        <a href="#general" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">Preguntas generales</a>
                        <a href="#cuenta" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">Cuenta y registro</a>
                        <a href="#funciones" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">Funciones y características</a>
                        <a href="#coleccion" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">Tu colección de juegos</a>
                        <a href="#social" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">Comunidad y social</a>
                        <a href="#tecnico" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">Aspectos técnicos</a>
                    </div>
                </div>
            </div>

            <!-- Preguntas Generales -->
            <div id="general" class="mb-12 scroll-mt-32">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Preguntas generales</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué es GameShelf?</h3>
                        <p class="text-gray-600">GameShelf es una plataforma social dedicada a los videojuegos que te permite catalogar, valorar y compartir tu experiencia con los juegos que has jugado. Funciona como un diario personal de tu trayectoria como jugador y como una red social donde puedes descubrir nuevos títulos basados en tus gustos y los de la comunidad.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Es gratis usar GameShelf?</h3>
                        <p class="text-gray-600">Sí, GameShelf es completamente gratuito. Puedes crear una cuenta, catalogar tus juegos, escribir reseñas, seguir a otros usuarios y acceder a todas las funciones básicas sin coste alguno. En el futuro podrían implementarse funciones premium opcionales, pero la experiencia principal siempre será gratuita.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Para qué plataformas está disponible?</h3>
                        <p class="text-gray-600">Actualmente, GameShelf está disponible como aplicación web accesible desde cualquier navegador, tanto en ordenadores como en dispositivos móviles. Estamos trabajando en aplicaciones nativas para iOS y Android que estarán disponibles en el futuro.</p>
                    </div>
                </div>
            </div>

            <!-- Cuenta y registro -->
            <div id="cuenta" class="mb-12 scroll-mt-32">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Cuenta y registro</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo puedo crear una cuenta?</h3>
                        <p class="text-gray-600">Crear una cuenta es muy sencillo. Haz clic en el botón "Regístrate gratis" en la página principal y sigue los pasos. Puedes registrarte utilizando tu correo electrónico o a través de tus cuentas de Google, Facebook o Twitter.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué datos necesito para registrarme?</h3>
                        <p class="text-gray-600">Solo necesitas un nombre de usuario único, una dirección de correo electrónico válida y una contraseña. Opcionalmente, puedes añadir más información a tu perfil como tu nombre real, una foto de perfil, plataformas de juego preferidas y una breve biografía.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo cambiar mi nombre de usuario después de registrarme?</h3>
                        <p class="text-gray-600">Sí, puedes cambiar tu nombre de usuario una vez cada 30 días desde la configuración de tu perfil. Ten en cuenta que si cambias tu nombre de usuario, los enlaces antiguos a tu perfil dejarán de funcionar.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo puedo eliminar mi cuenta?</h3>
                        <p class="text-gray-600">Para eliminar tu cuenta, ve a la configuración de tu perfil y selecciona la opción "Eliminar cuenta" al final de la página. Tendrás que confirmar tu decisión introduciendo tu contraseña. Una vez eliminada, no podrás recuperar tus datos, reseñas o listas.</p>
                    </div>
                </div>
            </div>

            <!-- Funciones y características -->
            <div id="funciones" class="mb-12 scroll-mt-32">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Funciones y características</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué puedo hacer en GameShelf?</h3>
                        <p class="text-gray-600">En GameShelf puedes:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-600">
                            <li>Catalogar los juegos que has jugado, estás jugando o quieres jugar</li>
                            <li>Valorar juegos con puntuaciones del 1 al 10</li>
                            <li>Escribir reseñas detalladas</li>
                            <li>Crear listas temáticas de juegos</li>
                            <li>Seguir a otros usuarios con gustos similares</li>
                            <li>Descubrir nuevos juegos basados en tus preferencias</li>
                            <li>Ver estadísticas de tu actividad como jugador</li>
                            <li>Mantenerte informado sobre próximos lanzamientos</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo funciona el sistema de valoración?</h3>
                        <p class="text-gray-600">Nuestro sistema de valoración te permite puntuar los juegos del 1 al 10, con incrementos de 0.5 puntos. Puedes asignar un 8.5, por ejemplo. También puedes añadir una reseña detallada para explicar tu puntuación. Las valoraciones de todos los usuarios se combinan para crear la puntuación media que se muestra en la página de cada juego.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué son las listas y cómo puedo crearlas?</h3>
                        <p class="text-gray-600">Las listas son colecciones temáticas de juegos que puedes crear para organizar títulos bajo un tema específico. Por ejemplo, "Mis juegos de terror favoritos" o "Los mejores RPGs de la última década". Para crear una lista, ve a tu perfil, selecciona la pestaña "Listas", haz clic en "Crear nueva lista" y sigue las instrucciones.</p>
                    </div>
                </div>
            </div>

            <!-- Tu colección de juegos -->
            <div id="coleccion" class="mb-12 scroll-mt-32">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Tu colección de juegos</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo añado juegos a mi colección?</h3>
                        <p class="text-gray-600">Para añadir un juego a tu colección, búscalo en la barra de búsqueda, ve a su página y haz clic en el botón "+" que aparece en la esquina superior derecha. Podrás seleccionar si lo has jugado, lo estás jugando, lo has completado o lo quieres jugar en el futuro. También puedes añadir juegos directamente desde las secciones "Destacados" o "Próximos lanzamientos".</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué significa cada estado de juego?</h3>
                        <p class="text-gray-600">GameShelf utiliza los siguientes estados para clasificar los juegos en tu colección:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-600">
                            <li><span class="font-medium">Jugando</span>: Juegos que estás jugando actualmente</li>
                            <li><span class="font-medium">Completado</span>: Juegos que has terminado</li>
                            <li><span class="font-medium">En pausa</span>: Juegos que has comenzado pero no estás jugando actualmente</li>
                            <li><span class="font-medium">Abandonado</span>: Juegos que has comenzado pero has decidido no terminar</li>
                            <li><span class="font-medium">Pendiente</span>: Juegos que quieres jugar en el futuro</li>
                            <li><span class="font-medium">Rejugando</span>: Juegos que ya has completado pero estás volviendo a jugar</li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo registrar el tiempo que he jugado?</h3>
                        <p class="text-gray-600">Sí, puedes registrar manualmente el tiempo de juego para cada título en tu colección. También estamos trabajando en integraciones con plataformas como Steam, PlayStation Network y Xbox Live para importar automáticamente tus tiempos de juego.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué hago si no encuentro un juego en la base de datos?</h3>
                        <p class="text-gray-600">Si no encuentras un juego, puedes sugerir su inclusión utilizando el formulario "Sugerir nuevo juego" que encontrarás en la sección de búsqueda. Nuestro equipo revisará la solicitud y añadirá el juego a la base de datos si cumple con nuestros criterios.</p>
                    </div>
                </div>
            </div>

            <!-- Comunidad y social -->
            <div id="social" class="mb-12 scroll-mt-32">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Comunidad y social</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo puedo encontrar amigos en GameShelf?</h3>
                        <p class="text-gray-600">Puedes buscar amigos por su nombre de usuario, correo electrónico o conectando tus cuentas de redes sociales para ver qué amigos ya están usando GameShelf. También puedes encontrar usuarios con gustos similares explorando reseñas de juegos que te gustan o a través de la sección "Usuarios recomendados" en tu perfil.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué significa seguir a un usuario?</h3>
                        <p class="text-gray-600">Cuando sigues a un usuario, sus actividades (nuevas valoraciones, reseñas, listas, etc.) aparecerán en tu feed de actividad. Esto te permite descubrir nuevos juegos a través de las experiencias de personas con gustos similares. Seguir a alguien no requiere aprobación y no implica que ellos te sigan a ti automáticamente.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo compartir mis reseñas en otras redes sociales?</h3>
                        <p class="text-gray-600">Sí, cada reseña y lista tiene botones para compartir en Twitter, Facebook, Reddit y otras plataformas. También puedes copiar un enlace directo para compartirlo donde quieras. Las reseñas y listas pueden ser públicas o privadas según tu elección.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo puedo denunciar contenido inapropiado?</h3>
                        <p class="text-gray-600">Si encuentras contenido que infringe nuestras normas comunitarias, puedes denunciarlo haciendo clic en los tres puntos (...) que aparecen junto a cualquier reseña, lista o comentario y seleccionando "Denunciar". Un miembro de nuestro equipo revisará la denuncia y tomará las medidas oportunas.</p>
                    </div>
                </div>
            </div>

            <!-- Aspectos técnicos -->
            <div id="tecnico" class="mb-12 scroll-mt-32">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-200">Aspectos técnicos</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Qué navegadores son compatibles con GameShelf?</h3>
                        <p class="text-gray-600">GameShelf es compatible con las versiones recientes de Chrome, Firefox, Safari, Edge y Opera. Recomendamos mantener tu navegador actualizado para disfrutar de la mejor experiencia posible.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Cómo puedo reportar un error o problema técnico?</h3>
                        <p class="text-gray-600">Si encuentras algún error o problema técnico, puedes reportarlo a través de la sección "Soporte" en el menú de tu perfil. Proporciona tantos detalles como sea posible, incluyendo capturas de pantalla si es relevante, para ayudarnos a identificar y solucionar el problema.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿GameShelf tiene API pública?</h3>
                        <p class="text-gray-600">Actualmente estamos desarrollando una API pública que permitirá a desarrolladores externos crear aplicaciones y servicios integrados con GameShelf. Si estás interesado en acceder a la API cuando esté disponible, puedes registrarte en la lista de espera en la sección de desarrolladores.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">¿Puedo exportar mis datos de GameShelf?</h3>
                        <p class="text-gray-600">Sí, puedes exportar todos tus datos, incluyendo tu colección de juegos, valoraciones, reseñas y listas en formato JSON o CSV desde la sección "Privacidad y datos" en la configuración de tu cuenta. Esta función te permite hacer una copia de seguridad de tus datos o migrarlos a otros servicios.</p>
                    </div>
                </div>
            </div>

            <!-- Contacto -->
            <div class="bg-indigo-50 rounded-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">¿No has encontrado respuesta a tu pregunta?</h2>
                <p class="text-center text-gray-600 mb-6">Nuestro equipo de soporte está listo para ayudarte con cualquier duda o problema.</p>
                <div class="flex justify-center">
                    <a href="/contacto" class="inline-flex items-center rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Contactar con soporte
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
