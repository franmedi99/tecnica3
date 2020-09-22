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


<?php 
include "config.php";

// Si se hace clic en el botón Enviar del formulario, debemos procesar el formulario.
	if (isset($_POST['login'])) {
		// obtener variables de la forma
		$materia=$_POST['materia'];
		$anio=$_POST['anio'];
		$fecha=$_POST['fecha'];
		$profesores=$_POST['profesores'];
		$tipo=$_POST['tipo'];
    $inicio=$_POST['inicio'];
    $final=$_POST['final'];
    $id_usuario = $_SESSION['id'];
		$sql = "INSERT INTO `mesas`(`materia`,`anio`,`fecha`,`profesores`,`tipo`,`inicio`,`final`,`id_usuario`) VALUES ('$materia','$anio','$fecha','$profesores','$tipo','$inicio','$final','$id_usuario')";

		// ejecutar la consulta

		$result = $conn->query($sql);

		if ($result == TRUE) {
	//header ('location: ../sadmin.php');
	?><style >.notificacion{width: 70%;}</style>
<center>
<div class="alert alert-success alert-dismissible notificacion" >
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  

   <strong >Mesa de Examen Subida Satisfactoriamente.</strong> <br>

    <br><strong>Muchas Gracias!!</strong><br><br><br>
<a href="criterios.php" class="btn btn-info">salir</a>
    
  </div></center><?php
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



 

?>

<!DOCTYPE html>
<html>
<body>
  <meta charset="utf-8">
    <link rel="stylesheet"  href="bootstrap.min.css">
      <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<center><h2>Nueva Mesa de Examen</h2>

<form action="" method="POST">
  <fieldset>
    <legend></legend>
<style >.contene{width:30%;     display: inline-block;     text-align: center;}</style>
    <h5>Asignatura</h5>

    <input type="text" name="materia"  class="form-control contene" placeholder="Nombre de la Materia" required autofocus>
    <br><br>
       
                    <h5>Condicion</h5>
                    <select class="form-control contene" name="tipo" id="tipo">
                      <option value="Regular">Regular</option>
                        <option value="Previa">Previa</option>
                        <option value="Libre">Libre</option>
                        <option value="Equivalente">Equivalente</option>
                        
                    </select><br><br> <h5>Año</h5>
   <select name="anio" class="form-control contene">

  <option value="Primer Año">Primer Año</option>
  <option value="Segundo Año">Segundo Año</option>
  <option value="Tercer Año">Tercer Año</option>
  <option value="Cuarto Año">Cuarto Año</option>
    <option value="Quinto Año">Quinto Año</option>
      <option value="Sexto Año">Sexto Año</option>
        <option value="Septimo Año">Septimo Año</option>
</select>
    <br><br>
    	<h5>Fecha</h5>

    <input type="date" name="fecha"  class="form-control contene" placeholder="Apellido del Administrador" required autofocus><br><br>
<h5>Horario Inicial</h5>
    <input type="time" class="form-control contene" name="inicio" value="00:00" required><br><br>
    <h5>Horario Final</h5>
     <input type="time" class="form-control contene" name="final" value="00:00" required>
    <br><br>
    <h5>Profesores</h5>
    <textarea type="text" name="profesores" rows="5" cols="5" class="form-control contene" placeholder="Inserte La lista de los Profesores"required></textarea>
    <br><br>


        <input type="submit" class="btn btn-success" name="login" value="Agregar">
		    <a class="btn btn-info text-light" href="criterios.php">Cancelar</a></td></center>
</center>
</div>
  </fieldset>
</form>
</body>
</html>

<?php 
        }
?>
