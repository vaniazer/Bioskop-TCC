<?php 
include 'database.php';
include 'db.php';

$db = new database();
$dbo = new db();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bioskop</title>
	<!-- menghubungkan dengan file css -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">XXI ELAINE SQUARE</h1>
		<h3 class="deskripsi">"Make You Happy With Movies"</h3>
	</header>
 
	<div class="menu">
		<ul style="margin-top: 12px;">
			<li><a href="index.php">HOME</a></li>
			<li><a href="data.php">INPUT MOVIE</a></li>
			<li><a href="user.php">INPUT PENONTON</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
		<div class="halaman">

		

			<div>
				<h2 >Daftar Film</h2>
				
				<table border="1" class="table table-striped">
				    <tr>
				        <th>No.</th>
				        <th>Judul Film</th>
				        <th>Nama Sutradara</th>
				        <th>Durasi</th>
				        <th>Tanggal</th>
				        <th>Waktu</th>
				    </tr>
				    <?php
				    $no = 1;

				            if($db->tampil_data() == null){
				                die();
				            }
				            foreach($db->tampil_data() as $x):
				            ?>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><?php echo $x['nama']; ?></td>
				                <td><?php echo $x['sutradara']; ?></td>
				                <td><?php echo $x['durasi']; ?></td>
				                <td><?php echo $x['tanggal']; ?></td>
				                <td><?php echo $x['waktu']; ?></td>
				                <td>
				                    <a href="edit.php?id_film=<?php echo $x['id_film']; ?>&aksi=edit">Edit</a>
				                    <a href="proses.php?id_film=<?php echo $x['id_film']; ?>&aksi=hapus">Hapus</a>            
				                </td>
				            </tr>
				            <?php
				          
				            endforeach;
				        
				            ?>
				</table>
			</div>
			
		

		<br>
		<br>

			
			<div>
				<h2 >Daftar Penonton</h2>
				
				<table border="1" class="table table-striped">
				    <tr>
				        <th>No.</th>
				        <th>Nama Lengkap</th>
				        <th>Alamat</th>
				        <th>Telepon</th>
				    </tr>
				    <?php
				    $no = 1;
 
	
				            if($dbo->tampil_data() == null){
				                die();
				            }
				            foreach($dbo->tampil_data() as $x):
				            ?>
				            <tr>
				                <td><?php echo $no++; ?></td>
				                <td><?php echo $x['nama_user']; ?></td>
				                <td><?php echo $x['alamat']; ?></td>
				                <td><?php echo $x['telepon']; ?></td>
				   
				                <td>
				                    <a href="edit_user.php?id_user=<?php echo $x['id_user']; ?>&aksi=edit">Edit</a>
				                    <a href="pros.php?id_user=<?php echo $x['id_user']; ?>&aksi=hapus">Hapus</a>            
				                </td>
				            </tr>
				            <?php
				           
				            endforeach;
				        
				            ?>
				</table>
			</div>
			
		</div>
 
	</div>
</div>
</body>
</html>