<?php 
	include("php/daftar.php");
	include("php/login_user.php");
	include("php/pilih_tentor.php");
	include("php/konfirmasi_tentor.php");
	if(!isset($_POST['submit'])){
		die("<h1> Maaf Halaman Tidak Dapat Diakses</h1>");
	}
?>

<html>
	<head>
		<title>BIMOLI-MainPage</title>
		<link rel="shortcut icon" href="images/buku.png">
		<link rel="stylesheet" type="text/css" href="css/styleMain.css">
		<link rel="stylesheet" type="text/css" href="css/styleForm.css">
		
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

	</head>
	
	<body>
		<div id="backgroundWrapper" style='display:block'></div>

		<div id='result' style="display:block">
			<div style='padding:1em'>
				<center><h3>Result</h3></center></br>
				<center><?php echo $keterangan;?></center></br></br>
				<a href="index.php"><button>Back to Home</button></a>
			</div>
		</div>

	</body>
</html>