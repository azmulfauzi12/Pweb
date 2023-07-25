<?php
	
	if (isset($_POST['submit'])&& ($_POST['submit']=='Tambah Daftar Mengajar'||$_POST['submit']=='Hapus Daftar Mengajar')) 
	{

		$nama_tabel= $_SESSION['jenis']."_profile";
		
		include('connection.php');
		$email_user = $_SESSION['email_user'];
		$mapel = $_POST['mapel'];
		$tingkat = $_POST['tingkat'];
		$tarif = $_POST['harga'];
		$hari = $_POST['hari'];
		$jam = $_POST['waktu'];
		$status = "belum";

		if($_POST['submit']=='Tambah Daftar Mengajar'){

			$query = "SELECT * FROM $nama_tabel WHERE email='$email_user' AND hari='$hari' AND jam='$jam'";
			$result = mysqli_query($connection, $query);

			if(mysqli_num_rows($result) >= 1){
				$keterangan = 'Jadwal Sudah Ada';
			}else{

				$query = "INSERT INTO $nama_tabel VALUES('$email_user','','$mapel', '$tingkat','$tarif', '$hari', '$jam', '', '$status')";
				
				if(!mysqli_query($connection, $query)){
					$keterangan = 'Jadwal gagal di Tambahkan';

				}else{
					$keterangan = "Jadwal berhasil di Tambahkan";
				}
			}
		} elseif($_POST['submit']=='Hapus Daftar Mengajar'){

			$query = "SELECT * FROM $nama_tabel WHERE email='$email_user' AND hari='$hari' AND jam='$jam' AND mapel='$mapel' AND tingkat='$tingkat'";
			$result = mysqli_query($connection, $query);

			if(mysqli_num_rows($result) == 0){
				$keterangan = 'Jadwal Tidak Ada';
			}else{
			
				$query = "DELETE FROM $nama_tabel WHERE email='$email_user' AND hari='$hari' AND jam='$jam' AND mapel='$mapel' AND tingkat='$tingkat'";
				if(!mysqli_query($connection, $query)){
					$keterangan = 'Jadwal tidak ada, gagal di Hapus';

				}else{
					$keterangan = "Jadwal berhasil di Hapus";
					$keterangan = $query;
				}
			}
		}
	}
?>