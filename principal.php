<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
    //si la variable de sesion existe entonces
    header("Location:index.php");

}
?>
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big City </title>
<link href="CSS.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_body_wrapper">
	<div id="templatemo_wrapper">
    
    <div id="templatemo_menu">
    
        <ul>
            <li><a href="principal.php" class="current">Principal</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="compras.php">Compras</a></li>
            <li><a href="ventas.php">Ventas</a></li>
            <li><a href="ubicacion.php">Ubicación</a></li>
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
            <h1><a href="principal.php"></a></h1>
        </div> <!-- end of site_title -->
	</div>
    
    <div id="templatmeo_main">
    	<div id="templatemo_content"><span class="bottom"></span>
        	<div class="content_box">
                <h1>Bienvenido  <?php echo ($_SESSION['nombre']);?></h1>

                <img src="im/imagen_01.jpg" width="580px" height="200px">
              <p >Bienvenidos a <a>Big City</a> el mundo de bienes raíces. Gracias a una amplia experiencia y reconocido prestigio en el medio inmobiliario de varios años, nos hemos hecho acreedores a reconocimienos de clientes satisfechos, lo que nos permite garantizarles que si tienen el deseo de comprar, vender o administrar una propiedad, Big City es sin duda la mejor opción.</p>
                
                </div>
                <div class="content_box">
                <p><h3>Nuestra especialidad</h3>
                    <ul>1. Comprar o rentar</ul>
                    <ul>2. Vender o rentar inmueble (residencial, industrial, edificios, oficinas)</ul>
                    <ul>3. Desarrollos (promover inmuebles en pre venta)</ul>
                    <ul>4. Administración de edificios (edificios, residencial, industrial)</ul>
                    <ul>5. Crédito (tramitamos INFONAVIT, FOVISSTE o BANCARIO)</ul>

                </p>
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
            
              <h2>Catálogo de productos</h2>
                
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
                	<li><a href="http://portal.infonavit.org.mx/wps/wcm/connect/Infonavit/Trabajadores/Quiero_un_credito/">INFONAVIT</a></li>
                    <li><a href="http://portal.fovissste.gob.mx/es/FOVISSSTE/Creditos_Hipotecarios">FOVISSSTE</a></li>
                    <li><a href="http://www.hsbc.com.mx/1/2/micasaconhsbc?WT.mc_id=HBMX_HIP_AH_001_PEXT_GS_15">Créditos HSBC</a></li>
                    <li><a href="https://www.banamex.com/simulador-hipotecario/index.html?ecid=PS-Hipotecario-Accounts-HipotecaPerfiles-GOC-INT-03172017-Generic">Créditos BANCOMER</a></li>
                    <li><a href="http://www.santander.com.mx/hipotecario/inicio.html">Créditos SANTANDER</a></li>
				</ul>
                
			</div>
            <div class="sidebar_box">
            
            	<h2>Contáctenos</h2>
                <p>Ponemos a su disposición las siguientes líneas de contacto</p>
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