<?php
class Bangundatar{
	public $alas,$tinggi;
	function __construct($alas,$tinggi)
	{
		$this->a = $alas;
		$this->b = $tinggi;
	}
	public function luas()
	{
		$alas = ($this->a*$this->b)/2;
		return "Luas segitiga : $alas";
	}
}
$segi = new Bangundatar(20,10);
echo $segi->luas();

class Bangunruang
{
	public
}