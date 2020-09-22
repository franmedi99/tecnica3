<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
$conexion = new mysqli('localhost', 'root', '', 'escuela');
$correo =$_SESSION['emails'];
$nombre =$_SESSION['username'];
$correo2= $conexion->real_escape_string($correo);
$nombre2= $conexion->real_escape_string($nombre);
$sql="SELECT * FROM usuarios WHERE emails='$correo2' and user='$nombre2' and activacion='0'";
$prueba2=mysqli_query($conexion,$sql);
if($prueba2->num_rows>0){
$rosas= mysqli_fetch_array($prueba2,MYSQLI_BOTH);

if($rosas != null){
$_SESSION['codigo'] = $rosas['codigo'];
$_SESSION['user'] = $rosas['user'];

$_SESSION['emails'] = $rosas['emails'];

if($rosas == true){
$correo = $rosas['emails'];
$nombre = $rosas['user'];
$codigo=  $rosas['codigo'];









$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // ver los errores desactivar con 0 cambiar el 2
    $mail->isSMTP();                                            // protocolo para enviar los emails
    $mail->Host       = ' smtp.gmail.com';  				// usar el host especifico para outlook, hotmail, gmail
    $mail->SMTPAuth   = true;                                   // pone que el smtp sea verdadero
    $mail->Username   = 'tecnicanro3mdp@gmail.com';                     // el hotmail que va a enviar los mails
    $mail->Password   = 'Tecnica31964';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($correo, $nombre);					//que se envie desde// con el nombre de
    $mail->addAddress($correo);     							//a que correo se le va a enviar el usuario con que nombre
/*
    // Esta parte es para enviar archivos adjuntos o cualquier otro archivo
 
	   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Codigo de Autentificacion: Copie el siguiente link y peguelo en su navegador para terminar su registro.';					//asunto que aparecera
    $mail->Body    = 'http://tecnica3.sytes.net/Proyecto%20Escuela/BACK/LOGIN/activacion/activador.php?codigo='.$codigo;
    $mail->CharSet ='UTF-8';

    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';				Mensaje alternativo

    $mail->send();
    /*echo '<script>
    alert("Se envio un codigo de verificacion a tu correo electronico");
    window.history.go(-1);
    </script>
    ';*/

    header("location: mensaje.php");
}


 catch (Exception $e) {
    echo 'El mensaje no se envio correctamente. Mailer Error: 	', $mail->ErrorInfo;
}

}else{echo "Algo salio mal porfavor vuelva a intentarlo";}
}else{echo "Algo salio mal porfavor vuelva a intentarlo";}
}else{echo "Algo salio mal porfavor vuelva a intentarlo";}
 ?>