<?php
class Aritmatika{

	public function tambah($bil1 = null, $bil2 = null){
		$vina = $bil1+$bil2;
		return "perhitungan $bil1+$bil2 = ".$vina;
	}
	public function kurang($bil1 = null, $bil2 = null){
		$vina = $bil1-$bil2;
		return "<br>perhitungan $bil1-$bil2 = ".$vina;
	}
	public function kali($bil1 = null, $bil2 = null){
		$vina = $bil1*$bil2;
		return "<br>perhitungan $bil1*$bil2 = ".$vina;
	}
	public function bagi($bil1 = null, $bil2 = null){
		$vina = $bil1/$bil2;
		return "<br>perhitungan $bil1/$bil2 = ".$vina;
	}
}

$Aritmatika1 = new Aritmatika();
echo $Aritmatika1->tambah(20,10);
echo $Aritmatika1->kurang(20,10);
echo $Aritmatika1->kali(20,10);
echo $Aritmatika1->bagi(20,10);

?>