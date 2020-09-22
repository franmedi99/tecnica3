<?php 
$conexion=mysqli_connect('localhost','root','','escuela');
$user=$_POST['user'];
$user=$_POST['contra'];

$consulta="SELECT * FROM usuarios WHERE user='$user' AND contra='$contra'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas=1){
  
  header('location: formulario.php');
}
else{
   echo "El usuario o contraseña no es valido";
}

 ?>