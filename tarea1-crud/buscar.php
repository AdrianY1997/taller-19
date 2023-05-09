<html>

 <head> 
      <style> 
       body {
        background: url();
        text-align: -webkit-center;
       }

       .container {
        max-width: 400px;
        text-align: -webkit-center;
       }
       h1{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-align: center;
       }
       </style>
       <title>buscar</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>   

<body>
    <h1> consultar el registro de la base de datos</h1><br>
    <div class="container">
        <table border="1" class="table-primary">
            <thead>
                <tr>
                    <td>id</td>
                    <td>codigo</td>
                    <td>nombre</td>
                    <td>descripcion</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
            include('conectar.php');
            $sql ="select * from productos ";
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
    </div>
</body>

</html>