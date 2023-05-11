<?php

require "conexion.php";
$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query = $con->prepare("SELECT codigo,nombre,descripcion FROM producto WHERE id = :id");
$query->execute(['id' => $id]);
$consulta = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        input:focus {
            box-shadow: none !important;

        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">GUANKI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto pe-4">
                        <li class="nav-item pe-4">
                            <a class="nav-link disable" aria-current="page" href="añadir.php">Agregar</a>
                        </li>
                        <li class="nav-item class pe-4">
                            <a class="nav-link" href="ver.php">Ver productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container py-4">
        <div class="pb-2 text-center">
            <h4>ACTUALIZAR DATOS</h4>
            <h6>Tenga en cuenta los parametros para cada uno</h6>
        </div>

        <form action="guardar.php" method="POST">

            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">


            <div class="mb-4">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" name="codigo" class="form-control border-0 border-bottom border-warning border-2 rounded-0 border-opacity-75" id="codigo" value="<?php echo $consulta['codigo'] ?>">
            </div>

            <div class="mb-4">
                <label for="nombre" class="form-label">Nombre del producto</label>
                <input type="text" name="nombre" class="form-control border-0 border-bottom border-warning border-2 rounded-0 border-opacity-75" id="nombre" value="<?php echo $consulta['nombre'] ?>">
            </div>

            <div class="mb-4">
                <label for="descripcion" class="form-label">Descripción del producto</label>
                <input type="text" name="descripcion" class="form-control border-0 border-bottom border-warning border-2 rounded-0 border-opacity-75" id="descripcion" value="<?php echo $consulta['descripcion'] ?>"">
            </div>

            <div style=" text-align:center;">
                <a class="btn btn-secondary" href="ver.php">ATRAS</a>
                <button type="submit" class="btn btn-warning">ACTUALIZAR</button>
            </div>

        </form>
    </main>
</body>

</html>