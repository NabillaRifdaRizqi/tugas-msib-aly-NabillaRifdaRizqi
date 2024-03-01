<?php

interface Menu
{
    public function getHarga();
    public function getLevel();
    public function getNama();
    public function getJumlah();
}

class Makanan implements Menu
{
    private $nama;
    private $level;
    private $harga;
    private $jumlah = 1; 
    

    public function __construct($nama, $level, $harga)
    {
        $this->nama = $nama;
        $this->level= $level;
        $this->harga = $harga;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getJumlah()
    {
        return $this->jumlah;
    }

    public function tambahJumlah($jumlah)
    {
        $this->jumlah += $jumlah;
    }
}

class Minuman implements Menu
{
    private $nama;
    private $level;
    private $harga;
    private $jumlah = 1; 

    public function __construct($nama, $level, $harga)
    {
        $this->nama = $nama;
        $this->level= $level;
        $this->harga = $harga;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getJumlah()
    {
        return $this->jumlah;
    }

    public function tambahJumlah($jumlah)
    {
        $this->jumlah += $jumlah;
    }
}

class Transaksi
{
    private $menus = [];

    public function tambahMenu(Menu $menu)
    {
        $this->menus[] = $menu;
    }

    public function totalHarga()
    {
        $total = 0;
        foreach ($this->menus as $menu) {
            $total += $menu->getHarga() * $menu->getJumlah(); 
        }
        return $total;
    }

    public function getRincianHarga()
    {
        $rincian = [];
        foreach ($this->menus as $menu) {
            $rincian[] = $menu->getNama() . ' (Level ' . $menu->getLevel() . ') : ' . $menu->getHarga() . ' x ' . $menu->getJumlah(); // Menampilkan nama, level, harga per item, dan jumlah item
        }
        return $rincian;
    }
}

$seblakSo = new Makanan('Seblak Sosis', 4, 15000);
$seblakSo->tambahJumlah(2); 
$seblakori = new Makanan('Seblak Original', 2, 10000);

$transaksi = new Transaksi();
$transaksi->tambahMenu($seblakSo);
$transaksi->tambahMenu($seblakori);

echo "Rincian Harga: <br>";
foreach ($transaksi->getRincianHarga() as $rincian) {
    echo $rincian . "<br>";
}
echo "Total Harga: " . $transaksi->totalHarga();
?>
