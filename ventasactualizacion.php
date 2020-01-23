<?php 
// Incluimos la conexión. 
include("conexion.php"); 
// Pasamos los datos del formulario. 
$clave = $_POST['clave']; 


$precio =$_POST['precio'];
$dimension =$_POST['dimension'];
$descripcion =$_POST['descripcion'];

$preconsulta="select clave from compras where clave='$clave';";
$respuesta=mysqli_query($conn,$preconsulta);
$num=mysqli_num_rows($respuesta);

if($num!=0){


$consulta="update compras set precio=$precio, dimension=$dimension, descripcion='$descripcion' where clave='$clave';";

if(mysqli_query($conn,$consulta)){
	echo "Actualizacion correcta";
}
}else{
	echo "Clave no registrada. Error en la actualizacion";
}
mysqli_close($conn);
?>

