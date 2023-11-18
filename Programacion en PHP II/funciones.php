<?php

# Le decimos a php que trabaje con tipos estrictos
# En pocas palabras que se convierta en un lenguaje de tipado fuerte
declare(strict_types=1);

# sumar cualquier numero con cualquier otro numero
# function nombreFuncion(parametros){codigo con posible retorno}
# funcion con retorno nulo -- void

function sumar($numero1, $numero2)
{
    $suma = $numero1 + $numero2;
    echo "El resultado de la suma es " . $suma;
}



#Ejecutando la funcion suma
sumar(20, 5);

#funcion con retorno
function multiplicar($numero1, $numero2)
{
    $multiplicacion = $numero1 * $numero2;
    # retornando un valor
    return $multiplicacion;
}
$resultadoMultiplicar = multiplicar(5, 6);
echo "<br> El resultado de la multiplicación hecha con una función con retorno es: " . $resultadoMultiplicar;

#funciones ya definidas en PHP
echo "<br> Un numero aleatorio entre 20 y 50 " . rand(20, 50);
echo "<br> Elevando 3 al cuadrado " . pow(3, 2);

#Ambitos de una variable
#Globales
# Las variables globales se pueden utilizar en cualquier momento del programa, pero
# deben ser leidas en orden de ejecución, es decir, primero
# se deben definir y luego consultar
$variableGlobal = "algo";
echo $variableGlobal;

#Locales
#Son las variables que existen hasta que la función termine su ejecución
function dividir($dividendo, $divisor)
{
    $cociente = $dividendo / $divisor;
    return $cociente;
} #aqui murió cociente

# A partir de aqui solamente se puede ejecutar y tener el valor de cociente
$resultado = dividir(3, 2);
echo $resultado;


#Parametros
# Fijos: Se utilizan de acuerdo a la cantidad que querramos definir
# Tienen la capacidad de poder tener valores por defecto
function imprimirNombres($persona1, $persona2, $persona3 = "Juana")
{
    echo $persona1 . "<br>";
    echo $persona2 . "<br>";
    echo $persona3 . "<br>";
}
imprimirNombres("Ramiro", "José", "Rafael");

# Variables: Se utilizan para recorrer la cantidad ilimitada de parámetros que nosotros querramos enviar
# function nombreFuncion(...$parametrosquesonunarrayencubierto)
function imprimirNombresVariable(...$personas)
{
    foreach ($personas as $indice => $persona) {
        $indice++;
        echo "<br> La persona $indice es: " . $persona;
    }
}
imprimirNombresVariable("Jose", "Mario", "Luis", "Pedro", "Carlos", "Peloncio");


# Funciones con tipado estricto
#definiendo el tipo de variable en los parámetros
function sumarEnteros(int $numero1, int|float $numero2)
{
    $suma = $numero1 + $numero2;
    echo "<br> La suma de los enteros es: " . $suma;
}
#ejecutando
sumarEnteros(5, 6.965);

#definiendo el tipo de variable en el retorno
function dividirFlotantes(int|float $dividendo, int|float $divisor): int|float
{
    $cociente = $dividendo / $divisor;
    return $cociente;
}

$resultadoDivisionFlotantes = dividirFlotantes(3, 2);
echo "<br> El resultado de la division es: " . $resultadoDivisionFlotantes;
