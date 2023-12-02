<?php

declare(strict_types=1);
# Definir una clase Animal para una caricatura
class Animal{
    private 
    $tipoAnimal, 
    $nombre,
    $apellidos,
    $raza,
    $tamanio,
    $color,
    $piel,
    $actorDeVoz,
    $genero,
    $actitud,   
    # int
    $edad,
    # array
    $enemigos,
    # array
    $amigos;

    public function __construct($tipoAnimalParametro="",$nombreParametro=""){
        $this->tipoAnimal=$tipoAnimalParametro;
        $this->nombre=$nombreParametro;
    }

    # Getter es para obtener valores
    public function getTipoAnimal(){
        return $this->tipoAnimal;
    }

    public function getNombre(){
        return $this->nombre;
    }


    # Setter es para asignar valores
    public function setTipoAnimal(string $tipoAnimalParametro){
        $this->tipoAnimal=$tipoAnimalParametro;
    }

    public function setEdad(int $edadParametro){
        $this->edad=$edadParametro;
    }

    public function setNombre(string $nombreParametro){
        $this->nombre=$nombreParametro;
    }

}