<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>conecta</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <html>

    <head>
        <title>BUSCAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS POR CODIGO</title>
    </head>

    <body>
        <br>
        <table class="table table-striped table-dark">
            <thead >
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                </tr>
            </thead>
            <!-- <tr>
                <td class="tab">Id</td>
                <td class="tab">codigo</td>
                <td class="tab">nombre </td>
                <td class="tab">descripcion </td>
            </tr> -->
        
            <?php
            include("conexion.php");
            $enlace = conectar();
            $sql = "SELECT * from productos";
            $result = mysqli_query($enlace, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo "" . $mostrar['idproducto']; ?></td>
                    <td><?php echo "" . $mostrar['codproduc']; ?></td>
                    <td><?php echo "" . $mostrar['nombre']; ?></td>
                    <td><?php echo "" . $mostrar['Descripcion']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>

    </html>