<?php

namespace App\Modelos;

class UserModel
{

    public static function saveUser(User $user)
    {



    }

    public static function getUserById($id)
    {
        $host = 'localhost';
        $dbname = 'videojuegos_db'; // Assuming this DB might contain a users table
        $user = 'root';
        $password = '';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            $stmt->execute();

            $userData = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $userData ?: null;

        } catch (\PDOException $e) {
            error_log("Error al obtener usuario por ID: " . $e->getMessage());
            return null; // Or handle error as appropriate
        }
    }
}