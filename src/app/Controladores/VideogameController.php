<?php

namespace App\Controladores;

use App\Modelos\VideogameModel;

class VideogameController
{
    public function inicializar(){
        //Hacer una petición a la API de videojuegos y obtener 5 videojuegos (POST: https://id.twitch.tv/oauth2/token?client_id=abcdefg12345&client_secret=hijklmn67890&grant_type=client_credentials)

        VideogameModel::inicializar($videjuegos);


    }

    public function index($id){
        //Haces una petición al modelo para obtener los datos del videojuego

        //Incluyes la vista que muestre los datos del videojuego (videojuegos.php)

    }
}
