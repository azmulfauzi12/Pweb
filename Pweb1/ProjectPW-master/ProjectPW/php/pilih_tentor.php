<?php
	if (isset($_POST['submit'])&& ($_POST['submit']=='Pilih')) 
	{

		include('connection.php');

		$email_user = $_SESSION['email_user'];
		$id_mapel=$_POST['id_mapel'];

		$query = "SELECT * FROM tentors_profile WHERE id='$id_mapel'";
		$result = mysqli_query($connection, $query);

		$row = mysqli_fetch_assoc($result);
		$email_tentor = $row['email'];
		$mapel = $row['mapel'];
		$tingkat = $row['tingkat'];
		$tarif = $row['tarif'];
		$hari = $row['hari'];
		$jam = $row['jam'];
		$rating = $row['rating'];

		$query = " UPDATE tentors_profile SET status='sudah' WHERE id='$id_mapel'";

		if(!mysqli_query($connection, $query)){
			$keterangan = 'gagal di update';

		}else{
			$keterangan = "berhasil di update";
		}

		$query = "INSERT INTO tentors_terpilih VALUES('', '$email_user','$email_tentor','$id_mapel','$mapel', '$tingkat','$tarif', '$hari', '$jam', '$rating','belum')";

		if(!mysqli_query($connection, $query)){
			$keterangan = 'Tentor gagal di Pilih';

		}else{
			$keterangan = "Tentor berhasil di Pilih";
		}
		
	}
?>