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
	}else{

		header("Location: ../noticias.php?pagina=1");
	}


	if(isset($_POST['guardar'])){
		$titulos=$_POST['titulos'];
		$comentario=$_POST['comentario'];
		$imagen=$_POST['imagen'];
		$id=(int) $_GET['id'];


			
				$consulta_update=$con->prepare(' UPDATE noticias SET  
					
					titulos=:titulos,
					comentario=:comentario
					WHERE id_noticias=:id;'
				);
				$consulta_update->execute(array(
					
					':titulos' =>$titulos,
					':comentario' =>$comentario,
					':id' =>$id
				));
				header("Location: ../noticias.php?pagina=1");
		
		}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Cliente</title>
<link rel="stylesheet" href="bootstrap.min.css" >
<script src="bootstrap.min.js"></script>

<style>p#texto{
	text-align: center;
	color:white;
}

div#div_file{
	position:relative;
	
	padding:10px;
height: 40px;
	width:250px;

	-webkit-border-radius:3px;
	-webkit-box-shadow:0px 0px 0px #1a71a9;

}

input#btn_enviar{
	position:absolute;
	top:0px;
	left:0px;
	right:0px;
	bottom:0px;
	width:100%;
	height:100%;
	opacity: 0;

}</style>

</head>
<body>


		<center><h1>Editar Noticia</h1></center>
		<hr style="width: 80%; border:black 0.5px solid;">
<div class="form-group">
		<form action="" method="post">
			<center>
				
				
				<h4>Modificar Titulo</h4> <br>
				<input type="text" class="form-control" style="width: 80%; text-align: center;"name="titulos" value="<?php if($resultado){ echo $resultado['titulos']; }?>" placeholder="Ingrese Aqui el nuevo titulo">
<br><br>	<h4>Modificar Descripcion</h4><br>
<textarea class="form-control btn-light bg-warning" name="comentario" style="width: 80%; height: 300px; text-align: center;"  ><?php if($resultado) echo $resultado['comentario']; ?></textarea></div><br>
				
			</div>
				
			<div class="btn__group"><center><br><br><br>
				<a href="../noticias.php?pagina=1" class="btn btn-danger" style="width: 150px;">Cancelar</a>&emsp;&emsp;&emsp;&emsp;
				<input type="submit" name="guardar" value="Guardar" class="btn btn-success" style="width: 150px;"></center>
			</div>
		</form><br>
	</div>
</body>
</html>

<?php 
        }
?>
