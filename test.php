<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];   
      $mensaje = $_POST['mensaje'];
      $para = 'blacksk81@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Este Correo llega Directo desde la Pagina web";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
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
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
            <form id="main-contact-form" class="contact-form" name="contact-form" action="test.php" method="POST">
                  <div class="col-sm-5 col-sm-offset-1">
                      <div class="form-group">
                         <label>Nombre *</label>
                         <input type="text" id="nombre" name="nombre" class="form-control" required="required">
                       </div>

                       <div class="form-group">
                          <label>Email *</label>
                          <input type="email" id="email" name="email" class="form-control" required="required">
                       </div> 

                       <div class="form-group">
                           <label>Asunto *</label>
                           <input type="text" id="subject" name="subject" class="form-control" required="required">
                       </div>

                       <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="mensaje" id="mensaje" required="required" class="form-control" rows="8"></textarea>
                       </div>                        

                       <div class="form-group">
                            <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="Enviar" />
                       </div>                      
                  </div> 
            </form>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
  </html>