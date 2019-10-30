<?php
    
    class Penduduk {
        public $nama, $nik, $alamat, $umur;
        public function __construct($nm, $nk, $almt, $umr){
            $this->nama = $nm;
            $this->nik = $nk;
            $this->alamat = $almt;
            $this->umur = $umr;
        } public function Tampilkan(){
    
            for ($i=0; $i < count($this->nama); $i++) {
                echo "<b>Nama : ". $this->nama[$i]."</b><br>";
                echo "<b>NIK : ". $this->nik[$i]. "</b><br>";
                echo "<b>Alamat : ". $this->alamat[$i]."</b><br>";
                echo "<b>Umur : ".$this->umur[$i]."</b><br>";
                echo "<hr>";
            }
        }
    }
    if (isset($_POST['prosses'])) {
        $nm = $_POST['nama'];
        $nk = $_POST['nik'];
        $almt = $_POST['alamat'];
        $umr = $_POST['umur'];
        $jumlah = count($nm);
    }
    echo "<center><h1>Hasil Data Keluarga</h1></center>";
    $hasil = new Penduduk($nm, $nk, $almt, $umr);
    echo $hasil->Tampilkan();
?>