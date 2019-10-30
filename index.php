<?php
class Kucing{
	public $warna = 'hitam';
	public $jumlah_kaki = 4;

	public function berburu()
	{
		return "memburu ikan";
	}

	public function makan ($var,$var2)
	{
		return "kucing makan" .$var. 'dan' .$var2;
	}

	public function tidur ($tempat)
	{
		return "kucing tidur" ;
	}

}

$kucing_asli = new Kucing;
echo $kucing_asli->warna;
echo '<br>'.$kucing_asli->jumlah_kaki;
echo '<br>'.$kucing_asli->berburu();
echo '<br>'.$kucing_asli->makan('tikus','asin');
echo '<br>'.$kucing_asli->tidur('');

echo '<hr>';
$kucing_garong = new kucing;
echo $kucing_garong->warna = "hitam";
echo '<br>'.$kucing_garong->jumlah_kaki;
echo '<br>'.$kucing_garong->makan('wiskas','bodrek');

?>