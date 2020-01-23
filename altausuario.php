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
$TELEFONO =$_post['TELEFONO'];
$USUARIo = $_POST['usuario']; 
$password = $_POST['password']; 
 
// Pasamos los datos para actualizarlos en la tabla. 
$consulta="select usuario from usuarios where usuario='$usuario';";
$respuesta=mysqli_query($conn,$consulta);
$num=mysqli_num_rows($respuesta);

if($num==0){

$ssql = "INSERT INTO usuarios VALUES ('$nombre','$apPaterno','$apMaterno',$edad, '$direccion','$ciudad',$telefono, '$usuario','$password');"; 
// Liberamos los datos con la condición if. 
if (mysqli_query($conn,$ssql)  ) { 
echo "Nuevo usuario registrado exitosamente "; 
}else { 
echo "Error de registro...Ingrese los datos requeridos "; 
}
} 
else{echo "El usuario YA ESTA REGISTRADO. Seleccione otro nombre de usuario"; }
 
mysqli_close($conn); 
?> 