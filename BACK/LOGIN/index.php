<?php 
session_start();
session_destroy();
 ?>


<!DOCTYPE html>
<html>
<title>E.E.S.T N°3</title>
  <link rel="stylesheet" href="./efecto/design.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo.ico " />
   <style>.formu{    display: inline-block;     text-align: center;</style>
	
    <style>
.padre {

  height: 100%;
  /*IMPORTANTE*/
  display: flex;
  justify-content: center;
  align-items: center;
}

.hijo {
 
  width: 120px;
}




.w3-jumbo{
font-weight: bold;
font-family:time new roman;
font-size:150px!important;
-webkit-text-stroke: black 0.7px solid;
text-shadow: 0.0096em -0.0086em black;
}

.w3-jumbo2{
font-family:time new roman;
font-size:45px!important;

-webkit-text-stroke: black 3px solid;
text-shadow: 0.039em -0.0086em black;
}



button{
	position: relative;
}




</style>
      
  <script src="./efecto/jquery.min.js.descarga"></script>
</head>

<body>

	
			<article>
			<div id="experience">
        <canvas id="lines" width="100%" height="100%">
      </div>
			<center><h1><p class="w3-jumbo text-success">E.E.S.T&nbsp;&nbsp;&nbsp;N°3</h1><br></center>
<br><br>
       <center><h1><p class="w3-jumbo2 text-primary"> Escuela Estudiantil Secundaria Tecnica N°3 Domingo Faustino Sarmiento</center><br><br>
      </canvas>	 	
 <div style="text-align:top;">

  	</div></div></div></div></div>
  	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <center>
<div class="contenedor">
	<br>
	<button href="#registrar" class="btn btn-success	 btn-lg btn-block " data-toggle="modal" style="width: 80%">Registrarse</button><br><br><br><br>
	<button href="#Iniciar" class="btn btn-primary	 btn-lg btn-block" data-toggle="modal"  style="width: 80%">Iniciar Sesion</button>
	<div class="modal fade" id="registrar">
			<div class="modal-dialog">
		<div class="modal-content">
	<!--header de la ventana-->
		<div class="modal-header">

			<center><h2>          <p style=" font-size:30px!important;">Registrate</p></h2></center>
						<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>			
		<!--Contenido de la ventana-->
			<div class="modal-body">
	<form action="activador.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre"><p style=" font-size:25px!important;">Nombres</p></label>
              <input type="text"  pattern="[A-Za-z0-9_-ñ ]{1,16}" name="user" class="form-control formu" id="control2_nombre" placeholder="Nombre del Usuario" autofocus required>
            </div>

                        <div class="form-group">
              <label for="control2_nombre"><p style=" font-size:25px!important;">Apellidos</p></label>
              <input type="text" name="apellidos" pattern="[A-Za-z0-9ñ ]{1,16}" class="form-control formu" id="control2_nombre" placeholder="Apellidos del usuario"  autofocus required>
            </div>
                                    <div class="form-group">
              <label for="control2_nombre"><p style=" font-size:25px!important;">Email</p></label>
              <input type="email" name="emails"  pattern="[A-Za-z0-9_-.ñ]{1,16}" class="form-control formu" id="control2_nombre" placeholder="Email del usuario" autofocus required>
              
            </div>

            <div class="form-group">
              <label for="control2_contraseña"><p style=" font-size:25px!important;">Contraseña</p></label>
              <input type="password"  pattern="[A-Za-z0-9ñ ]{1,16}" name="contra1" class="form-control formu" id="control2_contraseña" placeholder="Contraseña del Usuario"  autofocus required>
            </div>
                        <div class="form-group">
              <label for="control2_contraseña"><p style=" font-size:25px!important;">Repita su Contraseña</p></label>
              <input type="password"  pattern="[A-Za-z0-9ñ ]{1,16}" name="contra2" class="form-control formu" id="control2_contraseña" placeholder="Contraseña del Usuario"  autofocus required>
            </div>


          
            <button type="submit" class="btn btn-success btn-block">Registrar</button><br>
            
          </form>
           <script>
    function validar_contrasena(){
        var pass1=$("#contra1").val();
        var pass2=$("#contra2").val();
        if(pass1!=pass2){
            alert("Las contraseñas deben ser iguales");
            return false;
        }
    }
    </script>
</div></div></div></div>

	<div class="modal fade" id="Iniciar">
			<div class="modal-dialog">
		<div class="modal-content">
	<!--header de la ventana-->
		<div class="modal-header">

			      <center> <p style=" font-size:30px!important;">Iniciar Sesion</p></center>
			      <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>			
		<!--Contenido de la ventana-->
			<div class="modal-body">
	



    <form action="iniciar.php" method="POST">
        <div class="contenedor-inputs">
        <p style=" font-size:25px!important;">Email</p> 
        <input type="email" name="email" pattern="[A-Za-z0-9_-@.ñ]{1,16}"  class="form-control formu" placeholder="Email del Usuario" autofocus required><br/>
        <br><br>
        <p style=" font-size:25px!important;">Contraseña</p> <input type="password" pattern="[A-Za-z0-9_-ñ]{1,16}" name="password" class="form-control formu" placeholder="Contraseña de Usuario" autofocus required><br/><br>
        <button type="submit" class="btn btn-success btn-lg btn-block" >Iniciar Sesion</button>
    </div>
    </form>
	


</div></div></div></div>
</div>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</center>

 </div></span>

		</article>
	</section>
  <style>
    body{
  margin:0;
  width: 100%;
  height: 100%;

  min-height: 100vh;
  background-image: url(fondo2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
}

body:before{
  content: "";
  width:100%;
  height: 100%;
  min-height: 100vh;
  position: absolute;
  top: 0;
  left: 0;

background: linear-gradient(45deg, #52c4df, #ad55c1);
opacity: 0.7;
z-index: -1;
}
  </style>
    <script src="./efecto/functions.min.js.descarga"></script>


 <style>.visitantes{font-size:25px!important; position: absolute; top:10px;}</style>
<?php 

function contador(){

  $archivo= "contador.php";
  $f= fopen($archivo, "r");
  $contador=0;
  if($f){
    $contador= fread($f, filesize($archivo));
    $contador= $contador+1;
    fclose($f);
  }
    $f= fopen($archivo, "w+");
      if($f){
        fwrite($f, $contador);
        fclose($f);

      }
        return $contador;

}
  $visitante = contador();
  echo "<div class='text-light visitantes'>Visitantes: ".$visitante;



 ?>
<style>.porel {position: absolute; width: 900px; height:100px; transform: translate(-120px, 800px);}</style>
<div class="porel">
 <a href="../../FRONT/index/index.php" class="text-light">Por el momento no deseo registrarme</a>
</div>
</body></html>