<html>

<head>
    <style>
    body {
        background: url(../brhr0v0zqqxvtafp.jpg);
        text-align: -webkit-center;
    }

    .container {
        max-width: 500px;
        text-align: -webkit-center;
    }

    h1 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: center;
    }

    a {
        background-color: #4CAF50;
        color: white;
        padding: 5px 225px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 8px;
        width: inherit;
        text-decoration: none;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .boton {
        text-decoration: none;
        color: white;
    }
    </style>
    <title>BUSCAR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>Consulta del registro de la base de datos</h1><br>
    <div class="container">
        <table border="1" class="table table-primary table-striped-columns text-center w-50">
            <thead>
                <tr>
                    <td>id</td>
                    <td>codigo</td>
                    <td>nombre </td>
                    <td>descripcion </td>
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
                    <td><?php echo "" . $mostrar['caracteristica']; ?></td>
                </tr>
                <?php
        }
        ?>
            </tbody>

        </table>
        <a class="boton" href="inicio.php">Volver atras</a>
    </div>
</body>

</html>