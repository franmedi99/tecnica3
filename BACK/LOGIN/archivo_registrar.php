<?php
//se establece una conexion a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'escuela');
//si se han enviado datos
if (isset($_POST['user']) && isset($_POST['contra']) && isset($_POST['emails']) && isset($_POST['apellidos'])){
    $usuario= $conexion->real_escape_string($_POST['user']);
    $contraseña= $conexion->real_escape_string($_POST['contra']);
    $apellidos= $conexion->real_escape_string($_POST['apellidos']);
	$emails= $conexion->real_escape_string($_POST['emails']);
    $id_det_curso= $conexion->real_escape_string($_POST['id_det_curso']);
    $pass_cifrado=password_hash($contraseña, PASSWORD_DEFAULT);
	$sql = "INSERT INTO `usuarios`(`user`, `apellidos`,`emails`,`contra`,`roles`,`id_det_curso`) VALUES ('$usuario','$apellidos','$emails','$pass_cifrado','3','1')";
    $ingresar=mysqli_query($conexion,$sql) or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
    header ('location: ../../FRONT/index/texto.php');
}//si no se enviaron datos
else{
    header ('location: ./');
}
?>