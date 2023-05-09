<html>

<body>
    <html>
    <style>
        body {
            background: url(https://imagenes.elpais.com/resizer/1NGP4Fe9VwR3zBJ1JAqSqxm_-G0=/1960x1103/cloudfront-eu-central-1.images.arcpublishing.com/prisa/2MRLAMWNLJE3TBYELF4EGKKREQ.jpg);
            text-align: -webkit-center;
        }

        .border-primary {
            color: black;
            font-size: 60px;
            font-style: italic;
            background:yellow;
        }

        .container {
            width: 500px;
            text-aling: -webkit-center
        }
    </style>

    <head>
        <title>BUSCAR</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    </head>

    <body>
        <span class="border border-primary">Resultados de los registros en la Base de Datos</span>
        <div class="container">
            <table border="1" class="table table-dark table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Descripcion </td>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include('conectar.php');
                    $sql = "SELECT * from productos ";
                    $result = mysqli_query($conn, $sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo "" . $mostrar['id']; ?></td>
                            <td><?php echo "" . $mostrar['codigo']; ?></td>
                            <td><?php echo "" . $mostrar['nombre']; ?></td>
                            <td><?php echo "" . $mostrar['caracteristicas']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>