<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>
    <a href="index.php">Regresar</a>
    <br>
    <form action="insert_caballero.php">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="fuerza" placeholder="fuerza">
        <input type="text" name="ataque" placeholder="ataque">
        <input type="text" name="defensa" placeholder="defensa">
        <input type="text" name="experiencia" placeholder="experiencia">
        <input type="text" name="fecha_nacimiento" placeholder="fecha_nacimiento">
        <input type="checkbox" id="activo" name="activo" placeholder="activo">
        <input type="submit" value="Guardar">
    </form>
</body>

</html>