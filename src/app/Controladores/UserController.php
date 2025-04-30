<?php

namespace App\Controladores;

use App\Modelos\UserModel;
use Respect\Validation\Validator as v;

class UserController
{
    public function index(){
        return "Estoy es una vista index";
    }
    public function show($id){

        //Hacer una llamada al modelo para conseguir los datos del usuario
        //$usuario;
        //View::mostrar_vista("mostrarDatsosUsuario.php",$usuario);

        include_once DIRECTORIO_VISTAS . "mostrarDatsosUsuario.php";
    }
    public function edit(){
        return "Esto es una vista edit";
    }
    public function store(){
        var_dump($_POST);

        // Filtrado datos
        v::key('nombre', v::stringType())->assert($_POST);
        v::key('primer_apellido', v::stringType())->assert($_POST);
        v::key('segundo_apellido', v::stringType())->assert($_POST);
        v::key('nick', v::stringType())->assert($_POST);
        v::key('pais', v::stringType())->assert($_POST);
        v::key('telefono', v::phone($_POST['pais']))->assert($_POST);
        v::key('email', v::email())->assert($_POST);



    $user=new User();

    UserModel::saveUser($user);

    $_SESSION['usuario']=$user->getNick();
        return "Esto es una vista store";

    }
    public function update(){
        return "Esto es una vista update";
    }
    public function destroy(){
        return "Esto es una vista delete";
    }
}