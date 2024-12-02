<?php


// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Modelo/MArma.php');


$id = $_POST['id'];
$daño = $_POST['daño'];
$tipo = $_POST['tipo'];

$con = new Modelo\MArma();
$arma["id"] = $id;
$arma["daño"] = $daño;
$arma["tipo"] = $tipo;
//   var_dump($usuario);
$con->insertArma($arma);

header("Location: armas.php");
exit();
?>