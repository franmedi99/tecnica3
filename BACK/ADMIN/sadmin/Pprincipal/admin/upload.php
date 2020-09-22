<?php
    session_start();
    if(!isset($_SESSION['roles'])){
        header('location: ../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=2){
          header('location: ../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=0){
          header('location: ../../../../LOGIN/index.php');}else{
  ?> 



<?php

include "db.php";
include "class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




  $handle = new Upload($_FILES["image"]);
  if ($handle->uploaded) {
    $handle->Process("../../../sadmin/Pprincipal/admin/uploads/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img($_POST["title"],"../../../sadmin/Pprincipal/admin/uploads/",$handle->file_dst_name);
    } else {
      echo 'Error: ' . $handle->error;
    }
  } else {
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
  header("Location: index.php");

?>

<?php 
        }
?>
