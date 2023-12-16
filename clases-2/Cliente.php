<?php
# Clase Cliente hereda de Persona
# Clase Cliente que implementa los metodos de la interfaz IAccionesCliente
class Cliente extends Persona implements IAccionesCliente
{
    public function comprarEnLinea()
    {
    }
    public function sacarTurnos()
    {
    }
    public function depositarALaEmpresa()
    {
    }
    public function imprimir()
    {
        echo "Hola, yo soy el cliente";
    }
}
