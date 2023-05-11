<?php
require "conexion.php";
$db = new Database();
$con = $db->conectar();

$nombre = $_GET["nombre"];

$query = "SELECT * FROM producto WHERE nombre LIKE '%$nombre%'";


$stmt = $con->query($query);

// // Mostrar los resultados en una tabla
// echo '<table class="table">';
// echo '<thead><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr></thead>';
// echo '<tbody>';
// while ($row = $stmt->fetch()) {
//   echo '<tr>';
//   echo '<td>' . $row['id'] . '</td>';
//   echo '<td>' . $row['nombre'] . '</td>';
//   echo '<td>' . $row['descripcion'] . '</td>';
//   echo '</tr>';
// }
// echo '</tbody>';
// echo '</table>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONSULTA: <?php echo "$nombre" ?></title>
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
              <a class="nav-link active " style="white-space: nowrap;" href="#">Ver productos</a>
            </li>
            <li class="nav-item class pe-4">
              <a class="nav-link" href="#" id="buscar">Buscar</a>
            </li>
            <div class="container-fluid d-none fade-left" style="transition: 2s" id="aja">
              <form class="d-flex" role="search" method="get" action="buscar.php">
                <input id="input" class="form-control me-2" type="search" placeholder="Buscar por nombre" name="nombre" aria-label="Search">
                <button id="search" class="btn btn-outline-success" type="submit">Buscar</button>
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

  <main class="container">
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
            while ($row = $stmt->fetch()) {
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

</html>