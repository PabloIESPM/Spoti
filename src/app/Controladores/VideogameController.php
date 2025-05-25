<?php

namespace App\Controladores;

use App\Modelos\VideogameModel;

class VideogameController
{
    public function inicializar(){
        //Hacer una petición a la API de videojuegos y obtener 5 videojuegos

        VideogameModel::inicializar($videjuegos);


    }

    public function index($id){
        //Haces una petición al modelo para obtener los datos del videojuego

        //Incluyes la vista que muestre los datos del videojuego

    }
}