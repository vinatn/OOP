<?php
class Siswa
{
	public $nama,$alamat,$usia;

	public function __counstruct($a,$b,$c)
	{
		$this->nama = $a;
		$this->alamat = $b;
		$this->usia = $c;
	}

	public function datasiswa()
	{
		return "Hallo";
	}
}

$aceng= new Siswa('Aceng','Bojong','17');
echo $aceng->datasiswa();
"Nama saya $aceng->nama,
Alamat di $aceng->alamat,
Umur saya $aceng->umur tahun";
?>