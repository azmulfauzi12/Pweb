<?php

	if (isset($_POST['submit'])&& $_POST['submit']=='Edit Deskripsi') 
	{
		$nama_tabel= $_SESSION['jenis']."_deskripsi";
		
		include('connection.php');
		$email = $_SESSION['email_user'];
		$deskripsi= $_POST['deskripsi'];

		$query = "SELECT * FROM $nama_tabel WHERE email='$email'";
		$result = mysqli_query($connection, $query);

		if(mysqli_num_rows($result) == 1){
			$query = "UPDATE $nama_tabel SET deskripsi='$deskripsi' WHERE email='$email';";

		}else{
			$query = "INSERT INTO $nama_tabel VALUES('','$email', '$deskripsi')";
		}
		
		if(!mysqli_query($connection, $query)){
			$keterangan = 'Deskripsi gagal di Edit';
		}else{
			$keterangan = "Deskripsi berhasil di Edit";
		}
	}	
?>

			