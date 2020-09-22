<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=2){
          header('location: ../../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=0){
          header('location: ../../../../../LOGIN/index.php');}else{
  ?> 








<?php

$title="Galería de imágenes";
/* Llamar la Cadena de Conexion*/ 
include ("../conexion.php");
$active_config="active";
$active_banner="active";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

  </head>
  <body>

	<?php include("top_menu.php");?>
	<br>
    <div class="container">
		
      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">

		 <style >img{height:100px; width: 160px;}</style>
			<div class="row" >
			  <div class="col-xs-12 text-center">
				  <a href='banneradd.php' class="btn btn-success"  > Agregar Imagen</a>
			  </div>
			  <br> <br>
			</div>
		  
		  <br>
		  <div id="loader" class="text-center"> <span><img src="./img/ajax-loader.gif"></span></div>
		  <div class="outer_div"></div><!-- Datos ajax Final -->
					  
	  </div>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="../../../js/jquery.min.js"></script>

    <script src="../../../js/bootstrap.min.js"></script>
 <script src="../../../css/main.js"></script>
  </body>
</html>
<script>
	$(document).ready(function(){
		load(1);
	});
	function load(page){
		var parametros = {"action":"ajax","page":page};
		$.ajax({
			url:'./ajax/banner_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../img/ajax-loader.gif'>");
		  },
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	function eliminar_slide(id){
		page=1;
		var parametros = {"action":"ajax","page":page,"id":id};
		if(confirm('Esta acción  eliminará de forma permanente el banner \n\n Desea continuar?')){
		$.ajax({
			url:'./ajax/banner_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../images/ajax-loader.gif'>");
		  },
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	}
</script>

<?php 
        }
?>
