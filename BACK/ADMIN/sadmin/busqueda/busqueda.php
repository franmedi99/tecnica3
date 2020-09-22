
<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=2){
          header('location: ../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=0){
          header('location: ../../../LOGIN/index.php');}else{
  ?>  







<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Buscador en Tiempo</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!-- ESTILOS -->
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap.min.css">
		<!-- SCRIPTS JS-->
		<script src="jquery.min.js"></script>
		<script src="peticion.js"></script>
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Buscador en Tiempo Real</h2>
			</div>
		</header>

		<section>
			<br><br>
			<center><a href="../sadmin.php?pagina=1" class="btn btn-success btn-lg btn-block" style="width:50%">Volver</a></center><br><br>
			<input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Busqueda en Tiempo Real " autofocus>
			<br><br>
			
		</section>

		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		</section>

	</body>
</html>


<?php 
        }
?>
