<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Caballeros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Caballeros</h1>

        <table class="table table-striped table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fuerza</th>
                    <th scope="col">Ataque</th>
                    <th scope="col">Defensa</th>
                    <th scope="col">Experiencia</th>
                    <th scope="col">Fecha De Nacimiento</th>
                    <th scope="col">Activo</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $mysqli = new mysqli("localhost", "root", "", "test");
                if ($mysqli->connect_errno) {
                    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }

                /* Sentencia no preparada */
                $id = $_GET["id"];
                $resultado = $mysqli->query('SELECT * FROM caballeros WHERE id=' . $id);

                // mostrar resultado
                while ($row = $resultado->fetch_assoc()) {
                    //echo ($row["id"] . " - " . $row["nombre"] . " - " . $row["fuerza"] . " - " . $row["ataque"] . " - " . $row["defensa"] . " - " . $row["experiencia"] . " - " . $row["fecha_nacimiento"] . " - " . $row["activo"]);
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["fuerza"]; ?></td>
                        <td><?php echo $row["ataque"]; ?></td>
                        <td><?php echo $row["defensa"]; ?></td>
                        <td><?php echo $row["experiencia"]; ?></td>
                        <td><?php echo $row["fecha_nacimiento"]; ?></td>
                        <td>
                            <?php if ($row["activo"] == 1) {
                                echo '<span class="badge bg-success">Si</span>';
                            } else {
                                echo '<span class="badge bg-danger">No</span>';
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }

                /* se recomienda el cierre explícito */
                $mysqli->close();


                ?>
                <a href="index.php">Regresar</a>

</body>