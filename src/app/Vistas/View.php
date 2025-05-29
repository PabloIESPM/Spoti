<?php

namespace App\Vistas;

class View
{

    public static function mostrar_vista (string $vista, array $datos = []){
        $fullPath = DIRECTORIO_VISTAS . $vista;

        if (file_exists($fullPath)) {
            extract($datos);
            require $fullPath;
        } else {
            error_log("Error: View file not found - " . $fullPath);
            // Optionally, return false or throw an exception
            // return false;
        }
    }

}