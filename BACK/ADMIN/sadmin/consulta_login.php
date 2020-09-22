
  <link rel="stylesheet"  href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<?php 
 if(isset($_POST['emails']) && isset($_POST['contra'])){

    $conexion = new mysqli('localhost', 'root', '', 'escuela');
session_start();
        $emails =  $conexion->real_escape_string($_POST['emails']);
        $contra =  $conexion->real_escape_string($_POST['contra']);
$prueba ="SELECT* FROM usuarios where emails='$emails' and contra='$contra' and roles='1'";
$prueba2=mysqli_query($conexion,$prueba);
if($prueba2->num_rows>0){
$rosas= mysqli_fetch_array($prueba2,MYSQLI_BOTH);

if($rosas != null){
 $_SESSION['username'] = $rosas['user'];
  $_SESSION['id'] = $rosas['id'];
  $_SESSION['apellidos'] = $rosas['apellidos'];
  $_SESSION['emails'] = $rosas['emails'];
  $_SESSION['roles'] = $rosas['roles'];
    header("Location:sadmin.php");
}else{
?>

<center>
<div class="alert alert-danger alert-dismissible fade show centrado-porcentual" >
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>Error en el segundo inicio de sesion.</strong><br>
   <br> *Usuario o contraseña incorrecta. <br><br>
   <strong>Otros motivos.</strong> <br>
    <br>*Usted no tiene los permisos
    <br> necesarios para el siguiente sitio web. <br><br><br><br>
    <br><strong>Muchas Gracias!!</strong><br><br><br>
  <a href="login.php">Reintentar</a>
    
  </div></center>

<?php 
}







}else{
header("location: login.php");
  ?>

<center>
<div class="alert alert-danger alert-dismissible fade show centrado-porcentual" >
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>Error en el segundo inicio de sesion.</strong><br>
   <br> *Usuario o contraseña incorrecta. <br><br>
   <strong>Otros motivos.</strong> <br>
    <br>*Usted no tiene los permisos
    <br> necesarios para el siguiente sitio web. <br><br><br><br>
    <br><strong>Muchas Gracias!!</strong><br><br><br>
  <a href="login.php">Reintentar</a>
    
  </div></center>

<?php 


}


}else{
header("location: login.php");



  ?>

<center>
<div class="alert alert-danger alert-dismissible fade show centrado-porcentual" >
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>Error en el segundo inicio de sesion.</strong><br>
   <br> *Usuario o contraseña incorrecta. <br><br>
   <strong>Otros motivos.</strong> <br>
    <br>*Usted no tiene los permisos
    <br> necesarios para el siguiente sitio web. <br><br><br><br>
    <br><strong>Muchas Gracias!!</strong><br><br><br>
 
    
  </div></center>

<?php 
header("location: login.php");
}

?>
