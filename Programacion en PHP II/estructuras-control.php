<?php
# Estructuras de control

$dia = 2;
# operador ternario
echo "<h1>Switch</h1>";
$diaValidado = $dia > 7 || $dia < 0.00 ? "Ese día de la semana no existe" : $dia;
# switch
switch ($diaValidado) {
    case '1':
        echo "Es Lunes";
        break;
    case '2':
        echo "Es Martes";
        break;
    case '3':
        echo "Es Miercoles";
        break;
    case '4':
        echo "Es Jueves";
        break;
    case '5':
        echo "Es Viernes";
        break;
    case '6':
        echo "Es Sabado";
        break;
    case '7':
        echo "Es Domingo";
        break;
    default:
        echo $diaValidado;
        break;
}
# match
$diaAImprimir = match ($dia) {
    1 => "Es Lunes",
    2 => "Es Martes",
    3 => "Es Miercoles",
    4 => "Es Jueves",
    5 => "Es Viernes",
    6 => "Es Sábado",
    7 => "Es Domingo",
    default => "No existe ese día"
};
echo "<br><h1>Match</h1>";

echo $diaAImprimir;
