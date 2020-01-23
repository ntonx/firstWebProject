<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
    //si la variable de sesion existe entonces
    header("Location:index.php");

}
?>
<!DOCTYPE>
<head>
    <link href="CSS.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-3.1.1.js">  </script>
    <script type ="text/javascript">
    $(document).ready(function(){
        $accountDeleteDialog = $('#confirm-delete');
        $accountUpdateDialog = $('#confirm-update');
        $dialogoEliminar = $('#eliminar-dialogo');

$("#update-account").click(function(){
        $accountDeleteDialog[0].showModal();
    });

$("#delete-account").click(function(){
        $dialogoEliminar[0].showModal();
    });


$("#ideliminarVentas").click(function(){
    if (validarEliminacion()==true) 
        $.post("ventasdelete.php", 
                    {   
                        clave:$("#idclaveeliminar").val()                       
                        }
                        ,function(htmlexterno){
                        $("#htmlexterno").html(htmlexterno);
                        });
      //location.reload(true);
       $dialogoEliminar[0].close();
    });
$("#idCanel").click(function(){
        $dialogoEliminar[0].close();
    });

$("#idbtncancel").click(function(){
        $accountDeleteDialog[0].close();
    });
$("#idbtnaceptar").click(function(){
        if (validarActualizacion()==true) 

        $accountUpdateDialog[0].showModal();
        $accountDeleteDialog[0].close();
    });
$("#idbtncancel1").click(function(){
        $accountUpdateDialog[0].close();
    });

$("#idbtnaceptar1").click(function(){

    if(validarActualizacion1()==true)
        $.post("ventasactualizacion.php", 
                    {   
                        clave:$("#idclaveactualizar").val(),
                        precio:$("#idprecioactualizar").val(),
                        dimension:$("#iddimensionactualizar").val(),
                        descripcion:$("#iddescripcionactualizar").val()
                        }
                        ,function(htmlexterno){
                        $("#htmlexterno").html(htmlexterno);
                        });
      
   
       $accountUpdateDialog[0].close();

     //location.reload();
    });


});
    
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big City </title>

      
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
                <div class="content_box" id="modificar">
                  <h1 >¿Interesado en vender?</h1>
                   <p >Ponemos a tu disposicion nuestro servicio de ventas, donde podras ingresar los datos referentes al inmueble que desees vender, así como modificar los datos ingresados o eliminar el registro que hayas realizado anteriormente.</p>
                
                <table style="line-height: 4px; border-collapse: separate; outline-color: black; border-bottom: 4px;grid-row-gap: 3px border: ; border-width: "></table></div>
            <div class="content_box">
  
<?php 
        include ("conexion.php");

       
        $consulta="select * from compras";
        if($resultado=mysqli_query($conn,$consulta)){
        
        echo"<table rules=rows border='3 px' align='center' style='font-size:90%;text-align: justify; line-height:20px; margin:5px'>";
        echo"<tr>";
        echo"<td><b>Clave</b></td><td><b>Tipo</b></td><td><b>Precio $</b></td><td><b>Ciudad</b></td><td><b>País</b></td><td><b>Dimensión</b></td><td><b>Descripción</b></td>";
        while ($fila=mysqli_fetch_array($resultado)) {

            echo "<tr>";
            echo "<td>";

          
            echo $fila['clave'];
            echo "</td><td>";
            echo $fila['tipo'];
            echo "</td><td>";
            echo $fila['precio'];
            echo "</td><td>";
            echo $fila['ciudad'];
            echo "</td><td>";
            echo $fila['pais'];
            echo "</td><td>";
            echo $fila['dimension'];
            echo "</td><td>";
            echo $fila['descripcion'];
            echo "</td></tr>";

            
        }
        echo "</table>";
        mysqli_free_result($resultado);
        
}
        ?>

<div align="center"><br>
<a href="ventasAlta.php" ><input type="button" id="btgo" value="Alta"  class="button"></a>
<input type="button" id="delete-account" value="Eliminar"  class="btn btn-danger boxed-action">

