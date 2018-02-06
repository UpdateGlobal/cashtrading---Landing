<?php
   //Reseteamos variables a 0.
   $nombre = $asunto = $correo = $telefono = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $asunto = $_POST['asunto'];
      $correo = $_POST['correo'];   
      $telefono = $_POST['telefono'];
      $para = 'blacksk81@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $nombre . "\r\n";
      $headers .= "Este Correo llega Directo desde la Pagina web";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $asunto;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $correo;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono: " . $telefono;
      $msjCorreo .= "\r\n";

    if (mail($para, $correo, $msjCorreo, $headers) ) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Seminario Internacional de Economía Colaborativa</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>


  <div class="fixed-action-btn Vertical click-to-toggle">
    <a class="btn-floating btn-large">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating tooltipped" data-position="left" data-delay="50" data-tooltip="Compra y Venta" style="background-color: #ab47bc"><i class="material-icons">attach_money</i></a></li>
      <li><a class="btn-floating tooltipped" data-position="left" data-delay="50" data-tooltip="Negocios" style="background-color: #8e24aa"><i class="material-icons">trending_up</i></a></li>
      <li><a class="btn-floating tooltipped" data-position="left" data-delay="50" data-tooltip="Escuela de Traiding" style="background-color: #6a1b9a"><i class="material-icons">payment</i></a></li>
    </ul>
  </div>


<!--slideformmovil-->

<style type="text/css">
@media only screen and (min-width: 992px) {
.que {
  display: none !important;
 }
}

@media only screen and (max-width: 992px) {
  .que {
    display: block !important;
  }
}
</style>

<ul id="slide-out" class="side-nav">
    <li>
        <div class="user-view">
        <img  src="img/logo.svg" style="width: 50%; height: 50%;" class="responsive-img" >
        <span class="black-text name">Podemos Informarte</span>
        <span class="black-text email">Solo llenas tus Datos</span>
        </div>
    </li>
<form action="index.php" method="POST">   
    <li style="margin-left: 10px; margin-right: 10px;">      
      <label for="first_name" class="black-text">Nombres Apellido</label>
      <input placeholder="Ingresa Nombre" id="nombre" type="text" name="nombre" required>
    </li>
    <li style="margin-left: 10px; margin-right: 10px;">      
        <div class="input-field">
          <select name="asunto" id="asunto" required>
            <option value="" disabled selected>Elige</option>
            <option value="Escuela de traiding" style="font-size: 12px;">Escuela de traiding</option>
            <option value="Compra Y Venta de Btc" style="font-size: 12px;">Compra Y Venta de Btc</option>
            <option value="NifCoin" style="font-size: 12px;">NifCoin</option>
          </select>
          <label>Quieres saber</label>
        </div>
    </li>
        <li style="margin-left: 10px; margin-right: 10px;">      
      <label for="first_name" class="black-text">Correo</label>
      <input placeholder="Ingresa Correo" id="correo" type="text" name="correo" required>
    </li>
    <li style="margin-left: 10px; margin-right: 10px;">      
      <label for="first_name" class="black-text">Telefono</label>
      <input placeholder="Ingresa Numero" id="telefono" type="text" name="telefono" required>
    </li>
     <li style="margin-left: 10px; margin-right: 10px;"> 

     <input type="submit" name="submit" id="submit" class="btn black-text" value="Informame" required> 

     <!--  <button class="btn black-text" type="submit">Informame</button> -->
    </li> 
</form>    
  </ul>

 <!--slideformmovil-->
     
<!--navbarform-->

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper" align="center">
        <a class="brand-logo que"> <a href="#" data-activates="slide-out" class="button-collapse que">Podemos Informarte</a></a>
          <div class="row hide-on-med-and-down">
            <div class="col s2 input-field">
              <img src="img/logo.png" style="width: 70%; height: 70%; padding-top: 10px;">
            </div>
    <form action="index.php" method="POST">
            <div class="col s2 input-field"> 
              <label for="first_name" class="white-text thin">Nombres Apellido</label>
              <input placeholder="" id="nombre" type="text" name="nombre" required>
            </div>
              <div class="col s2 input-field">  
                <label for="first_name" class="white-text thin" style="margin-top: -34px; font-size: 12px;">Quieres saber</label>
                  <select name="asunto" id="asunto" required>
                    <option value="" disabled selected></option>
                    <option value="Escuela de traiding" class="black-text">Escuela de traiding</option>
                    <option value="Compra Y Venta de Btc">Compra Y Venta de Btc</option>
                    <option value="NifCoin">NifCoin</option>
                  </select>
             </div>
             <div class="col s2 input-field">  
              <label for="first_name" class="white-text thin">Correo</label>
              <input placeholder="" id="correo" type="text" name="correo" required>
            </div>
            <div class="col s2 input-field">  
              <label for="first_name" class="white-text thin">Telefono</label>
              <input placeholder="" id="telefono" type="text" name="telefono" required>
            </div>
            <div class="col s2 input-field"> 
            
     <input type="submit" name="submit" id="submit" class="btn white-text" value="Informame"> 
            </div>
    </form>
          </div>
      </div>
    </nav>
  </div>


