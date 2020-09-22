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
			header("Location: ../sadmin.php");
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
	<style>.formu{width:30%;     display: inline-block;     text-align: center;</style>
		<center><h2>Informacion Personal de <?php echo $user; ?>&nbsp;<?php echo $apellidos; ?>.</h2></center>
		<form action="" method="post">
		  <fieldset>
		    <legend></legend>
	

		     <center><br><br>
		     	<h5>Nombre de Usuario</h5>
		     <input type="text" name="user" class="form-control formu" value="<?php echo $user; ?>" placeholder="Nuevo Nombre de usuario"required>
		    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"><br>
		  <br>

		  		    		   <h5>Nuevo Apellido</h5>
<input type="text"  class="form-control formu" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Nuevo Appellido"required>
		   <br><br>


		   						<h5>Nuevo Email</h5>
<input type="text"  class="form-control formu" name="emails" value="<?php echo $emails; ?>" placeholder="Nueva Email"required >
		    <br><br>
		   <h5>Nueva Contraseña</h5>
<center><input type="password" name="contra"   class="form-control formu" placeholder="Nueva Contraseña"required></center>
		    <br>


<br>
<h4>Tipo de Rol</h4>
<center>
	<select class="form-control formu" name="roles">
						
                        <option value="1">Super Administrador</option>
                        <option value="2">Administrador</option>
                        <option value="3">Usuario</option>
                        <option value="4">Deshabilitado</option>
                    </select>
  
		    <br><br>


<center> <input type="submit"  class="btn btn-success" value="Enviar" name="update"><br><br>
		    <a class="btn btn-info text-light" href="../sadmin.php">Cancelar</a></td></center>

		  </fieldset>

		</form></center>
		</html>




	<?php
	} else{
		// Si el valor de 'id' no es válido, redirija al usuario a la página view.php
		header('Location: ../../../LOGIN/index.php');
	}

}
?>


<?php 
        }
?>


