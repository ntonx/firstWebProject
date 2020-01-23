<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
    //si la variable de sesion existe entonces
    header("Location:index.php");

}
?>
<!DOCTYPE>
<head>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big City </title>
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
            <li><a href="ventas.php" class="current">Ventas</a></li>
            <li><a href="ubicacion.php">Ubicación</a></li>
            <li><a href="cerrar.php">Cerrar sesión</a></li>
        </ul>
        
        <p>
            <a href="https://www.facebook.com/antonioplataise"><img src="im/facebook_logo.png" width="32px" height="32px"></a>
            <a href="https://twitter.com/ntonx9_plata"><img src="im/templatemo_twitter.png"></a>
        </p>
        
        <div class="cleaner"></div>
        
    </div> 
    
    <div id="templatemo_header">
        <div id="site_title">
            <h1><a href="principal.php"></a></h1>
        </div> 
    </div>

    <div id="templatmeo_main">
        <div id="templatemo_content"><span class="bottom"></span>
            
                
                <div class="content_box" id="modificar">
                  <h1 >¿Interesado en vender?</h1>
                   <p >Ponemos a tu disposicion nuestro servicio de ventas, donde podras ingresar los datos referentes al inmueble que desees vender, así como modificar los datos ingresados o eliminar el registro que hayas realizado anteriormente.</p>
                </div>
    
            <div class="content_box">
               

<div align="center">

        <form onsubmit="return validarFormulario()"" >
                <table>
                    <th>
                                         
                <tr><td>Clave:</td>
                <td><input type="text" name="clave" id="idclave" placeholder="Ingrese clave no repetida" style="width:160px"></td></tr>
                <tr><td>Tipo:</td>
                    <td><select id="selector" name="selector" style="width: 160px">
                            <option value="0">Elija el tipo</option>
                            <option value="1">Bungalow</option>
                            <option value="2">Residencial</option>
                            <option value="3">Departamento</option>
                        </select></td></tr>
                <tr><td>Precio $:</td>
                    <td><input type="text" name="precio" id="idprecio" placeholder="Ingrese precio en dls" style="width:160px"></td></tr>
                <tr><td>Ciudad:</td>
                    <td><input type="text" name="ciudad" id="idciudad" placeholder="Ingrese ciudad de ubicación" style="width:160px"></td></tr>
                <tr><td>Pais:</td>
                    <td><input type="text" name="pais" id="idpais" placeholder="Ingrese pais de ubicación" style="width:160px"></td></tr>
                <tr><td>Dimensión:</td>
                    <td><input type="text" name="dimension" id="iddimension" placeholder="Ingrese dimensiones en m2" style="width:160px"></td></tr>
                <tr><td>Descripcion:</td>
                    <td><textarea type="text" name="descripcion" id="iddescripcion" placeholder="Ingrese una breve descripcion menor a 150 caracteres" style="width:160px;height: 100px"></textarea></td></tr>
                <tr><td></td>            
                </th></table>


                <br>
<a href="ventas.php" ><input type="button" id="btregresar" value="Regresar"  class="button"></a>
<input type="submit" id="btalta" value="Alta"  class="button">
</form>

</div>
 <div  id="htmlexterno"></div>
            </div>

<script>
        
    function validarFormulario(){
 
        var txtClave = document.getElementById('idclave').value;
        var txtPrecio = document.getElementById('idprecio').value;
        var txtCiudad = document.getElementById('idciudad').value;
        var txtPais = document.getElementById('idpais').value;
        var txtDimension = document.getElementById('iddimension').value;
        var txtDescripcion = document.getElementById('iddescripcion').value;
        var cmbSelector = document.getElementById('selector').selectedIndex;


        //Test campo obligatorio
        if(txtClave == null || txtClave.length == 0 || /^\s+$/.test(txtClave)){
            alert('ERROR: El campo Clave no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
        if(txtCiudad == null || txtCiudad.length == 0 || /^\s+$/.test(txtCiudad)){
            alert('ERROR: El campo Ciudad no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
        if(txtPais == null || txtPais.length == 0 || /^\s+$/.test(txtPais)){
            alert('ERROR: El campo Pais no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
         if(txtDescripcion == null || txtDescripcion.length == 0 || /^\s+$/.test(txtDescripcion)){
            alert('ERROR: El campo Descripcion no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
 
      //Test edad
        if(txtPrecio == null || txtPrecio.length == 0 || isNaN(txtPrecio)){
            alert('ERROR: Debe ingresar un precio');
            return false;
        }
        if(txtDimension == null || txtDimension.length == 0 || isNaN(txtDimension)){
            alert('ERROR: Debe ingresar una dimensión válida');
            return false
        }
        //Test comboBox
        if(cmbSelector == null || cmbSelector == 0){
            alert('ERROR: Debe seleccionar una opcion en Tipo');
            return false;
        }
 
         
        return true;
    }
 
    </script>


<script type ="text/javascript">
    
    $(document).ready(function(){
      

        $("#btalta").click(function(){
                      
                $.post("ventasaltabase.php", 
                    {   
                        clave:$("#idclave").val(),
                        precio:$("#idprecio").val(),
                        ciudad:$("#idciudad").val(),
                        pais:$("#idpais").val(),
                        dimension:$("#iddimension").val(),
                        descripcion:$("#iddescripcion").val(),
                        tipo:$("#selector").val()}
                        ,function(htmlexterno){
                        $("#htmlexterno").html(htmlexterno);
                        });
                });
    });

    </script>

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