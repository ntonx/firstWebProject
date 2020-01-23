<?php
$servername="localhost";
//colocar el nombre del server o direcion ip del server
$username="root";
$password="";
$dbname="agencia";

//crear conexion
$conn=mysqli_connect($servername,$username,$password,$dbname);

//checar conexion
if(!$conn){
	die("Conexion fallida".mysqli_connect_error());
}

//else{
//		echo "conexion exitosa!!";}
?>