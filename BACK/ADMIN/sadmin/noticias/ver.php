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






<?php
		$database="escuela";
	$user='root';
	$password='';


try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}



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
	<title>Editar Cliente</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
				<center><?php echo "<img src='imagenes/" . $resultado['imagen'] . "'width='300px%' />" ;} ?></center><br><br><br><br>
			</div>
			<div class="btn__group">
				<center><a href="mostrar.php" class="btn btn-success text-light"  style="width: 19.4%; height: 50px; font-size:30px!important;">Volver</a><br><br></center>
</div>
			</div>
		</form>
	</div>
	
</body>
</html>
<?php 
        }
?>
