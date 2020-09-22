<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';



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
    $mail->setFrom('njonasjoe45@hotmail.com');					//que se envie desde con el nombre de
    $mail->addAddress('njonasjoe45@hotmail.com');     							//a que correo se le va a enviar el usuario con que nombre
/*
    // Esta parte es para enviar archivos adjuntos o cualquier otro archivo
 
	   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Codigo de verificacion';					//asunto que aparecera
    $mail->Body    = 'Hola este es un mensaje de tu novio diciendo que te ama mas que a nada en el mundo';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';				Mensaje alternativo

    $mail->send();
    echo 'Mensaje enviado satisfactoriamente';
} catch (Exception $e) {
    echo 'El mensaje no se envio correctamente. Mailer Error: 	', $mail->ErrorInfo;
}