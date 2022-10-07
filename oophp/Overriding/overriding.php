<?php

// Jualan Produk
// Komik
// Game

class Produk {
    public $judul = "judul",
            $penulis = "penerbit",
            $penerbit = "penerbit",
            $harga = 0;

    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
}


class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0, $jmlHalaman = "jmlHalaman") {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0, $waktuMain = "waktuMain") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0,);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50,);

// Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Niel Druckmann, Sony Computer (Rp. 250000) - 50 jam.

echo $infoProduk1->getInfoProduk();
echo "<br>";
echo $infoProduk2->getInfoProduk();

?>