<?php
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jkel = $_POST['jkel'];
 $alamat = $_POST['alamat'];
 $tgllahir = $_POST['tgllahir'];
 $nama_ortu = $_POST['nama_ortu'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllahir,nama_ortu) 
VALUES('$nim','$nama', '$jkel','$alamat','$tgllahir','$nama_ortu')");
// Show message when user added
 echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>