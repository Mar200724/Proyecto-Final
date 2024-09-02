<?php 
$servidor="localhost";
$usuario="root";
$contrasena= "";
$basedatos="libros";

//creamos la conexion a la base de datos//
$conexion=Mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
//comprobaremos nuestra conexion
if(!$conexion)
{
	die("error al conectarse". mysqli_connect_error());
}
?>