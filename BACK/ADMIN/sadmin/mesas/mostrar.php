<meta charset="utf-8">


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
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Mesas de Examen</title>

<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container"><br>

<center><h1>Criterios de Busqueda</h1><br>

<a class="btn btn-success" href="criterios.php">Volver</a></td></center><br><br>
<center><table class="table">
	<thead>
		<tr>
		<th>Identificador de Materia</th>
		<th>Materia/Taller</th>
		<th>Condicion de Mesa</th>
		<th>Año</th>
		<th>Fecha de la Mesa de examen</th>
		<th>Profesores</th>
		<th>Editar</th>
		<th>Eliminar</th>

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

					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Editar</a></td>
						<td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
						
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
							<?php 
        }
?>
