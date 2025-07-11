<?php

//Tugas Output

//Soal Nomor 1
$a = 14;
$b = 2;
$hasil = $a * $b;
echo "Nilai Hasil Perkalian Adalah: " . $hasil . "<br>";

//Soal Nomor 2
$stock = 50;
$ambil = 5;

$stock -= $ambil;
echo "Sisa Stock Adalah: " . $stock . "<br>";

//Soal Nomor 3
$nilai = 75;

$hasil = $nilai > 70;
echo "Apakah Nilai Lebih Besar Dari 70? " . ($hasil ? "Ya" : "Tidak") . "<br>";

//Soal Nomor 4
$kata1 = 100;
$kata2 = "100";
$hasil = $kata1 === $kata2;
echo "Apakah 100 Sama Dengan '100'? " . ($hasil ? "Ya" : "Tidak") . "<br>";

//Soal Nomor 5
$login = false;
$aksesAdmin = true;
$hasil = $login || $aksesAdmin;
echo "Apakah Pengguna Memiliki Akses? " . ($hasil ? "Ya" : "Tidak") . "<br>";

//Soal Nomor 6
$sim = true;
$umur = 18;
$hasil = $sim && $umur >= 18;
echo "Apakah Pengguna Memiliki SIM dan Umur Lebih Dari 18? " . ($hasil ? "Ya" : "Tidak") . "<br>";

//Soal Nomor 7
$nilai = 27;
$hasil = $nilai % 3;
echo "Hasil Modulus 3 Dari 27 Adalah: " . $hasil . "<br>";

//Soal Nomor 8
$nilai1 = 25;
$nilai2 = "25";
$hasil = $nilai1 !== $nilai2;
echo "Apakah 25 Tidak Sama Dengan '25'? " . ($hasil ? "Ya" : "Tidak") . "<br>";

//Soal Nomor 9
$salad = 10000;
$susu = 7500;
$hasil = $salad += $susu;
echo "Total Harga Salad Setelah Ditambah Susu Adalah: " . $hasil . "<br>";

//Soal Nomor 10
$desimal = 25.5;
$hasil = $desimal / 2;
echo "Hasil Pembagian 25.5 Dengan 2 Adalah: " . $hasil . "<br>";