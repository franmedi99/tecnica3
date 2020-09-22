
<meta charset="utf-8">

<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../LOGIN/index.php');}else{
  ?>   

<style>
.centrado-porcentual {
	width: 100%;
	height: 430px;


	border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
}

</style>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="logo.ico " />
     <link rel="stylesheet"  href="css/estilo.css">
    <title>Administracion</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="w3.css">
  </head>
  <body>
<center>
 <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="#" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="logros/logros.php?pagina=1">Logros</a></li>
        <li><a  href="../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>












<br><br><br>
 
<p class="text-muted centrado-porcentual" style="font-family: Latin Modern Roman 10; font-style: oblique; font-size:55px!important;"><?php 
  $usuario = $_SESSION['username'];
   $apellido = $_SESSION['apellidos'];
  echo "&nbsp;&nbsp; Hola $usuario $apellido";?>
  <br>Estas en la administracion del sitio Web!!
  </p></center><br>


<br><br>












<article style="text-align: center;">

</article><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><a href="busqueda/busqueda.php" class="btn btn-danger btn-lg btn-block" style="width:50%; position: absolute;    left: 22%;
    top: 50%;">Buscador de usuario en Tiempo Real</a></center>
<br><br>
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="css/main.js"></script>
  </body>
</html>
<?php 
        }
?>
