<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola extends Lingkaran
{
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung extends Lingkaran
{
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luas() : float {
        return 2 * self::PHI * $this->jari_jari * ($this->tinggi + $this->jari_jari);
    }
}

class Kerucut extends Lingkaran
{
    public $tinggi;

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * ($this->jari_jari + sqrt(pow($this->jari_jari, 2) + pow($this->tinggi, 2)));
    }
}

$bola = new Bola(2);
$bola->jari_jari = 5;
echo "BOLA\n";
echo "Volume bola: " . $bola->volume() . "\n";
echo "Luas bola: " . $bola->luas() . "\n";

$tabung = new Tabung(5, 15);
$tabung->jari_jari = 5;
$tabung->tinggi = 15;
echo "TABUNG\n";
echo "Volume tabung: " . $tabung->volume() . "\n";
echo "Luas tabung: " . $tabung->luas() . "\n";

$kerucut = new Kerucut(7, 12);
$kerucut->jari_jari = 5;
$kerucut->tinggi = 12;
echo "KERUCUT\n";
echo "Volume kerucut: " . $kerucut->volume() . "\n";
echo "Luas kerucut: " . $kerucut->luas() . "\n";
