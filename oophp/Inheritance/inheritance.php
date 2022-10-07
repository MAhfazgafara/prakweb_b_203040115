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
    
    public function __construct($judul, $penulis, $penerbit, $harga, $jmHalaman, $waktuMain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmHalaman = $jmHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk-> judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function cetak( Produk $produk ){
        $str = "Komik : {$this-> judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function cetak( Produk $produk ){
        $str = "Game : {$this-> judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
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