<?php

$num = [
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    ""
];

for ($i = 0; $i < count($num); $i++) {
    $num[$i] = rand(0, 200);
}


echo "Numeros aleatorios<br>";
for ($j = 0; $j < count($num); $j++){
    echo $num[$j] ." ";
}

echo "<br>Otra forma de visualizar los datos de un array<br>";
print_r($num);

echo "<br>Numeros aleatorios al reves<br>";
for ($k = (count($num)-1) ; $k >= 0; $k--){
    echo $num[$k] ." ";
}

?>