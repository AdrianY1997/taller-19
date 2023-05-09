<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 &&  strlen($_POST['id']) >= 1 &&   strlen($_POST['descripcion']) >= 1) {
	    $name = trim($_POST['name']);
		$id = trim($_POST['id']);
		$descripcion = trim($_POST['descripcion']);
	    $consulta = "INSERT INTO user(nombreproducto, idproducto, descripcion) VALUES ('$name','$id','$descripcion')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}






?>
