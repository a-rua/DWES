<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Modelo/MArma.php');
//var_dump($_POST);

$id = $_POST['id'];
$daño = $_POST['daño'];
$tipo = $_POST['tipo'];

$arma["id"] = $id;
$arma["daño"] = $daño;
$arma["tipo"] = $tipo;

$mArma = new Modelo\MArma();
$mArma->modificarArma($arma);

header("Location: armas.php");
exit();

// El exit() en la última línea es importante porque:
// 1. Asegura que no se ejecute ningún código adicional después de la redirección.
// 2. Evita que se envíen encabezados adicionales que podrían causar errores.
// 3. Mejora la seguridad al detener la ejecución del script inmediatamente después de la redirección.
// 4. Optimiza el rendimiento al finalizar el script de manera explícita.
