<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../LOGIN/index.php');}else{
  ?> 






<!DOCTYPE html>
<html>
<head>
	<title>Mesas de Examen</title>
</head>
<body>
	<meta charset="utf-8">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../css/estilo.css">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>.formu{    text-align: center;</style>
<style>
.centrado-porcentual {
	width: 500px;
	height: 730px;
	border-style: solid;

	border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 60%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
}

</style><center>

		
<nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="../admin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="../noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="../galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="#">Mesas</a></li>
        <li><a class="bg-primary" href="../Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="../logros/logros.php?pagina=1">Logros</a></li>
        <li><a  href="../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>




<div class="centrado-porcentual form-control  text-light bg-primary "><br>
	<h2>Mesas de Examen</h2><br>
	<H5>Criterios de Busqueda</H5>
	<a href="create.php" class="btn btn-danger btn-block" style="width: 200px;">Crear Mesa de Examen</a>
		<form action="mostrar.php" method="post">
			<center><br>
		<h6>Identificador de Materia</h6>	
			<input type="text" name="id"  class="form-control formu" style="width: 300px;"  placeholder="ID de la Mesa de examen"><br>
		
		<h6>Materia/Taller</h6>
		<input type="text" name="materia" class="form-control formu" style="width: 300px;"  placeholder="Materia/Taller"><br>

		<h6>Condicion de Mesa</h6>

		<select name="tipo" class="form-control formu"  style="width: 300px;"><br>
		<option value="">Todas</option>
  		<option value="regular">Regular</option>
  		<option value="previa">Previa</option>
  		<option value="libre">Libre</option>
  		<option value="equivalente">Equivalente</option>
		</select><br>
		<h6>Año</h6>

		<select name="anio" class="form-control formu"  style="width: 300px;">
	<option value="">Todos</option>
  <option value="Primer Año">Primer Año</option>
  <option value="2">Segundo Año</option>
  <option value="3">Tercer Año</option>
  <option value="4">Cuarto Año</option>
    <option value="5">Quinto Año</option>
      <option value="6">Sexto Año</option>
        <option value="7">Septimo Año</option>
</select>
<br>
			<h6>Profesores</h6>
<input type="text" name="profesores" class="form-control formu" style="width: 300px;"  placeholder="Profesores">	

<br>
			<button type="submit" class="btn btn-success btn-block" name="aaa" style="width: 300px;">Buscar</button><br>
		</form>
	
		


</div>
    <script src="../js/jquery.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../css/main.js"></script>
</body>
</html>
<?php } ?>