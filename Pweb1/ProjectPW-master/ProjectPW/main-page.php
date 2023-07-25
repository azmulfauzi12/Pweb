<?php 
	include("php/cek_session.php");
	switch ($_SESSION['jenis']) {
		case 'admin':
			header("location: admin-page.php");
			break;
		case 'tentors':
			header("location: tentor-page.php");
			break;
	}
	include("php/find_daerah.php");
?>

<html>
	<head>
		<title>SignUp</title>
		<link rel="shortcut icon" href="images/buku.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/styleMain.css">
		<link rel="stylesheet" type="text/css" href="css/styleMainPage.css">

		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery_profile.js"></script>
		<script type="text/javascript" src='js/ajax_find_daerah.js'></script>
		<script type="text/javascript" src='js/ajax_find_tentor.js'></script>

		
	</head>

	<body>
		<div id='wrapper'>
			<div id='header' class='fixed'>
				<div id='headerKiri'>
					<img id='logo' src="images/logo2.png">
				</div>

				<div id='headerTengah'>
					<ul>
						<h3><center>Solusi Meraih Prestasi</center></h3>
					</ul>
					<center>
						<div id='marquee'>
							<marquee>Dengan belajar sesungguhnya kita telah membuka satu pintu menuju kesuksessan</marquee>
						</div>
					</center>
					<span class='menuhead'><a href="main-page.php"><center>MainPage</center></span></a>
				</div>
				
				<div id='headerKanan'>
					<span class='welcome'>Welcome, <?php echo $_SESSION['login_user']; ?></span>
					<span class='menuLogout' style='margin-top:40px; border:none;'><center id='menuLogout'><img id='user_logo'src="php/cetak_gambar.php">
						<span style='padding-top: 10px; float:right'>&#9660;</span>
						<div id='menu_profile' class='hidden'>
							<center class='menu_logout'><a href="user-page.php"><span >Profile</span></a></center>
							<center class='menu_logout'><a href="php/logout.php"><span>SignOut</span></a></center>
						</div></center>
					</span>
					
					<div class='menuHeader'>
						<ul>
							<a href="index.php"><li><center>Home</center></li></a>
							<a href="FAQ.php"><li><center>FAQ</center></li></a>
							<a href="contact-us.php"><li style="border:none"><center>Contact Us</center></li></a>
						</ul>
					</div>
					<div id='borderatas' class='menuHeader' ></div>
					<div id='borderbawah' class='menuHeader' ></div>
				</div>
			</div>

			<div id='header'></div>

			<div id='main-page-wrapper'>
				<div id='main-content'>
					
					<?php 
						if(isset($_POST['nama']) && $_POST['nama'] !=""){

						}else{
							include("php/select_tentor.php");
						}

					?>
				</div>
				<div id='side-menu' class='fixed'>
					<div id='search'>
						<form>
							<input type='text' name='cari' id='cari' placeholder='Search...' style='height:30px'>
						</form>
					</div>
					<div id='box-menu'>
						</br>
						<center><h3>Cari Tentor untuk Les Private</h3></br>
						<form action="" method="POST" enctype="multipart/form-data" id='form_cari'>
						<table>
							<tr>
								<td><label for='mapel'>Mata Pelajaran </label><span class='keterangan'>*</span></td>
								<td><select id='mapel' name="mapel" style='height:25px; width:150px'>
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
								<td><label for='hari'>Hari </label><span class='keterangan'>*</span></td>
								<td><select id='hari' name="hari" style='height:25px; width:150px'>
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
								<td><label for='jam'>Jam </label><span class='keterangan'>*</span></td>
								<td><select id='jam' name="jam" style='height:25px; width:150px'>
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
								<td><label for='tarif'>Tarif </label><span class='keterangan'>*</span></td>
								<td><select id='tarif' name="tarif" style='height:25px; width:150px'>
									<option value="">-Pilih-</option>
									<option value="Rp25.000/Jam">Rp25.000/Jam</option>
									<option value="Rp30.000/Jam">Rp30.000/Jam</option>
									<option value="Rp35.000/Jam">Rp35.000/Jam</option>
									<option value="Rp40.000/Jam">Rp40.000/Jam</option>
									<option value="Rp45.000/Jam">Rp45.000/Jam</option>
									<option value="Rp50.000/Jam">Rp50.000/Jam</option>
									
								</select> </td>
							</tr>
							<tr>
							<td><label for='kota'>Kota</label><span class='keterangan'>*</span></td>
							<td><select id='kota' name="kota" style='height:25px; width:150px'>
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
								<td><select id='daerah' name="daerah" style='height:25px; width:150px'>
			
									</select> </td>
							</tr>
						</table></br>
						<input name="submit" type="submit" value="Cari"></center>
					</div>
				</div>

			</div>
			
			<div class="footer">
				<div>
					<center><h3 style="color:rgba(210, 137, 23, 1)">Contact us on : </h3></br>
						<img src="images/fb.png" style="height:50px" title='Bimoli'>
						<img src="images/twitter.png" style="height:50px" title="@bimoliSolo">
						<img src="images/gmail.png" style="height:50px" title="bimoliSolo@gmail.com">
						<img src="images/phone.png" style="height:55px" title="0271-6756231">
					</center>
					<div style="font-family:Century Ghotic"></br></br><center>&copy created by Ig Donny, Achmad Kusyaini, Maulana Aziz & Tiyas Sulistyo</center></p></div>
				</div>
			</div>

		</div>
	</body>
</html>