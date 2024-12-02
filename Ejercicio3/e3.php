<?php

$zapatos = [
    "Kike", "Aliodas", "Cat", "Fina", "Shredders"
];

$precios = [
    100, 200, 50, 80, 30
];

$reb = [
    100 * 0.8, 200 * 0.6, 50 * 0.8, 80 * 0.6, 30 * 0.5
];

for ($i = 0; $i < count($zapatos); $i++) {
    echo $zapatos[$i] . " = " . $precios[$i] . "€" . "<br>" . "Rebajas= " . $reb[$i] . "€" . "<br><br>";
    $precios[$i] = $reb[$i];
}

?>