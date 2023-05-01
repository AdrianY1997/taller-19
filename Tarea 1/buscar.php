<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/style-buscar.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>No.</th>
                <th>Codigo</th>
                <th>Nombre del Producto</th>
                <th>Descripcion del Producto</th>
            </tr>
            <?php 
                include('conexion.php');
                $conexion = conectar();
                $sql = "SELECT * FROM producto";
                $result = mysqli_query($conexion, $sql);
                while($mostrar = mysqli_fetch_array($result)){            
            ?>
                <tr>
                    <td><?php echo "".$mostrar['no']; ?></td>
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