<?php
    $conexion = new mysqli('localhost', 'root', '', 'escuela');
    

if(isset($_POST['emails']) && isset($_POST['contra'])){

        $emails =  $conexion->real_escape_string($_POST['emails']);
        $contra =  $conexion->real_escape_string($_POST['contra']);
$prueba ="SELECT* FROM usuarios where emails='$emails'";
$prueba2=mysqli_query($conexion,$prueba);
if($prueba2->num_rows>0){
$rosas= mysqli_fetch_array($prueba2,MYSQLI_BOTH);
$contraseña2=$conexion->real_escape_string($rosas['contra']);
mysqli_free_result($prueba2);
        $desen=password_verify($contra,$contraseña2);

if($rosas != null){
 $_SESSION['username'] = $rosas['user'];
  $_SESSION['id'] = $rosas['id'];
  $_SESSION['apellidos'] = $rosas['apellidos'];
  $_SESSION['emails'] = $rosas['emails'];
  $_SESSION['roles'] = $rosas['roles'];

        
        if($rosas == true){

            $roles = $rosas['roles'];
	

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
                header('location: borrado.php');
                break;
                default:
            }
        }else{
            
          
    echo '<script language="javascript">alert("Email de usuario o contraseña incorrecto")</script>';
    header("location: index.php");
        }
        
    }else{
            
          
    echo '<script language="javascript">alert("Email de usuario o contraseña incorrecto")</script>';
        header("location: index.php");
        }
      }else{
            
          
    echo '<script language="javascript">alert("Email de usuario o contraseña incorrecto")</script>';
        header("location: index.php");
        }


  }else{
            
          
    echo '<script language="javascript">alert("Email de usuario o contraseña incorrecto")</script>';
        header("location: index.php");
        }
?>