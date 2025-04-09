<?php

namespace App\Controladores;

class UserController
{
    public function index(){
        return "Estoy es una vista index";
    }
    public function show(){
        return "Esto es una vista show";
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