<?php

# Definiendo una clase abstracta
abstract class ACliente
{
    protected $codigoCliente;


    protected function pagar()
    {
        echo "En esta funcion voy hacer el pago de mis productos";
    }
    protected function mirarProductos()
    {
        echo "El cliente mira productos";
    }

    # Debe tener como mínimo 1 metodo abstracto
    abstract protected function comprar();
}
