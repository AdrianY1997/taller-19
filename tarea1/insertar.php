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
        <div class="card container mt-5">
            <div class="card-header bg-white">
                <p class="fs-4 mt-3">Agregar un producto</p>
            </div>
            <div class="card-body">
                <form action="" id="insert-form">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="0000"
                            name="codigo-producto">
                        <label for="floatingInput">Código del producto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="producto"
                            name="nombre-producto">
                        <label for="floatingInput">Nombre del producto</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                            name="descripcion-producto" style="height: 100px"></textarea>
                        <label for="floatingTextarea">Descripción</label>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success w-100 py-2" type="submit">Registrar
                            producto</button>
                    </div>
                </form>
            </div>
            <div class="card-footer bg-white">
                <div class="d-flex justify-content-between">
                    <a href="listado.php" class="btn btn-primary">Mostrar listado</a>
                    <a href="#" class="btn btn-danger">Eliminar Base de datos</a>
                </div>
            </div>
        </div>
    </main>



    <script src="../src/insert.js"></script>

    <?php
    include_once "static/foot.php"
    ?>
</body>

</html>