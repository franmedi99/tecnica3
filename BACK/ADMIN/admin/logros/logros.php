<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../LOGIN/index.php');}else{
  ?>  


<!DOCTYPE html>
<html>
<head>
	<title>Logros Escolares</title>


	   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../css/estilo.css">
        <script src="../js/jquery.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../css/main.js"></script>
    <style >.contene{width:30%;     display: inline-block;     text-align: center;}</style>
</head>
<body>

        <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="../admin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="../noticias/noticias.php?pagina=1">Noticias</a></li>
        <li><a href="../galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="../mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="../Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="#">Logros</a></li>
        <li><a  href="../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>

<br>
<center>
	<h2>Logros Escolares</h2>
	<hr style="border: 0.5px solid black; width: 60%;"><br>
      	<a href="insertar.php" class="btn btn-success">Crear Logro</a>





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

$sql_articulos="SELECT *  FROM logros INNER JOIN usuarios on logros.id_usuarios = usuarios.id order by create_at desc LIMIT :iniciar,:narticulos";



$sentencia_articulos = $pdo->prepare($sql_articulos);
$sentencia_articulos->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
$sentencia_articulos->bindParam(':narticulos', $articulos_x_pagina, PDO::PARAM_INT); //PDO PARAM SIRVE PARA TRANSFORMAR TODAS LAS VARIABLES DE $INICIAR CONVIRTIENDO A NUMEROS ENTEROS EL INICIAR
$sentencia_articulos->execute();

$resultado_articulos = $sentencia_articulos->fetchAll();









     ?>

<center><table class="table">
  <thead>
    <tr>
    <th>ID Logro</th>
    
    <th>subido por</th>
    <th>Fecha del logro</th>
    <th>logro</th>
    <th>Descripcion</th>

    <th>Logro subido</th>
    <th>Logro Modificado</th>
    <th>Accciones</th>


  </tr>
  </thead>
  <tbody> 


<?php foreach($resultado_articulos as $row): ?>


          <tr>
          <td><?php echo $row['id_logro']; ?></td></td><?php if(!empty($row['logro'])){$row['logro'] = substr($row['logro'], 0, 10).'';} ?>
          <td><?php echo $row['user']; ?>
            <?php echo $row['apellidos']; ?>
          </td>
          <td><?php echo $row['fecha']; ?></td>
          <td><?php echo $row['logro']; ?></td><?php if(!empty($row['descripcion'])){$row['descripcion'] = substr($row['descripcion'], 0, 10).'...';} ?>
          <td><?php echo $row['descripcion']; ?></td>
          <td><?php echo $row['create_at']; ?></td>
          <td><?php echo $row['update_at']; ?></td>
          <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id_logro']; ?>">Editar</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id_logro']; ?>">Borrar</a></td>
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
      <a class="page-link" href="logros.php?pagina=<?php echo $i+1 ?>">
    <?php echo $i+1 ?>
  </a></li>

<?php endfor; ?>

    <li class="page-item

    <?php  echo $_GET['pagina']>=$paginas ? 'disabled' : ''?>

    ">
   <a class="page-link" href="logros.php?pagina=<?php echo $_GET['pagina']+1 ?>">
      Siguiente 
    </a> 

    </li>
  </ul>
</nav>

  </div>



</center>

  
</body>
</html>


<?php 
        }
?>

