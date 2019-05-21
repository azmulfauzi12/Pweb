<html>
<body>
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nama: <input type="text" name="nama" required="required"><br>
NIM: <input type="text" name="NIM" required="required" maxlength="10" onkeypress="return hanyaAngka(event)"/><br>
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>
<input type="submit">
</form>
<?php
if(!empty($nama) && !empty($NIM) ){
echo "<h2>Selamat Datang</h2>";
echo $nama . "<br>" . $NIM;
}
?>
</body>
</html>