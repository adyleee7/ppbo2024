<?php


function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari): float {
    $keliling_lingkaran = 2 * 3.14 * $jari;
    return $keliling_lingkaran;
}

function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari* $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$keliling = kelilingLingkaran(10);
echo "Keliling lingkaran adalah {$keliling}\n";

$vbola = volumeBola(9);
echo "Volume bola adalah {$vbola}\n";

$vtabung = volumeTabung(7, 14);
echo "Volume tabung adalah {$vtabung}\n";

$vkerucut = volumeKerucut(7, 18);
echo "Volume kerucut adalah {$vkerucut}\n";