<meta charset="utf-8">

<?php 
include "config.php";

//escriba la consulta para obtener datos de la tabla de usuarios.
$id=$_POST['id'];
$materia=$_POST['materia'];
$profesores=$_POST['profesores'];
$anio=$_POST['anio'];
$tipo=$_POST['tipo'];
$sql = "SELECT * FROM mesas where id LIKE  '$id%' AND materia LIKE '$materia%' AND profesores LIKE '$profesores%' AND anio LIKE '$anio%' AND tipo LIKE '$tipo%' ORDER BY fecha desc";

//ejecutar la consulta

$result = $conn->query($sql);

?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="../index/ima/logo.ico " />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Mesas de Examen</title>

<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body><br>
<center>
<h2>Criterios de Busqueda</h2><br><br>
<center><a class="btn btn-success" style="width: 70%;" href="criterios.php">Volver</a></td></center><br><br>
</center>
<center>	<div  style="width:  90%;"><br>

<table class="table" style="width: 100%;">
	<thead>
		<tr>
		<th>Identificador</th>
		<th>Asignatura</th>
		<th>Condicion</th>
		<th style="width: 150px;">Año</th>
		<th style="width: 150px;">Fecha de mesa</th>
		
		<th style="width: 200px;">Profesores</th>
		<th style="width: 130px;">hora de inicio</th>
		<th style="width: 175px;">hora de finalizacion</th>

	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//datos de salida de cada fila
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>									<?php// if(!empty($row['user'])){$row['user'] = substr($row['user'], 0, 20).'';} ?>
					<td><?php echo $row['materia']; ?></td>								<?php// if(!empty($row['apellidos'])){$row['apellidos'] = substr($row['apellidos'], 0, 20).'';} ?>
					<td><?php echo $row['tipo']; ?></td>							<?php// if(!empty($row['emails'])){$row['emails'] = substr($row['emails'], 0, 20).'...';} ?>
					<td><?php echo $row['anio']; ?></td>
					<td><?php echo $row['fecha']; ?></td>

					<td><?php echo $row['profesores']; ?></td>

					<td><?php echo $row['inicio']; ?></td>
					<td><?php echo $row['final']; ?></td>
						
					</tr>	
					








		<?php		}
			}else{

		?>
		</table><h1>No hay datos que coincidan con su criterio de Busqueda</h1>

		<?php } ?>
	      </center>  	
	</tbody>
</table>

	</div>															
							