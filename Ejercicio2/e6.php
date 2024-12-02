<?php

$numLineas=$_GET["filas"];
$dig = "";

for ($i = 0; $i < $numLineas; $i++) {
    $dig = $dig . "o";
    echo $dig . "<br>";
}

?>