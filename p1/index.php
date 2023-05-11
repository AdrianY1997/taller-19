<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="agregar.php" method="post">
            <h1 class="m-lg-4">Registro de productos</h1>
            <div class="d-flex row row-cols-xl-2">
           <div class="mb-3 p-2">
                <h5 class="">Codigo del producto</h5>
                <input class="input-group mb-3 input-group-text" required type="text" name="idpro">
           </div>
           <div class="mb-3 p-2">
                <h5>Nombre del producto</h5>
                <input class="input-group mb-3 input-group-text" required type="text" name="nompro">
           </div>
           </div>
           <div class="mb-3 p-2 text-center row ">
                <h5>Descripcion</h5>
                <textarea class="input-group mb-3 input-group-text" required type="text" name="descr"></textarea>
           </div>
            <div class="mb-3 p-2">
                <button class="btn btn-success" type="submit" value="Enviar datos">Enviar datos</button>
            </div>
            <div class="mb-3 p-2 d-flex justify-content-between"> 
                <a class="p-2 m-1 btn btn-dark" href="../p2/buscar.php">Mostrar</a>
                <a class="p-2 m-1 btn btn-dark" href="consultar.php">Consultar</a> 
                <a class="p-2 m-1 btn btn-dark" href="../p4/eliminabd.php">Base de datos</a>
                <a class="p-2 m-1 btn btn-dark" href="../p5/ingreso.php">Ingreso de usuario</a>
            </div>
    
    </form>
       
    </div>
</body>
</html>