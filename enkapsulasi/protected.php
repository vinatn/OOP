<?php
class laptop
{

	 // buat protected property
	protected $pemilik;

	// buat protected method
	protected function hidupkan_laptop()
	{
		return "Hidupkan Laptop";
	}
}

// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();

// set protected property menghasilkan error
$laptop_anto->pemilik = "anto";
// fatal error : Cannot access protectd property laptop

// tampilkan protected property akan menghasilkan error
echo $laptop_anto->pemilik;
// fatal error : Cannot access protectd property laptop

echo $laptop_anto->hidupkan_laptop();

?>
