<?php

class Proveedor extends Persona
{
    public function imprimir()
    {
        # Llamando al funcionamiento que tiene la clase padre
        # sobre el método
        parent::imprimir();
        echo " Ahora te saludo desde la clase Proveedor, que es hijo de la clase Persona";
    }
}
