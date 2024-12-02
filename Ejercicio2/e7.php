<?php

$primerNum = $_GET["inicio"];
$ultimoNum = $_GET["final"];
$sum = 0;

for ($primerNum; $primerNum <= $ultimoNum; $primerNum++){
    $sum = $sum + $primerNum;
}
echo($sum);

?>