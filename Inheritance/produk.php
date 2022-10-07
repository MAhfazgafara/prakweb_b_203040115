<?php

// Jualan Produk
// Komik
// Game

class Produk {
    public $judul = "judul",
            $penulis = "penerbit",
            $penerbit = "penerbit",
            $harga = 0;
            $jmHalaman = "jmHalaman",
            $waktuMain = 0;
            $tipe;
    
    public function __construct($judul, $penulis, $penerbit, $harga, $jmHalaman, $waktuMain, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmHalaman = $jmHalaman;
        $this->waktuMain = $waktuM$this->waktuMain;
        $this->tipe = $tipe;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLenkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmHalaman} Halaman.";
        } else if( $this->tipe == "Game" ) {
            $str .= "~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk-> judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");


echo $infoProduk1->getInfoLenkap();

?>