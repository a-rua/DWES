<?php

$sum = 0;
$dias = [
    "Lunes"=> 2,
    "Martes"=> 1,
    "Miercoles"=> 3,
    "Jueves"=> 4,
    "Viernes"=> 6,
    "Sabado"=> 7,
    "Domingo"=> 8,
];

foreach ($dias as $key => $value) {
    echo $key . " " . $value ."<br><br>";
    $sum = $sum + $value;
}

echo "Suma: " . $sum . "<br>";
echo "Media: " . $sum / 7;

?>