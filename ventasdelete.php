 <?php 
// Incluimos la conexión. 
include("conexion.php"); 
// Pasamos los datos del formulario. 


$clave = $_POST['clave']; 
 
// Pasamos los datos para actualizarlos en la tabla. 
$consulta="select clave from compras where clave='$clave';";
$respuesta=mysqli_query($conn,$consulta);
$num=mysqli_num_rows($respuesta);

if($num!=0){

$ssql = "delete from compras where clave='$clave';"; 
// Liberamos los datos con la condición if. 
if (mysqli_query($conn,$ssql)) { 
echo "Eliminacion exitosa "; 
} else { 
echo "Error de Eliminacion...Ingrese los datos requeridos "; 
}
}else{echo "El usuario NO ESTA REGISTRADO"; }
 
mysqli_close($conn); 
?> 