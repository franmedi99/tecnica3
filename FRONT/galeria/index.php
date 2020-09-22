<?php 
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Galería</title>
    <link rel="icon" type="image/png" href="../index/ima/logo.ico " />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../index/bootstrap-theme.min.css">
	<link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="../index/es.css"> 
        <link rel="stylesheet" href="../index/es/w3.css">
        <link rel="stylesheet" href="estilo pie.css">
        <link rel="stylesheet" href="../index/es/bootstrap.min.css">
    
        <script src="../index/es/jquery.min.js"></script>
    <script src="../index/es/main.js"></script>
    <script src="../index/es/popper.min.js"></script>
    <script src="../index/es/bootstrap.min.js"></script>
    <script src="main.js"></script>
      <link rel="../index/stylesheet" href="estilos.css">
  </head>
  <body>
<div class="contenedor bg-success">

        <nav class="menu bg-success"style="align-items: center;">
        <ul class="nav">
        <li><img src="../index/ima/logo.png" alt="descarga"  width="70" height="70"></li>
        <li><a href="../index/index.php"  class="bg-success">Inicio</a></li>
        
        <li><a href=""style="width: 170px;"  class="bg-success">especialidades</a>
          <ul>
            <li><a href="../index/informatica.php"  class="bg-success">informatica</a></li>
            <li><a href="../index/automotores.php"  class="bg-success">automotores</a></li>
            <li><a href="../index/quimica.php"  class="bg-success">quimica</a></li>
            <li><a href="../index/electronica.php"  class="bg-success">electronica</a></li>
            <li><a href="../index/construciones.php"  class="bg-success">construciones</a></li>
            <li><a href="../index/electromecanica.php"  class="bg-success">electromecanica</a></li>
            
          </ul>
        <li><a href="../noticias/mostrar.php"  class="bg-success">Noticias</a></li>
        
        <li><a href="" style="width: 150px;"  class="bg-success">Acerca de</a>
          <ul>
            <li><a href="../index/historia.php"style="width: 150px;" class="bg-success">historia</a></li>
            <li><a href="../index/preceptoria.php"style="width: 150px;"  class="bg-success">Cooperadora</a></li>
            <li><a href="../mesas/criterios.php"style="width: 150px;"  class="bg-success">mesas de examen</a></li>
          </ul>
         
        <li><a href="../index/Contacto.php"  class="bg-success">preguntas frecuentes</a></li>
        <li><a href="../logros/mostrar.php?pagina=1"  class="bg-success">logros</a></li>
        <li><a  href="../../BACK/LOGIN/index.php"  class="bg-success">Salir</a></li>
         
       

      </nav>
      </div>
      </div>
        </header>
<br><br>
  	<div class='container'>
		<div class="row">
			<div class="col-lg-12">
				<center><h1 class="page-header">Galería Escolar</h1></center>
			<?php
				$nums=1;
				$sql_banner_top=mysqli_query($con,"select * from banner where estado=1 order by orden ");
				while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
					?>
					
					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $rw_banner_top['titulo'];?>" data-caption="<?php echo $rw_banner_top['descripcion'];	?>" data-image="../../BACK/ADMIN/sadmin/galeria/gallery/img/banner/<?php echo $rw_banner_top['url_image'];?>" data-target="#image-gallery">
							<img class="img-responsive" src="../../BACK/ADMIN/sadmin/galeria/gallery/img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="Another alt text">
						</a>
					</div>
					<?php
					
					if ($nums%4==0){
						echo '<div class="clearfix"></div>';
					}
					$nums++;
				}
			?>
						
			</div>
		</div>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
			<center>
                <img id="image-gallery-image" class="img-responsive" src="">
			</center>	
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-info" id="show-previous-image">Anterior</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->	
	<script src="bootstrap.min.js"></script>	
  	<script>
	$(document).ready(function(){
    loadGallery(true, 'a.thumbnail');
    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }


    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
	</script>
</div>
  <footer>

  <div>




       <div class="container-footer-all">

            <div class="container-body">

                <div class="colum1">

                    <h1>Redes Sociales</h1>
<br>
                    <div class="row1">

                        <a href="https://es-la.facebook.com/pages/category/College---University/Escuela-de-Educaci%C3%B3n-Secundaria-T%C3%A9cnica-3-Domingo-Faustino-Sarmiento-437223969804462/"><img src="../index/ima/facebook.jpg" width="50" height="50"> </a>
                        <label>Siguenos en Facebook   </label>

                          


                     
                    
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
  </body>
</html>


