<?php 
session_start();

//echo $_SESSION['emails'];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>No verificado</title>
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>
 <body><br>
<center>
   <div class="alert alert-success alert-dismissible fade show" style="width:80%; height: 100px;">
 
    <strong><p style=" font-size:30px!important;">Atencion <?php echo $_SESSION['username']; ?></p></strong></div></center>

<center>
<div class="alert alert-danger alert-dismissible fade show" style="width:83%; height: 50%;">
 
 
    <h5>Tu cuenta no esta verificada, al momento de registrarte se envio una direccion de verificacion a tu correo electronico </h5><br>
    <p> si en su bandeja principal no le aparece se recomienda que en el caso de usar outlook se vaya a la seccion de correos no deseados en donde se encontrará el email de activacion de cuenta.</p><br>
    <p>En caso de que use gmail diríjase a la parte de spam, ahi se podra encontrar con nuestro correo de verificacion de email</p><br><br>
    <p>si ha pasado mucho tiempo desde que se registro y no encuentra su codigo de verificacion haga click en el boton de abajo para reenviar su codigo de verificacion al email</p>
    <a href="reenviar.php" class="btn btn-info">Enviar codigo de verificacion </a><br><br>
    <strong>Muchas gracias!!</strong><br>
  </div>

 <br> <a href="index.php" class="btn btn-success">Salir</a></center>
 </body>
 </html>