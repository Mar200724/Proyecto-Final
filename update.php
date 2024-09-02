<?php 
include_once 'conexion.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
$ID=$_POST['ID'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$libro=$_POST['libro'];
$autor=$_POST['autor'];
$ingreso=$_POST['ingreso'];

$sql= "UPDATE ingresos SET nombre = '$nombre',correo = '$correo', libro = '$libro',autor='$autor',ingreso='$ingreso' WHERE
ID = $ID ";

    if(mysqli_query($conexion,$sql))
    {
        header("Location: pantalla_update.html"); 
    exit();
    }
    else 
    {
        echo"no se actualizaron los datos".mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>