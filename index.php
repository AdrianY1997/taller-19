<?php

//Conexión a la base de datos
require "conexion.php";
$db = new Database();
$con = $db->conectar();git config --global --unset-all





// $comando = $con->query("SELECT id,codigo,nombre,descripcion FROM producto ORDER BY id ASC ");
// $comando->execute();
// $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taller1</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/803850cc09.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">GUANKI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <main class="container py-4">
        <div class="cards container" style="display: flex; justify-content: center;">

            <div class="card mb-3 me-5" style="width: 32rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">PRODUCTOS TOTALES</h5>
                    <div class="texto">
                        <div>
                            1234
                        </div>
                        <div>
                            <p class="card-text">Nuestra base de datos actualmente cuenta con xxx productos</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Ver productos</a>
                </div>
            </div>

            <div class="card mb-3 me-5" style="width: 32rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">ULTIMA MODIFICACIÓN</h5>
                    <p class="card-text">El ultimo cambio aplicado fue hace</p>
                    <a href="#" class="btn btn-primary">Ir a editar productos</a>
                </div>
            </div>

            <div class="card mb-3" style="width: 32rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">QUÉ ES LO ULTIMO QUE SE HA HECHO</h5>
                    <p class="card-text">Este es el ultimo cambio aplicado</p>
                    <a href="#" class="btn btn-primary">Ir a editar productos</a>
                </div>
            </div>
        </div>

        <div class="opciones container d-flex justify-content-center py-4">

            <div class="card mb-3 me-5" style="width: 18rem; height: 380px ;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">AGREGAR NUEVOS PRODUCTOS</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi veritatis magni
                        natus! Provident unde corrupti quidem accusantium reiciendis impedit at in esse, quas
                        consequuntur. Facere rerum officia corrupti fugiat mollitia!</p>
                </div>
                <a href="añadir.php" class="btn btn-primary">
                    <div>AÑADIR REGISTRO</div>
                </a>
            </div>

            <div class="card mb-3" style="width: 18rem; height: 380px ;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">EDITOR DE PRODUCTOS</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate saepe consequatur numquam voluptatem nam modi corporis nulla excepturi. Dignissimos iure repudiandae fugiat deleniti delectus sapiente porro eos voluptates suscipit inventore?</p>
                </div>
                <a href="ver.php" class="btn btn-primary">
                    <div>VER Y EDITAR PRODUCTOS</div>
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-body-tertiary">
        <div class="container">
            <p>GUANKI</p>
            <p>TODOS LOS DERECHOS RESERVADOS</p>
        </div>
    </footer>


</body>

</html>