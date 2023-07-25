<?php
	include('connection.php'); 
	
	$email = $_SESSION['email_user'];
	$nama_tabel= $_SESSION['jenis']."_deskripsi";

	$query = "SELECT * FROM $nama_tabel WHERE email='$email'";
	$result = mysqli_query($connection, $query);
	
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		echo $row['deskripsi'];
	}

?>