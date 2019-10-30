<?php
class Cafe{
	public $namacafe= "Lacamera";
	private $pajak = "15000";
	protected $proses_pembuatan = "3bln";
	public function pajak_tempat(){
		$this->pajak;
		return "<br>Pajak Tempat : ".$this->pajak;
	}
}
class Pembuatan extends Cafe{
	public function proses(){
		return "<br>Proses Pembuatan : ".$this->proses_pembuatan;
	}
}
$cafe = new Cafe();
$proses = new Pembuatan();
echo "Nama Cafe : " .$cafe->namacafe;
echo $cafe->pajak_tempat();
echo $proses->proses();

?>