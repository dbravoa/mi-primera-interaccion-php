<?php

#Creamos un trait para poder romper el esquema de la herencia simple
trait ACliente2
{
    protected function funcionEspecial()
    {
        echo "Esta es una funcion especial";
    }

    #Podemos definir metodos abstractos
    abstract protected function ejemplodeMetodoAbstracto();
}
