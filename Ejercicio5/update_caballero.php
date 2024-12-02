<?php
if (isset($_GET['id']) && isset($_GET['nombre'])) {
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $fuerza = $_GET['fuerza'];
    $ataque = $_GET['ataque'];
    $defensa = $_GET['defensa'];
    $experiencia = $_GET['experiencia'];
    $fec = $_GET['fecha_nacimiento'];
    if(isset($_GET['activo'])) { 
        $activo = 1;
      }
      else { 
        $activo = 0;
      }

    $mysqli = new mysqli("localhost", "root", "", "test");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("UPDATE caballeros SET nombre=?, fuerza=?, ataque=?, defensa=?, experiencia=?, fecha_nacimiento=?, activo=? WHERE id=?"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("siiiisii", $nombre, $fuerza, $ataque, $defensa, $experiencia, $fec, $activo, $id)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }

    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }

    /* se recomienda el cierre explícito */
    $sentencia->close();

    /* Sentencia no preparada */
    //     $resultado = $mysqli->query("SELECT * FROM test");
//     var_dump($resultado->fetch_all());
    header("Location: index.php");
} else {
    echo ("<br>Error en parametros<br>");

}



?>