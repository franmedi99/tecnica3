



<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=escuela', 'root', '');
 	//echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


//escriba la consulta para obtener datos de la tabla de usuarios.

$sql = "SELECT * FROM noticias ORDER BY create_at DESC limit 70";

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

$result = $pdo->query($sql);
?>



<!DOCTYPE html>
<html>
<head>
	<title>titulo</title>

</head>
        <link rel="stylesheet" href="css/boot.min.css">
            <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet"  href="../css/estilo.css">
<style>
.contenedora {
display: flex;
justify-content: center;
align-items: center;
height: 1px;
width: 70%;
}
</style>

<body>
 <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="../sadmin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="noticias.php?pagina=1">Noticias</a></li>
        <li><a href="../galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="../mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="../Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="#">Logros(proximamente)</a></li>
        <li><a href="../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>


	<br><br><br>
<center><p style="font-size:60px!important;">Noticias</p>
<hr></center>









	<div class="container" style="width:50%">
<?php 
if (isset($_GET['pagina'])) {
	# code...

$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;
}
$sql_articulos ='SELECT * FROM noticias order by create_at desc LIMIT :iniciar,:narticulos';


$sentencia_articulos = $pdo->prepare($sql_articulos);
$sentencia_articulos->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
$sentencia_articulos->bindParam(':narticulos', $articulos_x_pagina, PDO::PARAM_INT); //PDO PARAM SIRVE PARA TRANSFORMAR TODAS LAS VARIABLES DE $INICIAR CONVIRTIENDO A NUMEROS ENTEROS EL INICIAR
$sentencia_articulos->execute();

$resultado_articulos = $sentencia_articulos->fetchAll();





if ($_GET['pagina']>$paginas || $_GET['pagina']<=0){
  header('Location:mostrar.php?pagina=1');
}

?>



<?php foreach($resultado_articulos as $row): ?><?php 



		echo "<center><div class=' panel-success'>";?><?php if(!empty($row['titulos'])){$row['titulos'] = substr($row['titulos'], 0, 70).'...';} ?><br><?php 
		echo "<div class='panel-heading'><h4>" . $row['titulos'] . "</h4>";

		echo "<div class=' panel-warning'>";
		echo "<div class='panel-heading'>";
		echo "<span class='align-baseline'><div class='panel-heading contenedora' '><h5>Fecha de subida: &nbsp;". $row['create_at'] . "</h5></span>";
		echo "</div></div>";echo "</br>";	
		if(!empty($row['comentario'])){ 
		echo "<div class=' panel-info'>";
		echo "<div class='panel-heading'>"; $row['comentario']= substr($row['comentario'] , 0, 50).'...'; 
		echo "<div style='width:400px'><h5>" . $row['comentario'] . "</div></h5></br></br>";
	echo "</div></div>";}
		if($row['imagen']!=""){
			echo "</br>";
			echo "<img src='imagenes/" . $row['imagen'] . "'width='300px' />";
?><br><br>	
</div>
		<a class="btn btn-info"   style="width: 16.4%; height: 40px; font-size:100%!important;" href="ver.php?id=<?php echo $row['id_noticias']; ?>">Ver Mas</a></div></center><br>
		<?php
		}else{			
?>
<br><a class="btn btn-info"   style="width: 16.4%; height: 40px; font-size:100%!important;" href="ver.php?id=<?php echo $row['id_noticias']; ?>">Ver Mas</a>
<br><br>
			 <?php echo "</div>";
			 echo"</center>";
			 
			 ?>
		<?php
		} 
		echo "<br>";
		echo "<br>";


	?>
<?php endforeach ?>
 <?php ?>


 <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item

      <?php  echo $_GET['pagina']<=1 ? 'disabled' : ''?>

    ">

      <a class="page-link" href="mostrar.php?pagina=<?php echo $_GET['pagina']-1 ?>">
      Anterior 
    </a> 





      </a>
    </li>

    <?php for($i=0;$i<$paginas;$i++): ?>

    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
      <a class="page-link" href="mostrar.php?pagina=<?php echo $i+1 ?>">
    <?php echo $i+1 ?>
  </a></li>

<?php endfor; ?>

    <li class="page-item

    <?php  echo $_GET['pagina']>=$paginas ? 'disabled' : ''?>

    ">
   <a class="page-link" href="mostrar.php?pagina=<?php echo $_GET['pagina']+1 ?>">
      Siguiente 
    </a> 

    </li>
  </ul>
</nav>
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
      <script src="../css/main.js"></script>
</body>
</html>




