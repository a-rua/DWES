<?php

$num = [
    "", "", "", "", "", "", "", "", "", ""
];

$min = 100;

for ($i = 0; $i < count($num); $i++) {
    $num[$i] = rand(0, 99);
}

for ($j = 0; $j < count($num); $j++) {
    if ($num[$j] < $min) {
        $min = $num[$j];
    }
}

print_r($num);
echo "<br>" . $min;

?>