<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir regstro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    
    <main class="container py-3">

        <form action="guardar.php" method="POST">

        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" id="codigo"
                placeholder="Valores numericos unicamente">
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" name="nombre" class="form-control" id="nombre"
                placeholder="Introduzca el nombre del producto">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del producto</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion"
                placeholder="Valores numericos acompañados por letras (500g)">
        </div>

        <div>
            <a class="btn btn-secondary" href="index.php">ATRAS</a>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </div>

        </form>
    </main>
</body>

</html>