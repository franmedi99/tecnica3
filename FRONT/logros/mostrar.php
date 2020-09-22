<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=escuela', 'root', '');
 	//echo "conectado";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


//escriba la consulta para obtener datos de la tabla de usuarios.

$sql = "SELECT * FROM noticias ORDER BY create_at DESC ";

$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();

//var_dump($resultado); MUESTRA TODO LO DEL ARREGLO

$articulos_x_pagina = 100;
//contar articulos de base de datos

 $total_articulos_db =$sentencia->rowCount();
 //echo $total_articulos_db;
$paginas = $total_articulos_db/100;
$paginas = ceil($paginas); 
//echo $paginas;

$result = $pdo->query($sql);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Logros Escolares</title>

</head>
  <link rel="stylesheet" href="../noticias/bootstrap.min.css">
        <link rel="stylesheet" href="../noticias/estilo.css">
    <link rel="icon" type="image/png" href="../index/ima/logo.ico " />
    <link rel="stylesheet" href="../index/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../index/es.css"> 
        <link rel="stylesheet" href="../index/es/w3.css">
        <link rel="stylesheet" href="estilo pie.css">
        <link rel="stylesheet" href="../index/es/bootstrap.min.css">
    
        <script src="../index/es/jquery.min.js"></script>
    <script src="../index/es/main.js"></script>
    <script src="../index/es/popper.min.js"></script>
    <script src="../index/es/bootstrap.min.js"></script>
    <script src="main.js"></script>
<style>
.contenedora {
display: flex;
justify-content: center;
align-items: center;
height: 1px;
width: 70%;
}
</style>
<div class="contenedor">

        <nav class="menu bg-success" style="align-items: center;">
        <ul class="nav">
        <li><img src="../index/ima/logo.png" alt="descarga"  width="70" height="70"></li>
        <li><a href="../index/index.php" class="bg-success">Inicio</a></li>
        
        <li><a href=""style="width: 170px;" class="bg-success">especialidades</a>
          <ul>
            <li><a href="../index/informatica.php"style="width: 170px;" class="bg-success">informatica</a></li>
            <li><a href="../index/automotores.php"style="width: 170px;" class="bg-success">automotores</a></li>
            <li><a href="../index/quimica.php"style="width: 170px;" class="bg-success">quimica</a></li>
            <li><a href="../index/electronica.php"style="width: 170px;" class="bg-success">electronica</a></li>
            <li><a href="../index/construciones.php"style="width: 170px;" class="bg-success">construciones</a></li>
            <li><a href="../index/electromecanica.php"style="width: 170px;" class="bg-success">electromecanica</a></li>
            
          </ul>
         
        <li><a href="../galeria/index.php" class="bg-success">galeria</a></li>
        <li><a href="../noticias/mostrar.php?pagina=1" class="bg-success">noticias</a></li>
        
        <li><a href="" style="width: 150px;" class="bg-success">Acerca de</a>
          <ul>
            <li><a href="../index/historia.php"style="width: 150px;" class="bg-success">historia</a></li>
            <li><a href="../index/preceptoria.php"style="width: 150px;" class="bg-success">Cooperadora</a></li>
            <li><a href="../mesas/criterios.php"style="width: 150px;" class="bg-success">mesas de examen</a></li>
          </ul>
         
        <li><a href="../index/Contacto.php" class="bg-success">preguntas frecuentes</a></li>

        <li><a  href="../../BACK/LOGIN/index.php" class="bg-success">Salir</a></li>
         
       

      </nav>
      </div>
      </div>
        </header>
  <style >img{ border-radius:10px;}hr{ width:80%; border:solid 0.5px;}</style>
<body>	
  
<center><p style="font-size:60px!important;">Logros escolares</p>
<hr></center>
	<div class="container" style="width:50%">
<?php 
$iniciar = ($_GET['pagina']-1)*$articulos_x_pagina;
$sql_articulos ='SELECT * FROM logros order by create_at desc LIMIT :iniciar,:narticulos';


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
$color=$row['color'];


		echo "<center><div class='text-light'style='overflow:auto; border-radius:10px; background-color:$color;'>";?><br><?php 
		echo "<div class='panel-heading'><h4>" . $row['logro'] . "</h4>";

		

		echo "<span class='align-baseline'><h5>Fecha de logro: &nbsp;". $row['fecha'] . "</h5></span>";
		echo "";echo "</br>";	
		if(!empty($row['descripcion'])){ 
		
		echo ""; $row['descripcion']; 
		echo "<h5>" . $row['descripcion'] . "</h5></br></br>";
}

?><br><br>	

		</div></center><br>
		
<br>
<br><br>
			
<?php endforeach ?>



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
</div>

<footer>

  <div>




       <div class="container-footer-all">

            <div class="container-body">

                <div class="colum1">

                    <h1>Redes Sociales</h1>
<br>
                    <div class="row1">

                        <a href="https://es-la.facebook.com/pages/category/College---University/Escuela-de-Educaci%C3%B3n-Secundaria-T%C3%A9cnica-3-Domingo-Faustino-Sarmiento-437223969804462/"><img src="../index/ima/facebook.jpg" width="36" height="36"> </a>
                        <label>Siguenos en Facebook</label>

                          


                     
                    
                    </div>


                </div>

                <div class="colum1">

                    <h1>Informacion de Contacto</h1>

                    <div class="row1">

                        <label>telefono</label>
                        <label>0223 4950285</label>
                    </div>

                </div>

            </div>

        </div>

        <div class="container-footer">
               <div class="footer">
                    <div class="direccion">
                        direccion: 14 de julio 2550
                    </div>
        <div class="information">
                        <a href="../index/creadores.php">creadores</a>
                    </div>
                    <div class="information">
                        <a> mar del plata</a> | <a>region 19</a>
                         | <a>buenos aires</a>
                    </div>
                     
                </div>

            </div>

    </footer>
</body>
</html>