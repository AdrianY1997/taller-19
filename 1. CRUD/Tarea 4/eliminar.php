<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="css/style-eliminar.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <p>Digite el codigo del producto a eliminar</p>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="number" name="ctId">
                <input type="submit" name="submit" value="Eliminar">
            </form>
            <?php
                include('conexion.php');
                $conexion = conectar();
                if(isset($_POST['submit'])){
                    $id = $_POST['ctId'];
                    $sql = "DELETE FROM producto WHERE id='".$id."'";
                    mysqli_query($conexion, $sql) or die ("No se logra eliminar el producto").mysqli_error($conexion);
                    header("Location: buscar.php");
                }
            ?>
        </div>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Nombre del Producto</th>
                <th>Descripcion del Producto</th>
            </tr>
            <?php 
                $sql = "SELECT * FROM producto";
                $result = mysqli_query($conexion, $sql);
                while($mostrar = mysqli_fetch_array($result)){            
            ?>
                <tr>
                    <td><?php echo "".$mostrar['id']; ?></td>
                    <td><?php echo "".$mostrar['nameprod']; ?></td>
                    <td><?php echo "".$mostrar['desprod']; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>