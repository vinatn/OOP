<?php
    class RPL2 {
        public $siswa;
        public $laki;
        public $cewe;
        public $wakel;
        public $km;
        public function sekolah() {
            return "SMK ASSALAAM";
        } public function jurusan() {
            return "RPL";
        } 
    }
    $a = new RPL2;
    $a->siswa=32;
    $a->laki=22;
    $a->cewe=10;
    $a->wakel="Wildan Abdul,A, S.Kom";
    $a->km="Refana.B.A";
    echo "Di ".$a->jurusan()." 2, terdiri dari $a->siswa siswa,
    diantaranya : <br>";
    echo "Siswa Laki Laki : $a->laki<br>";
    echo "Siswa Perempuan : $a->cewe<br>";
    echo "Wali Kelas : $a->wakel<br>";
    echo "Ketua Murid : $a->km<br><br>";
    $a1 = new RPL2;
    $a1->siswa=30;
    $a1->laki=20;
    $a1->cewe=10;
    $a1->wakel="Tammy Ayundari, S.pd";
    $a1->km="Boces";
    echo "Di ".$a1->jurusan()." 3, terdiri dari $a1->siswa siswa,
    diantara    nya : <br>";
    echo "Siswa Laki Laki : $a1->laki<br>";
    echo "Siswa Perempuan : $a1->cewe<br>";
    echo "Wali Kelas : $a1->wakel<br>";
    echo "Ketua Murid : $a1->km<br><br>";
?>