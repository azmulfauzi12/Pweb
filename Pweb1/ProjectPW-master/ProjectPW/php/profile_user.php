<?php
	include("connection.php");

	$email= $_SESSION['email_user'];
	$nama_tabel= $_SESSION['jenis'];

	$query="SELECT * FROM $nama_tabel WHERE email='$email'";
	$result = mysqli_query($connection, $query);
			

	if (mysqli_num_rows($result) == 1) {
		$data = mysqli_fetch_array($result);
					
			echo 	'<tr>
					 	<td> Nama </td>
					 	<td>: '.$data['nama'].'</td>
					 </tr>';
			echo	'<tr>
					 	<td> E-mail </td>
					 	<td>: '.$data['email'].'</td>
					 </tr>';
			echo	'<tr>
					 	<td> Tempat & Tanggal Lahir </td>
					 	<td>: '.$data['tempat_lahir'].', '.date('j F Y',strtotime($data['tanggal_lahir'])).'</td>
					 </tr>';
			echo	 '<tr>
					 	<td> Alamat </td>
					 	<td>: '.$data['alamat'].'</td>
					 </tr>';
			echo	 '<tr>
					 	<td> Jenis Kelamin </td>
					 	<td>: '.$data['jk'].'</td>
					 </tr>';
			echo	 '<tr>
					 	<td> Nomor Telepon </td>
					 	<td>: '.$data['no_telp'].'</td>
					 </tr>';
			echo	 '<tr>
					 	<td> Kota </td>
					 	<td>: '.$data['kota'].'</td>
					 </tr>';
			echo	 '<tr>
					 	<td> Daerah </td>
					 	<td>: '.$data['daerah'].'</td>
					 </tr>';
								
	 }
?>