<html>
<head>
    <title>conecta</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <html>

    <head>
        <title>Buscar un Registro o Producto en la base de datos por codigo</title>
    </head>

    <body>
        <br>
        <div class="tabla">
        <table class="tab">
            <tr>
                <td class="tab">id</td>
                <td class="tab">codigo</td>
                <td class="tab">nombre </td>
                <td class="tab">descripcion </td>
            </tr>
            </div>
            <?php
            include("conexion.php");
            $enlace = conectar();
            $sql = "SELECT * from productos";
            $result = mysqli_query($enlace, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo "" . $mostrar['idproducto']; ?></td>
                    <td><?php echo "" . $mostrar['codprod']; ?></td>
                    <td><?php echo "" . $mostrar['nombre']; ?></td>
                    <td><?php echo "" . $mostrar['descripcion']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>

    </html>