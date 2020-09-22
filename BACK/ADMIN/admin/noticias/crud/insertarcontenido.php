<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../../LOGIN/index.php');}else{
  ?> 




<!DOCTYPE html>
<html>
<head>
	<title>titulo</title>
</head>
<body>



<?php  
	$miconexion=mysqli_connect("localhost","root", "","escuela");
	if(!$miconexion){
		echo "la conexion ha fallado:" .mysqli_error();
		exit();
	}
if($_FILES['imagen']['error']){
	switch($_FILES['imagen']['error']){
		case 1:
		echo "El tamaño del archivo excede lo permitido por el servidor";
		break;
		case 2:
		echo "El tamaño del archivo excede 2MB";
		break;
		case 3:
		echo "el envio de archivo se enterrumpio";
		break;

	}


}else{
	echo "imagen subida satisfactoriamente<br/>";
	if(isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)){
	$destino_de_ruta="../../../sadmin/noticias/imagenes/";

	move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
	echo "El archivo"  . $_FILES['imagen']['name'] . "se ha copiado en el directorio de imagenes";
}else{
	echo "el archivo no se ha copiado al directorio de imagenes";
}

}

$eltitulo=$_POST['campo_titulo'];
$elcomentario=$_POST['area_comentarios'];
$laimagen=$_FILES['imagen']['name'];
$id_usuarios = $_POST['id'];
//$usuario=$_POST['id_usuarios'];
$miconsulta="INSERT INTO noticias (titulos, comentario, imagen, id_usuarios) Values ('". $eltitulo . "', '" . $elcomentario . "', '" . $laimagen . "', '" . $id_usuarios . "')";

$resultado=mysqli_query($miconexion, $miconsulta);
mysqli_close($miconexion);
echo "<br/> se ha agregado el comentario.<br/><br/>";

header("Location: ../noticias.php?pagina=1");
?>





</body>
</html>


<?php 
        }
?>
