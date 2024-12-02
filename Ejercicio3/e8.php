<?php

$usuario1 = ["nombre"=>"Javier", 
            "apellido"=>"Sanchez", 
            "dni"=>"12345678A"];
$usuario2 = ["nombre"=>"Ion", 
            "apellido"=>"Rua", 
            "dni"=>"87654321Z"];

echo "<table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
            </tr>
            <tr>";
    
    foreach ($usuario1 as $key => $value1) {
        echo ("<td> $value1 </td>");
    }
    echo "</tr>
            <tr>";
    foreach ($usuario1 as $key => $value2) {
        echo ("<td> $value2 </td>");
    }
    echo "</tr>";
    echo "</table>"
    
    
        ?>