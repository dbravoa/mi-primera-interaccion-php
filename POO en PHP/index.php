<?php
# Importando el archivo Animal que contiene a la clase Animal
require_once('clases/Animal.php');

# Objeto -- Instancia de una clase
$animal1=new Animal();

# Accediendo a los atributos del objeto
# el nombre del objeto animal1 es:
# Asignando valores con funciones setter
$animal1->setNombre("Torti");
$animal1->setTipoAnimal("Tortuga");

# Consultando los valores de los atributos del objeto
# Obtener valores con funciones getter
echo "Hola soy ".$animal1->getNombre()." y soy de tipo ".$animal1->getTipoAnimal();

echo "<br>";

# Creando un objeto instanciado a la clase
$animal2=new Animal("León","Leonardo");
//$animal2->setTipoAnimal("León");
//$animal2->setNombre("Leonardo");

echo "Hola soy ".$animal2->getNombre()." y soy de tipo ".$animal2->getTipoAnimal();



$animal3=new Animal();

$animal3->setNombre("Juanito");
$animal3->setTipoAnimal("Loro");

echo "<br> Hola soy ". $animal3->getNombre(). " y soy de tipo ".$animal3->getTipoAnimal();

#No es válido, debido a que el atributo es private o privado
#$animal3->nombre="Juanito";
