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
/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'escuela';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM usuarios  ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['alumnos']))
{
	$q=$conexion->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM usuarios WHERE 
		id LIKE '%".$q."%' OR
		user LIKE '%".$q."%' OR
		roles LIKE '%".$q."%' OR
		emails LIKE '%".$q."%' OR
		apellidos LIKE '%".$q."%'";
}

$buscarAlumnos=$conexion->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td class="text-light">ID</td>
			<td class="text-light">NOMBRE</td>
			<td class="text-light">Apellido</td>
			<td class="text-light">ROL</td>
			<td class="text-light">Email</td>
			
			<td class="text-light">Acciones</td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id'].'</td>
			<td>'.$filaAlumnos['user'].'</td>
			<td>'.$filaAlumnos['apellidos'].'</td>
			<td>'.$filaAlumnos['roles'].'</td>
			<td>'.$filaAlumnos['emails'].'</td>
			
			<td><a class="btn btn-info" href="update.php?id='.$filaAlumnos['id'].'">Editar</a>
			<a class="btn btn-danger" href="borrar.php?id='.$filaAlumnos['id'].'">Borrar</a></td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>

<?php 
        }
?>
