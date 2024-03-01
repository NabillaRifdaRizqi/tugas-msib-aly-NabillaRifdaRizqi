<?php


class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlhal;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhal = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhal = $jmlhal;
        
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul}  : {$this->judul} | {$this->getLabel()} (RP. {$this->harga}) - {$this->jmlhal} Halaman.";
        return $str;
    }
}

class Novel extends Produk {
    // tidak mendefinisak ulang popert krena tidak ada perubahan
}

class Komik extends Produk {
    // tidak mendefinisak ulang popert krena tidak ada perubahan
}

$produk1 = new Novel("Bumi", "Tere Liye", "Gramedia", 85000, 150);
$produk2 = new Komik("Naruto", "Masashi Kishimoto", "Shueisha", 95000, 200);

//untuk mencetak info produk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
