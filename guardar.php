<?php

require "conexion.php";
$db = new Database();
$con = $db->conectar();

$correcto = false;
//actualizar datos
if(isset($_POST['id'])){

    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

//validacion

if (empty($codigo) || empty($nombre) || empty($descripcion)){
    echo "todos los campos se deben rellenar";
} else if (!ctype_digit($codigo)) {
    echo "Error: El código debe ser numérico";
} else if (is_numeric($nombre) || is_numeric($descripcion)) {
    echo "Error: El nombre y la descripción no deben contener números";
} else {

    $query = $con->prepare("UPDATE producto SET codigo=?, nombre=?, descripcion=? WHERE id=?");
    $consulta = $query->execute(array($codigo,$nombre,$descripcion,$id));

    if($consulta){
        $correcto = true;
    }
}

//añadir dato nuevo
}else{
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

//validacion de datos 
if (empty($codigo) || empty($nombre) || empty($descripcion)){
    echo "todos los campos se deben rellenar";
} else if (!ctype_digit($codigo)) {
    echo "Error: El código debe ser numérico";
} else if (is_numeric($nombre) || is_numeric($descripcion)) {
    echo "Error: El nombre no debe tener numeros. La descripcion no puede ser solo numero ";
}
 else {

    $query = $con->prepare("INSERT INTO producto (codigo,nombre,descripcion) VALUES (:cod, :nom, :descr)");
    $consulta= $query->execute(array('cod' => $codigo, 'nom' => $nombre, 'descr' => $descripcion,));

    if($consulta){
        $correcto = true;
    }
}
}

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

<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">GUANKI</a>
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
    <?php 
        if($correcto){?>
        <h3>EL DATO SE HA AÑADIDO SATISFACTORIAMENTE A LA BASE DE DATOS</h3>
        <?php } else{?>
         <h3>ERROR</h3>
        <?php } ?>
        <a href="index.php" class="btn btn-primary">VOLVER AL INICIO</a>
</body>
</html>