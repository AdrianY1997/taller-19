<html>

<head>
    <title>conecta</title>
    <link rel="stylesheet" href="./tabla.css">
</head>

<body>
    <html>

    <head>
        <title>BUSCAR UN REGISTRO</title>
    </head>

    <body>
        <div class="tabla">
            <table class="camp">
                <tr class="tab">
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
                <td><?php echo "" . $mostrar['nombre']; ?></td>
                <td><?php echo "" . $mostrar['descripcion']; ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
    </body>

    </html>