<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/style-editar.css">
</head>
<body>
    <div class="container">
    <a class="icon" href="buscar.php"><i class="fa-solid fa-left-long"></i></a>
        <?php
            include("conexion.php");
            $conexion = conectar();
            $id = $_GET['id'];
            $sql = "SELECT * FROM producto WHERE id='".$id."'";
            $result = mysqli_query($conexion, $sql); 
            $row = mysqli_fetch_object($result);
        ?>
        <div class="login">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="text" name="ctNameProd" value="<?php echo $row->nameprod; ?>">
                <input type="text" name="ctDesProd" value="<?php echo $row->desprod; ?>">
                <input type="submit" name="submit" value="Actualizar">
            </form>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $nombre = $_POST['ctNameProd'];
                $descripcion = $_POST['ctDesProd'];
                $insertar = "UPDATE producto SET nameprod='".$nombre."', desprod='".$descripcion."' WHERE id='".$id."'";
                mysqli_query($conexion, $insertar) or die ("No se logro actualizar datos".mysqli_error($conexion));
                echo "Registro Actualizado con Exito";

                $nombre = "";
                $descripcion = "";
                
                header("Location: buscar.php");
            }  
        ?>
    </div>


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7fa9974a48.js" crossorigin="anonymous"></script>
</body>
</html>