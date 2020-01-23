 <?php 
// Incluimos la conexión. 
include("conexion.php"); 
// Pasamos los datos del formulario. 

$clave = $_POST['clave']; 
$tipo =$_POST['tipo'];
$precio =$_POST['precio'];
$ciudad =$_POST['ciudad'];
$pais =$_POST['pais'];
$dimension =$_POST['dimension'];
$descripcion =$_POST['descripcion'];

if($tipo==1){
	$tiporeal='Bungalow';
}else if($tipo==2){$tiporeal='Residencial';}
else if($tipo==3){$tiporeal='Departamento';}

$preconsulta="select clave from compras where clave='$clave';" ;

$respuesta=mysqli_query($conn,$preconsulta);
$num=mysqli_num_rows($respuesta);
if($num==0){



$consulta="insert into compras values('$clave','$tiporeal',$precio,'$ciudad','$pais',$dimension,'$descripcion');";

if(mysqli_query($conn,$consulta)){
	echo "Registro correcto";
}else{
	echo "Vuelve a intentarlo";
}}
mysqli_close($conn);
?>