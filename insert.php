<?php 
require_once 'conexion.php';
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$libro=$_POST['libro'];
$autor=$_POST['autor'];
$ingreso=$_POST['ingreso'];
//creamos la conexion a la base de datos//
$sql="INSERT INTO ingresos(nombre,correo,libro,autor,ingreso)VALUES('$nombre','$correo','$libro','$autor','$ingreso')";
//comprobaremos nuestra conexion
if(mysqli_query($conexion,$sql))
{
	header("Location: pantalla_ingreso.html"); 
    exit();
}
else
{
    header("Location: PANTALLA_ERROR_INGRESO.html"); 
    exit();
}
mysqli_close($conexion);
?>