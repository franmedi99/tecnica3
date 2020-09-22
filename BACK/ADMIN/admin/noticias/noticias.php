<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../LOGIN/index.php');}else{
  ?> 







<!doctype html>
<head>
<meta charset="utf-8">
<title>Noticias</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet"  href="../css/estilo.css">

<style>p#texto{
  text-align: center;
  color:white;
}

div#div_file{
  position:relative;
  
  padding:10px;
height: 40px;
  width:250px;

  -webkit-border-radius:3px;
  -webkit-box-shadow:0px 0px 0px #1a71a9;

}

input#btn_enviares{
  position:absolute;
  top:0px;
  left:0px;
  right:0px;
  bottom:0px;
  width:100%;
  height:100%;
  opacity: 0;

}</style>

<style>

h2{
	text-align:center;
}

.table2{
	width:100%;
	margin:auto;
  border-style: 1px solid;
  position: center;
	padding:5px;
	background-color:#C8F7A4;
}

td{
	padding:5px 0;
}


</style>
</head>

<body>

 <nav class="menu bg-primary" style="align-items: center;">
        <ul class="nav" id="menu" class="bg-success">
        <li><img src="../logo.ico" alt="descarga"  width="70" height="70"></li>
        <li><a href="../admin.php" class="bg-primary">Inicio</a></li>
        
        
         <li> <a class="bg-primary" href="#">Noticias</a></li>
        <li><a href="../galeria/gallery/admin/bannerlist.php" class="bg-primary">Galeria</a></li>
        
        
       
         <li><a class="bg-primary" href="../mesas/criterios.php">Mesas</a></li>
        <li><a class="bg-primary" href="../Pprincipal/admin/">Pagina Principal</a></li>
        <li><a class="bg-primary" href="../logros/logros.php?pagina=1">Logros</a></li>
        <li><a href="../../../LOGIN/index.php" class="er bg-primary">Salir</a></li>
         
       

      </nav>





<br><br><br>
<h2 style=" font-size:45px!important;">Insertar Noticia</h2>
<form action="crud/InsertarContenido.php" method="post" enctype="multipart/form-data" name="form1" >

  <input type="text" hidden name="id" value="<?php echo $_SESSION['id'];?>">


<div style="width: 97%;margin-left: 1em;" ><center><table class="table2" >
<tr>
 
    <label for="campo_titulo" ></label></td>
    <td></td>
  <tr><td><h3>Titulo</h3> 
  <td><input type="text" name="campo_titulo" id="campo_titulo" class="form-control" style="width:300px;  border-radius: 10px;"></td>
  
  
  </tr>
  <tr><td><h3>Descripcion </h3> 
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios"  rows="15" cols="55" class="form-control" style="width:900px;  border-radius:10px;"> </textarea></td>

    
    </tr>
   
  <tr>
  <td colspan="2" align="center"><br>Seleccione una imagen con tamaño inferior a 2 MB


 <div id="div_file" class="btn-primary">
    <div class="btn-primary"><input type="file" name="imagen"  id="btn_enviares"><p id="texto">Añadir Imagen</p> </div></div><br></td>
    </tr>

    <tr>

    <td colspan="2" align="center">  
    <input type="submit" class="btn btn-danger" style="width: 15.4%; height: 60px; font-size:25px!important;" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>
  <tr><td colspan="1" align="center"><a href="mostrar.php" class="btn btn-info text-dark">Página de visualización</a></td></tr>
  
  </table></center></div>
</form>
<br>


<?php include "tabla.php" ?>
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
        <script src="../css/main.js"></script>
</body>
</html>


<?php 
        }
?>
