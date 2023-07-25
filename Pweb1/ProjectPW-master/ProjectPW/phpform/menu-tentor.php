<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/styleJadwal.css">
		<?php include("php/cek_jadwal.php");?>
		
	</head>
	<body>
		<div id='deskripsi_content' class='isi hidden'>
			<center><h1 class='title'>Deskripsi<h1></center>
			<div id='deskripsi_setting'>
				<button id='button-deskripsi'style='margin-bottom:10px'>Edit Deskripsi</button>
				<form action="result-account-setting.php" method="POST" id='form_deskripsi' class='hidden'>
					<table>
						<tr>
							<td><label for='deskripsi'>Deskripsi</label><span class='keterangan'>*</span></td>
							<td><textarea id='deskripsi' name='deskripsi' cols='35' rows='4' required></textarea></td>
						</tr>
					</table></br>
					<span class='button-back-deskripsi hover'>Back</span>
					<input name="submit" type="submit" value="Edit Deskripsi">		
				</form>
			</div>
			<div id='isi-deskripsi'><h3><?php include("php/cetak_deskripsi.php");?></h3></div>
			<div id='konfirmasi'>
				<center><h1 class='title'>Konfirmasi<h1></center>
				<table id='tabel-konfirmasi'>
					<tr>
						<th>Email Murid</th>
						<th>Nama Murid</th>
						<th>Mapel</th>
						<th>Tingkat</th>
						<th>Hari</th>
						<th>Jam</th>
						<th>Tarif</th>
					</tr>

					<?php include("php/select_konfirmasi_tentor.php");?>
					
				</table>

			</div>

		</div>
		<div id='jadwal_content' class='isi hidden'>
			<center><h1 class='title'>Jadwal<h1></center>
			<div id='jadwal_wrapper'>
				<table id='jadwal'>
					<tr>
						<th>Waktu</th>
						<th>Senin</th>
						<th>Selasa</th>
						<th>Rabu</th>
						<th>Kamis</th>
						<th>Jumat</th>
						<th>Sabtu</th>
						<th>Minggu</th>
					</tr>
					<tr>
						<td>08.00 - 10.00</td>
						<td id='Senin-1'>   </td>
						<td id='Selasa-1'>   </td>
						<td id='Sabu-1'>   </td>
						<td id='Kamis-1'>   </td>
						<td id='Jumat-1'>   </td>
						<td id='Sabtu-1'>   </td>
						<td id='Minggu-1'>   </td>
					</tr>
					<tr>
						<td>10.00 - 12.00</td>
						<td id='Senin-2'>   </td>
						<td id='Selasa-2'>   </td>
						<td id='Rabu-2'>   </td>
						<td id='Kamis-2'>   </td>
						<td id='Jumat-2'>   </td>
						<td id='Sabtu-2'>   </td>
						<td id='Minggu-2'>   </td>
					</tr>
					<tr>
						<td>12.00 - 14.00</td>
						<td id='Senin-3'>   </td>
						<td id='Selasa-3'>   </td>
						<td id='Rabu-3'>   </td>
						<td id='Kamis-3'>   </td>
						<td id='Jumat-3'>   </td>
						<td id='Sabtu-3'>   </td>
						<td id='Minggu-3'>   </td>
					</tr>
					<tr>
						<td>14.00 - 16.00</td>
						<td id='Senin-4'>   </td>
						<td id='Selasa-4'>   </td>
						<td id='Rabu-4'>   </td>
						<td id='Kamis-4'>   </td>
						<td id='Jumat-4'>   </td>
						<td id='Sabtu-4'>   </td>
						<td id='Minggu-4'>   </td>
					</tr>
					<tr>
						<td>16.00 - 18.00</td>
						<td id='Senin-5'>   </td>
						<td id='Selasa-5'>   </td>
						<td id='Rabu-5'>   </td>
						<td id='Kamis-5'>   </td>
						<td id='Jumat-5'>   </td>
						<td id='Sabtu-5'>   </td>
						<td id='Minggu-5'>   </td>
					</tr>
					<tr>
						<td>18.00 - 20.00</td>
						<td id='Senin-6'>   </td>
						<td id='Selasa-6'>   </td>
						<td id='Rabu-6'>   </td>
						<td id='Kamis-6'>   </td>
						<td id='Jumat-6'>   </td>
						<td id='Sabtu-6'>   </td>
						<td id='Minggu-6'>   </td>
					</tr>
					<tr>
						<td>20.00 - 22.00</td>
						<td id='Senin-7'>   </td>
						<td id='Selasa-7'>   </td>
						<td id='Rabu-7'>   </td>
						<td id='Kamis-7'>   </td>
						<td id='Jumat-7'>   </td>
						<td id='Sabtu-7'>   </td>
						<td id='Minggu-7'>   </td>
					</tr>
				</table>
				</br>

				<button id='button-jadwal'>Edit Jadwal Mengajar</button>

				<form action="result-account-setting.php" method="POST" enctype="multipart/form-data" id='account_jadwal' class='hidden'>
					<table>
						<tr>
							<td><label for='mapel'>Mata Pelajaran </label><span class='keterangan'>*</span></td>
							<td><select id='mapel' name="mapel" style='height:25px; width:150px' required>
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
							<td><label for='hari'>Hari </label><span class='keterangan'>*</span></td>
							<td><select id='hari' name="hari" style='height:25px; width:150px' required>
								<option value="">-Pilih-</option>
								<option value="Senin">Senin</option>
								<option value="Selasa">Selasa</option>
								<option value="Rabu">Rabu</option>
								<option value="Kamis">Kamis</option>
								<option value="Jumat">Jumat</option>
								<option value="Sabtu">Sabtu</option>
								<option value="Minggu">Minggu</option>
							</select> </td>
						<tr>
							<td><label for='waktu'>Waktu </label><span class='keterangan'>*</span></td>
							<td><select id='waktu' name="waktu" style='height:25px; width:150px' required>
								<option value="">-Pilih-</option>
								<option value="08.00-10.00">08.00-10.00</option>
								<option value="10.00-12.00">10.00-12.00</option>
								<option value="12.00-14.00">12.00-14.00</option>
								<option value="14.00-16.00">14.00-16.00</option>
								<option value="16.00-18.00">16.00-18.00</option>
								<option value="18.00-20.00">18.00-20.00</option>
								<option value="20.00-22.00">20.00-22.00</option>
							</select> </td>
						</tr>
						<tr>
							<td><label for='harga'>Harga </label><span class='keterangan'>*</span></td>
							<td><select id='harga' name="harga" style='height:25px; width:150px' required>
								<option value="">-Pilih-</option>
								<option value="Rp25.000/Jam">Rp25.000/Jam</option>
								<option value="Rp30.000/Jam">Rp30.000/Jam</option>
								<option value="Rp35.000/Jam">Rp35.000/Jam</option>
								<option value="Rp40.000/Jam">Rp40.000/Jam</option>
								<option value="Rp45.000/Jam">Rp45.000/Jam</option>
								<option value="Rp50.000/Jam">Rp50.000/Jam</option>
								
							</select> </td>
						</tr>
					</table></br>
					<span class='button-back-jadwal hover'>Back</span>
					<input name="submit" type="submit" value="Tambah Daftar Mengajar">
					<input name="submit" type="submit" value="Hapus Daftar Mengajar">
				</form>
			</div>
		</div>
	</body>
</html>