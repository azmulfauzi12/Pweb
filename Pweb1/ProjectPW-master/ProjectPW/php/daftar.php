<?php
	$keterangan='';
	if(isset($_POST['submit']) && $_POST['submit']=='Daftar')
	{

		$nama_tabel= $_POST['jenis'];

		include('connection.php');
		include('cek_email.php');

		if($exist == true){
			$keterangan= "Maaf Email sudah terdaftar";
		}else{
			$email = $_POST['email'];
			$password = $_POST['password'];
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
			
			$query = "INSERT INTO $nama_tabel VALUES ('', '$email', '$password', '$nama', '$tempat_lahir', '$tanggal_lahir',
				'$alamat', '$jk', '$no_telp', '$kota', '$daerah')";

			if(!mysqli_query($connection, $query)){
				$keterangan = "Maaf anda gagal Terdaftar menjadi Member";
			}else{
				$keterangan = "Selamat anda berhasil Mendaftar Sebagai Member";
			}

		}
	}

?>