<?php
class Sekolah
{
	public $nama;
	public $alamat;

	public function datasekolah($a="Smk Assalaam",$b="Situ Tarate")
	{
		return "Nama sekolah : $a, Alamat sekolah : $b";
	}
}

$sekolah1 = new Sekolah();
echo $sekolah1->datasekolah("Sma Assalaam","Cibaduyut"); 

?>