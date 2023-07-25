<?php include("php/find_daerah.php");
	if(isset($_SESSION['login_user'])){
		
		switch ($_SESSION['jenis']) {
			case 'admin':
				header("location: admin-page.php");
				break;
			case 'tentors':
				header("location: tentor-page.php");
				break;
			default:
				header("location: user-page.php");
		}
	}
?>


<html>
	<head>
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src='js/ajax_find_daerah.js'></script>
	</head>
	<body>
		<div id='daftar' class='hidden'>
			<button id='close_daftar' class='close'>&times</button>
			<center style='padding:1em'><h3>Daftar</h3></center>
			<form action="result.php" method="POST"enctype="multipart/form-data">
				<center><table>
					<tr>
						<td><label for='email'>Email </label><span class='keterangan'>*</span></td>
						<td><input id="email" name="email" type="text" required></td>
					</tr>
					<tr>
						<td><label for='password'>Password </label><span class='keterangan'>*</span></td>
						<td><input id="password" name="password" type="password" required></td>
					</tr>
					<tr>
						<td><label for='nama'>Nama </label><span class='keterangan'>*</span></td>
						<td><input id="nama" name="nama" type="text" required></td>
					</tr>
					<tr>
						<td><label for='ttl'>Tempat & Tanggal Lahir </label><span class='keterangan'>*</span></td>
						<td><input id="ttl" name="tempat_lahir" type="text" required></br>
						<input name="tanggal_lahir" type="date" required></td>
					</tr>
					<tr>
						<td><label for='alamat'>Alamat </label><span class='keterangan'>*</span></td>
						<td><textarea id='alamat' name='alamat' cols='35' rows='4' required></textarea></td>
					</tr>
					<tr>
						<td><label>Jenis Kelamin </label><span class='keterangan'>*</span></td>
						<td><input name="jk" value="Laki-Laki" type="radio" checked><span>Laki-Laki</span>
						<input name="jk" value="Perempuan" type="radio"><span>Perempuan</span></td>
					</tr>
					<tr>
						<td><label for='no_telp'>Nomer Telepon </label><span class='keterangan'>*</span></td>
						<td><input id="no_telp" name="no_telp" type="text" required></td>
					</tr>
					<tr>
						<td><label for='kota'>Kota</label><span class='keterangan'>*</span></td>
						<td><select id='kota' name="kota" style='height:25px; width:150px' required>
							<option value="">-Pilih-</option>
							<?php
				                foreach ($arrkota as $kode=>$nama) {
				                    echo "<option value='$kode'>$nama</option>";
				                }
				            ?>
							</select> </td>
					</tr>
					<tr>
						<td><label for='daerah'>Daerah</label><span class='keterangan'>*</span></td>
						<td><select id='daerah' name="daerah" style='height:25px; width:150px' required>
						
							</select> </td>
					</tr>
					<tr>
						<td><label for='jenis'>Daftar Sebagai</label></td>
						<td><select id='jenis' name="jenis" style='height:25px; width:150px' required>
							<option value=""></option>
							<option value="users">Murid</option>
							<option value="tentors">Tentor</option>
							</select> </td>
					</tr>
				</table>
				</center>
				<center><input name="submit" type="submit" value="Daftar"><center>
			</form>
		</div>
		<div id='login_form' class='hidden'>
			<button id='close_login' class='close'>&times</button>
			<center style='padding:1em'><h3>Login</h3></center>
			<form action="result.php" method="POST"enctype="multipart/form-data">
				<center><table>
					<tr>
						<td><label for='email'>Email </label><span class='keterangan'>*</span></td>
						<td><input id="email" name="email" type="text" required></td>
					</tr>
					<tr>
						<td><label for='password'>Password </label><span class='keterangan'>*</span></td>
						<td><input id="password" name="password" type="password" required></td>
					</tr>
					<tr>
						<td><label for='jenis'>Login Sebagai</label></td>
						<td><select id='jenis' name="jenis" style='height:25px; width:150px' required>
							<option value=""></option>
							<option value="users">Murid</option>
							<option value="tentors">Tentor</option>
							<option value="admin">Admin</option>
							</select> </td>
					</tr>
				</table>
				</center>
				<center><input name="submit" type="submit" value="Login"><center>
			</form>
		</div>
	</body>
</html>