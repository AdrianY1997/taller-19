<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir registro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        main>div>h3{
            text-align: center;
        }

    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">GUANKI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto pe-4">
                        <li class="nav-item pe-4">
                            <a class="nav-link active" aria-current="page" href="#">Agregar</a>
                        </li>
                        <li class="nav-item class pe-4">
                            <a class="nav-link" href="#">Ver productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-3">
        <div>
            <h3>AÑADIR NUEVOS PRODUCTOS</h3>
        </div>

        <form action="guardar.php" method="POST">

            <div class="mb-4">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Valores numericos unicamente">
            </div>

            <div class="mb-4">
                <label for="nombre" class="form-label">Nombre del producto</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="No se aceptan valores numericos">
            </div>

            <div class="mb-4">
                <label for="descripcion" class="form-label">Descripción del producto</label>
                <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Valores numericos acompañados por letras (500g)">
            </div>

            <div style="text-align:center;">
                <a class="btn btn-secondary" href="index.php">ATRAS</a>
                <button type="submit" class="btn btn-success">GUARDAR</button>
            </div>

        </form>
    </main>
</body>

</html>