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
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<main class="container">
        <div class="row">
            <div class="col">
                <h4>AGREGAR NUEVOS REGISTROS</h4>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="guardar.php" method="POST" autocomplete="off" class="row g-3">
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                    <div class="row-md-4">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" id="codigo" name="codigo" class="for-control" value="<?php echo $consulta['codigo'] ?>" required autofocus>
                    </div>

                    <div class="row-md-8">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="for-control" value="<?php echo $consulta['nombre'] ?>">
                    </div>

                    <div class="row-md-8">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" id="descripcion" name="descripcion" class="for-control" value="<?php echo $consulta['descripcion'] ?>">
                    </div>

                    <div class="row-md-12">
                        <a  class="btn btn-secundary" href="index.php">ATRAS</a>
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>