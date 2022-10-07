<?php

// Jualan Produk
// Komik
// Game

class Produk {
    public $judul = "judul",
            $penulis = "penerbit",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function __construct($judul = "$judul", $penulis = "$penulis", $penerbit = "$penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk-> judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->($produk1);

?>