<?php

function conectar(){
    $servidor="localhost";
    $nombre="root";
    $contraseña="";
    $db="tienda.."; 
    
    $conexion= mysqli_connect($servidor,$nombre,$contraseña,$db);
    return $conexion;
}


// $conexion = conectar();
// $query ="INSERT INTO producto (codigo,nombre,descripcion) values (123456,'arroz','granos')";
// $rs = mysqli_query($conexion, $query);

//     if ($rs ==false){
//          echo '<p> error al insertar los campos de la tabla</p>';
//     }else{
//          echo '<p> los datos se han insertado correctamente</p>';
//  }













    




