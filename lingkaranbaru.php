<p>Masukan Jari-Jari Lingkaran</p>
<form action="" method="post">
Jari-Jari : <input type="text" name="jari"><br><br>
<input type="submit" name="simpan">
</form>

<?php
if(isset($_POST['simpan'])){
	$jari2 = $_POST['jari'];
	$phi = 3.14;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	echo "Lingkaran Dengan Jari-Jari <b>$jari2</b> Maka Memiliki <br>";
	echo "Luas : <b>$luas_lingkaran</b><br><hr>";
}
?>
