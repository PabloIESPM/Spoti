<?php

namespace App\Controladores;

use App\Clases\User; // Added this line
use App\Modelos\UserModel;
use App\Vistas\View;
use Respect\Validation\Validator as v;

class UserController
{
    public function index(){
        return "Estoy es una vista index";
    }
    public function show($id){
        $usuario = UserModel::getUserById($id);
        View::mostrar_vista("mostrarDatosUsuario.php", ['usuario' => $usuario]);
    }
    public function edit(){
        return "Esto es una vista edit";
    }
    public function store(){

        // Filtrado datos
        try {
            v::key('nombre', v::stringType())->assert($_POST);
            v::key('primer_apellido', v::stringType())->assert($_POST);
            v::key('segundo_apellido', v::stringType())->assert($_POST);
            v::key('nick', v::stringType())->assert($_POST);
            v::key('pais', v::stringType())->assert($_POST);
            v::key('telefono', v::phone($_POST['pais']))->assert($_POST);
            $_POST['email'] = strtolower($_POST['email']);
            v::key('email', v::email())->assert($_POST);
            v::key('password', v::stringType()->length(8, null))->assert($_POST);
        } catch (\Respect\Validation\Exceptions\ValidationException $e) {
            $errorMessage = "Por favor, corrija los errores del formulario. Verifique todos los campos.";
            View::mostrar_vista('registro.php', ['error' => $errorMessage, 'old_data' => $_POST]);
            return;
        }

        if ($_POST['password'] !== $_POST['password_confirmation']) {
            $errorMessage = "Las contraseñas no coinciden.";
            View::mostrar_vista('registro.php', ['error' => $errorMessage, 'old_data' => $_POST]);
            return;
        }

        // Email duplicado
        if (UserModel::emailExists($_POST['email'])) {
            $errorMessage = "Este correo electrónico ya está registrado.";
            View::mostrar_vista('registro.php', ['error' => $errorMessage, 'old_data' => $_POST]);
            return;
        }

        // Nick duplicado
        if (UserModel::nickExists($_POST['nick'])) {
            $errorMessage = "Este nombre de usuario ya está en uso.";
            View::mostrar_vista('registro.php', ['error' => $errorMessage, 'old_data' => $_POST]);
            return;
        }

        $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = new User($_POST['nombre'], $_POST['primer_apellido'], $_POST['segundo_apellido'], $_POST['nick'], $_POST['pais'], $_POST['telefono'], $_POST['email'], $passwordHash);

    if (UserModel::saveUser($user)) {
        $_SESSION['usuario'] = $user->getNick();
        header('Location: /inicioSesion');
        exit;
    } else {
        $errorMessage = "Error al registrar al usuario. Hubo un problema al guardar los datos, por favor, inténtelo de nuevo.";
        View::mostrar_vista('registro.php', ['error' => $errorMessage, 'old_data' => $_POST]);
        return;
    }

    }
    public function update(){
        return "Esto es una vista update";
    }
    public function destroy(){
        return "Esto es una vista delete";
    }

    public function handleLogin()
    {
        try {
            $_POST['email'] = strtolower($_POST['email']);
            v::key('email', v::email())->assert($_POST);
            v::key('password', v::stringType()->notEmpty())->assert($_POST);

            $user = UserModel::findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['usuario'] = $user['nick'];
                $_SESSION['foto_usuario'] = $user['foto_usuario'] ?: '/storage/default-avatar.png'; // Default avatar
                
                header('Location: /inicio');
                exit;
            } else {
                $errorMessage = "Correo electrónico o contraseña incorrectos.";
                View::mostrar_vista('inicioSesion.php', ['error' => $errorMessage]);
            }
        } catch (\Respect\Validation\Exceptions\ValidationException $e) {
            // Error genericvo

            $errorMessage = "Datos de inicio de sesión inválidos. Por favor, revise los campos.";
            View::mostrar_vista('inicioSesion.php', ['error' => $errorMessage]);
        }
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        header('Location: /inicioSesion');
        exit;
    }
}