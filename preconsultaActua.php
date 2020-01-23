 <?php 
// Incluimos la conexión. 
include("conexion.php"); 
// Pasamos los datos del formulario. 

$clave = $_POST['clave']; 
 
 
// Pasamos los datos para actualizarlos en la tabla. 
$consulta="select clave from ventas where clave='$clave';";
$respuesta=mysqli_query($conn,$consulta);
$num=mysqli_num_rows($respuesta);

if($num!=0){

 
return true; 
} else { 
return false; }
 
mysqli_close($conn); 
?> 