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
	<title></title>
</head>
<body>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
 <style>.formu{    display: inline-block;     text-align: center;</style>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
.centrado-porcentual {
	width: 500px;
	height: 430px;
	border-style: solid;

	border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
}

</style><br><center>
   <div class="alert alert-success alert-dismissible fade show" style="width:80%; height: 100px;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Primer inicio de sesion correcamente.</strong>
    <p>Por seguridad a los administradores se les pide ingresar el Email y la contraseña 2 veces.</p>
    <p>Muchas Gracias!!</p>
  </div></center>
<center>

<div class="centrado-porcentual form-control  text-light bg-primary "><br>
	<p> <h4>Ultimo Paso</h4></p>
	
		<form action="consulta_login.php" method="POST"><center><br>
      <h5>Email</h5>
			<input type="email"   class="form-control formu" style="width: 300px;" name="emails" pattern="[A-Za-z0-9_-@.ñ]{1,16}" placeholder="Email del Administrador" required><br><br>
      <h5>Contraseña</h5>
			<input type="password" pattern="[A-Za-z0-9_-ñ]{1,16}" class="form-control formu" style="width: 300px;" name="contra" placeholder="Contraseña del Administrador" required>
			<input type="hidden" name="aaa">
			<br>
			<br>
			<button type="submit" class="btn btn-success btn-block" name="aaa" style="width: 300px;">Entrar</button><br>
		</form>
<a href="../../LOGIN/index.php" class="btn btn-danger btn-block" style="width: 200px;">Volver</a>

</div>

</center>
</body>
</html>
<?php 
        }
?>