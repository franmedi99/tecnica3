<?php 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';






if (isset($_POST['user']) && isset($_POST['contra1']) && isset($_POST['contra2']) && isset($_POST['emails']) && isset($_POST['apellidos'])){


$conexion = new mysqli('localhost', 'root', '', 'escuela');



$var=0;
for($var=0; $var<=1;$var++){
	$aleatorio = rand(100000000000000,999999999999999);

}


 ?>
 <?php 

		$contra= $conexion->real_escape_string($_POST['contra1']);
		$contra2= $conexion->real_escape_string($_POST['contra2']);
		$correo= $conexion->real_escape_string($_POST['emails']);
    	$usuario= $conexion->real_escape_string($_POST['user']);
    	$apellidos= $conexion->real_escape_string($_POST['apellidos']);




 if($contra===$contra2){
$sql_verificar_reg="SELECT emails FROM usuarios WHERE emails='".$correo."'";
            $verificar_reg=mysqli_query($conexion, $sql_verificar_reg);
            if($verificar_reg->num_rows>0){

    echo '<script>
    alert("No se pudo realizar el registro debido a que el correo electronico ya esta registrado");
    window.history.go(-1);
    </script>';
}else{

                $contra= $conexion->real_escape_string($_POST['contra1']);
                $sql="INSERT INTO usuarios (emails,contra,apellidos,user,roles,id_det_curso,codigo,activacion) VALUES                              ('".$correo."','".$contra."','".$apellidos."','".$usuario."','3','1','".$aleatorio."','0')";
                               $verificar=mysqli_query($conexion, $sql);
                if($verificar){

$prueba ="SELECT * FROM usuarios where user='$usuario' and apellidos='$apellidos' and emails='$correo' and activacion='0'";
$prueba2=mysqli_query($conexion,$prueba);
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




// Instantiation and passing `true` enables exceptions
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

}else{

    echo '<script>
    alert("No se registro correctamente por favor vuelva a intentarlo");
    window.history.go(-1);
    </script>';


}

}else{
    echo '<script>
    alert("No se registro correctamente por favor vuelva a intentarlo");
    window.history.go(-1);
    </script>';
}
}else{     echo '<script>
    alert("Este usuario ya ha sido registrado");
window.history.go(-1);
    </script>';}


}else{    echo '<script>
    alert("No se pudo realizar el registro");
    window.history.go(-1);
    </script>';}
}

}else{
	    echo '<script>
    alert("Las contraseñas no coinciden");
    window.history.go(-1);
    </script>';
}

}else{    echo '<script>
    alert("No se completaron todos los campos correctamente");
    window.history.go(-1);
    </script>';}


// window.history.go(-1); sirve para volver a la pagina anterior :D
