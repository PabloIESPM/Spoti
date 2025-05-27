<?php
include_once DIRECTORIO_PLANTILLA . "head.php";
include_once DIRECTORIO_PLANTILLA . "header.php";
?>
    <!--Contenedor principal (diseño marco principal comun a todas la paginas de la web)-->
    <div id="contenedorPrincipal" class="w-full flex-col justify-start items-center lg:gap-16 gap-10 inline-flex lg:pt-[180px] pt-12 lg:pb-28 pb-12">
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
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
                    Crear nueva cuenta
                </h2>
                <?php if (isset($error) && !empty($error)): ?>
                    <p style="color: red; text-align: center; margin-top: 10px;"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Completa tus datos para registrarte
                </p>
            </div>
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md px-4 py-2">
                <form class="space-y-5" action="/user" method="POST" enctype="multipart/form-data">
                    <!-- Nombre -->
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-900">
                            Nombre
                        </label>
                        <div class="mt-1">
                            <input type="text" name="nombre" id="nombre" autocomplete="given-name" required
                                   value="<?php echo htmlspecialchars($old_data['nombre'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>
                    <!-- Primer Apellido  -->
                    <div>
                        <label for="primer_apellido" class="block text-sm font-medium text-gray-900">
                            Primer apellido
                        </label>
                        <div class="mt-1">
                            <input type="text" name="primer_apellido" id="primer_apellido" autocomplete="family-name" required
                                   value="<?php echo htmlspecialchars($old_data['primer_apellido'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>
                    <!-- Segundo Apellido  -->
                    <div>
                        <label for="segundo_apellido" class="block text-sm font-medium text-gray-900">
                            Segundo apellido
                        </label>
                        <div class="mt-1">
                            <input type="text" name="segundo_apellido" id="segundo_apellido" autocomplete="family-name"
                                   value="<?php echo htmlspecialchars($old_data['segundo_apellido'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Nombre de usuario (nick) -->
                    <div>
                        <label for="nick" class="block text-sm font-medium text-gray-900">
                            Nombre de usuario
                        </label>
                        <div class="mt-1">
                            <input type="text" name="nick" id="nick" autocomplete="username" required
                                   value="<?php echo htmlspecialchars($old_data['nick'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- País -->
                    <div>
                        <label for="pais" class="block text-sm font-medium text-gray-900">
                            País
                        </label>
                        <div class="mt-1">
                            <select id="pais" name="pais" required
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                                <option value="">Selecciona un país</option>
                                <option value="ES" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'ES') ? 'selected' : ''; ?>>España</option>
                                <option value="AR" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'AR') ? 'selected' : ''; ?>>Argentina</option>
                                <option value="BO" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'BO') ? 'selected' : ''; ?>>Bolivia</option>
                                <option value="CL" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'CL') ? 'selected' : ''; ?>>Chile</option>
                                <option value="CO" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'CO') ? 'selected' : ''; ?>>Colombia</option>
                                <option value="CR" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'CR') ? 'selected' : ''; ?>>Costa Rica</option>
                                <option value="CU" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'CU') ? 'selected' : ''; ?>>Cuba</option>
                                <option value="DO" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'DO') ? 'selected' : ''; ?>>República Dominicana</option>
                                <option value="EC" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'EC') ? 'selected' : ''; ?>>Ecuador</option>
                                <option value="SV" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'SV') ? 'selected' : ''; ?>>El Salvador</option>
                                <option value="GT" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'GT') ? 'selected' : ''; ?>>Guatemala</option>
                                <option value="HN" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'HN') ? 'selected' : ''; ?>>Honduras</option>
                                <option value="MX" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'MX') ? 'selected' : ''; ?>>México</option>
                                <option value="NI" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'NI') ? 'selected' : ''; ?>>Nicaragua</option>
                                <option value="PA" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'PA') ? 'selected' : ''; ?>>Panamá</option>
                                <option value="PY" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'PY') ? 'selected' : ''; ?>>Paraguay</option>
                                <option value="PE" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'PE') ? 'selected' : ''; ?>>Perú</option>
                                <option value="PR" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'PR') ? 'selected' : ''; ?>>Puerto Rico</option>
                                <option value="UY" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'UY') ? 'selected' : ''; ?>>Uruguay</option>
                                <option value="VE" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'VE') ? 'selected' : ''; ?>>Venezuela</option>
                                <option value="US" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'US') ? 'selected' : ''; ?>>Estados Unidos</option>
                                <option value="CA" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'CA') ? 'selected' : ''; ?>>Canadá</option>
                                <option value="PT" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'PT') ? 'selected' : ''; ?>>Portugal</option>
                                <option value="BR" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'BR') ? 'selected' : ''; ?>>Brasil</option>
                                <option value="FR" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'FR') ? 'selected' : ''; ?>>Francia</option>
                                <option value="IT" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'IT') ? 'selected' : ''; ?>>Italia</option>
                                <option value="DE" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'DE') ? 'selected' : ''; ?>>Alemania</option>
                                <option value="GB" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'GB') ? 'selected' : ''; ?>>Reino Unido</option>
                                <option value="OT" <?php echo (isset($old_data['pais']) && $old_data['pais'] === 'OT') ? 'selected' : ''; ?>>Otros países</option>
                            </select>
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-900">
                            Teléfono
                        </label>
                        <div class="mt-1">
                            <input type="tel" name="telefono" id="telefono" required
                                   value="<?php echo htmlspecialchars($old_data['telefono'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Correo electrónico -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">
                            Correo electrónico
                        </label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                   value="<?php echo htmlspecialchars($old_data['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-900">
                            Contraseña
                        </label>
                        <div class="mt-1">
                            <input type="password" name="password" id="password" required
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">La contraseña debe tener al menos 8 caracteres e incluir números y letras</p>
                    </div>

                    <!-- Repetir contraseña -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-900">
                            Confirmar contraseña
                        </label>
                        <div class="mt-1">
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Fecha de nacimiento -->
                    <div>
                        <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-900">
                            Fecha de nacimiento
                        </label>
                        <div class="mt-1">
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required
                                   value="<?php echo htmlspecialchars($old_data['fecha_nacimiento'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Sexo -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900">
                            Sexo
                        </label>
                        <div class="mt-2 flex gap-4">
                            <div class="flex items-center">
                                <input id="hombre" name="sexo" type="radio" value="hombre" <?php echo (isset($old_data['sexo']) && $old_data['sexo'] === 'hombre') ? 'checked' : ''; ?> class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="hombre" class="ml-2 block text-sm text-gray-900">Hombre</label>
                            </div>
                            <div class="flex items-center">
                                <input id="mujer" name="sexo" type="radio" value="mujer" <?php echo (isset($old_data['sexo']) && $old_data['sexo'] === 'mujer') ? 'checked' : ''; ?> class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="mujer" class="ml-2 block text-sm text-gray-900">Mujer</label>
                            </div>
                            <div class="flex items-center">
                                <input id="no_especificar" name="sexo" type="radio" value="no_especificar" <?php echo (isset($old_data['sexo']) && $old_data['sexo'] === 'no_especificar') ? 'checked' : ''; ?> class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="no_especificar" class="ml-2 block text-sm text-gray-900">Prefiero no decirlo</label>
                            </div>
                        </div>
                    </div>

                    <!-- Imagen de perfil -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900">
                            Imagen de perfil
                        </label>
                        <div class="mt-1 flex items-center space-x-4">
                            <div class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <input type="file" name="imagen_perfil" id="imagen_perfil" accept="image/*" class="text-sm text-gray-500 file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
                                <span class="mt-1 text-xs text-gray-500">JPG, PNG o GIF (máx. 2MB)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Condiciones de servicio -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" required <?php echo (isset($old_data['terms'])) ? 'checked' : ''; ?>
                                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="text-gray-700">
                                He leído y acepto los <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Términos y Condiciones</a> y la <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Política de Privacidad</a>
                            </label>
                        </div>
                    </div>

                    <!-- Botón de registro -->
                    <div>
                        <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Crear cuenta
                        </button>
                    </div>
                </form>

                <p class="mt-8 mb-8 text-center text-sm text-gray-500">
                    ¿Ya tienes cuenta?
                    <a href="/inicioSesion" class="font-semibold text-indigo-600 hover:text-indigo-500">
                        Inicia sesión
                    </a>
                </p>
            </div>
        </div>
    </div>
<?php
include_once DIRECTORIO_PLANTILLA . "footer.php";
?>