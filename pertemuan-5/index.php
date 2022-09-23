<?php
// OOP Class

class Buah
{
    // Fields
    // Access Modifier
    /*
    Secara sederhana ada 2, yaitu public dan private.
    Public = bisa diakses dari luar kelas.
    Private = hanya bisa diakses dari dalam kelas / internal.
    Tujuannya pake private biar fieldnya gak diisi aneh".
    */
    private $nama = "Buah";
    private $jumlah = 0;

    // Method
    function panggilNama() {
        return $this->nama;
    }

    // Setter
    function setJumlah($jumlah) {
        if($jumlah > 0) {
            $this->jumlah = $jumlah;
        } else {
            $this->jumlah = 0;
        }
    }

    // Getter
    function getJumlah() {
        // $this->printJumlah();
        return $this->jumlah;
    }

    // Private method, kalo ga dikasih defaultnya public.
    private function printJumlah() {
        echo $this->jumlah;
    }

    // Constructor di PHP
    function __construct($nama, $jumlah) {
        $this->setJumlah($jumlah);
        $this->nama = $nama;
    }
}

// Bikin Objek baru, kelasnya buah
$buah_1 = new Buah("Anggur", 1);
$buah_2 = new Buah("Anggur Merah", 2);

// Panggil Method
echo $buah_1->panggilNama();
echo "<br>";
// $buah_1->setJumlah(-1);
echo $buah_1->getJumlah();
echo "<br>";

echo $buah_2->panggilNama();
echo "<br>";
// $buah_2->setJumlah(-1);
echo $buah_2->getJumlah();
// echo $buah_1->printJumlah();
?>