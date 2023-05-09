<html>
 <link rel="stylesheet"  href="tabla.css">
 <head>
      <style>
       body {
        background-image: url(img/tienda.jpg);
        background-size:cover;
        text-align: -webkit-center;
       }


       .container {
        max-width: 400px;
        align-items: center;
        display: flex;
        margin: auto;
        border-radius: 10px;
        border: 2px solid white;
        width: 250px;
        position: center;
        padding: 30px; 
       }
       h1{
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
       }
       </style>
       <title>buscar</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>  


<body>
   
    <h1>REGISTRO</h1>
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
                    include ('conexion.php');
                    $conecta=conectar();
                    $sql="SELECT * from tienda";
                    $result=mysqli_query($conecta,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                    <td><?php echo "".$mostrar['Id']; ?></td>
                    <td><?php echo "".$mostrar['Codigodelproducto']; ?></td>
                    <td><?php echo "".$mostrar['Nombre'];?></td>
                    <td><?php echo "".$mostrar['Descripcion'];?></td>
                    </tr>
                    <?php 
                    }
                  
    ?>
            </tbody>
        </table>
    </div>
</body>


</html>
