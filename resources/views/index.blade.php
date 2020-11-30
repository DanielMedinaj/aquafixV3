<!DOCTYPE html>
<html lang="en">

<?php
@session_start();
$usuario=isset($_SESSION['loggedin']);
if($usuario == true){
  echo '<script>location.href="/Daniel/sistema/menu.php"</script>"';
}
else {

}
?>

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 2.3
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <link rel="icon" type="image/png" href="/imagenes/alberca.jpg">
  <title>Login</title>


  <!-- CORE CSS-->
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="componentes/sweetAlert/sweetalert.css">
  <link href="componentes/css/login_css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="componentes/css/login_css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
  
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    
  

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="componentes/css/login_css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="componentes/css/login_css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body style="background-color:#ddd;">
  
  
  

  <div id="-page"  style="  position: absolute;">
    <div class="col s12 z-depth-4 card-panel">
      @if(Session::has('mensaje_error'))
    {{ Session::get('mensaje_error') }}
@endif
      <form method="post" action="login" class="form ">
        
        <div class="row">
          <div class="input-field col s12 center">
            
            <img src="imagenes/LOGO.png" alt="" style="margin-bottom: 50px;" class="circle responsive-img valign profile-image-login">
            
               <ul>
                <li>Para ingresar teclee:</li>
                 <li>Usuario:admin</li>
                 <li>Contraseña:123</li>
                        
            </p>
            
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            @csrf
            <input name="usuario" id="usuario" type="text" requeried>
            <label for="usuario" class="center-align">Nombre de Usuario</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input style="margin-bottom: 50px;" name="password" id="contrasena" type="password">
            <label for="contrasena">Contraseña</label>
          </div>
        </div>
       
        <div class="row">
          <div class="input-field col s12">
            <button id="login" type="submit" class="btn waves-effect blue lighten-3 col s12">Iniciar</button>
          </div>
        </div>
        

      </form>
    </div>
  </div>
<div class="right_col">
<div class="slider">
              <ul class="slides">
                <li>
                  <img src="imagenes/alberca4.jpg"width="250"> <!-- random image -->
                  <div class="caption center-align">
                    <h3 class="font-weight-bold white-text"> Misi&oacute;n</h3>
                    <h5 class="light white-text text-lighten-3">Proporcionar a nuestros clientes un servicio con los estándares más altos de calidad.</h5>
                  </div>
                </li>
                <li>
                  <img src="imagenes/alberca2.jpg">
                  <div class="caption left-align">
                    <h3>Visi&oacute;n</h3>
                    <h5 class="light grey-text text-lighten-3">Ser una empresa de vanguardia, responsable, actualizada con la técnología novedosa y comprometida con sus clientes.</h5>
                  </div>
                </li>
                <li>
                  <img src="imagenes/alberca1.jpg"width="250"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>MANTENIMIENTO DE ALBERCAS</h3>
                    <h5 class="light grey-text text-lighten-3"></h5>
                  </div>
                </li>
                <li>
                  <img src="imagenes/alberca3.jpg"> <!-- random image -->
                  <div class="caption right-align">
                    <h3>AQUAFIX</h3>
                    <h5 class="light grey-text text-lighten-3"></h5>
                  </div>
                </li>
              </ul>

            </div>
            </div>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="componentes/jquery/jquery-1.11.3.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="componentes/js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="componentes/js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="componentes/js/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="componentes/js/plugins.js"></script>
  <script src="componentes/sweetAlert/sweetalert.min.js"></script> 

</body>

</html> 