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
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM tarea1.products WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($result);
        ?>
        <div class="container mt-5">
            <div class="card-header bg-white">
                <p class="fs-4 mt-3">Agregar un producto</p>
            </div>
            <div class="card-body">
                <form action="" id="update-form">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="codigo-producto" placeholder="0000"
                            name="codigo-producto" value="<?= $row->codigo ?>">
                        <label for="floatingInput">Código del producto</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre-producto" placeholder="producto"
                            name="nombre-producto" value="<?= $row->name ?>">
                        <label for="floatingInput">Nombre del producto</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="descripcion-producto"
                            name="descripcion-producto" style="height: 100px"><?= $row->description ?></textarea>
                        <label for="floatingTextarea">Descripción</label>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success w-100 py-2" type="submit">Actualizar Producto</button>
                    </div>
                    <input type="hidden" class="hidden" id="id-producto" placeholder="producto" name="id-producto"
                        value="<?= $row->id ?>">
                </form>
            </div>
        </div>
        </div>
    </main>

    <script src="../src/update.js"></script>

    <?php
    include_once "static/foot.php"
    ?>
</body>

</html>