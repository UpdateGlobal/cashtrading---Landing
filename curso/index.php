<?php
   //Reseteamos variables a 0.
   $nombre = $asunto = $correo = $telefono = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $asunto = $_POST['asunto'];
      $correo = $_POST['correo'];   
      $telefono = $_POST['telefono'];
      $para = 'cashtrading2018@gmail.com';

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
  <link id="favicon" rel="shortcut icon" href="img/icon.png"  />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>


 
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large" target="new" href="https://api.whatsapp.com/send?phone=51960604643&text=Me%20gustaria%20Información%20sobre%20el%20Seminario">
      <i class="fab fa-whatsapp fa-3x" style="margin: 6px 0px 0px;"></i>
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
      <div class="nav-wrapper" align="center">
        <a class="brand-logo que"> <a href="#" data-activates="slide-out" class="button-collapse que">Podemos Informarte</a></a>
          <div class="row hide-on-med-and-down">
            <div class="col s2 input-field">
              <img src="img/logo.png" style="width: 70%; height: 70%; padding-top: 10px;">
            </div>
    <form action="index.php" method="POST">
            <div class="col s2 input-field"> 
              <label for="first_name" class="white-text thin">Nombres Apellido</label>
              <input placeholder="" id="nombre" type="text" name="nombre" required place>
            </div>
              <div class="col s2 input-field">  
                <label for="first_name" class="white-text thin" style="margin-top: -34px; font-size: 12px;">Quieres saber</label>
                  <select name="asunto" id="asunto" required>
                    <option value="" disabled selected></option>
                    <option value="Escuela de traiding" class="black-text">Escuela de trading</option>
                    <option value="Compra Y Venta de Btc">Compra Y Venta de Btc</option>
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



  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slide1.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="texth3">APRENDE A CONTROLAR Y A HACER CRECER TU DINERO</h3>
          <h5 class="light text-lighten-3 texth5">Aprende todo acerca de la nueva economía Colaborativa y digital</h5>
          <a class="waves-effect waves-light btn"><i class="material-icons left">phone</i>+51960604643</a>
        </div>
      </li>
         <li>
        <img src="img/slide2.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="texth3">APRENDE A CONTROLAR Y A HACER CRECER TU DINERO</h3>
          <h5 class="light text-lighten-3 texth5">Aprende todo acerca de la nueva economía Colaborativa y digital</h5>
          <a class="waves-effect waves-light btn"><i class="material-icons left">phone</i>+51960604643</a>
        </div>
      </li>
          <li>
        <img src="img/slide3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="texth3">APRENDE A CONTROLAR Y A HACER CRECER TU DINERO</h3>
          <h5 class="light text-lighten-3 texth5">Aprende todo acerca de la nueva economía Colaborativa y digital</h5>
          <a class="waves-effect waves-light btn"><i class="material-icons left">phone</i>+51960604643</a>
        </div>
      </li>
    </ul>
  </div>



<div class="row" style="background-color: #2f1448; padding-bottom: 50px; padding-top: 50px;" align="center">

<div class="container">
  <div class="col s12 white-text" style="">
    <h3 class="thin">En este Seminario Aprenderás a:</h3>
    <br><br>
        <div class="row">
          <div class="col s4">
           <i class="fas fa-chart-line" style="font-size: 92px;"></i>
            <p class="thin">Analizar indicadores  en mercados financieros digitales para rentabilizar</p>
          </div>
          <div class="col s4">
          <i class="fas fa-bullseye" style="font-size: 92px;"></i>
            <p class="thin"> Crear Estrategias, Minimizar Riesgos y las mejores prácticas</p>         
          </div>
          <div class="col s4">
            <i class="fab fa-btc" style="font-size: 92px;"></i>
             <p class="thin">Operaciones, sistemas y uso de plataformas de trading</p>
          </div>
        </div>
  </div>
</div>
</div>

<div class="" style="background-image: url(img/tipolaptop.png); background-repeat: no-repeat; " >
  <div class="row" align="right">
    <div class="col s6 offset-s6 " style="padding-right: 5%;margin-top: 10%;margin-bottom: 10%;">
       <h4 class="thin" style="padding-top: 20%; padding-bottom: 5%;">Solo podras realizar tus sueños,  si cuando llegan sabes estar despierto.</h4>
    </div>
  </div>
</div>



<?php
   //Reseteamos variables a 0.
   $suscriptor  = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $suscriptor = $_POST['suscriptor'];
      $para = 'cashtrading2018@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $suscriptor . "\r\n";
      $headers .= "Este Correo es para agregar un nuevo Suscriptor al boletin informativo";

      //Componemos cuerpo correo.
      $msjCorreo = "Suscriptor: " . $suscriptor;


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



<div class="" style="background-color: #2f1448;">
  <div class="row container vertical">
    <div class="col l6 m6 white-text" style="padding-top: 11%;">
      <!---hola aqui no sabia que hace-->
      <h3 class="thin">Newsletters<p style="font-size: 10px;">Quieres recibir nuestras notificaciones</p></h3>
    </div>
    <div class="col l6 m6 white-text" style="padding-bottom: 12%; padding-top: 12%;">
        <form action="">
              <div class="input-field" style="font-size: 2rem;">
                <input placeholder="Correo" id="first_name" type="text" class="validate" name="suscriptor">
              </div>
              <div class="input-field">
               <input type="submit" name="submit" id="submit" class="btn black-text" value="Inscribirme" required> 
            </div>
        </form>
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
                          <img src="img/logo.png" style="width: 50%; height: 50%; margin-top: 13px;" class="responsive-img" >

        
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
        </footer


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

      });
    </script>


  </body>
</html>
