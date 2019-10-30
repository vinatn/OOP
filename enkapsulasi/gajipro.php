<?php
    class Gaji{
        public $nama;
        public $nip;
        public $ala;  
        public $hari;
        public function __construct($nama,$nip, $ala, $hari){
            $this->nama = $nama;
            $this->nip = $nip;
            $this->ala = $ala;
            $this->hari = $hari;
        } public function GajiKotor(){
            $g_kotor = $this->hari * 75000;
            return "Gaji Kotor : $g_kotor<br>";
        } public function GajiBersih(){
            $g_kotor = $this->hari * 75000;
            $g_bersih = $g_kotor * 0.025;
            $bersih = $g_kotor - $g_bersih;
            return "Gaji Bersih : $bersih<br>";
        }
    }
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $alamat = $_POST['alamat'];
        $hari = $_POST['jmlhr'];
    }
    $output = new Gaji($nama, $nip, $alamat, $hari);
    echo "Nama : $nama<br>";
    echo "NIP : $nip<br>";
    echo "Alamat : $alamat<br>";
    echo "Jumlah Hari Kerja : $hari<br>";
    echo $output->GajiKotor();
    echo $output->GajiBersih();
?>