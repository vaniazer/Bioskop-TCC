<?php 
/**
 * 
 */
class db{
	var $hostname = "penonton_db";
	var $username = "vaniazer";
	var $password = "vania";
	var $database = "penonton";								//nama database
	
	function tampil_data(){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);	//mengoneksikan database
        if($conn->connect_error){					//melakukan pengendalian error pada koneksi
	        exit();
	        die('maaf koneksi gagal :'. $connect->error);
    	}
    	else{
    		$data = mysqli_query($conn,"select * from user"); //menjalankan perintah didatabase 
	        $hasil = null;
	        while($d = mysqli_fetch_array($data)){	//Pengambilan data di mysql
	            $hasil[] = $d;						//ditempatkan di $hasil dalam bentuk array 
	        }
	        return $hasil;
    	}
    }

     function input($nama_user,$alamat,$telepon){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_query($conn,"insert into user (`nama_user`, `alamat`, `telepon`) values($nama_user','$alamat','$telepon')");	
    }   

    function edit($id_user){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        $data = mysqli_query($conn,"select * from user where id_user='$id_user'"); //menjalankan perintah edit berdasarkan id
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

     function update($id_user,$nama_user,$alamat,$telepon){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_query($conn,"update user set nama_user='$nama_user', alamat='$alamat', telepon='$telepon' where id_user='$id_user'") 
        		or die (mysqli_error($conn));
        
    } 

     function hapus($id_user){
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_query($conn,"delete from user where id_user='$id_user'");	
    }

    function cari($search){
    	$conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        $query = mysqli_query($conn,"select * from user WHERE nama_user LIKE '%$search%' or alamat LIKE '%$search%' or telepon LIKE '%$search%' ");
        return $query; //melakukan cari data dengan kunci search sebagai pacuan
    }
}

?>