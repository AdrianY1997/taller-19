<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <head>
        <title>BUSCAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS POR CODIGO</title>
        <link rel="stylesheet" href="cambiando-1.css">
    </head>

    <body>
        
        <br>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">nombre</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
            <?php
            include('conexion-1.php');
            $conecta = conectar();
            $sql = "SELECT * from producto";
            $result = mysqli_query($conecta, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
               
                ?>
                <tr>
                    <td>
                        <?php echo "" . $mostrar['codigoproducto']; ?>
                    </td>
                    <td>
                        <?php echo "" . $mostrar['nombreproducto']; ?>
                    </td>
                    <td>
                        <?php echo "" . $mostrar['descripcion']; ?>
                    </td>
                    <td>
                    <button type="button" class="boton"><a href="eliminar.php?id=<?= $mostrar["id"] ?>" style="text-decoration: none;">Eliminar</a></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </class=table>
        
    </body>

    </html>