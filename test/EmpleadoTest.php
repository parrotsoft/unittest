<?php

use PHPUnit\Framework\TestCase;
use App\Empleado;

class EmpleadoTest extends TestCase
{
    private $empleado;

    function testEnviaCorreo()
    {
        $this->empleado = new Empleado('Miguel', 'lopezarizamiguel@gmail.com');
        $this->assertSame('lopezarizamiguel@gmail.com', $this->empleado->enviaCorreo());
        $this->assertSame('Miguel', $this->empleado->dameNombre());
    }

    function testDameEstado()
    {
        $this->empleado = new Empleado('Miguel', 'lopezarizamiguel@gmail.com');
        $this->assertTrue($this->empleado->dameEstado());
    }
}