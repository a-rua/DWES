<?php

$l = 3;

if ($l < 3) {
    echo "10 cents"; 
} else if ($l > 3) {
    echo "La llamada cuesta " . (10 + (($l-3) *5) ) . "centimos";
}

?>