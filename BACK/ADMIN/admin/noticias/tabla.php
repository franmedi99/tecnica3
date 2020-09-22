<?php

    if(!isset($_SESSION['roles'])){
        header('location: ../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../LOGIN/index.php');}else{
  ?> 







<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=escuela', 'root', '');
 	//echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}



$sql= 'SELECT *FROM noticias limit 100';
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


    <?php 

 



$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;


$sql_articulos ='SELECT * FROM noticias order by create_at desc LIMIT :iniciar,:narticulos';


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
		<th>Titulo</th>
		<th>ID&nbsp;de&nbsp;Administrador</th>
		<th>Imagen</th>
		<th>Descripcion</th>
		<th>Noticia Creada</th>
		<th>Noticia Modificada</th>
		<th>Accciones</th>


	</tr>
	</thead>
	<tbody>	


<?php foreach($resultado_articulos as $row): ?>


					<tr>
					<td><?php echo $row['id_noticias']; ?></td><?php if(!empty($row['titulos'])){$row['titulos'] = substr($row['titulos'], 0, 10).'';} ?>
					<td><?php echo $row['titulos']; ?></td><?php if(!empty($row['apellidos'])){$row['apellidos'] = substr($row['apellidos'], 0, 10).'';} ?>
					<td><?php echo $row['id_usuarios']; ?></td><?php if(!empty($articulo['emails'])){$row['emails'] = substr($row['emails'], 0, 10).'...';} ?>
					<td><?php echo $row['imagen']; ?></td><?php if(!empty($row['comentario'])){$row['comentario'] = substr($row['comentario'], 0, 10).'...';} ?>
					<td><?php echo $row['comentario']; ?></td>
					<td><?php echo $row['create_at']; ?></td>
					<td><?php echo $row['update_at']; ?></td>
					<td><a class="btn btn-info" href="crud/update.php?id=<?php echo $row['id_noticias']; ?>">Editar</a>
						<a class="btn btn-danger" href="crud/delete.php?id=<?php echo $row['id_noticias']; ?>">Borrar</a></td>
					</tr>	
					


</div>
<?php endforeach ?></table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item

      <?php  echo $_GET['pagina']<=1 ? 'disabled' : ''?>

    ">

      <a class="page-link" href="noticias.php?pagina=<?php echo $_GET['pagina']-1 ?>">
      Anterior 
    </a> 





      </a>
    </li>

    <?php for($i=0;$i<$paginas;$i++): ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
      <a class="page-link" href="noticias.php?pagina=<?php echo $i+1 ?>">
    <?php echo $i+1 ?>
  </a></li>

<?php endfor; ?>

    <li class="page-item

    <?php  echo $_GET['pagina']>=$paginas ? 'disabled' : ''?>

    ">
   <a class="page-link" href="noticias.php?pagina=<?php echo $_GET['pagina']+1 ?>">
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
