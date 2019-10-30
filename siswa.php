<?php
class Siswa
{
	public $nama,$alamat,$usia;

	public function datadiri($nama,$alamat,$usia)
	{
		$this->nama = $nama;
		$this->alamat = $alamat;
		$this->usia = $usia;
		return "Nama : $nama, Alamat : $alamat, Usia : $usia";
	}
	public function hobi($hobi)
	{
		$this->hobi = $hobi;
		return "Hobi : $hobi" .$this->datadiri($this-> nama, $this-> alamat,$this-> usia) ."Hobi : $hobi";
	}
}

$siswa1= new Siswa();
$siswa1->datadiri('Ahmad','Bandung',18);
echo $siswa1->hobi("Mancing");

?>