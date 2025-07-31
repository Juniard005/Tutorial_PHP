<?php

// Tugas Pengkondisian IF ELSE

// Soal Nomor 1
// Jika umur Ardi lebih dari 17, maka dia boleh membuat SIM
$usia = 20;
if ($usia >= 17) {
    echo "Ardi sudah bisa membuat SIM.";
} else {
    echo "Ardi belom bisa buat SIM.";
}

echo "<br>";

// Soal Nomor 2
// Jika nilai Laila lebih dari atau sama dengan 75, maka dia lulus
$nilai = 80;
if ($nilai >= 75) {
    echo "Laila lulus ujian.";
} else {
    echo "Laila tidak lulus ujian.";
}

echo "<br>";

// Soal Nomor 3
// Jika Baihaki sudah mandi, maka boleh main keluar
$sudah_mandi = false;
if ($sudah_mandi) {
    echo "Baihaki boleh main keluar.";
} else {
    echo "Baihaki belum mandi.";
}

echo "<br>";

// Soal Nomor 4
// Jika Karina membawa payung, maka dia tidak akan kehujanan
$bawa_payung = true;
if ($bawa_payung) {
    echo "Karina tidak akan kehujanan.";
} else {
    echo "Karina akan kehujanan.";
}

echo "<br>";

// Soal Nomor 5
// Jika Ghibto lapar, maka dia makan
$laper = true;
if ($laper) {
    echo "Ghibto makan.";
} else {
    echo "Ghibto tidak lapar.";
}

echo "<br>";

// Soal Nomor 6
// Jika desain Ian menarik, maka dia dapat hadiah
$desain_menarik = true;
if ($desain_menarik) {
    echo "Ian dapat hadiah.";
} else {
    echo "Ian tidak dapat hadiah.";
}

echo "<br>";

// Soal Nomor 7
// Jika Salman punya uang lebih dari 50 ribu, dia bisa beli sepatu
$uang_salman = 60000;
if ($uang_salman > 50000) {
    echo "Salman bisa beli sepatu.";
} else {
    echo "Salman tidak bisa beli sepatu.";
}

echo "<br>";

// Soal Nomor 8
// Jika Bagus sedang libur, maka dia tidur siang
$libur = false;
if ($libur) {
    echo "Bagus tidur siang. tapi malamnya dia baru ngedesain";
} else {
    echo "Bagus tidak tidur siang karena dia banyak tugas desain.";
}

echo "<br>";

// Soal Nomor 9
// Jika Althop mendapat desainya menarik, maka dia diajak jalan-jalan
$desain = true;
if ($desain) {
    echo "Althop diajak jalan-jalan.";
} else {
    echo "Althop tetap semangat mendesain.";
}

echo "<br>";

// Soal Nomor 10
// Jika Darwis menyalakan AC, maka kamar dingin
$menyalakan_ac = true;
if ($menyalakan_ac) {
    echo "Kamar Darwis dingin.";
} else {
    echo "Kamar Darwis tidak dingin.";
}
?>