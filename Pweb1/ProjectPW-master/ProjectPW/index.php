<?php 
	session_start();
	include('phpform/formDaftar.php');	

?>

<html>
	<head>
		<title>BIMOLI-MainPage</title>
		<link rel="shortcut icon" href="images/buku.png">
		<link rel="stylesheet" type="text/css" href="css/styleMain.css">
		<link rel="stylesheet" type="text/css" href="css/styleJam.css">
		<link rel="stylesheet" type="text/css" href="css/styleForm.css">
		
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery_jam.js"></script>

	</head>

	<body>
		<div id="backgroundWrapper"></div>	

		<div id='wrapper'>
			<div id='header' class='fixed'>
				<div id='headerKiri'>
					<img id='logo' src="images/logo2.png">
				</div>

				<div id='headerTengah'>
					<ul>
						<h3 style="font-family:Kristen ITC"><center><p style="font-size:20px">Solusi Meraih Prestasi</p></center></h3>
					</ul>
					<center>
						<div id='marquee' style="font-family:Calligraph421 BT">
							<marquee style="font-size:20px">Dengan belajar sesungguhnya kita telah membuka satu pintu menuju kesuksessan</marquee>
						</div>
					</center>
				</div>
				
				<div id='headerKanan'>
					<span id='signup' class='menuLogin'><center>SignUp</center></span>
					<span id='login' class='menuLogin'><center>Login</center></span>
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
		</div>
		<div id="isitengah">
			<div id="pilihanmenu">
				<center>
					<div class="clock">
						<div id="Date"></div>
							<ul>
								<li id="hours"></li>
								<li id="point">:</li>
								<li id="min"></li>
								<li id="point">:</li>
								<li id="sec"></li>
							</ul>
					</div>
				</center>
				<div class='content'>
					<div id='menuContent1' class='menuContent' style='border-top:solid; margin-top: 20px'>
						<center><h3>Informasi Pendidikan</h3></center>
					</div>
					<div id='deskripsi1' class='settingContent hidden'>
						
						<h3>Cari Bimbel Tapi Mahal??</h3>
						<p>Kami menyediakan layanan les private dengan harga kurang dari 50.000 setiap datang.</p>

					</div>
				</div>
				<div class='content'>
					<div id='menuContent2' class='menuContent'>
						<center><h3>Informasi Tentang Bimoli</h3></center>
					</div>
					
					<div id='deskripsi2' class='settingContent hidden'>
						<h3>Cari Bimbel Susah??</h3>
						<p>Bimoli tempat bimbingan belajar yang nyaman serta memiliki layanan les private dengan tentor yang berkualitas !!</p>
					</div>
				</div>
				<div class='content'>
					<div id='menuContent3' class='menuContent'>
						<center><h3>Info Member dan Tentor</h3></center>
					</div>
			
					<div id='deskripsi3' class='settingContent hidden'>
						<h3>Mau Tentor Berkualitas Bagus??</h3>
						<p>Bimoli memiliki murid dengan tingkat SMP dan SMA. Disertai dengan pembimbing yang berkualitas.</p>
					</div>
				</div>
				<div id='menuContent4' class='content'>
					<div id='menuContent3' class='menuContent'>
						<center><h3>Testimoni Member</h3></center>
					</div>
		
					<div id='deskripsi4' class='settingContent hidden'>
						<h3>Cari Bimbel Susah??</h3>
						<p>Dapatkan Bimbingan Berkualitas dengan harga terjangkau!</p>
					</div>
				</div>
				<div id='menuContent5' class='content'>
					<div id='menuContent3' class='menuContent'>
						<center><h3>Testimoni Tentor</h3></center>
					</div>
					
					<div id='deskripsi5' class='settingContent hidden'>
						<h3>Cari Bimbel Susah??</h3>
						<p>Dapatkan Bimbingan Berkualitas dengan harga terjangkau!</p>
					</div>
				</div>

			</div>
			<div id='content'>
				<div class="tengah">
						<p><h2>Sekilas tentang Bimoli . . .</h2></p>
						<img id="slide" src="#" width="750px" height="410px"/>
	
					<script>
					var image1=new Image()
					image1.src="images/slide1.jpg"
					var image2=new Image()
					image2.src="images/slide2.jpg"
					var image3=new Image()
					image3.src="images/slide7.jpg"
					var image4=new Image()
					image4.src="images/slide4.jpg"
					var image5=new Image()
					image5.src="images/slide8.jpg"
					var image6=new Image()
					image6.src="images/slide6.jpg"
					
					var step=1
					function slideit(){
						if (!document.images)
						return
						document.images.slide.src=eval("image"+step+".src")
						if (step<6)
							step++
						else
							step=1
						setTimeout("slideit()",3100)
						}
					slideit()

					</script>
				</div>
			</div>
		</div>

		<div class="footer">
			<table id="tabel">
				<tr class="tr">
					<th><h2 style="font-family:Kristen ITC">About Us</h2></th>
					<th><h2 style="font-family:Kristen ITC">Contact Us</h2></th>
					<th><h2 style="font-family:Kristen ITC">Help</h2></th>
				</tr>
				<tr class="tr">
					<td class="td"><p>Bimoli merupakan sebuah Bimbingan Belajar yang tidak hanya 
						menyediakan layanan bimbingan biasa, namun juga melayani bimbingan secara
						privat dengan pemesanan online.
					 </p></td>
					<td class="td"><p>Anda dapat datang ke kantor kami di Jl. Slamet Riyadi No. 90
						Surakarta. Serta Hubungi kami melalui :::</br>
						<img src="images/fb.png" class="imgContact" title="Bimoli">
						<img src="images/twitter.png" class="imgContact" title="@bimoliSolo">
						<img src="images/gmail.png" class="imgContact" title="bimoliSolo@gmail.com">
						<img src="images/phone.png" class="imgContact" title="0271-675231">
					</p></td>
					<td class="td"><p>Untuk menggunakan layanan kami, harus memiliki akun terlebih dahulu. Untuk dapat memiliki akun,
						harus melakukan pendaftaran secara ondesk ke kantor Bimoli di Jl. Slamet Riyadi No.90 Surakarta</p></td>



				</tr>

			</table>
			<div style="font-family:Century Ghotic"></br></br><center>&copy created by Ig Donny, Achmad Kusyaini, Maulana Aziz & Tiyas Sulistyo</center></p></div>
				
		</div>

		</div>
			

	</body>
</html>