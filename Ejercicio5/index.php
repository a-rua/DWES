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

        <a href='insert_form.php' class="btn btn-success btn-sm">Insertar</a>
        <br><br>

        <form class="d-flex" role="search" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="nom">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-striped table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fuerza</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de caballero -->
                <?php
                $mysqli = new mysqli("localhost", "root", "", "test");
                if ($mysqli->connect_errno) {
                    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }

                if (isset($_GET["nom"])) {
                    $resultado = $mysqli->query("SELECT FROM caballeros WHERE nombre LIKE '%" . $_GET["nom"] . "%'");
                } else {
                    $resultado = $mysqli->query("SELECT * FROM caballeros");
                }

                while ($row = $resultado->fetch_assoc()) {
                    //echo ($row["id"] . " - " . $row["nombre"] . " - " . $row["fuerza"] . " - " . $row["ataque"] . " - " . $row["defensa"] . " - " . $row["experiencia"] . " - " . $row["fecha_nacimiento"] . " - " . $row["activo"]);
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["fuerza"]; ?></td>
                        <td>
                            <?php if ($row["activo"] == 1) {
                                echo '<span class="badge bg-success">Si</span>';
                            } else {
                                echo '<span class="badge bg-danger">No</span>';
                            }
                            ?>
                        </td>
                        <td>
                            <a href='select_caballero.php?id=<?= $row['id'] ?> ' class="btn btn-info btn-sm">Ver</a>
                            <a href='update_form.php?id=<?= $row['id'] ?> ' class="btn btn-warning btn-sm">Modificar</a>
                            <a href='delete_caballero.php?id=<?= $row['id'] ?> ' class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                <!-- Agrega mas filas segun sea necesario -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>