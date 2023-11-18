<?php
#Definiendo un array
#Arrays unidimensionales
$miArray = ['Juan', 'Pedro', 'Mario'];
#Definiendo los valores con posterioridad
$miArray[3] = 'Rafael';
$miArray[4] = 'José';
var_dump($miArray);
echo "<br>";
echo $miArray[0];
# Array Asociativo -- cambio de indices de números a otro seguimiento
$datosDeUnaPersona = [
    "nombre" => "Daniel Bravo",
    "edad" => "21",
    "genero" => "Varón"
];

echo "<br>";
echo "El nombre es: " . $datosDeUnaPersona['nombre'];
echo "<br>";
echo "El genero es:" . $datosDeUnaPersona['genero'];
echo "<br>";
echo "La edad es: " . $datosDeUnaPersona['edad'];

# Arrays Multidimensionales Asociativos -- Diccionarios de datos

$datosPersonas = [
    #0
    [
        "nombre" => "Juan",
        "apellido" => "de la Perca",
        "telefono" => "1234456897",
        "direccion" => [
            "distrito" => "El Tambo",
            "ciudad" => "Huancayo",
            "pais" => "Perú"
        ]
    ],
    #1
    [
        "nombre" => "Pedro",
        "apellido" => "de las Mercedes",
        "telefono" => "1234456896",
        "direccion" => [
            "distrito" => "El Tambo",
            "ciudad" => "Huancayo",
            "pais" => "Perú"
        ]
    ],
    #2
    [
        "nombre" => "Chechito",
        "apellido" => "Candiotti Jalao'",
        "telefono" => "1234456898",
        "direccion" => [
            "distrito" => "El Tambo",
            "ciudad" => "Huancayo",
            "pais" => "Perú"
        ]
    ]
];
echo "<br>" . $datosPersonas[2]['direccion']['distrito'];

//var_dump($datosPersonas);
echo "<h1>Lista de Personas</h1>";
foreach ($datosPersonas as $persona) {
    echo "<br>El dato es: " . $persona['nombre'];
    echo "<br>El dato es: " . $persona['apellido'];
    echo "<br>El dato es: " . $persona['telefono'];
    echo "<br>El dato es: " . $persona['direccion']['pais'];
    echo "<br>El dato es: " . $persona['direccion']['ciudad'];
    echo "<br>El dato es: " . $persona['direccion']['distrito'];
    echo "<hr>";
}
