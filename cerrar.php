<?php 
session_start();
//destruye toda la informacion registrada en una sesion
session_destroy();
//redirecciona a la pagina de login
header('location: index.php')?>