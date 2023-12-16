<?php
/* require_once("ejemplo1/Humano.php");
require_once("ejemplo2/Humano.php"); */

#Le indico explicitamente que debe llamar a la clase Humano del namespace Ejemplo2
/* use Ejemplo1\Humano;
use Ejemplo2\Humano as Humano2; */


# haciendo referencia a la clase humano del namespace Ejemplo2
/* $humano1 = new Humano;
$humano1->imprimir();
echo "<hr>";
$humano2 = new Humano2;
$humano2->imprimir(); */


#haciendo referencia al namespace Ejemplo1
use Ejemplo1\Humano;
#importando la clase de tipo final al archivo
use Utils\MetodosUtilitarios;

use Ejemplo3\Persona;


#Trabajando con Autoload
# necesitamos enviar como parámetro una función anómima(que se ejecuta sin necesidad de hacer referencia a ella)
spl_autoload_register(function ($clase) {
    if (file_exists(str_replace("\\", "/", $clase) . ".php")) {
        require_once(str_replace("\\", "/", $clase) . ".php");
    }
});

$humano1 = new Humano;
$humano1->imprimir();
MetodosUtilitarios::reglaHorizontal();
//MetodosUtilitarios::saltoDeLinea();
$humano1->setNombre("Juanito");
MetodosUtilitarios::imprimir($humano1->getNombre());
MetodosUtilitarios::reglaHorizontal();
$persona1 = new Persona(dni: "71221756", nombre: "Juanito", apellidos: "El Men");
MetodosUtilitarios::imprimir($persona1->getDni());
