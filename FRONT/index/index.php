  	<?php session_start(); ?>
  	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>E.E.S.T N 3</title>
<link rel="stylesheet" href="bootstrap.min.css">

    <link rel="icon" type="image/png" href="ima/logo.ico " />

    <link rel="stylesheet" href="es.css"> 
		<link rel="stylesheet" href="es/w3.css">
		<link rel="stylesheet" href="es/estilo pie.css">
		<link rel="stylesheet" href="es/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
		<script src="es/jquery.min.js"></script>
    <script src="es/main.js"></script>
    <script src="es/popper.min.js"></script>
    <script src="es/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="parrafos.css">
	</head>
	<body>
		<header>
<style >	.er{
	position: absolute;
	right: 0%;
	}</style>
<center>
  
<div class="carru">
 <?php include "carru.php" ?>
</center>
 </div>
<div class="contenedor">

        <nav class="menu bg-success" style="align-items: center;">
        <ul class="nav">
        <li><img src="ima/logo.png" alt="descarga"  width="70" height="70"></li>
        <li><a href="index.php"  class="bg-success">Inicio</a></li>
        
        <li><a href=""style="width: 170px;"  class="bg-success">Especialidades</a>
          <ul>
            <li><a href="informatica.php"style="width: 170px;"  class="bg-success">Informática</a></li>
            <li><a href="automotores.php"style="width: 170px;"  class="bg-success">Automotores</a></li>
            <li><a href="quimica.php"style="width: 170px;"  class="bg-success">Química</a></li>
            <li><a href="electronica.php"style="width: 170px;"  class="bg-success">Electrónica</a></li>
            <li><a href="construciones.php"style="width: 170px;"  class="bg-success">Construcciones</a></li>
            <li><a href="electromecanica.php"style="width: 170px;"  class="bg-success">Electromecánica</a></li>
            
          </ul>
         
        <li><a href="../galeria/index.php"  class="bg-success">Galería</a></li>
        <li><a href="../noticias/mostrar.php"  class="bg-success">Noticias</a></li>
        
        <li><a href="" style="width: 150px;"  class="bg-success">Acerca de</a>
          <ul>
            <li><a href="historia.php"style="width: 150px; " class="bg-success">Historia</a></li>
            <li><a href="preceptoria.php"style="width: 150px;"  class="bg-success">Cooperadora</a></li>
            <li><a href="../mesas/criterios.php"style="width: 150px;"  class="bg-success">Mesas de examen</a></li>
          </ul>
         
        <li><a href="Contacto.php"  class="bg-success">Preguntas frecuentes</a></li>
        <li><a href="../logros/mostrar.php?pagina=1"  class="bg-success">Logros</a></li>

        <li><a  href="../../BACK/LOGIN/index.php"  class="bg-success"><?php if(isset($_SESSION['username'])){ echo "Salir"; }else echo "Registrarse";?></a></li>
         
       

      </nav>
      </div>
      </div>
        </header>
<br><br>
    <center><br><br><br><br><br><br><br><br><br>
      <div class="espacio"> </div>
      <div class="w3-container w3-white" >
    <p>
</div>
<br><br><br><br><br><br>	

<?php if(isset($_SESSION['username'])){ ?>
<?php $ss=  $_SESSION['username'];}?>
<h1><p id="parra"><center>Buen dia <?php if(isset($_SESSION['username'])){ echo $ss; }else echo " ";?>!!!</center></p></h3>

<p id="parra">La Escuela de Educación Secundaria Técnica Nº3 “Domingo Faustino Sarmiento” pertenece a la modalidad técnico profesional.</p><br>
					 <p id="parra"> Como escuela  de nivel secundario tiene como propósitos la formación propedéutica, la construcción de la ciudadanía y</p><br>
					  <p id="parra">especialmente por la modalidad en la que se encuentra enmarcada se dedica a la formación de profesionales Los estudiantes que</p><br>
					<p id="parra">asisten a la EEST Nº3 se forman durante los tres primeros años en las habilidades y destrezas básicas que corresponden a</p><br>
						<p id="parra">las seis especialidades con las que cuenta la escuela:</p><br><br><br>


<center>
		<div style="width: 600px;" >
					<a  class="btn btn-info btn-block text-light active" >Técnico Informático Personal y Profesional</a><br><br>
					<a  class="btn btn-primary btn-block text-light">Maestro Mayor de Obras</a><br><br>
					<a  class="btn btn-success	 btn-block text-light">Técnico Químico</a><br><br>
					<a  class="btn btn-danger btn-block text-light">Técnico en Electrónica</a><br><br>
					<a  class="btn btn-warning	 btn-block text-light">Técnico en Mecánica</a><br><br>
					<a  class="btn btn-secondary btn-block text-light">Técnico en Electromecánica</a></div><br><br><br><br></center>





					 <p id="parra">A partir del cuarto año el estudiante elige la especialidad en la cual será titulado. Durante el 7mo año, uno más que las escuelas </p><br>
					 	 <p id="parra">  orientadas los alumnos cumplen prácticas profesionalizantes en empresas, microemprendimientos o proyectos externos con el fin </p><br>
					 	  <p id="parra">  de acreditar conocimientos prácticos que responden al perfil profesional con el cual se están formando.</p><br>






  <div class="con">
<div class="container">

<div style="width:80%; " >
<div class="especialidades">
  <a href="Informatica.php"><img src="ima/informatica.png" style="width: 115px; height: 115px; margin-top : 15px;"  >
<div class="desc"><p>Informatica</p></div></a> 
  </a>
   
</div>

<div class="especialidades">
  <a href="quimica.php"><img src="ima/quimica.png"style="width: 115px; height: 115px; margin-top : 15px;">
<div class="desc">quimica </div></a> 
</div>

<div class="especialidades">
  <a href="automotores.php"><img src="ima/automotores.png" style="width: 115px; height: 115px; margin-top : 15px;" > 
<div class="desc">automotores</div></a> 
  </div>

<div class="especialidades">
  <a href="electronica.php"><img src="ima/electronica.png" style="width: 115px; height: 115px; margin-top : 15px; margin-right:  10px;"> 
<div class="desc">electronica</div></a> 
  </div>
<div class="especialidades">
  <a href="construciones.php"><img src="ima/construciones.png" style="width: 115px; height: 115px; margin-top : 15px;" > 
<div class="desc">construciones</div></a> 
  </div>

<div class="especialidades">
  
  <a href="electromecanica.php"><img src="ima/electromecanica.png" style="width: 115px; height: 115px; margin-top : 16px;" > 
<div class="desc">electromecanica</div></a> 
</div></center></div></div>


<footer>

  <div>




       <div class="container-footer-all">

            <div class="container-body">

                <div class="colum1">

                    <h1>Redes Sociales</h1>

                    <div class="row">

                        <a href="https://es-la.facebook.com/pages/category/College---University/Escuela-de-Educaci%C3%B3n-Secundaria-T%C3%A9cnica-3-Domingo-Faustino-Sarmiento-437223969804462/"><img src="ima/facebook.jpg"></a>
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
                        <a href="creadores.php">creadores</a>
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