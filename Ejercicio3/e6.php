<?php

$num = [
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    ""
];

$sum = 0;

for ($i = 0; $i < count($num); $i++) {
    $num[$i] = rand(0, 99);
}

for ($j = 0; $j < count($num); $j++) {
    $sum = +$num[$j];
}

echo $sum / (count($num));

?>