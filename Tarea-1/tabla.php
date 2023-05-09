<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-table.css">
</head>
<body>
    <div class="contenedor">
        <table>
            <thead> 
                <tr class="tabla">
                    <th class="contenido">ID</th>
                    <th class="contenido">Nombre-Producto</th>
                    <th class="contenido">Descripcion-Producto</th>
                </tr>
            </thead>
           
           <tbody>
            <?php 
                include("conexion.php");
                $conexion = $conectar;
                $consulta = "SELECT * FROM productos";
                $execute = mysqli_query($conexion, $consulta) or die ("Error").mysqli_error($conexion);
                 
                while($row = mysqli_fetch_array($execute)){
                ?>
                <tr>
                    <th class="contenido"> <?= $row['id_producto']?></th>
                    <th class="contenido"> <?= $row['name_producto']?></th>
                    <th class="contenido"> <?= $row['desc_producto']?></th>
                </tr>
                <?php 
                }
                ?>
           </tbody>
        </table>
    </div>
</body>
</html>