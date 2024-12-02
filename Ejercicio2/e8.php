<?php

$m = rand(1, 99);
if (isset($_GET["pares"])) {
    for ($z = 0; $z <= $m; $z++) {
        if ($p) {
            if ($z % 2 == 0) {
                echo $z . " ";
            }
        }
    }
} else {
    for ($z = 0; $z <= $m; $z++) {
        if ($z % 2 != 0) {
            echo $z . " ";
        }
    }
}


?>