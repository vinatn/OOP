<?php
class Kelinci{

public $warna= 'abu';
public $float= 25.5;
public $tidur= true;
public $jumlah_kaki= 4;

	public function menggigit()
	{
		return "menggerogot sayur";
	}
}

$kelinci_asli= new Kelinci;
echo $kelinci_asli->warna;
echo '<br>'.$kelinci_asli->float;
echo '<br>'.$kelinci_asli->tidur;
echo '<br>'.$kelinci_asli->jumlah_kaki;
echo '<br>'.$kelinci_asli->menggigit();
?>