
<!DOCTYPE >
<head>

    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>

<script type ="text/javascript">
    
    $(document).ready(function(){
      

        $("#btnactua").click(function(){

            if(validarFormulario()==true)
                $.post("altausuario.php", 
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
    
        <ul >
            
        <p>
        
            <a href="index.php" >Iniciar sesión</a>
            <a href="https://www.facebook.com/antonioplataise"><img src="im/facebook_logo.png" width="32px" height="32px"></a>
            <a href="https://twitter.com/ntonx9_plata"><img src="im/templatemo_twitter.png"></a>
            </p>
        </ul>
        
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
                <h1>Registro de nuevo usuario</h1>


      

<form action="" onsubmit="">

                <table align="center">
                    <th>
                        <p></p>
                <br>    
                <tr>  
                <td>Nombre:</td>
                <td><input type="text" name="nombre" id="idnombre" value="" placeholder="Ingrese su nombre"></td></tr>
            

                <tr><td>Apellido paterno:</td>
                    <td><input type="text" name="apPaterno" id="idapPaterno" value="" placeholder="Ingrese apellido"></td></tr>
                <tr><td>Apellido materno:</td>
                    <td><input type="text" name="apMaterno" id="idapMaterno" value="" placeholder="Ingrese apellido"></td></tr>
                <tr><td>Edad:</td>
                    <td><input type="text" name="edad" id="idedad" value="" placeholder="Ingrese edad"></td></tr>
                <tr><td>Dirección:</td>
                    <td><input type="text" name="direccion" id="iddireccion" value="" placeholder="Ingrese dirección"></td></tr>
                <tr><td>Ciudad:</td>
                    <td><input type="text" name="ciudad" id="idciudad" value="" placeholder="Ingrese ciudad"></td></tr>
                <tr><td>Teléfono:</td>
                    <td><input type="text" name="telefono" id="idtelefono" value="" placeholder="Ingrese teléfono"></td></tr>
                <tr><td>Usuario:</td>
                    <td><input type="text" name="usuario" id="idusuario" placeholder="Ingrese usuario nuevo"></td></tr>
                <tr><td>Password:</td>
                    <td><input type="password" class="password" name="password" id="idpassword" value="" placeholder="Ingrese nueva contraseña"></td></tr>
                <tr><td></td>            
                </th></table>


                 <a href="index.php"><input type="button" value="Cancelar"  class="button"></a>
        <a ><input type="button" id="btnactua" value="Crear nuevo usuario"  class=""></a>
</form>



            </div>

            <div id="htmlexterno"></div>
                
               
                <div class="cleaner"></div>
            </div>
        

        <div id="templatemo_sidebar">
           
                
         
            
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