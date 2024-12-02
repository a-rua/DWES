<?php

echo "<h1>Datos personales</h1><br>";

print_r($_POST);

if (!empty($_POST["nombre"])) {
    
    echo "Su nombre es: <b>".$_POST["nombre"]."</b><br>";
} else {
    echo '<style "color=red">No ha introducido su nombre</style>';
}

if (!empty($_POST["apellidos"])) {
   
    echo "Su apellido es: <b>".$_POST["apellidos"]."</b><br>";
} else {
    echo "<style color='red'>No ha introducido su apellido</style>";
}

if (!empty($_POST["edad"])) {
    
    echo "Su edad es: <b>".$_POST["edad"]."</b><br>";
} else {
    echo "<style color='red'>No ha introducido su edad</style>";
}

if (!empty($_POST["peso"])) {
    echo "Su peso es: <b>".$_POST["peso"]."</b><br>";
} else {
    echo "<style color='red'>No ha introducido su peso</style>";
}


if (isset($_POST["sexo"])) {
    echo "Su sexo es: <b>".$_POST["sexo"]."</b><br>";
} else {
    echo "<style color='red'>No ha introducido su sexo</style>";
}

if (isset($_POST["civil"])) {
    $civil = $_POST["Estado_Civil"];
    echo "Su estado civil es: <b>".$_POST["Estado_Civil"]."</b><br>";
} else {
    echo "<style color='red'>No ha introducido su estado civil</style>";
}


if (isset($_POST["cine"])){
    echo "Le gusta: <b>el cine</b>, ";
} else {
    echo "Le gusta: ";
}

if (isset($_POST["literatura"])){
    echo "<b>la literatura</b>, ";
} 

if (isset($_POST["tebeos"])){
    echo "<b>los tebeos</b>, ";
}


if (isset($_POST["deporte"])){
    echo "<b>el deporte</b>, ";
}

if (isset($_POST["musica"])){
    echo "<b>la musica</b>, ";
}

if (isset($_POST["television"])){
    echo "<b>la television</b>";
}

?>