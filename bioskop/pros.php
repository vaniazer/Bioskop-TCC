<?php 
include 'db.php';
$dbo = new db();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
     $dbo->input($_POST['nama_user'],$_POST['alamat'],$_POST['telepon']);	
    header("location:index.php");
 }
 elseif($aksi == "hapus"){  
    $dbo->hapus($_GET['id_user']);
    header("location:index.php");
 }
 elseif($aksi == "update"){
    $dbo->update($_POST['id_user'],$_POST['nama_user'],$_POST['alamat'],$_POST['telepon']);
    header("location:index.php");
 }
 elseif($aksi == "search"){  
	$keyword = $_POST['search'];
	header("location:index.php?search=$keyword");
} 
?>