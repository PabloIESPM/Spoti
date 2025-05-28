<?php

namespace App\Clases;

class User
{
    private ?int $id = null;
    private string $nombre;
    private string $primer_apellido;
    private string $segundo_apellido;
    private string $nick;
    private string $email;
    private string $passwordHash;

    public function __construct(
        string $nombre,
        string $primer_apellido,
        string $segundo_apellido,
        string $nick,
        string $email,
        string $passwordHash
    ) {
        $this->nombre = $nombre;
        $this->primer_apellido = $primer_apellido;
        $this->segundo_apellido = $segundo_apellido;
        $this->nick = $nick;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPrimerApellido(): string
    {
        return $this->primer_apellido;
    }

    public function getSegundoApellido(): string
    {
        return $this->segundo_apellido;
    }

    public function getNick(): string
    {
        return $this->nick;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
}