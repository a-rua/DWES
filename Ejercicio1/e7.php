<?php

$nota = 5;

if ($nota >= 1 && $nota < 5) {
    echo "Suspenso";
} else if ($nota >= 5 && $nota < 6) {
    echo "Suficiente";
} else if ($nota >= 6 && $nota < 7) {
    echo "Bien";
} else if ($nota >= 7 && $nota < 9) {
    echo "Muy Bien";
} else if ($nota >= 9 && $nota <= 10) {
    echo "Sobresaliente";
} else {
    echo "ERROR";
}

?>