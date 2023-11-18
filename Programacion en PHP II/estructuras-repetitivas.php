<?php
# Estructuras repetitivas
# while
$a = 0;
while ($a <= 10) {
    # Imprimiendo saludo
    echo "Hola, soy el número $a <br>";
    # Aumentando el valor en 2 de la variable $a
    # $a= $a + 2;
    $a += 2;
}

# do-while
$b = 5;
do {
    # evaluando si el residuo de $b entre 5 es 0
    if ($b % 5 == 0) {
        echo "$b es múltiplo de 5 <br>";
    } else {
        echo "F <br>";
    }
    # $b=$b*5
    $b *= 5;
} while ($b <= 100);

#Tamaño: 4
# indice maximo: 3
$personas = ['Andres', 'Esteban', 'Boris', 'Percy', 'Juan Carlos', 'Cueva'];
#Imprimir los valores del array
# for
/* for ($i = 0; $i < sizeof($personas); $i++) {
    echo $personas[$i] . "<br>";
} */

# foreach -- por cada uno
# foreach($cualquierVariable as $indice => $variableTemporal)
foreach ($personas as $index => $persona) {
    if ($persona == 'Boris') {
        # Saltar el paso
        //continue;
        # Romper o terminar el bucle
        //break;
        # Matar al programa -- frenar en una emergencia
        die();
    }
    echo $persona . " está en el indice $index Esto fue impreso por un foreach <br>";
}

echo "Hemos salido del bucle pero podemos continuar el programa";
