<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
 $nim = $_POST['nim'];
 $nama=$_POST['nama'];
 $jkel=$_POST['jkel'];
 $alamat=$_POST['alamat'];
 $tgllahir=$_POST['tgllahir'];
 $nama_ortu = $_POST['nama_ortu'];
 // update user data
$result = mysqli_query($con, "UPDATE mahasiswa SET 
nama='$nama',jkel='$jkel',alamat='$alamat',tgllahir='$tgllahir', nama_ortu='$nama_ortu' WHERE nim='$nim'");
 // Redirect to homepage to display updated user in list
header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while($user_data = mysqli_fetch_array($result))
{
$nim = $user_data['nim'];
$nama = $user_data['nama'];
$jkel = $user_data['jkel'];
$alamat = $user_data['alamat'];
$tgllahir = $user_data['tgllahir'];
$nama_ortu	= $user_data['nama_ortu'];
}
?>