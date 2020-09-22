<?php

/* Chiphysi programación suscribete */
/* V 0.1 original */
/* Autor: Chiphysi  Autor: Jhonatan Cardona   */
/* Derechos de autor(Suscribete) */
 

    

    include 'config.php'; 

    include 'funciones.php';

    $id  = evaluar($_GET['id']);

    $bd  = $conexion->query("SELECT * FROM eventos WHERE id=$id");


    $row = $bd->fetch_assoc();


    $titulo=$row['title'];

    $evento=$row['body'];

    $inicio=$row['inicio_normal'];

    $final=$row['final_normal'];

if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Evento eliminado";
    }
    else
    {
        echo "El evento no se pudo eliminar";
    }
}

    if (isset($_POST['update'])) {
    
    }

 ?>

<!DOCTYPE html>

<html lang="en">
<center>
    <center><h1>Mesa de examen</h1></center>
    <br>
    <br>

<head>
	<meta charset="UTF-8">
	<title>Eventos</title>



    <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.es.js"></script>

</head>

<body>
    <h2>Materia&emsp;<font class="text-success"><?=$titulo?></font></h2>

     <br>
      <h3>Profesores</h3>&emsp;<h5><font class="text-danger"><?=$evento?></font></h5>
     <p></p>
<br>
     <h3><font color="3B3B3B">Inicio de mesa </h3>
     <b>Fecha inicio:</b> <?=$inicio?>
     <br>
     <br>
     <br>
     <h3><font color="3B3B3B">Finalizacion de mesa </h3>
     <b>Fecha termino:</b> <?=$final?>
</body>
<br>
<br>


    </div>
  </div>
</div>
</div>

<br>
<form action="index.php" method="post">
    <button type="submit" class="btn btn-success" >Volver</button>
    
</form>
<br>



</center>
</html>
