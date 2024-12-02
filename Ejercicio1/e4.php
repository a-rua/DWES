<?php

$n1 = 1;
$n2 = 2;
$n3 = 3;

if ($n1 > $n2 && $n1 > $n3) {
    if ($n2 > $n3) {
        echo "Ascendente: " . $n1 . " " . $n2 . " " . $n3 . "<br>";
        echo "Descendente: " . $n3 . " " . $n2 . " " . $n1 . "<br>";
    } else if ($n2 < $n3) {
        echo "Ascendente: " . $n1 . " " . $n3 . " " . $n2 . "<br>";
        echo "Descendente: " . $n2 . " " . $n3 . " " . $n1 . "<br>";
    }
} else if ($n1 < $n2 && $n2 > $n3) {
    if ($n1 > $n3) {
        echo "Ascendente: " . $n2 . " " . $n1 . " " . $n3 . "<br>";
        echo "Descendente: " . $n3 . " " . $n1 . " " . $n2 . "<br>";
    } else if ($n1 < $n3) {
        echo "Ascendente: " . $n2 . " " . $n3 . " " . $n1 . "<br>";
        echo "Descendente: " . $n1 . " " . $n3 . " " . $n2 . "<br>";
    }
} else if ($n3 > $n2 && $n1 < $n3) {
    if ($n2 > $n1) {
        echo "Ascendente: " . $n3 . " " . $n2 . " " . $n1 . "<br>";
        echo "Descendente: " . $n1 . " " . $n2 . " " . $n3 . "<br>";
    } else if ($n2 < $n1) {
        echo "Ascendente: " . $n3 . " " . $n1 . " " . $n2 . "<br>";
        echo "Descendente: " . $n2 . " " . $n1 . " " . $n3 . "<br>";
    }
}

?>