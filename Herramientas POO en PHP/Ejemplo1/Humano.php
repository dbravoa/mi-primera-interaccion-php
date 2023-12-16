<?php


#Nombre de espacio para diferenciar desde donde estoy llamando a la clase Humano
namespace Ejemplo1;

class Humano
{

    private $nombre;
    public function imprimir()
    {
        echo "Hola soy un humano desde el namespace Ejemplo1";
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }
}
