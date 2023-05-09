<?php 
include ('conexion.php');
$conecta=conectar();
$sql="SELECT * from tienda";
$result=mysqli_query($conecta,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo "".$mostrar['Codigodelproducto']; ?></td>
<td><?php echo "".$mostrar['Nombre'];?></td>
<td><?php echo "".$mostrar['Descripcion'];?></td>
</tr>
<?php 
}