<!--navbarform-->


<style type="text/css">
  
  .textleft{
    margin: 0px 0px 0px;
  }
</style>


<!--slider-->
  <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="img/slide1.jpg"> <!-- random image -->
        <div class="caption right-align textleft">
          <h3 class="thin" style="color: #8e24aa;">APRENDE A CONTROLAR Y A HACER CRECER TU DINERO</h3>
          <h5 class="light text-lighten-3" style="color: #8e24aa;">Aprende todo acerca de la nueva economía Colaborativa y digital</h5>
        </div>
      </li>
 <!--       <li>
        <img src="img/slide1.jpg"> 
        <div class="caption right-align">
          <h3 class="thin" style="color: #8e24aa;">This is our big Tagline!</h3>
          <h5 class="light text-lighten-3" style="color: #8e24aa;">Here's our small slogan.</h5>
        </div>
      </li>
       <li>
        <img src="img/slide1.jpg"> 
        <div class="caption right-align">
          <h3 class="thin" style="color: #8e24aa;">This is our big Tagline!</h3>
          <h5 class="light text-lighten-3" style="color: #8e24aa;">Here's our small slogan.</h5>
        </div>
      </li> -->
    </ul>
  </div> 
<!--slider-->

<div class="row" style="background-color: #2f1448;" align="center">
  <div class="col s12 white-text" style="padding-bottom: 12%; padding-top: 100%;">
    <h3 class="thin">En este Seminario Aprenderás a:</h3>
        <div class="row">
          <div class="col s4">
            <i class="material-icons" style="font-size: 92px;">attach_money</i>
            <p class="thin">Analizar indicadores  en mercados financieros digitales para rentabilizar</p>
          </div>
          <div class="col s4">
          <i class="material-icons" style="font-size: 92px;">attach_money</i>
            <p class="thin">Operaciones, sistemas y uso de plataformas de trading</p>
          </div>
          <div class="col s4">
            <i class="material-icons" style="font-size: 92px;">attach_money</i>
            <p class="thin">Estrategias, Riesgos y mejores prácticas</p>
          </div>
        </div>
  </div>
</div>

<div class="" style="background-image: url(img/tipolaptop.png); background-repeat: no-repeat; " >
  <div class="row" align="right">
    <div class="col s6 offset-s6 " style="padding-right: 5%;margin-top: 10%;margin-bottom: 10%;">
       <h4 class="thin" style="padding-top: 25%; padding-bottom: 5%;">Solo podras realizar tus sueños,  si cuando llegan sabes estar despierto.</h4>
    </div>
  
  </div>
</div>

<div class="" style="background-color: #2f1448;">
  <div class="row container vertical">
    <div class="col l6 m6 white-text" style="padding-top: 11%;">
      <!---hola aqui no sabia que hace-->
      <h3 class="thin">Newsletters<p style="font-size: 10px;">Quieres recibir nuestras notificaciones</p></h3>
    </div>
    <div class="col l6 m6 white-text" style="padding-bottom: 12%; padding-top: 12%;">
        <form action="">
              <div class="input-field" style="font-size: 2rem;">
                <input placeholder="Correo" id="first_name" type="text" class="validate">
              </div>
              <div class="input-field">
              <button class="btn" type="submit">Inscribir</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="row container">
  <div class="col l6 m6 s6">Todos los Derechos Reservados 2018</div>
</div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
        $('.slider').slider({
          indicators: false,
          height: 100
        });
        $(".button-collapse").sideNav();

      });
    </script>


  </body>
</html>
