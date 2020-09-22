<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM noticias WHERE id_noticias=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}

	

?>

<style>#parra{ font-size:20px!important; margin-left: 20em;  margin-right: 20em; }</style>
<style>h1{font-size:40px!important;}</style>
<style>img{ font-size:20px!important; margin-left: 10em;  margin-right: 10em; }</style>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Noticias</title>
		  <link rel="icon" type="image/png" href="../index/ima/logo.ico " />
	<link rel="stylesheet" href="css/estilo.css">
	   <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>

 

	<div class="container">
			<div class="form-group">
				<br><h1 style="text-align:left;">      
				   <?php if($resultado) echo $resultado['titulos']; ?><br></h1><hr></div> </div> 
				   
				<div class="div">
				<p id="parra"><?php if($resultado) echo $resultado['comentario']; ?><br></p></div>
			</div> 
			<div class="form-group align-left;">
				<br><br><br><br>
				<?php if(!empty($resultado['imagen'])){  ?><br>
				<center><?php echo "<img src='../../BACK/ADMIN/sadmin/noticias/imagenes/" . $resultado['imagen'] . "'width='300px%' />" ;} ?></center><br><br><br><br>
			</div>
			<div class="btn__group">
				<center><a href="mostrar.php" class="btn btn-success text-light"  style="width: 19.4%; height: 50px; font-size:30px!important;">Volver</a><br><br></center>
</div>
			</div>
		</form>
	</div>
	
</body>
</html>
