<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Modelo/MArma.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Vista/VArma.php');

$con = new Modelo\MArma();
$arma = $con->getArmas();

$vista = new VArma();
$vista->inithtml();
$vista->cabecera();
$vista->tablaArmas($arma);
$vista->endhtml();

?>