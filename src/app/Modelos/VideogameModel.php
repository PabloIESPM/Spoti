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
            error_log("Error de conexión: " . $e->getMessage());
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
                error_log("Error al insertar videojuego '" . $videojuego['nombre'] . "': " . $e->getMessage());
            }
        }



    }

}