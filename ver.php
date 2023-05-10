<?php

require "conexion.php";
$db = new Database();
$con = $db->conectar();


$comando = $con->query("SELECT id,codigo,nombre,descripcion FROM producto ORDER BY id ASC ");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taller1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/803850cc09.js" crossorigin="anonymous"></script>
    <style>
        .fade-left{
            animation-name: fade-left ;
            animation-duration: 2s;
        }
        @keyframes fade-left{
            0%{
                opacity: 0 ;
                width: 0;
                transform: translateX(5rem);
            }
            100%{
                width: 312.02px;
                opacity: 1 ;
                transform: translateX(0);
            }
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">GUANKI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto pe-4">
                        <li class="nav-item pe-4">
                            <a class="nav-link disable" aria-current="page" href="añadir.php">Agregar</a>
                        </li>
                        <li class="nav-item class pe-4">
                            <a class="nav-link active "  style="white-space: nowrap;" href="#">Ver productos</a>
                        </li>
                        <li class="nav-item class pe-4">
                            <a class="nav-link" href="#" id="buscar" >Buscar</a>
                        </li>
                        <div class="container-fluid d-none fade-left" style="transition: 2s" id="aja">
                            <form class="d-flex" role="search" method="get" action="buscar.php">
                                <input   id="input" class="form-control me-2" type="search" placeholder="Search" name="nombre" aria-label="Search">
                                <button  id="search" class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container py-3">
        <div class="pb-4 text-center">
            <h3>CONSULTAR Y EDITAR DATOS</h3>
        </div>
        <!-- <div class="col">
        <h4><a href="drop.php" class="btn btn-danger">Borrar base de datos</a></h4>
    </div> -->

        <div class="row">
            <div class="col">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($resultado as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'];  ?></td>
                                <td><?php echo $row['codigo'];  ?></td>
                                <td><?php echo $row['nombre'];  ?></td>
                                <td><?php echo $row['descripcion'];  ?></td>
                                <td><a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-lg"><i class="fa-solid fa-pen"></i></a></td>
                                <td><a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-lg"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </main>
    <script>
        var input = document.querySelector("#input");
        var search = document.querySelector("#search");
        var buscar = document.querySelector("#buscar");
        var aja = document.querySelector("#aja");

        buscar.addEventListener("click", ()=>{
            if (!aja.classList.contains("d-none")) {

                aja.style.setProperty("width", "0")
                aja.style.setProperty("opacity", "0")
                aja.style.setProperty("transform", "translateX(5rem)")

                setTimeout(() => {

                    aja.style.removeProperty("width")
                    aja.style.removeProperty("opacity")
                    aja.style.removeProperty("transform")
                    aja.classList.add("d-none");       
                }, 2000)
            } else {
                aja.classList.remove("d-none");     
                aja.style.setProperty("width", "312.02px")  
            }
        })
    </script>
</body>