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
            <li><a href="ubicacion.php" class="current">Ubicación</a></li>
            <li><a href="cerrar.php">Cerrar sesión</a></li>
        </ul>
        
        <p>
            <a href="https://www.facebook.com/alejandro.teresamoreno"><img src="im/facebook_logo.png" width="32px" height="32px"></a>
            <a href="https://twitter.com/ntonx9_plata"><img src="im/templatemo_twitter.png"></a>
        </p>
        
        <div class="cleaner"></div>
        
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_header">
        <div id="site_title">
            <h1><a href="principal.php">CSS </a></h1>
        </div> <!-- end of site_title -->
    </div>
    
    <div id="templatmeo_main">
        <div id="templatemo_content"><span class="bottom"></span>
            <div class="content_box">
                <h1>Visita nuestras instalaciones</h1>

                <div class="image_wrapper"></div>
              <p >Big City siempre tendrá tiempo para ti, visita las oficinas centrales ubicadas en Santo Domingo Shomeje, Atlacomulco, Mexico; con gusto te atenderemos personalmente procurando encontrar el lugar de tus sueños al mejor precio. Consulta el mapa para llegar.</p>

                <p>Horario de atencion: Lunes a Viernes 8:00 am a 18:00 pm </p>
                
                </div>
                <div class="content_box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.9194502327778!2d-99.90476658585771!3d19.843360886652324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d258cf7ec1de0d%3A0xede88e65d2338984!2sUniversidad+Polit%C3%A9cnica+de+Atlacomulco!5e0!3m2!1ses!2smx!4v1511791343468" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


            
            
            
                  <h1> Edificios subastados</h1>
          <div class="cl_box">
                    <img src="im/imagen_02.jpg" width="152" height="100" />
                    Precio $1,000,000 dls
                    
                </div>
                <div class="cl_box">
                    <img src="im/imagen_03.jpg"  width="152" height="100" />
                    Precio $850,000 dls
                    
                </div>
                <div class="cl_box">
                    <img src="im/imagen_04.jpg" width="152" height="100"/>
                    Precio $3,900,000 dls
                    
                </div>
                <div class="cl_box">
                    <img src="im/imagen_05.jpg"  width="152" height="100" />
                    Precio $900,000 dls
                    
                </div>
                <div class="cl_box">
                    <img src="im/imagen_06.jpg" width="152" height="100"/>
                   Precio $700,000 dls
                    
                </div>
                <div class="cl_box">
                    <img src="im/imagen_07.jpg" width="152" height="100"/>
                    Precio $4,200,000 dls
                    
                </div>
                <div class="cleaner"></div>
            </div>
        

        <div id="templatemo_sidebar">
            <div class="sidebar_box">
            
              <h2>Catalogo de productos</h2>
                <div class="df_box">
                    <a href="departamentos.php"><img src="im/imagen_08.jpg"></a>
                  <h6><a href="departamentos.php">Departamentos</a></h6>
                    <p>Las mejores ubicaciones, el ambiente más agradable y el confort asegurado, departamentos a tu alcance.</p>
                </div>
                

                
          <div class="df_box">
                    <a href="residencias.php"><img src="im/imagen_09.jpg" width="100px" height="100px"></a>
            <h6><a href="residencias.php">Residencias</a></h6>
                    <p>Vivir en el lugar de tus sueños es más que posible, tenemos facilidades de pago y créditos accesibles.</p>
                </div>
                

                
          <div class="df_box">
                    <a href="bungalows.php"><img src="im/imagen_10.jpg" width="100px" height="100px"></a>
              <h6><a href="bungalows.php">Bungalows</a></h6>
                    <p>El lugar de descanso que te mereces, disfruta de cada momento en estos recintos pacíficos.</p>
                </div>
                
          </div>
            <div class="sidebar_box bp_box">
            
                <h2>Solicita tu crédito</h2>
                
                <ul class="tmo_list">
                    <li><a href="www.infonavit...buscarpagina">INFONAVIT</a></li>
                    <li><a href="www.buscarpaginade foviste">FOVISSSTE</a></li>
                    <li><a href="#">CREDITOS BANCARIOS</a></li>
                    <li><a href="#">Web Design</a></li>
                </ul>
                
            </div>
            <div class="sidebar_box">
            
                <h2>Contactenos</h2>
                <p>Ponemos a su disposicion las siguientes lineas de contacto</p>
                Tel: 5552-0909-8989<br />
                Fax: 020-080-0660<br />
                Email: info@bigcity.com
                
            </div>
        </div>
        
        <div class="cleaner"></div>
    </div>
    
    <div id="templatemo_footer">
    
        Copyright © 2017 <a href="#">Big City</a>  
        
    </div> 
    
    </div>
</div>

</body>
</html>