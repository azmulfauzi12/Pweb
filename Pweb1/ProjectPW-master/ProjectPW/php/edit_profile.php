<?php

	if (isset($_POST['submit'])&& $_POST['submit']=='Edit Profile') 
	{
		$nama_tabel= $_SESSION['jenis'];
		
		include('connection.php');
		$email_user = $_SESSION['email_user'];
		$email = $_POST['email'];
		$nama = $_POST['nama'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$no_telp = $_POST['no_telp'];
		$kota = $_POST['kota'];
		$daerah = $_POST['daerah'];

		$email = mysql_real_escape_string($email);
		$password = hash('sha256', $password);
		$password = mysql_real_escape_string($password);

		$query = "UPDATE $nama_tabel SET email='$email', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',
				alamat='$alamat', jk='$jk', no_telp='$no_telp', kota='$kota', daerah='$daerah' WHERE email='$email_user'";
		
		if(!mysqli_query($connection, $query)){
			$keterangan = 'Profile gagal di Edit';

		}else{
			session_start();
			$username = $nama;
			$_SESSION['login_user']= $username;
			$_SESSION['email_user']= $email;
			$keterangan = "Profile berhasil di Edit";
		}
	}	
?>

			