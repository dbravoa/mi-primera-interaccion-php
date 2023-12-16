<?php


#Solamente puedes heredar de 1 Clase Abstracta
#Puedes implementar muchas interfaces pero solamente puedes heredar de 1 clase abstracta
class ClienteVIP extends ACliente implements IAccionesClienteVIP
{

    use ACliente2, ACliente3;

    ###### Trait
    protected function ejemplodeMetodoAbstracto()
    {
    }
    ###### Clase Abstracta
    protected function comprar()
    {
    }
    ###### Interfaz
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
    }
    function tomarTragosEnLaTienda()
    {
    }
    function comprarUnProductoGratisAlMes()
    {
    }
}
