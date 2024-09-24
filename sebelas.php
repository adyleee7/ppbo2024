<?php
namespace App\Admin;

class Pegawai {
    public int $nip;
    public string $nama;
    public int $no_hp;
    public string $alamat;
}

class Dosen extends Pegawai {
    public string $nidn;

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}

#objek (instance dari kelas Dosen)
$dian = new Dosen();
$dian->nama = "Dian Prawira";
$dian->nip = "198411132015041001";
$dian->no_hp = "62111111";
$dian->alamat = "Jln Purnama";
$dian->nidn = "0013118405";

$dian->mengajar();