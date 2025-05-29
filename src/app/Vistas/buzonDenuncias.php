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
            <!-- Encabezado de la página -->
            <div class="relative overflow-hidden rounded-xl bg-indigo-600 px-6 py-12 text-center shadow-2xl sm:px-16 mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Buzón de Denuncias</h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-indigo-50">
                    Ayúdanos a mantener GameShelf como un espacio seguro y respetuoso para toda la comunidad
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

            <!-- Información sobre denuncias -->
            <div class="mb-12 bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">¿Cuándo enviar una denuncia?</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Contenido que debe ser denunciado:</h4>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Discurso de odio o contenido discriminatorio</li>
                            <li>Acoso a otros usuarios</li>
                            <li>Spam o contenido publicitario no autorizado</li>
                            <li>Información personal compartida sin consentimiento</li>
                            <li>Suplantación de identidad</li>
                            <li>Contenido para adultos o explícito</li>
                            <li>Reseñas falsas o malintencionadas</li>
                            <li>Enlaces a software ilegal o pirata</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">No debe ser denunciado:</h4>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Opiniones negativas sobre juegos (siempre que sean respetuosas)</li>
                            <li>Discrepancias en valoraciones o reseñas</li>
                            <li>Críticas constructivas a desarrolladores o publishers</li>
                            <li>Errores tipográficos o información desactualizada</li>
                            <li>Spoilers en reseñas (siempre que estén debidamente marcados)</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg mb-2">
                    <p class="text-sm text-gray-700"><span class="font-medium">Nota:</span> Revisamos cada denuncia cuidadosamente. El uso indebido del sistema de denuncias podría resultar en la suspensión temporal de tu cuenta.</p>
                </div>
            </div>

            <!-- Formulario de denuncias -->
            <div class="mb-12">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-bold text-gray-900">Formulario de denuncia</h3>
                        <p class="mt-1 text-sm text-gray-600">Todos los campos marcados con asterisco (*) son obligatorios</p>
                    </div>
                    <form class="p-6 space-y-6">
                        <!-- Tipo de contenido denunciado -->
                        <div>
                            <label for="tipo-contenido" class="block text-sm font-medium text-gray-700 mb-1">Tipo de contenido denunciado *</label>
                            <select id="tipo-contenido" name="tipo-contenido" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Selecciona una opción</option>
                                <option value="reseña">Reseña</option>
                                <option value="comentario">Comentario</option>
                                <option value="perfil">Perfil de usuario</option>
                                <option value="lista">Lista de juegos</option>
                                <option value="imagen">Imagen o avatar</option>
                                <option value="bug">Error en la plataforma</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <!-- URL del contenido -->
                        <div>
                            <label for="url-contenido" class="block text-sm font-medium text-gray-700 mb-1">URL del contenido denunciado *</label>
                            <div class="mt-1">
                                <input type="text" name="url-contenido" id="url-contenido" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="https://gameshelf.com/...">
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Copia y pega la dirección completa donde se encuentra el contenido que quieres denunciar</p>
                        </div>

                        <!-- Motivo de la denuncia -->
                        <div>
                            <label for="motivo" class="block text-sm font-medium text-gray-700 mb-1">Motivo de la denuncia *</label>
                            <select id="motivo" name="motivo" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Selecciona una opción</option>
                                <option value="odio">Discurso de odio</option>
                                <option value="acoso">Acoso</option>
                                <option value="spam">Spam o publicidad</option>
                                <option value="privacidad">Violación de privacidad</option>
                                <option value="suplantacion">Suplantación de identidad</option>
                                <option value="contenido-adulto">Contenido para adultos</option>
                                <option value="informacion-falsa">Información deliberadamente falsa</option>
                                <option value="pirateria">Piratería</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <!-- Descripción -->
                        <div>
                            <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción detallada *</label>
                            <div class="mt-1">
                                <textarea id="descripcion" name="descripcion" rows="4" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Explica con detalle el problema y por qué consideras que este contenido viola nuestras normas comunitarias"></textarea>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Sé específico y proporciona toda la información relevante para que podamos evaluar correctamente la situación</p>
                        </div>

                        <!-- Evidencia adicional -->
                        <div>
                            <label for="evidencia" class="block text-sm font-medium text-gray-700 mb-1">Evidencia adicional (opcional)</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Sube una imagen</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">o arrastra y suelta</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF hasta 5MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Información de contacto -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Tu correo electrónico *</label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="tu@email.com">
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Podríamos necesitar contactarte para obtener información adicional</p>
                        </div>

                        <!-- Checkbox de confirmación -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="confirmacion" name="confirmacion" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="confirmacion" class="font-medium text-gray-700">Confirmo que la información proporcionada es veraz y precisa *</label>
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="pt-4">
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Enviar denuncia
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- FAQ sobre denuncias -->
            <div class="mb-12">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Preguntas frecuentes</h3>
                <div class="space-y-4">
                    <!-- Pregunta 1 -->
                    <div class="bg-white shadow rounded-lg">
                        <button class="w-full text-left px-6 py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-medium text-gray-900">¿Cuánto tiempo tarda en resolverse una denuncia?</h4>
                                <svg class="h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-700">Nuestro equipo de moderación revisa todas las denuncias en un plazo de 24 a 72 horas, dependiendo del volumen de reportes y la gravedad del caso. Las denuncias relacionadas con acoso, amenazas o contenido ilegal son tratadas con prioridad.</p>
                        </div>
                    </div>

                    <!-- Pregunta 2 -->
                    <div class="bg-white shadow rounded-lg">
                        <button class="w-full text-left px-6 py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-medium text-gray-900">¿Recibiré una respuesta?</h4>
                                <svg class="h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-700">Sí, siempre enviamos una notificación cuando se ha tomado una decisión sobre tu denuncia. Si proporcionaste tu correo electrónico, recibirás una actualización por email sobre las acciones tomadas.</p>
                        </div>
                    </div>

                    <!-- Pregunta 3 -->
                    <div class="bg-white shadow rounded-lg">
                        <button class="w-full text-left px-6 py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-medium text-gray-900">¿Puedo denunciar de forma anónima?</h4>
                                <svg class="h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-700">Sí, aunque necesitamos un correo electrónico para comunicarnos contigo, tu identidad nunca será revelada al usuario denunciado. Todas las denuncias se manejan con estricta confidencialidad.</p>
                        </div>
                    </div>

                    <!-- Pregunta 4 -->
                    <div class="bg-white shadow rounded-lg">
                        <button class="w-full text-left px-6 py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-medium text-gray-900">¿Qué acciones pueden tomarse tras una denuncia?</h4>
                                <svg class="h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-700">Dependiendo de la gravedad y tipo de infracción, las acciones pueden incluir: eliminación del contenido, advertencia al usuario, suspensión temporal de la cuenta, suspensión permanente, o en casos de actividad ilegal, notificación a las autoridades correspondientes.</p>
                        </div>
                    </div>

                    <!-- Pregunta 5 -->
                    <div class="bg-white shadow rounded-lg">
                        <button class="w-full text-left px-6 py-4 focus:outline-none">
                            <div class="flex justify-between items-center">
                                <h4 class="text-lg font-medium text-gray-900">¿Puedo apelar si mi contenido fue eliminado?</h4>
                                <svg class="h-5 w-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-700">Sí, si consideras que la eliminación de tu contenido fue injusta, puedes apelar la decisión contactando a nuestro equipo de soporte dentro de los 14 días siguientes a la notificación de eliminación.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner de normas comunitarias -->
            <div class="bg-indigo-50 rounded-xl p-8">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 md:mr-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Conoce nuestras normas comunitarias</h3>
                        <p class="text-gray-700">Para mantener GameShelf como un espacio positivo y constructivo, hemos establecido normas claras que todos los miembros deben seguir. Familiarízate con ellas para disfrutar de la mejor experiencia.</p>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="/normas-comunidad" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Ver normas completas
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