<input type="button" href="#" class="btn btn-danger boxed-action" id="update-account" value="Actualizar" >
<a href="ventas.php"><input type="button" id="b" value="Volver a cargar"  class="button"></a>


<dialog id="confirm-delete" class="site-dialog">
                <header class="dialog-header">
                <h3>Clave a actualizar</h3></header>
                <div class="dialog-content">
                    <input type="text" id="idclaveactualizar" placeholder="INGRESE CLAVE A ACTUALIZAR" size="30px">
                </div>
                <div class="btn-group cf">
                    <br><button class="btnaceptar" id="idbtnaceptar">Aceptar</button>
                    <button class="btncancel" id="idbtncancel">Cancelar</button>
                </div>
    </dialog>


<dialog id="confirm-update" class="site-dialog">
                <header class="dialog-header">
                <h3>Llene los campos</h3></header>
                <div class="dialog-content">
                    
                    <input type="text" id="idprecioactualizar" placeholder="Ingrese nuevo precio" size="30px"></p>
                    
                    <input type="text" id="iddimensionactualizar" placeholder="Ingrese nueva dimensión" size="30px"></p>
                    
                    <textarea type="text" id="iddescripcionactualizar" placeholder="Descripcion" style="width:245px;height:100px"></textarea>
                </div>
                <div class="btn-group cf">
                    <br><button type='submit' class="btnaceptar1" id="idbtnaceptar1">Aceptar</button>
                    <button class="btncancel1" id="idbtncancel1">Cancelar</button>
                </div>
    </dialog>



    <dialog id="eliminar-dialogo" class="site-dialog" >
                <header class="dialog-header">
                <h3>Clave a eliminar</h3></header>
                <div class="dialog-content">
                    <input type="text" id="idclaveeliminar" placeholder="Confirme clave a eliminar" required="" size="30px">
                </div>
                <div class="btn-group cf">
                    <br><button type="submit" class="btnaceptar" id="ideliminarVentas">Aceptar</button>
                    <button class="btncancel" id="idCanel">Cancelar</button>
                </div>
    </dialog>


       <!--FIN DEL DIALOGO-->
<script>
        
    function validarActualizacion(){
 
        var txtClave = document.getElementById('idclaveactualizar').value;


        //Test campo obligatorio
        if(txtClave == null || txtClave.length == 0 || /^\s+$/.test(txtClave)){
            alert('ERROR: El campo Clave no debe ir vacío o lleno de solamente espacios en blanco');
            return false;}
 
         
        return true;
    }
 
    </script>

<script>
        
    function validarActualizacion1(){
 
        var txtPrecio = document.getElementById('idprecioactualizar').value;
        var txtDimension = document.getElementById('iddimensionactualizar').value;
        var txtDescripcion = document.getElementById('iddescripcionactualizar').value;


        //Test campo obligatorio
        if(txtDescripcion == null || txtDescripcion.length == 0 || /^\s+$/.test(txtDescripcion)){
            alert('ERROR: El campo Clave no debe ir vacío o lleno de solamente espacios en blanco');
            return false;}
 
        if(txtPrecio == null || txtPrecio.length == 0 || isNaN(txtPrecio)){
            alert('ERROR: Debe ingresar un valor numerico');
            return false;
        }
        if(txtDimension == null || txtDimension.length == 0 || isNaN(txtDimension)){
            alert('ERROR: Debe ingresar una dimension');
            return false;
        }
         
        return true;
    }
 
    </script>




<script>
        
    function validarEliminacion(){
 
        var txtClave = document.getElementById('idclaveeliminar').value;


        //Test campo obligatorio
        if(txtClave == null || txtClave.length == 0 || /^\s+$/.test(txtClave)){
            alert('ERROR: El campo Clave no debe ir vacío o lleno de solamente espacios en blanco');
            return false;}
 
         
        return true;
    }
 
    </script>


</div> <div id="htmlexterno"></div>
           


   

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