<?php

namespace App\Modelos;

class VideogameModel
{

    public static function inicializar(array $videojuegos){

        //HAcer una conexion a la base de datos
        $host = 'localhost';
        $dbname = 'videojuegos_db';
        $user = 'root';
        $password = '';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            // Set PDO to throw exceptions on error
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            // Optionally, you might want to exit or log the error
            // exit; 
        }

        //Recorrer el array para cada uno de los videojuegos
        foreach ($videojuegos as $videojuego) {
            try {
                $stmt = $db->prepare("INSERT INTO videojuegos (nombre, genero, calificacion, anio_lanzamiento) VALUES (:nombre, :genero, :calificacion, :anio_lanzamiento)");
                $stmt->bindParam(':nombre', $videojuego['nombre']);
                $stmt->bindParam(':genero', $videojuego['genero']);
                $stmt->bindParam(':calificacion', $videojuego['calificacion']);
                $stmt->bindParam(':anio_lanzamiento', $videojuego['anio_lanzamiento']);
                $stmt->execute();
            } catch (\PDOException $e) {
                echo "Error al insertar videojuego: " . $e->getMessage();
                // Optionally, you might want to log the error or handle it differently
            }
        }

        //Insertar cada uno de los videojuegos en la base de datos



    }

}