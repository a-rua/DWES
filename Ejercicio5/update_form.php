<?php
$id = $_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "test");
$resultado = $mysqli->query("select * from caballeros where id=" . $id);

$usuario = $resultado->fetch_assoc();

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>

<body>
    <a href="index.php">Regresar</a>
    <br>
    <form action="update_caballero.php">
        <input type="text" name="id" placeholder="id" value="<?= $usuario['id'] ?>" readonly>
        <input type="text" name="nombre" placeholder="nombre" value="<?= $usuario['nombre'] ?>">
        <input type="text" name="fuerza" placeholder="fuerza" value="<?= $usuario['fuerza'] ?>">
        <input type="text" name="ataque" placeholder="ataque" value="<?= $usuario['ataque'] ?>">
        <input type="text" name="defensa" placeholder="defensa" value="<?= $usuario['defensa'] ?>">
        <input type="text" name="experiencia" placeholder="experiencia" value="<?= $usuario['experiencia'] ?>">
        <input type="text" name="fecha_nacimiento" placeholder="fecha_nacimiento"
            value="<?= $usuario['fecha_nacimiento'] ?>">
        <input type="checkbox" id="activo" name="activo" placeholder="activo">
        <input type="submit" value="Guardar">
    </form>
</body>

</html>