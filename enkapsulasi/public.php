<?php
// buat class laptop
class laptop{

public $pemilik;
// buat public method
public function hidupkan_laptop()
{
	return "Hidupkan Laptop";
}
}

// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
// set property
$laptop_anto->pemilik = "Anto";

//tampilkan property
echo $laptop_anto->pemilik; // Anto

//tampilkan method
echo $laptop_anto->hidupkan_laptop(); // "Hidupkan Laptop"

    class Karyawan {
        public $nama;
        public $pekerjaan;
        public $tahun_bekerja;
        protected $gaji;
        private $gjmanager = 5000000;
        private $gjob = 500000;
        public function setdata($nama="manusia",$pekerjaan="manager",$tahun_bekerja=15){
            $this->nama=$nama;
            $this->pekerjaan=$pekerjaan;
            $this->tahun_bekerja=$tahun_bekerja;
        } public function getData(){
            if (($this->pekerjaan == "manager") && ($this->tahun_bekerja >= 10)) {
                $this->gaji = $this->tahun_bekerja * $this->gjmanager;
            } elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 10)) {
                $this->gaji = $this->tahunbekerja * $this->gjob;
            } elseif (($this->pekerjaan == "manager") && ($this->tahun_bekerja >= 5)) {
                $this->gaji = $this->tahun_bekerja * ($this->gjmanager - 1000000);
            } elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 5)) {
                $this->gaji = $this->tahun_bekerja * ($this->gjob - 100000);
            }
            return $this->gaji;
        }
    }
    $karyawan = new Karyawan();
    $karyawan->setdata();
    echo "nama = $karyawan->nama <br>";
    echo "pekerjaan = $karyawan->pekerjaan <br>";
    echo "tahun bekerja = $karyawan->tahun_bekerja <br>";
    echo "gaji = " . number_format($karyawan->getdata(), 0, ",", ".") . " <br>";
?>