<?PHP
	$host = "localhost";
	$user = "root";
	$password = "desperado";
	$database = "projectpw";

	$connection = mysqli_connect($host, $user, $password);

	if(!$connection){
		die("<h2>Koneksi Gagal, Silahkan cek user dan password database terlebih dahulu</h2>" . "</br>Error :" . mysqli_connect_error());
	}

	$selectdB = mysqli_select_db($connection, $database);
	
	if(!$selectdB){
	 	die("Database gagal diakses, Silahkan di cek nama database terlebih dahulu");
	}

?>