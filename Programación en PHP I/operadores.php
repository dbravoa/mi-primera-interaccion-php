<?php
$a = 5;
$b = 6;
//Operadores Matemáticos
$resultado = $a + $b;
$resultado = $a - $b;
$resultado = $a * $b;
$resultado = $a / $b;
$resultado = $a % $b;
// 5/6=0 R=>5
echo "El residuo de 5 entre 6 es: " . $resultado . "<br>";

//Operadores de combinación
//$a = $a + $b;
//11
$a += $b;
//$a = $a - 1;
//10
$a--;
//12
$a += 2;
echo "El valor de a es: $a <br>";

# Operadores Lógicos
$a = 5;
$b = '5';
//false
//Comparando el valor y el tipo
var_dump($a === $b);
//true
//Comparando solamente el valor
var_dump($a == $b);
//Comparando si tienen diferente valor
var_dump($a <> $b);
