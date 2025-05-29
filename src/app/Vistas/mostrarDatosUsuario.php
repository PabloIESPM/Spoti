<?php
include_once DIRECTORIO_PLANTILLA . "head.php";
include_once DIRECTORIO_PLANTILLA . "header.php";
?>

<!--Contenedor principal-->
<div id="contenedorPrincipal" class="w-full flex-col justify-start items-center lg:gap-16 gap-10 inline-flex lg:pt-[180px] pt-12 lg:pb-28 pb-12">
    <div class="border border-indigo-300 rounded-lg w-full max-w-4xl mx-auto p-8">
        <?php if (isset($usuario) && $usuario): ?>
            <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">
                Perfil de <?php echo htmlspecialchars($usuario['nick'] ?? 'Usuario Desconocido', ENT_QUOTES, 'UTF-8'); ?>
            </h1>
            
            <div class="flex flex-col items-center md:flex-row md:items-start gap-8">
                <div class="flex-shrink-0">
                    <?php 
                        $foto = $usuario['foto_usuario'] ?? '/storage/default-avatar.png';
                        if (empty(trim($usuario['foto_usuario']))) { // Check if foto_usuario is empty or just whitespace
                            $foto = '/storage/default-avatar.png';
                        }
                    ?>
                    <img src="<?php echo htmlspecialchars($foto, ENT_QUOTES, 'UTF-8'); ?>" 
                         alt="Avatar de <?php echo htmlspecialchars($usuario['nick'] ?? 'Usuario', ENT_QUOTES, 'UTF-8'); ?>" 
                         class="w-40 h-40 rounded-full object-cover border-4 border-indigo-200 shadow-lg">
                </div>
                
                <div class="flex-grow mt-4 md:mt-0">
                    <div class="mb-4">
                        <p class="text-lg text-gray-700">
                            <strong class="font-semibold text-gray-900">Nombre Completo:</strong> 
                            <?php echo htmlspecialchars(($usuario['nombre'] ?? '') . ' ' . ($usuario['primer_apellido'] ?? '') . ' ' . ($usuario['segundo_apellido'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-lg text-gray-700">
                            <strong class="font-semibold text-gray-900">Correo Electrónico:</strong> 
                            <?php echo htmlspecialchars($usuario['email'] ?? 'No especificado', ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-lg text-gray-700">
                            <strong class="font-semibold text-gray-900">Nombre de Usuario (Nick):</strong> 
                            <?php echo htmlspecialchars($usuario['nick'] ?? 'No especificado', ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </div>
                    <!-- Puedes añadir más detalles del perfil aquí -->
                    <!-- Por ejemplo, País: -->
                    <?php if (!empty($usuario['pais'])): ?>
                    <div class="mb-4">
                        <p class="text-lg text-gray-700">
                            <strong class="font-semibold text-gray-900">País:</strong> 
                            <?php echo htmlspecialchars($usuario['pais'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sección para futuras listas, reviews, etc. -->
            <div class="mt-12 border-t border-indigo-200 pt-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Actividad del Usuario</h2>
                <p class="text-gray-600">Próximamente: Listas de juegos, reseñas y más.</p>
            </div>

        <?php else: ?>
            <div class="text-center py-10">
                <h2 class="text-2xl font-bold text-red-600 mb-4">Usuario no encontrado</h2>
                <p class="text-gray-700">No se pudo encontrar un usuario con el ID proporcionado.</p>
                <a href="/inicio" class="mt-6 inline-block px-6 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                    Volver al Inicio
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>
