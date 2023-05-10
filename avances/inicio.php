<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Tienda</title>
    <style>
    body {
        background: url(../brhr0v0zqqxvtafp.jpg);
        background-repeat: no-repeat;
    }

    form {
        width: 500px;
        margin: 0 auto;
        padding: 51px;
        border: 5px solid white;
        border-radius: 89px;
        height: 613px;
        background-color: #000000a1;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 8px;
        width: inherit;
    }

    button[type="submit"]:hover {
        background-color: #3e8e41;
    }

    a {
        background-color: #4CAF50;
        color: white;
        padding: 5px 225px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 8px;
        width: inherit;
        text-decoration: none;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }


    h1 {
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    h2 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: center;
        margin: 81px;
        color: white;
    }

    footer {
        text-align: center;
        background-color: antiquewhite;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .texto {
        color: white;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    </style>
</head>

<body>
    <h1>Formulario de Tienda</h1>

    <form method="post" action="inserta.php">

        <div class="texto">
            <label for="nombre">Codigo:</label>
            <input type="text" id="codigo" name="codigo" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="caracteristica">Característica:</label>
            <textarea id="caracteristica" name="caracteristica"></textarea>
        </div>

        <button type="submit">Agregar Producto</button><br>

        <a href="consultar.php">Mostrar</a>

        <div>
            <h2>
                A veces no hay proxima
                vez, a veces no hay
                segundas oportunidades,
                a veces es ahora o
                nunca.
            </h2>
        </div>

    </form>
    <footer>
        <p class="final">&copy; Supercool</p>
    </footer>
</body>

</html>