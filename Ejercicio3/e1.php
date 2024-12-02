<?php

$usuario1 = ["Javier", "Sanchez", "12345678A"];
$usuario2 = ["Ion", "Rua", "87654321Z"];
$i = 0;

echo "<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
        </tr>
        <tr>";

for ($i = 0; $i < count($usuario1); $i++) {
    echo "<td>" . $usuario1[$i] . "</td>";
}
echo "</tr>
        <tr>";
for ($j = 0; $j < count($usuario2); $j++) {
    echo "<td>" . $usuario2[$j] . "</td>";
}
echo "</tr>";
echo "</table>"


    ?>