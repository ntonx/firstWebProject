<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
    //si la variable de sesion existe entonces
    header("Location:index.php");

}
?>
<!DOCTYPE >
<head>

    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>

<script type ="text/javascript">
    
    $(document).ready(function(){
      

        $("#btnactua").click(function(){
            if(validarFormulario()==true)
                $.post("updateusuario.php", 
                    {   
                        nombre:$("#idnombre").val(),
                        apPaterno:$("#idapPaterno").val(),
                        apMaterno:$("#idapMaterno").val(),
                        edad:$("#idedad").val(),
                        direccion:$("#iddireccion").val(),
                        ciudad:$("#idciudad").val(),
                        telefono:$("#idtelefono").val(),
                        usuario:$("#idusuario").val(),
                        password:$("#idpassword").val()}
                        ,function(htmlexterno){
                        $("#htmlexterno").html(htmlexterno);
                        });
                               });
});

 </script>          

             <?php 
        include ("conexion.php");
        $usu=$_SESSION['id_usuario'];
        $consulta="select * from usuarios where usuario = '$usu'";
        $resultado=array(mysqli_query($conn,$consulta));
      if($resultado=mysqli_query($conn,$consulta)){

while(@$fila = mysqli_fetch_array($resultado)) { 

$_SESSION["nombre"]=$fila["nombre"];   
$_SESSION["apPaterno"]=$fila["apPaterno"]; 
$_SESSION["apMaterno"]=$fila["apMaterno"]; 
$_SESSION["edad"]=$fila["edad"]; 
$_SESSION["direccion"]=$fila["direccion"]; 
$_SESSION["ciudad"]=$fila["ciudad"]; 
$_SESSION["telefono"]=$fila["telefono"]; 
$_SESSION["usuario"]=$fila["usuario"]; 
$_SESSION["password"]=$fila["password"]; 
} }
?>         
   
<script>
        
    function validarFormulario(){
 
        var txtNombre = document.getElementById('idnombre').value;
        var txtapPaterno = document.getElementById('idapPaterno').value;
        var txtapMaterno = document.getElementById('idapMaterno').value;
        var txtedad = document.getElementById('idedad').value;
        var txtdireccion = document.getElementById('iddireccion').value;
        var txtciudad = document.getElementById('idciudad').value;
        var txttelefono = document.getElementById('idtelefono').value;
        var txtpassword = document.getElementById('idpassword').value;
        //Test campo obligatorio
        if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
        if(txtapPaterno == null || txtapPaterno.length == 0 || /^\s+$/.test(txtapPaterno)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
         if(txtapMaterno == null || txtapMaterno.length == 0 || /^\s+$/.test(txtapMaterno)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
         if(txtciudad == null || txtciudad.length == 0 || /^\s+$/.test(txtciudad)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
         if(txtdireccion == null || txtdireccion.length == 0 || /^\s+$/.test(txtdireccion)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
        if(txtpassword == null || txtpassword.length == 0 || /^\s+$/.test(txtpassword)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
        }
 
      //Test edad
        if(txtedad == null || txtedad.length == 0 || isNaN(txtedad)){
            alert('ERROR: Debe ingresar una edad');
            return false;
        }
        if(txttelefono == null || txttelefono.length == 0 || isNaN(txttelefono)){
            alert('ERROR: Debe ingresar un numero telefonico');
            return false
        }

 
         
        return true;
    }
 
    </script>

    
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
            <li><a href="perfil.php" class="current">Perfil</a></li>
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
        
    </div> 
    
    <div id="templatemo_header">
        <div id="site_title">
            <h1><a href="principal.php"></a></h1>
        </div> 
    </div>
    
    <div id="templatmeo_main">
        <div id="templatemo_content"><span class="bottom"></span>
            <div class="content_box" id="parteparaactualizar">
                <h1>Perfil de usuario</h1>


        <?php 
        include ("conexion.php");
        $usu=$_SESSION['id_usuario'];
        $consulta="select * from usuarios where usuario = '$usu'";
        $resultado=array(mysqli_query($conn,$consulta));
      if($resultado=mysqli_query($conn,$consulta)){

while(@$fila = mysqli_fetch_array($resultado)) { 

$_SESSION["nombre"]=$fila["nombre"];   
$_SESSION["apPaterno"]=$fila["apPaterno"]; 
$_SESSION["apMaterno"]=$fila["apMaterno"]; 
$_SESSION["edad"]=$fila["edad"]; 
$_SESSION["direccion"]=$fila["direccion"]; 
$_SESSION["ciudad"]=$fila["ciudad"]; 
$_SESSION["telefono"]=$fila["telefono"]; 
$_SESSION["usuario"]=$fila["usuario"]; 
$_SESSION["password"]=$fila["password"]; 
} }
?>



<form action="" onsubmit="">

                <table align="center">
                    <th>
                        <p></p>
                <br>    
                <tr>  
                <td>Nombre:</td>
                <td><input type="text" name="nombre" id="idnombre" value="<?php echo  $_SESSION["nombre"];?>"></td></tr>
            

                <tr><td>Apellido paterno:</td>
                    <td><input type="text" name="apPaterno" id="idapPaterno" value="<?php echo  $_SESSION["apPaterno"];?>"></td></tr>
                <tr><td>Apellido materno:</td>
                    <td><input type="text" name="apMaterno" id="idapMaterno" value="<?php echo  $_SESSION["apMaterno"];?>"></td></tr>
                <tr><td>Edad:</td>
                    <td><input type="text" name="edad" id="idedad" value="<?php echo  $_SESSION["edad"];?>"></td></tr>
                <tr><td>Dirección:</td>
                    <td><input type="text" name="direccion" id="iddireccion" value="<?php echo  $_SESSION["direccion"];?>"></td></tr>
                <tr><td>Ciudad:</td>
                    <td><input type="text" name="ciudad" id="idciudad" value="<?php echo  $_SESSION["ciudad"];?>"></td></tr>
                <tr><td>Teléfono:</td>
                    <td><input type="text" name="telefono" id="idtelefono" value="<?php echo  $_SESSION["telefono"];?>"></td></tr>
                <tr><td>Usuario:</td>
                    <td><input type="text" name="usuario" id="idusuario" value="<?php echo  $_SESSION["usuario"];?>"></td></tr>
                <tr><td>Password:</td>
                    <td><input type="password" class="password" name="password" id="idpassword" value="<?php echo  $_SESSION["password"]; ?>"></td></tr>
                <tr><td></td>            
                </th></table>


                 <a href="perfil.php"><input type="button" value="Salir sin actualizar"  class="button"></a>
        <a ><input type="submit" id="btnactua" value="Actualizar"  class="button"></a>
</form>



            </div>

                         
                <div class="content_box" id="htmlexterno">
               
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