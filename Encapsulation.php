<?php

class Novel
{
    private $penulis;

    public function setPenulis($penulis)
    {
        $daftarPenulis = ['Tere Liye', 'Eka Kurniawan', 'Valerie Patkar'];
        if (in_array($penulis, $daftarPenulis))
        {
            $this->penulis = $penulis;
        }
        else
        {
            $this->penulis = 'Tidak Ada';
        }
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
}

$bumi = new Novel();
$bumi->setPenulis('Tere Liye');
echo 'Penulis dari novel Bumi adalah ' . $bumi->getPenulis();
