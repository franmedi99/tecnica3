<?php 

$archivo="ips.txt";
$proceso=fopen($archivo,"a") or die("Error en el sistema");
$ip=$_SERVER['REMOTE_ADDR'];
$fecha=date("d/m/y");
$datos="la ip es:".$ip."Fue capturada el: ".$fecha."\n";
fwrite($proceso,$datos);
fclose($proceso);
 ?>