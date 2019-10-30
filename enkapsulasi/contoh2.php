<?php
class Manusia
{
	public $umur,$tgl_lahir;
	protected $jenis_kelamin;
	private $status;

	public function makan()
	{
		return "Manusia juga butuh makan";
	}

	public function minum()
	{
		return "Manusia juga butuh minum";
	}

	public function ambil_status($status_saat_ini)
	{
		return $this->status = $status_saat_ini;
	}

	public function status_gua()
	{
		return "Barbar namun kadang ambyar";
	}
}

class Pria extends Manusia
{
	public function jk($jk)
	{
		return $this->jenis_kelamin = $jk;
	}
	public function datadiri()
	{
		$datadiri = "<br> Aku seorang ".
					$this->jenis_kelamin;
		$datadiri .= "<br> yang lahir pada ".
					$this->tgl_lahir; 
		$datadiri .= "<br> sampai saat ini masih ".
					$this->status_gua();
		$datadiri .= "<br> karena saya masih ".
					$this->umur;
		$datadiri .= "<br> belum pantas untuk menikah <br>";
		return $datadiri;
	}
}

$saya = new Pria();
$saya ->tgl_lahir = "3 Agustus 1998";
$saya ->jk("Laki-laki");
$saya ->ambil_status = ("Lajang");
$saya ->umur = "21th";
echo $saya->datadiri();
echo $saya->makan() "<br>";
echo $saya->minum();

?> 