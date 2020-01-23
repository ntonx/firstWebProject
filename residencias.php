<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
    //si la variable de sesion existe entonces
    header("Location:index.php");

}
?>
<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

     

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big City </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="CSS.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="CSS1/style.css">


   

</head>
<body>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper">
    
    <div id="templatemo_menu">
    
        <ul>

            <li><a href="principal.php">Principal</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="compras.php" >Compras</a></li>
            <li><a href="ventas.php" >Ventas</a></li>
            <li><a href="ubicacion.php">Ubicación</a></li>
            <li><a href="cerrar.php">Cerrar sesión</a></li>
        </ul>
           <a href="https://www.facebook.com/alejandro.teresamoreno"><img src="im/facebook_logo.png" width="32px" height="32px"></a>
            <a href="https://twitter.com/ntonx9_plata"><img src="im/templatemo_twitter.png"></a>
       
        <div class="cleaner"></div>

    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_header">
        <div id="site_title">
            <h1><a href="principal.php">CSS </a></h1>
        </div> <!-- end of site_title -->
    </div>
    
    <div id="templatmeo_main">
       

      

 <div class="slider-container">

  <div class="slider-content">

    <div class="slider-single">
      <img class="slider-single-image" src="images/resi/1.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 1</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/2.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 2</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/3.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 3</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/4.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 4</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/5.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 5</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/6.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 6</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/7.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 7</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/8.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 8</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/9.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 9</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/10.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 10</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/11.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 11</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/12.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 12</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

     <div class="slider-single">
      <img class="slider-single-image" src="images/resi/13.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 13</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>
 
    <div class="slider-single">
      <img class="slider-single-image" src="images/resi/14.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 14</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

<div class="slider-single">
      <img class="slider-single-image" src="images/resi/15.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 15</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>

<div class="slider-single">
      <img class="slider-single-image" src="images/resi/16.jpg" alt="1" />
      <h1 class="slider-single-title">Residencia 16</h1>
      <a class="slider-single-likes" href="javascript:void(0);">
      </a>
    </div>





  </div>

  <a class="slider-left" href="javascript:void(0);"><i class="fa fa-arrow-left"></i></a>

  <a class="slider-right" href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>



            
         
        <div class="cleaner"></div>
    </div>
    
        
        </div>
              </div>
</body>
</html>