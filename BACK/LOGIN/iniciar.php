<?php
session_start();
if(!empty($_SESSION['usuario'])){
   ?>
              <a href="cerrar_sesion.php" class="btn btn-primary">Ya tienes una sesion iniciada, cierrala aqu&iacute;.</a>
        <?php
}else{

if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && (!empty($_POST['password']))) {
    include_once "database.php";
  $emails= $conexion->real_escape_string($_POST['email']);
    $contra= $conexion->real_escape_string($_POST['password']);
    $sql="SELECT emails FROM usuarios WHERE emails='$emails'  ";
    $resultado=mysqli_query($conexion, $sql);
    if($resultado->num_rows>0){
    $sql="SELECT * FROM usuarios WHERE emails='$emails' AND contra='$contra' ";
    $resultado2=mysqli_query($conexion, $sql);
if($resultado2->num_rows>0){


       $row = mysqli_fetch_array($resultado2, MYSQLI_BOTH);
       $rol=$row['activacion'];
       if($row['activacion']==='1'){









       $contrasena=$row["contra"];
       mysqli_free_result($resultado);


           
if($row != null){
 $_SESSION['username'] = $row['user'];
  $_SESSION['id'] = $row['id'];
  $_SESSION['apellidos'] = $row['apellidos'];
  $_SESSION['emails'] = $row['emails'];
  $_SESSION['roles'] = $row['roles'];
$hola=$_SESSION['emails'];
        
        if($row == true){

            $roles = $row['roles'];
  

            switch($roles){
                case 1:
                    header('location: ../admin/sadmin/sadmin.php');
                break;
                case 2:
                header('location: ../admin/admin/admin.php');
                break;
                case 3:
                header('location: ../../FRONT/index/index.php');
              break;
                case 4:
                echo '<script>
                alert("Este Usuario ha sido borrado, para mas informacion hablar con un administrador");
                window.history.go(-1);
                </script>';
                break;
                default:
            }

 }else{echo "el rol es falso";}


 }else{echo "el rol es nulo";}

      }else{
 $_SESSION['username'] = $row['user'];
$_SESSION['emails'] = $row['emails'];
header("location: noinicio.php");
}

}else{
    
                echo '<script>
    alert("No se pudo iniciar Sesion porque la contraseña es incorrecta");
    window.history.go(-1);
    </script>';}

    }else{
            echo '<script>
    alert("No se pudo iniciar Sesion porque el correo no existe");
    window.history.go(-1);
    </script>';}


}else{


            echo '<script>
    alert("No completo todos los campos de forma correcta");
    window.history.go(-1);
    </script>';}



}//Llave del else del inicio
?>