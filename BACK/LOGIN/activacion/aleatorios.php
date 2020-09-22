<?php 
$var=0;
for($var=0; $var<=1;$var++){
	$aleatorio = rand(100000000000000,999999999999999);


}


 ?>
 <?php 

$conexion = new mysqli('localhost', 'root', '', 'mail');

$sql="INSERT INTO prueba (codigo, activacion) VALUES ('$aleatorio', '0')";
 $ingresar=mysqli_query($conexion,$sql) or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));






 ?>

