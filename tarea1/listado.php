<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php
    include_once "static/head.php";
    ?>
</head>

<body>
    <?php
    include_once "static/header.php";
    ?>

    <main>
        <div class="container mt-5">
            <table id="product-list" class="table border">
                <thead class="table-dark">
                    <tr class="table-row">
                        <th style="width: fit-content;">#</th>
                        <th class="col-1">Código</th>
                        <th class="col-2">Nombre</th>
                        <th>Descripcion</th>
                        <th class="col-1">Controles</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    include_once 'component/connect.php';
                    $sql = "SELECT * from tarea1.products";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) == 0) {
                    ?>
                    <tr class="table-row">
                        <td colspan="5">No hay datos</td>
                    </tr>
                    <?php
                    } else {
                        while ($row = mysqli_fetch_object($result)) {
                        ?>
                    <tr class="table-row" data-record-id="<?= $row->id ?>">
                        <th style="width: fit-content;"><?= $row->id ?></td>
                        <td><?= $row->codigo ?></td>
                        <td><?= $row->name; ?></td>
                        <td><?= $row->description; ?></td>
                        <td>
                            <a id="edit-record" class="btn btn-primary" href="editar.php?id=<?= $row->id; ?>">
                                <span>
                                    <svg style="width: 15px; height: 15px; fill: white"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                    </svg>
                                </span>
                            </a>
                            <button data-record-id="<?= $row->id ?>" type="button" class="btn btn-danger delete-record"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <svg style="width: 15px; height: 15px; fill: white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ingrese sus credenciales para continuar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingUser" placeholder="John Doe">
                        <label for="floatingUser">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="delete-record-cancel" type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button id="delete-record-confirm" type="button" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../src/delete.js"></script>

    <?php
    include_once "static/foot.php"
    ?>
</body>

</html>