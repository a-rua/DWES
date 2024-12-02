<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Modelo/MArma.php');

$id = $_GET['id'];

$con = new Modelo\MArma();
$con->eliminarArma( $id );

header("Location: armas.php");
exit();
?>
