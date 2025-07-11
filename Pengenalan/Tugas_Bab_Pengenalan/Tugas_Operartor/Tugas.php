<?php

// Tugas Output

// Soal Nomor 1
$a = 5;
$b = 10;
$tambahan = $a + $b;

echo "Hasil Penjumlahan: " . $tambahan . "<br>";

// Soal Nomor 2
$c = 20;
$d = 4;
$kurangan = $c - $d;

echo "Hasil Pengurangan: " . $kurangan . "<br>";

// Soal Nomor 3
$e = 6;
$f = 7;
$perkalian = $e * $f;

echo "Hasil Perkalian: " . $perkalian . "<br>";

// Soal Nomor 4
$g = 15;
$h = 4;
$pembagian = $g % $h;

echo "Sisa dari 15 dibagi 4 adalah: " . $pembagian . "<br>";

// Soal Nomor 5
$s = 70;
$j = 5;
$hasil = $s + $j;

echo "Hasil Penambahan 70 dan 5 adalah: " . $hasil . "<br>";

// Soal Nomor 6
$r = 10;
$s = 10;

var_dump($r == $s);
var_dump($r === $s);
echo "<br>";

// Soal Nomor 7
$nilai = 75;
$hadir = true;

$Timothy = $nilai >= 75 && $hadir;
if($Timothy){
    echo "Loh Monyet Goblok";
}
echo "<br>";

// Soal Nomor 8
$nilai = 70;
$kehadiran = true;

$lulus = $nilai >= 70 || $kehadiran;
if($lulus){
    echo "Selamat loh Lulus Akhirnya";
}else{
    echo "Maaf, loh gak Lulus Kasian Sekali";
}
echo "<br>";

// Soal Nomor 9
$arogan = 5;
$malas = "5";

$goblok = $arogan !== $malas;

if($goblok){
    echo "Loh Miskin Berarti Loh Goblok Arogan Malas Selesai";
} else {
    echo "Loh Miskin Karena Loh Goblok";
}
echo "<br>";

// Soal Nomor 10
$nilai = 100;
$dibagi = 4;
$total = $nilai / $dibagi;

echo "Sisa dari 100 dibagi 4 adalah: " . $total;
?>