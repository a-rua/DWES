<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Modelo/MArma.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Vista/VArma.php');

$vista = new VArma();
$vista->inithtml();
?>
<h1>Formulario de crear arma</h1>
<?php
$vista->formArma();
$vista->endhtml();

?>