<?php
	session_start(); 
	if (empty($_POST['email'])) 
	{
		echo "Email Kosong";
	
	}else{
		
		$exist = false;
		include('connection.php');
		
		$email = $_POST['email'];
		
		$email = mysql_real_escape_string($email);

		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($connection, $query);
			
		if (mysqli_num_rows($result) == 1) {
			$exist = true;
		}
		else {
			$query = "SELECT * FROM tentors WHERE email='$email'";
			$result = mysqli_query($connection, $query);

			if (mysqli_num_rows($result) == 1) {
				$exist = true;
			}else{
				$exist = false;
			}
		}
	}	
?>

			