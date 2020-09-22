<?php 
$conexion = new mysqli('localhost', 'root', '', 'mail');

$prueba ="SELECT * FROM prueba where id='30' ";
$prueba2=mysqli_query($conexion,$prueba);
if($prueba2->num_rows>0){
$rosas= mysqli_fetch_array($prueba2,MYSQLI_BOTH);



if($rosas != null){
echo $rosas['codigo'];
}}

 ?>