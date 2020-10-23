<?php

namespace App;

class Empleado
{
    private $nombre;
    private $correo;

    public function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function enviaCorreo()
    {
        return $this->correo;
    }

    public function dameNombre()
    {
        return $this->nombre;
    }


}