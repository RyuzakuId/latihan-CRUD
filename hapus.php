<?php
include("config.php");
if(isset($_GET['id']) ){

	$id = $_GET['id'];

	$query = pg_query("DELETE FROM calonsiswa WHERE id=$id");

	if($query){
		header('location: daftarsiswa.php');
	}else{
		die("gagal menghapus...");
	}
} else{
	die("akses dilarang....");
}
?>