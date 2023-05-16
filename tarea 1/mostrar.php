<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tabla</title>
    <link rel="stylesheet" href="mostrar.css">
</head>
<body>

            <div class="caja1"> 
                    <h1>Registro de productos</h1>
            </div>
            <table id="tabla" class="table table-striped table-lu"> 
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </th>

                <?php
                include("conexion.php");
                $enlace = conexion();
                $sql = "SELECT * from producto";
                $result = mysqli_query($enlace, $sql);
                while ($Mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $Mostrar['idproducto'];?></td>
                        <td><?php echo $Mostrar['codproducto'];?></td>
                        <td><?php echo $Mostrar['nameproducto'];?></td>
                        <td><?php echo $Mostrar['descproducto'];?></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </body>
    </html>





