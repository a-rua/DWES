<?php

$zapatos = [
    "Kike", "Aliodas", "Cat", "Fina", "Shredders"
];

$precios = [
    100, 200, 50, 80, 30
];

for ($i = 0; $i < count($zapatos); $i++) {
    echo $zapatos[$i] . " = " . $precios[$i] . "€" . "<br>";
}

?>