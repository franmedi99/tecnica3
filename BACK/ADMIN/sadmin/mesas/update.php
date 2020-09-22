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
	$sql = "SELECT * FROM `mesas` WHERE `id`='$id'";

	//Ejecutar el sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$materia = $row['materia'];
			$tipo = $row['tipo'];
			$anio = $row['anio'];
			$profesores = $row['profesores'];
			$inicio = $row['inicio'];
			$final = $row['final'];
			$fecha = $row['fecha'];
		}

	if (isset($_POST['guardar'])) {
		$conexion = new mysqli('localhost', 'root', '', 'escuela');
		$materia= $conexion->real_escape_string($_POST['materia']);
		$tipo= $conexion->real_escape_string($_POST['tipo']);
		$anio= $conexion->real_escape_string($_POST['anio']);
    	$inicio= $conexion->real_escape_string($_POST['inicio']);
    	$final= $conexion->real_escape_string($_POST['final']);
		$profesores=$_POST['profesores'];
		$fecha=$_POST['fecha'];
		$user_id = $_GET['id'];
		// escribe la consulta de actualización
		$sql = "UPDATE `mesas` SET `materia`='$materia',`tipo`='$tipo', `anio`='$anio',`inicio`='$inicio',`final`='$final',`fecha`='$fecha',`profesores`='$profesores'  WHERE `id`='$user_id'";

		//ejecutar la consulta
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("Location: criterios.php");
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}





	?>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style> .sas{max-width:30%;} .contene{width: 30%; text-align: center;}</style>
		<center><h2>Mesa de examen</h2>
			<hr style="width: 60%; border:black 0.5px solid;"><br>
		<form action="" method="post">
		  <fieldset>

		  	<h4>Nombre de la Asignatura</h4>
		     <input type="text" name="materia" value="<?php echo $materia; ?>" class="form-control contene">
		    <br><br>
		   <h4>Condicion de la Mesa de Examen</h4>
<select class="form-control contene" name="tipo" id="tipo">
                      <option value="Regular">Regular</option>
                        <option value="Previa">Previa</option>
                        <option value="Libre">Libre</option>
                        <option value="Equivalente">Equivalente</option>
                        
                    </select>
		    <br><br>
		    		   <h4>Año</h4>
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
		    		   <h4>Profesores</h4>
 <textarea class="form-control  sas" name="profesores" rows="5" cols="55"><?php echo $profesores; ?></textarea>
		    <br>  <br>

		    		   <h4>Horario Inicial</h4>
 <input type="time" class="form-control contene" name="inicio" value="<?php echo $inicio; ?>" required>
		   <br><br>
  
		   
		    		   <h4>Horario Final</h4>
  <input type="time" class="form-control contene" name="final" value="<?php echo $final; ?>" required>
		   <br>
  
<h5>Fecha</h5>

    <input type="date" name="fecha"  class="form-control contene" value="<?php echo $fecha; ?>" required>

    <br><br>
		    <input type="submit" name="guardar" value="Enviar" class="btn btn-success" style="width: 150px;"></td>
			<a href="criterios.php" class="btn btn-danger" style="width: 150px;">Cancelar</a>
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
