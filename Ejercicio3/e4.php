<?php

$num = [
    "", "", "", "", "", "", "", "", "", ""
];

$max = -1;

for ($i = 0; $i < count($num); $i++) {
    $num[$i] = rand(0, 99);
}

for ($j = 0; $j < count($num); $j++) {
    if ($num[$j] > $max) {
        $max = $num[$j];
    }
}

print_r($num);
echo "<br>" . $max;

?>