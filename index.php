<?php 
require('conexion.php');
session_start();//iniciamos el manejo de sesiones

if(isset($_SESSION["id_usuario"])){
	//si la variable de sesion existe entonces
	header("Location:principal.php");

}
if(!empty($_POST)){
	$usu=$_POST['username'];//aqui el username es el name del cuadro de abajo
	$pass=$_POST['password'];

	$consulta="SELECT * from usuarios where usuario='$usu' and password='$pass'";
	$resultado=mysqli_query($conn,$consulta);
	$rows=mysqli_num_rows($resultado);

	if($rows>0){
		$row=mysqli_fetch_array($resultado);
	$_SESSION['nombre']=$row['nombre'];	
	$_SESSION['id_usuario']=$row['usuario'];
		//se crea variable de usuario
	
		header("location:principal.php");
	}else{
		$error="EL NOMBRE O CONTRASEÑA CON INCORRECTOS";
	}

}

?>

<!DOCTYPE html>
<html>
<head>

<!--------------------
LOGIN FORM
by: Antonio Nicolas Plata
www.amitjakhu.com
--------------------->

<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" ></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>REGISTRESE</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>Bienvenido...</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" value="Username" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--><a href="newuser.php"><input type="button" name="submit" value="Register" class="register" /></a><!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>