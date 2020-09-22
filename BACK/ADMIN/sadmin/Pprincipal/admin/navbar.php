<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=2){
          header('location: ../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=0){
          header('location: ../../../../LOGIN/index.php');}else{
  ?> 





<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet"  href="../../css/estilo.css">
  <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="#" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="#">Logros(proximamente)</a></li>
        <li><a  href="../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>

<script src="../../css/main.js"></script>

<?php 
        }
?>
