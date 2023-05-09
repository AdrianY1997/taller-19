<?php

include ('conecta.php');

$conecta = conecta();

if (isset($_POST["nombre"])) {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    
    $sentencia = "INSERT INTO productos (codigo, name_product, description) VALUES ('$codigo','$nombre', '$descripcion')";
    
    $isOk = true;

    try {
        mysqli_query($conecta,$sentencia);
    } catch (\Throwable $th) {
        $isOk = false;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="./imgs/shop-solid.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        MaxiSuper
        </a>
    </div>
    </nav>
    <div>
        <form name="form1" method="POST" action="<?= $_SERVER["PHP_SELF"]?>">
            <h1>Formulario Tienda</h1>
            <p>Código del Producto:</p>
            <input type="text" class="field" name="codigo"> <br/>
            <p>Nombre del Producto:</p>
            <input type="text" class="field" name="nombre"> <br/>
            <p>Descripción del Producto:</p>
            <textarea type="text" class="fields" name="descripcion" cols="30" rows="10"></textarea> <br/>
            <p class="center-content">
                <button type="submit" class="btn">Enviar Datos</button>
            </p>
            <p>
                <a class="btn" href="buscar.php">Mostrar</a>
            </p>
        </form>
    </div>
    <div class="ctr-fnl">
        <?php 
        
        if (isset($isOk)) {
            if ($isOk) {
                ?>
                <div class="ok">
                    <p>¡REGISTRO EXITOSO!</p>
                </div>

                <?php
            } else {
                ?>
                <div class="fail">
                    <p>UPS! NO SE PUDO REGISTRAR EL PRODUCTO</p>
                </div>
                    
                <?php
            }
        }

        ?>
    </div>
</body>

</html>