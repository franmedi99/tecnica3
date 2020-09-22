<?php

    if(!isset($_SESSION['roles'])){
        header('location: ../../../../LOGIN/index.php');
    }
        if($_SESSION['roles'] >=3){
          header('location: ../../../../LOGIN/index.php');}

                  if($_SESSION['roles'] <=1){
          header('location: ../../../../LOGIN/index.php');}else{
  ?> 








<?php



function con(){
	return new mysqli("localhost","root","","escuela");
}

function insert_img($title, $folder, $image){
	$id_usuario=$_SESSION['id'];
	$con = con();
	$con->query("insert into image (id_usuario,title, folder,src,created_at) value ('$id_usuario',\"$title\",\"$folder\",\"$image\",NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();

	$query=$con->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from image where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from image where id=$id");
}

?>



<?php 
        }
?>
