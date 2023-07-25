<?php

	session_start();
	include('connection.php'); 
	
	$email = $_SESSION['email_user'];
	$nama_tabel = $_SESSION['jenis']."_images";
	$query = "SELECT * FROM $nama_tabel WHERE email='$email'";
	$result = mysqli_query($connection, $query);
	
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$image_db = $row['image'];
		 
		header("Content-type: image/jpeg");
		echo $image_db;
	}
	
?>