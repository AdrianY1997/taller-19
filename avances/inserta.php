<?php
include("conectar.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $caracteristica = $_POST["caracteristica"];
  
    $sql = "INSERT INTO productos (codigo, nombre, caracteristica) VALUES ('$codigo', '$nombre', '$caracteristica')";
    if ($conn->query($sql) === TRUE) {
      echo "Producto agregado satisfactoriamente";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }