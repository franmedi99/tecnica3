<?php

/**
* Conexion a la base de datos y funciones
* Autor: evilnapsis
**/

function con(){
	return new mysqli("localhost","root","","escuela");
}

function insert_img($title, $folder, $image){
	$con = con();
	$con->query("insert into image (title, folder,src,created_at) value (\"$title\",\"$folder\",\"$image\",NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("SELECT * FROM image ORDER BY created_at DESC");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}

		
	

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