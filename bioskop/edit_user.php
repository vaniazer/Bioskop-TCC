
<?php 
include 'db.php';
$dbo = new db();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Membuat Halaman Web Dinamis Dengan PHP | www.malasngoding.com</title>
    <!-- menghubungkan dengan file css -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>

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
    <form action="pros.php?aksi=update" method="post">            
    <?php
    foreach($dbo->edit($_GET['id_user']) as $d){              //dilakukan perulangan nilai array untuk dilakukan edit berdasarkan id
    ?>
        <div align="left">

        <input type="hidden" name="id_user" value="<?php echo $d['id_user'] ?>">    

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama_user" value="<?php echo $d['nama_user']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input class="form-control" type="text" name="alamat" value="<?php echo $d['alamat'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telepon</label>
            <input class="form-control" type="text" name="telepon" value="<?php echo $d['telepon'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

        </div>

    <?php } ?>
    </form>
</div>

    </div>
</div>

</body>
</html>


