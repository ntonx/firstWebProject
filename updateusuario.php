 <?php 
// Incluimos la conexión. 
include("conexion.php"); 
// Pasamos los datos del formulario. 

$nombre = $_POST['nombre']; 
$apPaterno =$_POST['apPaterno'];
$apMaterno =$_POST['apMaterno'];
$edad =$_POST['edad'];
$direccion =$_POST['direccion'];
$ciudad =$_POST['ciudad'];
$telefono =$_POST['telefono'];
$usuario = $_POST['usuario']; 
$password = $_POST['password']; 
 
// Pasamos los datos para actualizarlos en la tabla. 
$consulta="select usuario from usuarios where usuario='$usuario';";
$respuesta=mysqli_query($conn,$consulta);
$num=mysqli_num_rows($respuesta);

if($num!=0){

$ssql = "UPDATE usuarios SET nombre='$nombre',apPaterno='$apPaterno',apMaterno='$apMaterno', edad='$edad', direccion='$direccion',ciudad='$ciudad',telefono='$telefono', password='$password', usuario= '$usuario' WHERE (usuario='$usuario');"; 
// Liberamos los datos con la condición if. 
if (mysqli_query($conn,$ssql)) { 
echo "Actualización exitosa "; 
} else { 
echo "Error de actualizacion...Ingrese los datos requeridos "; 
}
}else{echo "El usuario NO ESTA REGISTRADO"; }
 
mysqli_close($conn); 
?> 