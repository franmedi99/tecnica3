<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../../LOGIN/index.php');}else{
  ?> 





<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="noticias/noticias.php?pagina=1">Noticias</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="galeria/gallery/admin/bannerlist.php">Galeria</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mesas/criterios.php">Mesas</a>
    </li>
    <?php /* ?>    <li class="nav-item">
      <a class="nav-link" href="eventos/Evento.php">Eventos</a>
    </li> <?php */?>
            <li class="nav-item">
      <a class="nav-link" href="Pprincipal/admin/">Pagina Principal</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
      <div class="dropdown-menu">
   
        <a class="dropdown-item" href="../../LOGIN/index.php">Salir</a>
        </li>
      </div>
    
  </ul>
</nav>


<?php 
        }
?>
