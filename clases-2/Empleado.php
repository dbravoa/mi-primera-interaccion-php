<?php

class Empleado extends Persona
{
    private $sueldo;


    # Sobreescritura del método imprimir que viene heredado de la clas
    # Persona
    function imprimir()
    {
        echo "Hola desde la clase Empleado";
    }

    public function setSueldo($sueldoParametro)
    {
        $this->sueldo = $sueldoParametro;
    }


    public function getSueldo($tienePermisos)
    {
        if ($tienePermisos == true) {
            return $this->sueldo;
        } else {
            return "HEY, USTED NO TIENE PERMISOS PARA VER ESTA INFO ¡ESTARÁ REQUISITORIADO!";
        }
    }
}
