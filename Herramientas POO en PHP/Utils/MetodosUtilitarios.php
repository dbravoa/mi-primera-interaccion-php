<?php

namespace Utils;

# Clase que no puede ser heredada
final class MetodosUtilitarios
{

    # Funcion para imprimir siempre con un salto de linea
    public static function imprimir($parametroAImprimir)
    {
        echo $parametroAImprimir . "<br>";
    }
    public static function saltoDeLinea()
    {
        echo "<br>";
    }

    public static function reglaHorizontal()
    {
        echo "<hr>";
    }
}
