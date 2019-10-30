<?php
class Siswa{
	public function __destruct();
	{
		echo "Ini adalah destructor";
	}
	public function hallo()
	{
		return "<br>Hello PHP";
	}
	public function __counstruct()
	{
		echo "Ibi adalah construct";
	}
}

$hello = new Siswa();
echo $hello->hallo();
?>