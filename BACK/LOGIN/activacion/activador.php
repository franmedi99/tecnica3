<?php 
$codigo=$_GET['codigo'];

if(isset($_GET['codigo'])){
$conexion = new mysqli('localhost', 'root', '', 'escuela');

$prueba ="SELECT codigo, activacion FROM usuarios where codigo='$codigo' and activacion='0'";
$prueba2=mysqli_query($conexion,$prueba);
if($prueba2->num_rows>0){








		$sql = "UPDATE `usuarios` SET `activacion`='1' WHERE `codigo`='$codigo'";
$ingresar=mysqli_query($conexion,$sql) or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
header("Location: verificado.php");
}

if($prueba2=0){
echo "codigo invalido";
}

}else{
	echo "no se inserto ningun codigo de verificacion";
}





 ?>