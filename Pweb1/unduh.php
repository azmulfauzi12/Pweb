<?php
$myDir = "c:/xampp/htdocs/Pweb1";
$dir = opendir($myDir);
echo "Isi folder : <br>(klik link untuk download) <br>";
while($tmp = readdir($dir)){
echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
?>