<?php
# Condicionales PHP
$a = 13;
$b = 13;
$c = 5;

if ($a == $b) {
    echo "$a es igual a $b";
} elseif ($a > $b) {
    echo "$a es mayor a $b";
} elseif ($a < $b) {
    echo "$a es menor a $b";
} elseif ($a === $b) {
    echo "$a tiene el mismo valor y el mismo tipo que $b, ambos son de tipo" . var_dump($a);
} else {
    echo "$a es diferente de $b";
}

# Operadores ternarios
$d = 6;
$f = 20;
//Realizamos la validacion con operadores lógicos y el operador Elvis
//Sentencia condicional ? valor verdadero : valor falso
//Si hay otra validacion extra en el valor falso debemos incluirla con parentesis
$validacion = $d > $f ? 'd es mayor a f' : ($d < $f ? 'd es menor a f' : 'd es igual a f');
echo "<br> $validacion";
