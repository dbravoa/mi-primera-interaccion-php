<?php
## Variables en PHP
$variable = 2;
echo $variable . "<br>";
echo "El valor de variable es $variable" . "<br>";

//Verificando el tipo de variable
var_dump($variable);

## Constantes en PHP
define('PI', '3.1416');
echo PI . "<br>";

var_dump(defined('PI'));

//Descubriendo en qué sistema operativo estamos trabajando
echo "<br> Nuestro sistema operativo es: " . PHP_OS;
echo "<br> La version de PHP en la que estamos trabajando es: " . PHP_VERSION;
