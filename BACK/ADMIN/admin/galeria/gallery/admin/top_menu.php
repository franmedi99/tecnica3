<?php

    if(!isset($_SESSION['roles'])){
        header('location: ../../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../../../LOGIN/index.php');}else{
  ?> 




    <!-- Fixed navbar -->
<style >.dark{background-color:#343a40;}

.logo{
width: 70px;
height: 70px;
}

</style>
     <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../../../css/estilo.css">
    <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../../../logo.ico" class="logo" ></li>
        <li><a href="../../../admin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="../../../noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="../../../mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="../../../Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="../../../logros/logros.php?pagina=1">Logros</a></li>
        <li><a  href="../../../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>


      <script src="../../../js/jquery.min.js"></script>

    <script src="../../../js/bootstrap.min.js"></script>
 <script src="../../../css/main.js"></script>

    <?php 
        }
?>
