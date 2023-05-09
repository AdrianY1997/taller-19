<!DOCTYPE html>
<html>


<head>

    <title>Formulario de Tienda</title>
    <style>
        body {
            background: url(https://imagenes.elpais.com/resizer/1NGP4Fe9VwR3zBJ1JAqSqxm_-G0=/1960x1103/cloudfront-eu-central-1.images.arcpublishing.com/prisa/2MRLAMWNLJE3TBYELF4EGKKREQ.jpg);
            background-repeat: no-repeat;
        }

        form {
            width: 493px;
            margin: 0 auto;
            padding: 36px;
            border: 12px solid white;
            border-radius: 89px;
            height: 490px;
            background-color: #f5b879de;
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
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 8px;
            width: inherit;
            font-size: 12px;
            font-family: tahoma;
        }

        button[type="submit"]:hover {
            background-color: yellow;
        }

        a {
            background-color: red;
            color: white;
            padding: 5px 225px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 8px;
            width: inherit;
            text-decoration: none;
            font-size: 12px;
            font-family: tahoma;
        }
        a:hover{
            background-color: yellow;
        }


        h1 {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        h2 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            margin: 48px;
            color: black;
        }

        footer {
            text-align: center;
            background-color: antiquewhite;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .texto {
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <h1>Formulario de Tienda</h1>
    </div>
    <form method="post" action="inserta.php">
        <div class="texto">
            <label for="nombre">Codigo:</label>
            <input type="text" id="codigo" name="codigo" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="caracteristica">Característica:</label>
            <textarea id="caracteristicas" name="caracteristicas"></textarea>
        </div>

        <button type="submit">Agregar Producto</button><br>

        <a href="consultar.php">Mostrar</a>

        <div>
            <h2>
                "El unico modo de hacer un gran trabajo es amar lo que haces."
            </h2>
        </div>

    </form>
    <footer>
        <p class="final">&copy; Todo los derechos son reservados- Copyright 2023</p>
    </footer>
</body>

</html>