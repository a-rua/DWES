<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Modelo/MArma.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Vista/VArma.php');

$id = $_GET['id'];

$mArma = new Modelo\MArma();
$arma = $mArma->getArma($id);

$vista = new VArma();
$vista->inithtml();
$vista->formEditArma($arma);
$vista->endhtml();

?>
