<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');

if ($waktu < '06:00') 
{
    $katasapa = "Selamat pagi";
} 
elseif ($waktu < '12:00') 
{
    $katasapa = "Selamat siang";
}
elseif ($waktu < '18:00') 
{
    $katasapa = "Selamat sore";
} else 
{
    $katasapa = "Selamat malam";
}

echo "{$katasapa} {$nama}, sekarang pukul {$waktu}\n";