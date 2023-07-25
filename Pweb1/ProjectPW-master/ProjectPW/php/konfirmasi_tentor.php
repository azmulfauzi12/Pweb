<?php

	if (isset($_POST['submit'])&& ($_POST['submit']=='Terima'||$_POST['submit']=='Tolak')) 
	{

		include('connection.php');

		$id_mapel = $_POST['id_mapel'];

		if($_POST['submit']=='Terima'){

			$query = "UPDATE tentors_terpilih SET konfirmasi='sudah' WHERE id_mapel='$id_mapel'";
				
			if(!mysqli_query($connection, $query)){
				$keterangan = "Proses Terima Gagal";
			}else{
				$keterangan = 'Murid Telah di Terima';
			}
		}
		 elseif($_POST['submit']=='Tolak'){
			
			$query = " UPDATE tentors_profile SET status='belum' WHERE id='$id_mapel'";
			
			if(!mysqli_query($connection, $query)){
				$keterangan = "Gagal Update";
			}else{
				$keterangan = "Berhasil Diupdate";
			}

			$query = "DELETE FROM tentors_terpilih WHERE id_mapel='$id_mapel'";
			
			if(!mysqli_query($connection, $query)){
				$keterangan = "Proses Tolak Gagal";
			}else{
				$keterangan = 'Murid Telah di Tolak';
			}
		}
	}
		
?>