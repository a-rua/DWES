<?php

$pares = false;
$n = 0;

if ($pares == true) {
    for ($n = 1; $n <= rand(1,99); $n++) {
        if ($n %2 == 0) {
            echo $n . " ";
        }
    }
} else if ($pares == false)
for ($n = 1; $n < rand(1,99); $n++) {
    if ($n %2 == 1) {
        echo $n . " ";
    }
}

?>