
<?php 
include 'database.php';
$db = new database();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Esit Film</title>
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
    <form action="proses.php?aksi=update" method="post">            
    <?php
    foreach($db->edit($_GET['id_film']) as $d){              //dilakukan perulangan nilai array untuk dilakukan edit berdasarkan id
    ?>

        <input type="hidden" name="id_film" value="<?php echo $d['id_film'] ?>">      

        <div align="left" >

        <div class="form-group" >
            <label for="exampleInputEmail1">Judul Film</label>
            <input class="form-control" type="text" name="nama" value="<?php echo $d['nama']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sutradara</label>
            <input class="form-control" type="text" name="sutradara" value="<?php echo $d['sutradara'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Durasi</label>
            <input class="form-control" type="text" name="durasi" value="<?php echo $d['durasi'] ?>">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input class="form-control" type="text" name="tanggal" value="<?php echo $d['tanggal'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Waktu</label>
            <input class="form-control" type="text" name="waktu" value="<?php echo $d['waktu'] ?>">
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


