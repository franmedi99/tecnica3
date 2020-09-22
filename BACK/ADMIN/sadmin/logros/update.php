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
include "config.php";

//Si se hace clic en el botón de actualización del formulario, debemos procesar el formulario.
	


// Si la variable 'id' está configurada en la URL, sabemos que necesitamos editar un registro
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// escribir SQL para obtener datos de usuario
	$sql = "SELECT * FROM `logros` WHERE `id_logro`='$id'";

	//Ejecutar el sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$logro = $row['logro'];
			$color = $row['color'];
			$descripcion = $row['descripcion'];
			$fecha = $row['fecha'];
		}

	if (isset($_POST['guardar'])) {
		$conexion = new mysqli('localhost', 'root', '', 'escuela');
		$logro= $conexion->real_escape_string($_POST['logro']);
		$color= $conexion->real_escape_string($_POST['color']);
		$descripcion= $conexion->real_escape_string($_POST['descripcion']);
		$id_usuarios=$_SESSION['id'];
		$fecha=$_POST['fecha'];
		$user_id = $_GET['id'];

		// escribe la consulta de actualización
		$sql = "UPDATE `logros` SET `logro`='$logro',`color`='$color', `descripcion`='$descripcion',`id_usuarios`='$id_usuarios',`fecha`='$fecha'  WHERE `id_logro`='$user_id'";

		//ejecutar la consulta
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("Location: logros.php?pagina=1");
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}





	?>
	<title>Editar Logro</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<style> .sas{max-width:30%;} .contene{width: 30%; text-align: center;}</style>
		<center><h2>Editar Logro</h2>
			<hr style="width: 60%; border:black 0.5px solid;"><br>
		<form action="" method="post">
		  <fieldset>

		  	<h4>Nombre del Logro</h4>
		     <input type="text" name="logro" value="<?php echo $logro; ?>" class="form-control contene">
		    <br><br>
		 
		    		   <h4>descripcion</h4>
 <textarea class="form-control sas" name="descripcion" rows="5" cols="55"><?php echo $descripcion; ?></textarea>
		    <br>  <br>

		     <h4>Color</h4>
		     <input type="color" name="color" value="<?php echo $color; ?>">
		    <br><br>	<br>	  
  
<h5>Fecha</h5>

    <input type="date" name="fecha"  class="form-control contene" value="<?php echo $fecha; ?>" required>

    <br><br>
		    <input type="submit" name="guardar" value="Enviar" class="btn btn-success" style="width: 150px;"></td>
			<a href="logros.php?pagina=1" class="btn btn-danger" style="width: 150px;">Cancelar</a>
		    <br><br>
		  </fieldset>

		</form></center>
		</html>




	<?php
	} 

}
?>

<?php 
        }
?>
