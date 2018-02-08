<?php
   //Reseteamos variables a 0.
   $nombre = $telefono = $asunto = $correo = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $asunto = $_POST['asunto'];   
      $correo = $_POST['correo'];
      $para = 'cashtrading2018@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $nombre . "\r\n";
      $headers .= "Este Correo llega Directo desde la Pagina web";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "telefono: " . $telefono;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $asunto;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Correo: " . $correo;
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
  <title>CashTraidingPeru</title>
    <link id="favicon" rel="shortcut icon" href="img/icon.png"  />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>






  <div class="fixed-action-btn">
    <a class="btn-floating tooltipped" target="new" data-position="left" data-delay="50" data-tooltip="Ws +51960604643" href="https://api.whatsapp.com/send?phone=51960604643&text=Me%20gustaria%20Información%20sobre%20el%20Seminario">
      <i class="fab fa-whatsapp fa-3x" style="margin: 5px 10px 0px;"></i>
    </a>
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
        <img  src="img/logo.svn.svg" style="width: 50%; height: 50%;" class="responsive-img" >
        <span class="black-text name">Inscribite Aquí</span>
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
            <option value="Escuela de traiding" style="font-size: 12px;">Escuela de trading</option>
            <option value="Compra Y Venta de Btc" style="font-size: 12px;">Compra Y Venta</option>
          </select>
          <label>Quieres saber</label>
        </div>
    </li>
        <li style="margin-left: 10px; margin-right: 10px;">      
      <label for="first_name" class="black-text">Correo</label>
      <input placeholder="Ingresa Correo" id="correo" type="text" name="correo" required>
    </li>
    <li style="margin-left: 10px; margin-right: 10px;">      
      <label for="first_name" class="black-text">Teléfono</label>
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
    <div class="nav-wrapper">
        <img src="img/logo.png" style="width: 10%; height: 70%; padding-top: 10px;">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#registrate">Registrate</a></li>
      </ul>
    </div>
  </nav>
</div>


<!--navbarform-->






<!--slider-->
  <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="img/nego.jpg"> <!-- random image -->
        <div class="caption right-align overlay">
          <h3 class="thin" style="color: #8e24aa;">This is our big Tagline!</h3>
          <h5 class="light text-lighten-3" style="color: #8e24aa;">Here's our small slogan.</h5>
        </div>
      </li>
       <li>
        <img src="img/nego.jpg"> <!-- random image -->
        <div class="caption right-align overlay">
          <h3 class="thin" style="color: #8e24aa;">This is our big Tagline!</h3>
          <h5 class="light text-lighten-3" style="color: #8e24aa;">Here's our small slogan.</h5>
        </div>
      </li>
       <li>
        <img src="img/nego.jpg"> <!-- random image -->
        <div class="caption right-align overlay">
          <h3 class="thin" style="color: #8e24aa;">This is our big Tagline!</h3>
          <h5 class="light text-lighten-3" style="color: #8e24aa;">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div> 
<!--slider-->


<div class="row" style="background-color: #2f1448;" align="center">
  <div class="col s12 white-text" style="padding-bottom: 12%; padding-top: 12%;">
    <h3 class="thin">Aqui va un titulo</h3>
        <div class="row">
          <div class="col s4">
            <i class="material-icons" style="font-size: 92px;">attach_money</i>
            <h5 class="thin">Aqui va un titulo</h5>
            <p class="thin">loren Ipsum temas de descricpcion aparafrasear lo que de dice el loco</p>
          </div>
          <div class="col s4">
          <i class="material-icons" style="font-size: 92px;">attach_money</i>
            <h5 class="thin">Aqui va un titulo</h5>
            <p class="thin">loren Ipsum temas de descricpcion aparafrasear lo que de dice el loco</p>
          </div>
          <div class="col s4">
            <i class="material-icons" style="font-size: 92px;">attach_money</i>
            <h5 class="thin">Aqui va un titulo</h5>
            <p class="thin">loren Ipsum temas de descricpcion aparafrasear lo que de dice el loco</p>
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



<div class="" style="background-color: #2f1448;" id="registrate">
  <div class="row container vertical">
    <div class="col l6 m6 white-text" style="padding-top: 11%;">
      <!---hola aqui no sabia que hace-->
      <h3 class="thin">Registrate<p style="font-size: 10px;">Un asesor especializado se comunicará contigo</p></h3>
    </div>
    <div class="col l6 m6 white-text" style="padding-bottom: 12%; padding-top: 12%;">
         <form class="col s12" action="index.php" method="POST">
            <div class="row">
              <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate" required name="nombre" id="nombre">
                <label for="first_name" class="thin white-text" >Ingresa Nombre y Apellido  </label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate" required name="telefono" id="telefono">
                <label for="first_name" class="thin white-text">Danos tu Teléfono</label>

              </div>
            </div>

            <div class="row">
              <div class="input-field col s12" style="margin: 60px 0px -20px;">
                      <select required name="asunto" id="asunto">
                        <option value="" disabled selected class="thin"></option>
                        <option value="Escuela de trading">Escuela de trading</option>
                        <option value="Compra y Venta de Btc">Compra y Venta de Btc</option>
                      </select>
                      <label class="thin white-text">¿Que Quieres preguntarnos?</label>
              </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                <input  id="first_name" type="text" class="validate" required name="correo" id="correo">
                <label for="first_name" class="thin white-text">Podemos Tener tu Correo</label>

              </div>

     <input type="submit" name="submit" id="submit" class="btn white-text" value="Registrarme">
            </div>
          </form>
    </div>
  </div>
</div>
</div>

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Orzaniza</h5>
                <p class="grey-text text-lighten-4">Cash Trading International</p>
              </div>
              <div class="col l4 offset-l2 s12">
              <img src="img/logo.png" style="margin-top: 13px;" class="responsive-img" >

        
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
        Dirección:   Bartolomé Trujillo 432 Miraflores 
Alt. 11 de Benavidess
            <a class="grey-text text-lighten-4 right" href="#!">
   © 2018 Copyright Cash Trading International</a>
            </div>
          </div>
        </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
        $('.slider').slider({
          indicators: false,
          height: 600
        });
        $(".button-collapse").sideNav();
                $('.tooltipped').tooltip({
          delay: 50, });

      });
    </script>


  </body>
</html>
