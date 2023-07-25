<?php
	include('php/connection.php');

	$email_user = $_SESSION['email_user'];
	$jenis_user = $_SESSION['jenis'];
		if ($jenis_user=='users') {
			$query = "SELECT * FROM tentors_terpilih WHERE email_user='$email_user' AND konfirmasi='sudah'";
		} elseif($jenis_user=='tentors') {
			$query = "SELECT * FROM tentors_terpilih WHERE email_tentor='$email_user' AND konfirmasi='sudah'";	
		}
		
		$result = mysqli_query($connection, $query);

		while($row = mysqli_fetch_assoc($result)){
			if($jenis_user == "tentors"){
					$email_murid = $row['email_user'];
					$query1 = "SELECT * FROM users WHERE email='$email_murid'";
					$result1 = mysqli_query($connection, $query1);
					$row1 = mysqli_fetch_assoc($result1);

					$nama_murid = $row1['nama'];

					echo "<tr>
								<td><center>".$row['email_user']."</center></td>
								<td><center>".$nama_murid."</center></td>
								<td><center>".$row['mapel']."</center></td>
								<td><center>".$row['tingkat']."</center></td>
								<td><center>".$row['hari']."</center></td>
								<td><center>".$row['jam']."</center></td>
								<td><center>".$row['tarif']."</center></td>
								<td>
									
								</td>
							</tr>";
				} elseif($jenis_user == "users"){
					$email_tentor = $row['email_tentor'];
					$query1 = "SELECT * FROM tentors WHERE email='$email_tentor'";
					$result1 = mysqli_query($connection, $query1);
					$row1 = mysqli_fetch_assoc($result1);

					$nama_tentor = $row1['nama'];

					echo "<tr>
								<td><center>".$row['email_tentor']."</center></td>
								<td><center>".$nama_tentor."</center></td>
								<td><center>".$row['mapel']."</center></td>
								<td><center>".$row['tingkat']."</center></td>
								<td><center>".$row['hari']."</center></td>
								<td><center>".$row['jam']."</center></td>
								<td><center>".$row['tarif']."</center></td>
								<td>
									
								</td>
							</tr>";
				}
		}

?>