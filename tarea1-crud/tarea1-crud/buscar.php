<html>
 <link rel="stylesheet" href="buscando.css">
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
    
    <h1> consultar el registro de la base de datos</h1>
    <br>
    <div class="container">
    <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <td>id</td>
                    <td>codigo</td>
                    <td>nombre</td>
                    <td>descripcion</td>
                </tr>
            </thead>
            <tbody class="table table-dark table-borderless">
                <?php
            include("tarea1.php");
            $connecta = conectar();
            $sql = "SELECT * FROM producto";
            $result = mysqli_query($connecta,$sql);
            while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                
                   <tr>
                       <td><?php echo  $mostrar['id']; ?></td>
                       <td><?php echo  $mostrar['codigo']; ?></td>
                       <td><?php echo  $mostrar['nombre']; ?></td>
                       <td><?php echo  $mostrar['descripcion']; ?></td>
                   </tr>
                   <?php
    }
    ?> 
            </tbody>
        </table>
    </div>
</body>

</html>