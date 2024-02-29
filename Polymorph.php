<?php

/*
polymorphism : 
sebuah metod pada suatu interface  di implementasikan berbeda beda pada setiap clid class nya
dan memiliki banyak bentuk 

# menghitung luas bangun datar 
- luas persegi
- luas segitiga
- luas lingkaran
*/

interface BangunDatar
{
    public function Luas();

}

class persegi implements BangunDatar 
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function luas()
    {
        return pow($this->sisi, 2);
    }
}

class segitiga implements BangunDatar
{
    private $alas;
    private $tinggi;

    public function  __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luas()
    {
        return (0.5 * ($this->alas * $this->tinggi));
    }
}

class lingkaran implements BangunDatar
{
    private $jari;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function luas()
    {
        return (3.14 *pow ($this->jari, 2));
    }
}

$persegi = new Persegi(3);
echo "Luas Persegi = ".$persegi->luas()."<br>";

$segitiga = new Segitiga(2,4);
echo "Luas Segitiga = ".$segitiga->luas()."<br>";

$lingkaran = new Lingkaran(5);
echo "Luas Lingkaran = ".$lingkaran->luas()."<br>";