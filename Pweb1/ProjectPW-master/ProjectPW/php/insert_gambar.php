<?php
	session_start();
	include("connection.php");
	
	$keterangan = ''; 
	$file = $_FILES['image']['tmp_name'];
	
	if(isset($file)){
		
		$email = $_SESSION['email_user'];
		$nama_tabel = $_SESSION['jenis']."_images";	

		$image 		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name	= addslashes($_FILES['image']['name']);
		$image_size	= getimagesize($_FILES['image']['tmp_name']);
 		
		if($image_size == false){
			$keterangan= 'File yang anda pilih Kegedean';
		}else{

			$query = "SELECT * FROM $nama_tabel WHERE email='$email'";
			$result = mysqli_query($connection, $query);

			if(mysqli_num_rows($result) == 1){

				$query = "UPDATE $nama_tabel SET namafile='$image_name', image='$image' WHERE email='$email';";

			}else{
				$query = "INSERT INTO $nama_tabel VALUES('$email',NULL, '$image_name', '$image')";
				
			}

			if(!mysqli_query($connection, $query)){
				$keterangan = 'Gambar gagal di upload';
			}else{
				$keterangan = "Gambar berhasil di Upload";
				//echo 'Gambar berhasil di upload.<p>Gambar anda:</p><img src="cetak_gambar.php">';
			}
		}
		
	}else{
		$keterangan='Pilih file gambar terlebih dahulu';
	}
?>