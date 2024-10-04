<?php
namespace App\Model\Akademik;

class Dosen extends Pegawai {
    private int $nidn;

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}