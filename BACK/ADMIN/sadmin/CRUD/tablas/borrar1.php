<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=2){
          header('location: ../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=0){
          header('location: ../../../../LOGIN/index.php');}else{
  ?> 



<?php 
include "config.php";

//Si se hace clic en el botón de actualización del formulario, debemos procesar el formulario.
	if (isset($_POST['update'])) {
		$conexion = new mysqli('localhost', 'root', '', 'escuela');
		$user= $conexion->real_escape_string($_POST['user']);
		$user_id= $conexion->real_escape_string($_POST['user_id']);
		$contra= $conexion->real_escape_string($_POST['contra']);
    	$apellidos= $conexion->real_escape_string($_POST['apellidos']);
    	$emails= $conexion->real_escape_string($_POST['emails']);
		$roles= $conexion->real_escape_string($_POST['roles']);
		// escribe la consulta de actualización
		$sql = "UPDATE `usuarios` SET `user`='$user',`contra`='$contra', `apellidos`='$apellidos',`emails`='$emails',`roles`='$roles' WHERE `id`='$user_id'";

		//ejecutar la consulta
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("Location: Tsuper.php?pagina=1");
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// Si la variable 'id' está configurada en la URL, sabemos que necesitamos editar un registro
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// escribir SQL para obtener datos de usuario
	$sql = "SELECT * FROM `usuarios` WHERE `id`='$user_id'";

	//Ejecutar el sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$user = $row['user'];
			$contra = $row['contra'];
			$apellidos = $row['apellidos'];
			$emails = $row['emails'];
			$roles = $row['roles'];
			$id = $row['id'];

		}

	?>
	<link rel="stylesheet" href="bootstrap.min.css">
		<center><h1>Eliminar usuario</h1></center>
		<hr>
		<form action="" method="post">
		  <fieldset>
		    <legend></legend>

		    <center><h1>Estas seguro que deseas elimimnar a <?php echo $user; ?> ?</h1></center>

		     <input type="text" hidden name="user" placeholder="Nombre" value="<?php echo $user; ?>">


		    <input type="hidden" name="user_id" value="<?php echo $id; ?>"><br>


<center><input type="text" hidden name="contra" placeholder="Nueva Contraseña" value="<?php echo $contra; ?>"></center>
	

<center><input type="text" hidden name="apellidos" placeholder="Cambiar Apellido" value="<?php echo $apellidos; ?>"></center>
		   

<center><input type="text" hidden name="emails" placeholder="Email" value="<?php echo $emails; ?>"></center>



<center><input type="text" hidden name="roles" value="4" placeholder="roles"> 

<center> <input type="submit"  class="btn btn-success" value="Aceptar" name="update">
		    <a class="btn btn-warning text-light" href="Tsuper.php?pagina=1">Cancelar</a></td></center>
		    
		  </fieldset>

		</form></center>
		</html>




	<?php
	} else{
		// Si el valor de 'id' no es válido, redirija al usuario a la página view.php
		header('location: ../../../../LOGIN/index.php');
	}

}
?>



<?php 
        }
?>
