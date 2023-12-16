<?php

# Interfaces Abstractas 
interface IAccionesCliente
{
    # Metodos Abstractos -----> Metodos vacios (no tienen implementacion) que pueden tener diferentes comportamientos
    #                           dependiendo de la clase que los implemente
    public function comprarEnLinea();
    public function sacarTurnos();
    public function depositarALaEmpresa();
    public function imprimir();
}
