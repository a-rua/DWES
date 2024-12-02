<?php

$nombre =[
    "jordi"=>"Jordi Rubio",
    "marta"=>"Marta Fabra",
    "eva"=>"Eva Palacio",
    "antonio"=>"Antonio Comas",
    "emilio"=>"Emilio Morales",
    "fco"=>"Francisco Cascales",
];

echo "<h1> Array asociativo </h1><br>";
echo "<h2> Mostrar el array </h2>";

foreach ($nombre as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

ksort($nombre);

echo "<h2> Ordenar por clave </h2>";

foreach ($nombre as $key => $value) {
    echo $key . ": ". $value . "<br>";
}

natsort($nombre);

echo "<h2> Ordenar por contenido </h2>";

foreach ($nombre as $key => $value) {
    echo $key . ": ". $value . "<br>";
}

?>