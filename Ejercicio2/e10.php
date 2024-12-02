<?php

$pri = $_GET["num"];
$b;

for ($z = 2; $z < $pri; $z++) {
    if ($pri % $z == 0) {
        $b = true;
        break;
    } else if ($pri % $z != 0) {
        $b = false;
    }
}

if ($b) {
    echo "No es un numero primo";
} else {
    echo "Es un numero primo";
}

?>