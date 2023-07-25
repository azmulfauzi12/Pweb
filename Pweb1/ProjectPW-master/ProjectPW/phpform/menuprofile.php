<?php include("php/find_daerah.php");

	
?>

<html>
<head>
	<head>
		<script type="text/javascript" src='js/ajax_find_daerah.js'></script>
	</head>
</head>
<body>
	<div id='home_content' class='isi'>
			<center><h1 class='title'>Home<h1></center>
			<div id='home_wrapper'>
				<h2>Salam ceria semangat Bimoli . . . !</h2></br>
				<h3>Disini, kamu bisa edit profile, mengupload foto profile, mengatur jadwal ( tentor ) dan latihan soal (murid)</h3>
				</br><h3>Selalu semangat . . . jalani hari untuk belajar . . .</h3></br></br>
				<h3> </h3></br></br>
				<h3>Jangan lupa cek jadwal hari ini yaa.. semangat !!!</h3>
			</div>
		</div>

		<div id='profile_content' class='isi hidden'>
			<center><h1 class='title'>Profile<h1></center>
			<div id='profile_wrapper'>
				<center><img src="php/cetak_gambar.php" style='width:20%; height:26%; border-radius:50%'></center></br>
				<table id='profile'>
					<?php  include("php/profile_user.php");?>
				</table>
			</div>
		</div>

		<div id='history_content' class='isi hidden'>
			<center><h1 class='title'>History<h1></center>
			<div id='history_wrapper'>
				<table id='history'>
					<tr>
						<th>Email</th>
						<th>Nama</th>
						<th>Mapel</th>
						<th>Tingkat</th>
						<th>Hari</th>
						<th>Jam</th>
						<th>Tarif</th>
					</tr>
					<?php include("php/history_user.php");?>
				</table>
			</div>
		</div>

		<div id='account_content' class='isi hidden'>
			<center><h1 class='title'>Account Setting<h1></center>
			<div id='account_wrapper'>
				<div id='account_setting'>
					<button id='button-ubah-password'style='margin-bottom:10px'>Ubah Password</button></br>
					<button id='button-edit-profile'>Edit Profile</button>
				</div>
				<form action="result-account-setting.php" method="POST" enctype="multipart/form-data" id='account_setting_password' class='hidden'>
					<table>
						<tr>
							<td><label for='passwordlama'>Password Lama </label><span class='keterangan'>*</span></td>
							<td><input id="passwordlama" name="passwordlama" type="password" required></td>
						</tr>
						<tr>
							<td><label for='passwordbaru'>Password Baru </label><span class='keterangan'>*</span></td>
							<td><input id="passwordbaru" name="passwordbaru" type="password" required></td>
						</tr>
						<tr>
							<td><label for='passwordverifikasi'>Verifikasi Password </label><span class='keterangan'>*</span></td>
							<td><input id="passwordverifikasi" name="passwordverifikasi" type="password" required></td>
						</tr>
					</table></br>
					<span class='button-back hover'>Back</span>
					<input name="submit" type="submit" value="Ubah Password" style="padding:7px;">
				</form>

				<form action="result-account-setting.php" method="POST"enctype="multipart/form-data" id='account_setting_edit' class='hidden' style='margin-right:10px'>
				<table>
					<tr>
						<td><label for='email'>Email </label><span class='keterangan'>*</span></td>
						<td><input id="email" name="email" type="text" value=<?php echo $data['email'];?> required></td>
					</tr>
					<tr>
						<td><label for='nama'>Nama </label><span class='keterangan'>*</span></td>
						<td><input id="nama" name="nama" type="text" value=<?php echo $data['nama'];?> required></td>
					</tr>
					<tr>
						<td><label for='ttl'>Tempat & Tanggal Lahir </label><span class='keterangan'>*</span></td>
						<td><input id="ttl" name="tempat_lahir" type="text" value=<?php echo $data['tempat_lahir'];?> required></br>
						<input name="tanggal_lahir" type="date" value=<?php echo $data['tanggal_lahir'];?> required></td>
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
						<td><input id="no_telp" name="no_telp" type="text" value=<?php echo $data['no_telp'];?> maxlength="12" required></td>
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
				</table></br>
				<span class='button-back hover'>Back</span>
				<input name="submit" type="submit" value="Edit Profile">
			</form>

				<div id='account_image'>
					<img id='profile_image' src="php/cetak_gambar.php">
				</div>

				<form action="result-account-setting.php" method="post" enctype="multipart/form-data" style='margin:1em; margin-left:100px'>
					<label style='padding:5px;'>Upload Foto : </label></br>
					<input type="file" name="image" style='margin-top:10px; margin-right:10px'>
					<input type="submit" value="Upload" style='width:68px'>
				</form>
			</div>
		</div>

		<div id='simulation_content' class='isi hidden'>
			<center><h1 class='title'>Simulasi Soal<h1></center>
			<div id='simulation_wrapper'>
				<h3><p>Salam ceria semangat BIMOLI . . . !</p></h3>
				<h3><p>Banyak-banyaklah berlatih yaa . . </p></h3></br></br>
				<h4>Silakan pilih soal yang ingin kamu kerjakan</h4></br></br>
				<div id="simulasi">
					<form action="simulasi-soal.php" method="post">
						<table>
							<tr>
								<td><label for='mapel'>Mata Pelajaran </label><span class='keterangan'>*</span></td>
								<td> <select id='mapel' name="mapel" style='height:25px; width:150px' required>
									<option value="">-Pilih-</option>
									<option value="Matematika">Matematika</option>
									<option value="Fisika">Fisika</option>
									<option value="Kimia">Kimia</option>
									<option value="Biologi">Biologi</option>
									<option value="Geografi">Geografi</option>
									<option value="Sosiologi">Sosiologi</option>
									<option value="Ekonomi">Ekonomi</option>
									<option value="Bahasa Indo">Bahasa Indo</option>
									<option value='Bahasa Inggris'>Bahasa Inggris</option>
									</select> </td>
							</tr>
							<tr>
								<td><label for='tingkat'>Tingkat </label><span class='keterangan'>*</span></td>
								<td><select id='tingkat' name="tingkat" style='height:25px; width:150px' required>
								<option value="">-Pilih-</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
								</select> </td>
							</tr>
							<tr>
								<td> </td>
								<td> <input type="submit" name="submit" value="Submit" /></td>
							</tr>

						</table>
					</form>

				</div>

			</div>
		</div>

		<div id='help_content' class='isi hidden'>
			<center><h1 class='title'>Help<h1></center>
			<div id='help_wrapper'>
				<h2>Untuk mengubah profile, silakan klik pada menu account setting.</h2>
				<h3>setelah masuk ke menu account setting, klik pada </h3>

				<h2>silakan klik pada menu jadwal ( Tentor )</h2>
				<h3>untuk menambahkan atau merubah jadwal </h3>
				
				<h2>Banyak banyaklah kamu berlatih soal, ingat !! Bisa karena Biasa ( Murid )</h2>
				<h3>klik pada menu Simulasi Soal</h3>
			</div>
		</div>




</body>
</html>