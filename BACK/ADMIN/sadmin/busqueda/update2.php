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
		$user = $_POST['user'];
		$user_id = $_POST['user_id'];
		$contra =$_POST['contra'];
		$apellidos = $_POST['apellidos'];
		$emails = $_POST['emails'];
		$roles = $_POST['roles'];
		// escribe la consulta de actualización
		$sql = "UPDATE `usuarios` SET `user`='$user',`contra`='$contra', `apellidos`='$apellidos',`emails`='$emails',`roles`='$roles' WHERE `id`='$user_id'";

		//ejecutar la consulta
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header ('location: busqueda.php');
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
		<center><h2>Modificar Informacion</h2></center>
		<form action="" method="post">
		  <fieldset>
		    <legend></legend>
		   <pre> <h4>                                   Nombre del Usuario actual                Renombrar</h4></pre>
		     &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
		     <button type="button" class="btn btn-danger active"><?php echo $user; ?></button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		     <input type="text" name="user" placeholder="Nuevo Nombre">
		    <input type="hidden" name="user_id" value="<?php echo $id; ?>"><br>
		    <br>
		   <center><pre><h4>Contraseña</h4></pre></center> 
<center><input type="text" name="contra" placeholder="Nueva Contraseña"></center>
		    <br>
		    		   <center><pre><h4>Apellido</h4></pre></center> 
<center><input type="text" name="apellidos" placeholder="Cambiar Apellido" ></center><br>
		   
						<center><pre><h4>Email</h4></pre></center> 
<center><input type="text" name="emails" placeholder="Nueva Email" ></center>
		    <br>

<center><pre><h4>Tipo de rol</h4></pre></center> 
<center><input type="radio" name="roles" value="1"> Super Administrador
  <input type="radio" name="roles" value="2"> Administrador
<input type="radio" name="roles" value="3" checked> Usuario
<input type="radio" name="roles" value="4" > Deshabilitado</center>
  
		    <br><br>


<center> <input type="submit"  class="btn btn-success" value="Enviar" name="update">
		    <a class="btn btn-warning" href="busqueda.php">Cancelar</a></td></center>
		    
		  </fieldset>

		</form></center>
		</html>




	<?php
	} else{
		// Si el valor de 'id' no es válido, redirija al usuario a la página view.php
		header('Location: view.php');
	}

}
?>



<?php 
        }
?>
