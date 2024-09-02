<?php 
include_once "conexion.php";
$ID=$_POST['ID'];
$sql="DELETE FROM ingresos WHERE ID=$ID";
if(mysqli_query($conexion,$sql))
{
	header("Location: pantalla_eliminacion.html"); 
    exit();
}
else 
{
	header("Location: PANTALLA_ERROR_DELETE.html"); 
    exit();
}
mysqli_close($conexion)
?>