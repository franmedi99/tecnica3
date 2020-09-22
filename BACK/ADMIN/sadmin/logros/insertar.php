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
<?php 


if (isset($_POST['logro'])) {
$conexion = new mysqli('localhost', 'root', '', 'escuela');

$logro= $conexion->real_escape_string($_POST['logro']);
$descripcion= $conexion->real_escape_string($_POST['descripcion']);
$color= $conexion->real_escape_string($_POST['color']);
$fecha= $conexion->real_escape_string($_POST['fecha']);
 $ss= $_SESSION['id'];
$id_usuarios=$ss;


$sql="INSERT INTO logros (logro,descripcion,color,fecha,id_usuarios) VALUES 
                           ('".$logro."','".$descripcion."','".$color."','".$fecha."','".$id_usuarios."')";

$insertar=mysqli_query($conexion, $sql);
if ($insertar){
  header("location: logros.php?pagina=1");
}else{
  echo "error al insertar";
}





}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Logros Escolares</title>


	   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../css/estilo.css">
        <script src="../js/jquery.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../css/main.js"></script>
    <style >.contene{width:30%;     display: inline-block;     text-align: center;}</style>
</head>
<body>

        <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="../sadmin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="../noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="../galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="../mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="../Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="#">Logros</a></li>
        <li><a  href="../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>

<br>
<center>
	<h2>Crear Logro Escolar</h2>
	<hr style="border: 0.5px solid black; width: 60%;"><br>
      	<form action="" method="POST">
      		<h5>Nombre del logro</h5>
      		<input type="text" name="logro" class="form-control" style="width:50%;" placeholder="Ingrese el nombre del logro" required autofocus><br>
      		<h5>Descripcion del logro</h5>
      		<textarea   name="descripcion"  rows="15" cols="55" class="form-control" style="width:900px;  border-radius:10px;">
      		 </textarea><br>
      		<h5>Color del logro</h5>
          <input type="color" name="color">
      	<br><br>
			<h5>Fecha del logro</h5>
			<input type="date" name="fecha"  class="form-control contene" placeholder="Apellido del Administrador" required >




	<br><br>
      		 <input type="submit" class="btn btn-success" style="width: 15.4%; height: 60px; font-size:25px!important;" name="btn_enviar" id="btn_enviar" value="Enviar"><br>
      	</form>









</center>

  
</body>
</html>


<?php 
        }
?>

