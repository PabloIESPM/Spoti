<?php

namespace App\Modelos;

use App\Clases\User;

class UserModel
{

    public static function saveUser(User $user)
    {
        $host = 'localhost';
        $dbname = 'videojuegos_db';
        $db_user = 'root'; // Renamed to avoid conflict with PDO user parameter
        $password = '';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname", $db_user, $password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("INSERT INTO users (nombre, primer_apellido, segundo_apellido, nick, pais, telefono, email, password_hash) VALUES (:nombre, :primer_apellido, :segundo_apellido, :nick, :pais, :telefono, :email, :password_hash)");

            $stmt->bindParam(':nombre', $user->getNombre());
            $stmt->bindParam(':primer_apellido', $user->getPrimerApellido());
            $stmt->bindParam(':segundo_apellido', $user->getSegundoApellido());
            $stmt->bindParam(':nick', $user->getNick());
            $stmt->bindParam(':pais', $user->getPais());
            $stmt->bindParam(':telefono', $user->getTelefono());
            $stmt->bindParam(':email', $user->getEmail());
            $stmt->bindParam(':password_hash', $user->getPasswordHash());

            $stmt->execute();
            return true;

        } catch (\PDOException $e) {
            error_log("Error al guardar usuario: " . $e->getMessage());
            return false;
        }
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

    public static function findByEmail(string $email)
    {
        $host = 'localhost';
        $dbname = 'videojuegos_db';
        $user = 'root';
        $password = '';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("SELECT id, nick, email, password_hash, foto_usuario FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
            $stmt->execute();

            $userData = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $userData ?: null;

        } catch (\PDOException $e) {
            error_log("Error al obtener usuario por email: " . $e->getMessage());
            return null;
        }
    }

    public static function emailExists(string $email): bool
    {
        $host = 'localhost';
        $dbname = 'videojuegos_db';
        $user = 'root';
        $password = '';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchColumn() > 0;

        } catch (\PDOException $e) {
            error_log("Error al verificar email: " . $e->getMessage());
            return false; // Return false on DB error as specified
        }
    }

    public static function nickExists(string $nick): bool
    {
        $host = 'localhost';
        $dbname = 'videojuegos_db';
        $user = 'root';
        $password = '';

        try {
            $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE nick = :nick");
            $stmt->bindParam(':nick', $nick, \PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchColumn() > 0;

        } catch (\PDOException $e) {
            error_log("Error al verificar nick: " . $e->getMessage());
            return false; // Return false on DB error as specified
        }
    }
}