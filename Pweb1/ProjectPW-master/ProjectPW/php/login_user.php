<?php
	session_start(); 
	if (isset($_POST['submit'])&& $_POST['submit']=='Login') 
	{
		if (empty($_POST['email']) || empty($_POST['password']))
	 	{
			$keterangan= "email atau password masih kosong";
		}
		else{

			$nama_tabel= $_POST['jenis'];
			
			include('connection.php');
			
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			$email = mysql_real_escape_string($email);
			$password = hash('sha256', $password);
			$password = mysql_real_escape_string($password);
			
			$query = "SELECT * FROM $nama_tabel WHERE password='$password' AND email='$email'";
			$result = mysqli_query($connection, $query);
				
			if (mysqli_num_rows($result) == 1) {
				$data = mysqli_fetch_array($result);
				$username = $data['nama'];
				$_SESSION['login_user']= $username;
				$_SESSION['email_user']= $data['email'];
				$_SESSION['jenis']=$nama_tabel;
				$_SESSION['query_cari']=""; 
				
				switch ($nama_tabel) {
					case 'admin':
						header("location: admin-page.php");
						break;
					case 'tentors':
						header("location: tentor-page.php");
					default:
						header("location: user-page.php");
						break;
				}
			}
			else {
				$keterangan="Maaf Akun anda tidak Terdaftar";
			}
		}
	}	
?>

			