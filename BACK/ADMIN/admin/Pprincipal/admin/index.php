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






<?php

include "db.php";
$images = get_imgs();
?>
<html>
	<head>
		<title>Subir imagenes</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet"  href="../../css/estilo.css">
	</head>
	<body>

 <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../../logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="../../admin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="../../noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="../../galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="../../mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="#">Pagina Principal</a></li>
        <li><a class="bg-primary" href="../../logros/logros.php?pagina=1">Logros</a></li>
        <li><a  href="../../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>
<br><br>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<h1>Imagenes</h1>
		<a href="./form.php" class="btn btn-info">Agregar Imagen</a> 
		<br><br>
		<?php if(count($images)>0):?>
				<table class="table table-bordered">
					<thead>
						<th>Imagen</th>
						<th>Texto a mostrar</th>
						<th>
					</thead>
			<?php foreach($images as $img):?>
				<tr>
				<td><img src="<?php echo $img->folder.$img->src; ?>" style="width:240px;">				</td>
				<td><?php echo $img->title; ?></td>
				<td>
				<a class="btn btn-success" href="./download.php?id=<?php echo $img->id; ?>">Descargar</a> 
				<a class="btn btn-danger" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
			</td>
				</tr>
			<?php endforeach;?>
</table>
		<?php else:?>

			<h4 class="alert alert-warning">No hay imagenes!</h4>
		<?php endif; ?>
</div>
</div>
</div>
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="../../css/main.js"></script>
	</body>

</html>


<?php 
        }
?>
