<?php

namespace App\Controladores;

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
        return "Esto es una vista store";

    }
    public function update(){
        return "Esto es una vista update";
    }
    public function destroy(){
        return "Esto es una vista delete";
    }
}