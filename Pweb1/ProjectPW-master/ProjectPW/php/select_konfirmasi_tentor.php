<?php
		
	include('php/connection.php');

	$email_user = $_SESSION['email_user'];

		$query = "SELECT * FROM tentors_terpilih WHERE email_tentor='$email_user' AND konfirmasi='belum'";

		$result = mysqli_query($connection, $query);

		while($row = mysqli_fetch_assoc($result)){

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
							<form action='result.php' method='POST'>
								<input class='hidden' name='id_mapel' value='".$row['id_mapel']."' readonly>
								<input type='submit' name='submit' value='Terima'></br></br>
								<input type='submit' name='submit' value='Tolak'>
							</form>
						</td>
					</tr>";
		}

?>