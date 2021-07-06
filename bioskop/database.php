<?php 
/**
 * 
 */
class database{
	var $hostname = "bioskop_db";
	var $username = "vaniazer";
	var $password = "vania";
	var $database = "bioskop";								//nama database
	
	function tampil_data(){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);	//mengoneksikan database
        if($conn->connect_error){					//melakukan pengendalian error pada koneksi
	        exit();
	        die('maaf koneksi gagal :'. $connect->error);
    	}
    	else{
    		$data = mysqli_query($conn,"select * from film"); //menjalankan perintah didatabase 
	        $hasil = null;
	        while($d = mysqli_fetch_array($data)){	//Pengambilan data di mysql
	            $hasil[] = $d;						//ditempatkan di $hasil dalam bentuk array 
	        }
	        return $hasil;
    	}
    }

     function input($nama,$sutradara,$durasi,$tanggal,$waktu){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_query($conn,"insert into film (`nama`, `sutradara`, `durasi`, `tanggal`, `waktu`) values($nama','$sutradara','$durasi','$tanggal','$waktu')");	//menjalankan perintah simpan pada 
    }   

    function edit($id_film){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        $data = mysqli_query($conn,"select * from film where id_film='$id_film'"); //menjalankan perintah edit berdasarkan id
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

     function update($id_film,$nama,$sutradara,$durasi,$tanggal,$waktu){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_query($conn,"update film set nama='$nama', sutradara='$sutradara', durasi='$durasi', tanggal='$tanggal', waktu='$waktu' where id_film='$id_film'") 
        		or die (mysqli_error($conn));
        
    } 

     function hapus($id_film){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_query($conn,"delete from film where id_film='$id_film'");	//melakukan hapus data berdasarkan id pada 
    }

    function cari($search){
    	$conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        $query = mysqli_query($conn,"select * from film WHERE nama LIKE '%$search%' or sutradara LIKE '%$search%' or durasi LIKE '%$search%' ");
        return $query; //melakukan cari data dengan kunci search sebagai pacuan
    }
}

?>