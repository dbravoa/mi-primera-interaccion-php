<?php
$nombre = "Andrés de las Mercedes";
$nombre2 = "Juanito de las Mercedes";
#Cantidad  de caracteres
echo strlen($nombre);
echo "<br>";
#Descontando caracteres especiales
echo mb_strlen($nombre);
echo "<br>";
#posicion de una letra
echo strpos($nombre, 'a');
echo "<br>";
echo strrpos($nombre, 's');
echo "<br>";
var_dump(str_contains($nombre, 'Mercedes'));
echo "<br>";
var_dump(str_starts_with($nombre, 'Andrés'));
echo "<br>";
var_dump(str_ends_with($nombre, "Mercedes"));
echo "<br>";
echo strcmp($nombre, $nombre2);
echo "<br>";
echo "<h1> Armando un código </h1>";
echo substr($nombre, 1, 3);
