<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>conecta</title>
    <link rel="stylesheet" href="./tabla.css">
</head>
<html>

<body>
    <div class="container">
        <h1>Buscar un registro o producto en la base de datos por codigo</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">descripcion</th>
                </tr>
            </thead>

            <?php
            include("conexion.php");
            $enlace = conectar();
            $sql = "SELECT * from productos";
            $result = mysqli_query($enlace, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo "" . $mostrar['id']; ?></td>
                    <td><?php echo "" . $mostrar['nombre']; ?></td>
                    <td><?php echo "" . $mostrar['descripcion']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>