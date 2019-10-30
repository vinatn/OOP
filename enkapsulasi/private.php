<?php

//buat class komputer
class komputer
{
	// property dengan hak akses protected
	private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
	public function tampilkan_processor()
	{
		return $this->jenis_processor;
	}
}
class laptop extends komputer
{
	public function tampilkan_processor()
	{
		return $this->jenis_processor;
	}
}


$komputer_baru = new komputer();
$laptop_baru = new laptop();
echo $komputer_baru->tampilkan