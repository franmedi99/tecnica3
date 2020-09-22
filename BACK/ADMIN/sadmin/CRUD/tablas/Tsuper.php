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
try {
    $pdo = new PDO('mysql:host=localhost;dbname=escuela', 'root', '');
 	//echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



$sql= 'SELECT *FROM usuarios where roles=1';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();

//var_dump($resultado); MUESTRA TODO LO DEL ARREGLO

$articulos_x_pagina = 4;
//contar articulos de base de datos

 $total_articulos_db =$sentencia->rowCount();
 //echo $total_articulos_db;
$paginas = $total_articulos_db/4;
$paginas = ceil($paginas); 
//echo $paginas;

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" >

    <title>Administracion</title>
  </head>
  <body>
  <div class="container my-5">

<center><h1>Tabla de Super Administradores</h1><br><br>
	<a href="../../sadmin.php" class="btn btn-success btn-lg btn-block" style="width:30%">Volver</a><br>

    <?php 

 



$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;


$sql_articulos ='SELECT * FROM usuarios where roles=1 LIMIT :iniciar,:narticulos';


$sentencia_articulos = $pdo->prepare($sql_articulos);
$sentencia_articulos->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
$sentencia_articulos->bindParam(':narticulos', $articulos_x_pagina, PDO::PARAM_INT); //PDO PARAM SIRVE PARA TRANSFORMAR TODAS LAS VARIABLES DE $INICIAR CONVIRTIENDO A NUMEROS ENTEROS EL INICIAR
$sentencia_articulos->execute();

$resultado_articulos = $sentencia_articulos->fetchAll();









     ?>

<center><table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>apellido</th>
		<th>email</th>
		<th>rol</th>
		<th>Usuario creado</th>
		<th>Usuario Modificado</th>
		<th>Accciones</th>


	</tr>
	</thead>
	<tbody>	


<?php foreach($resultado_articulos as $row): ?>


					<tr>
					<td><?php echo $row['id']; ?></td><?php if(!empty($row['user'])){$row['user'] = substr($row['user'], 0, 10).'';} ?>
					<td><?php echo $row['user']; ?></td><?php if(!empty($row['apellidos'])){$row['apellidos'] = substr($row['apellidos'], 0, 10).'';} ?>
					<td><?php echo $row['apellidos']; ?></td><?php if(!empty($articulo['emails'])){$row['emails'] = substr($row['emails'], 0, 10).'...';} ?>
					<td><?php echo $row['emails']; ?></td>
					<td><?php echo $row['roles']; ?></td>
					<td><?php echo $row['created_at']; ?></td>
					<td><?php echo $row['update_at']; ?></td>
					<td><a class="btn btn-info" href="update1.php?id=<?php echo $row['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="borrar1.php?id=<?php echo $row['id']; ?>">Borrar</a></td>
					</tr>	
					


</div>
<?php endforeach ?></table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item

      <?php  echo $_GET['pagina']<=1 ? 'disabled' : ''?>

    ">

      <a class="page-link" href="Tsuper.php?pagina=<?php echo $_GET['pagina']-1 ?>">
      Anterior 
    </a> 





      </a>
    </li>

    <?php for($i=0;$i<$paginas;$i++): ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
      <a class="page-link" href="Tsuper.php?pagina=<?php echo $i+1 ?>">
    <?php echo $i+1 ?>
  </a></li>

<?php endfor; ?>

    <li class="page-item

    <?php  echo $_GET['pagina']>=$paginas ? 'disabled' : ''?>

    ">
   <a class="page-link" href="Tsuper.php?pagina=<?php echo $_GET['pagina']+1 ?>">
      Siguiente 
    </a> 

    </li>
  </ul>
</nav>

  </div>




  </body>
</html>







<?php 
        }
?>
