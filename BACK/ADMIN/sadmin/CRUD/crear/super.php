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
include "../config.php";

// Si se hace clic en el botón Enviar del formulario, debemos procesar el formulario.
	if (isset($_POST['login'])) {
		// obtener variables de la forma
		$user=$_POST['user'];
		$apellidos=$_POST['apellidos'];
		$emails=$_POST['emails'];
		$contra=$_POST['contra'];
		$roles=$_POST['roles'];
		$id_det_curso=$_POST['id_det_curso'];
		//escribir consulta sql

		$sql = "INSERT INTO `usuarios`(`user`, `apellidos`,`emails`,`contra`,`roles`,`id_det_curso`,`codigo`,`activacion`) VALUES ('$user','$apellidos','$emails','$contra','$roles','$id_det_curso','0','1')";

		// ejecutar la consulta

		$result = $conn->query($sql);

		if ($result == TRUE) {
	header("Location: ../../sadmin.php");
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}


if(isset($_POST['login'])){
$_SESSION['user']=$_POST['user'];
$_SESSION['contra']=$_POST['contra'];
}

 

?>

<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="bootstrap.min.css">
<center><h2>Nuevo Super Administrador</h2>
<hr style="width: 80%;"> <br><br>
<form action="" method="POST">
  <fieldset>


 <h5>Nombre del Super Administrador</h5>

    <input type="text" name="user"  class="  form-control  " style="width: 50%;" placeholder="Nombre del Nuevo Super Administrador" required autofocus>
    <br><br>
        <h5>Apellido del Super Administrador</h5>

    <input type="text" name="apellidos"  class=" form-control" style="width: 50%;" placeholder="Apellido del Nuevo Super Administrador" required autofocus>
    <br><br>
    	<h5>Email del Super Administrador</h5>

    <input type="text" name="emails" class=" form-control" style="width: 50%;" placeholder="Email del Nuevo Super Administrador" required autofocus>
    <br><br>
    <h5>Contraseña del Super Administrador</h5>
    <input type="text" name="contra" class=" form-control" style="width: 50%;" placeholder="Contraseña del Nuevo Super Administrador"required>
    <br><br>
   <input type="hidden" name="roles" value="1">
   <input type="hidden" name="id_det_curso" value="1">

        <input type="submit" class="btn btn-success" name="login" value="Agregar">
		    <a class="btn btn-info" href="salir.php">Cancelar</a></td></center>
</center>
</div>
  </fieldset>
</form>
</body>
</html>

<?php 
        }
?>
