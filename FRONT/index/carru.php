<?php
include "admin/db.php";
 $images = get_imgs();
?>
<!-- Powered by Evilnapsis http://evilnapsis.com/ -->
<!DOCTYPE html>
<html>
<head>
  <title>Carouseles</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<style>
.centrado-porcentual {
padding: 50px;
    width: 1000px;
    height: 500px;
  

  border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
}

.carru img{  
  

    width: 1000px;
    height: 500px;
    float: left;
    position: relative;
    max-width: 1000PX;
    max-height: 500px;
    }
  .textoo{
    position: absolute;
    top:0;
    z-index: 100;
}</style>



<div class="container centrado-porcentual">
<div class="row">
<div class="col-md-20">
<?php if($images>0):?>
<!-- aqui insertaremos el slider -->
<div id="carousel1" class="carousel slide img2" data-ride="carousel">
  <!-- Indicatodores -->
  <ol class="carousel-indicators conte">
<?php $cnt=0; foreach($images as $img):?>
    <li data-target="#carousel1" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
<?php $cnt++; endforeach; ?>
  </ol>

  <!-- Contenedor de las imagenes -->
  <div class="carousel-inner img2" role="listbox">
<?php $cnt=0; foreach($images as $img):?>
    <div class="item <?php if($cnt==0){ echo 'active'; }?> img2">
      <img class="img2" src="<?php echo '../../BACK/ADMIN/SADMIN/Pprincipal/admin/'.$img->folder.$img->src; ?>" alt="Imagen 1"><br><br>
      <div class="img2 carousel-caption textoo"><?php echo $img->title; ?></div>
    </div>
<?php $cnt++; endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>

</div>
<?php else:?>
  <center><h4 class="centrado-porcentual" >No hay imagenes</h4></center>
<?php endif; ?>
</div>
</div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>