<?php
$kurs = $_POST['kurs'];

$fileHandle = fopen('podaci.txt', 'w');
fwrite($fileHandle, $kurs);
fclose($fileHandle);

$fileHandle = fopen('podaci.txt', 'r');
$info = fgets($fileHandle);
fclose($fileHandle);

echo $info;

?>
<br>
<a href="index.php">Nazad</a>
