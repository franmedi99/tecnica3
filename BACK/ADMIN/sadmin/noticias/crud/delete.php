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


	$database="escuela";
	$user='root';
	$password='';


try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}


	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM noticias WHERE id_noticias=:id');
		$delete->execute(array(
			':id'=>$id
		));
				header("Location: ../noticias.php?pagina=1");
	}else{
				header("Location: ../noticias.php?pagina=1");
	}
 ?>




 <?php 
        }
?>
