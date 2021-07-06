<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
     $db->input($_POST['nama'],$_POST['sutradara'],$_POST['durasi'],$_POST['tanggal'],$_POST['waktu']);	
    header("location:index.php");
 }
 elseif($aksi == "hapus"){  
    $db->hapus($_GET['id_film']);
    header("location:index.php");
 }
 elseif($aksi == "update"){
    $db->update($_POST['id_film'],$_POST['nama'],$_POST['sutradara'],$_POST['durasi'],$_POST['tanggal'],$_POST['waktu']);
    header("location:index.php");
 }
 elseif($aksi == "search"){  
	$keyword = $_POST['search'];
	header("location:index.php?search=$keyword");
} 
?>
