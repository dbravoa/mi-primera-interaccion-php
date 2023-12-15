<?php
#Importando al archivo empleado
require_once("clases-2/Persona.php");
require_once("clases-2/Empleado.php");
require_once("clases-2/Proveedor.php");

$empleado1 = new Empleado;

#asignando el valor a la propiedad nombre heredada de la clase Persona
$empleado1->setNombre("Mario");
echo $empleado1->getNombre() . " es el nombre del empleado1";

echo "<br>";

$empleado1->setNumeroDocumento("21546587");
echo $empleado1->getNumeroDocumento();

echo "<br>";
$empleado1->setSueldo(25000);
echo $empleado1->getSueldo(true);

echo "<br>";
$empleado1->imprimir();

echo "<hr>";

$proveedor = new Proveedor;
echo "<br>";
$proveedor->imprimir();
