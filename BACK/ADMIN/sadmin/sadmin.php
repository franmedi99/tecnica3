
<meta charset="utf-8">

<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=2){
          header('location: ../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=0){
          header('location: ../../LOGIN/index.php');}else{
  ?>          
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="logo.ico " />
    <title>Administracion</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/estilo.css">
    
  </head>
  <body>
<center>
<?php /* ?><nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="logo.ico" style="width: 30px; height: 30px;"></a>

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
            <li class="nav-item">
      <a class="nav-link" href="Pprincipal/admin/">Pagina Principal</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="crud/update.php?id=<?php echo $_SESSION['id']; ?>">Modificar Informacion Personal</a>
        <a class="dropdown-item" href="../../LOGIN/index.php">Salir</a>
        </li>
      </div>
    
  </ul>
</nav> */?>


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
 
<p class="text-muted" style="font-family: Latin Modern Roman 10; font-style: oblique; font-size:65px!important;"><?php 
  $usuario = $_SESSION['username'];
  $apellido = $_SESSION['apellidos'];
  echo " $usuario $apellido";?>
  <hr>
  
  </p></center><br>



<center>
  <h3>Sección de administradores</h3><br>
  <a href="crud/tablas/Tsuper.php?pagina=1" class="btn btn-success btn-lg btn-block " style="width:30%" > 
  Tabla de Super Administracion</a><br><br>
<a href="crud/tablas/Tadmin.php?pagina=1" class="btn btn-primary btn-lg btn-block " style="width:30%" > 
Tabla de Administracion General</a><br><br>
<a href="crud/tablas/Tusuario.php?pagina=1" class="btn btn-dark btn-lg btn-block" style="width:30%" >
 Tabla de Usuarios</a><br><br>
<a href="crud/tablas/Tdes.php?pagina=1" class="btn btn-secondary btn-lg btn-block " style="width:30%" >
 Tabla de Usuarios deshabilitados</a><br><br>

<a href="crud/crear/super.php" class="btn btn-success">Crear super Adminidrador</a>&emsp;&emsp;&emsp;
<a href="crud/crear/admin.php" class="btn btn-primary">Crear Adminidrador General</a>&emsp;&emsp;&emsp;
<a href="crud/crear/user.php" class="btn btn-dark">Crear Usuario</a>

</center>
<br><br>












<article style="text-align: center;">

</article><br><br>
<center><a href="busqueda/busqueda.php" class="btn btn-info btn-lg btn-block" style="width:50%">Buscador de usuario en Tiempo Real</a></center>
<br><br>
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="css/main.js"></script>
  </body>
</html>
<?php 
        }
?>
