<?php

	if (isset($_POST['submit'])&& $_POST['submit']=='Ubah Password') 
	{

		$nama_tabel= $_SESSION['jenis'];
		
		include('connection.php');
		$email = $_SESSION['email_user'];
		$passwordlama = $_POST['passwordlama'];
		$passwordbaru = $_POST['passwordbaru'];
		$verifikasipassword = $_POST['passwordverifikasi'];
		
		$passwordlama = hash('sha256', $passwordlama);
		$passwordlama = mysql_real_escape_string($passwordlama);

		$query = "SELECT * FROM $nama_tabel WHERE password='$passwordlama' AND email='$email'";
		$result = mysqli_query($connection, $query);

		if (mysqli_num_rows($result) == 1) {

			if($passwordbaru != $verifikasipassword){
				$keterangan = "Verifikasi Password tidak Sama";
			} else {
				$passwordbaru = hash('sha256', $passwordbaru);
				$passwordbaru = mysql_real_escape_string($passwordbaru);

				$query = "UPDATE $nama_tabel SET password='$passwordbaru' WHERE password='$passwordlama' AND email='$email';";
				
				if(!mysqli_query($connection, $query)){
					$keterangan = 'Password gagal di Ubah, Password lama tidak tidak ditemukan';

				}else{
					$keterangan = "Password berhasil di Ubah";
				}

			}
		} else {
			$keterangan = 'Password Lama Tidak Ditemukan';
		}
	}	
?>

			