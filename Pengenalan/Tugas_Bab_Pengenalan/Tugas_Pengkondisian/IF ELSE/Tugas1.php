<?php

// IF ELSE IF

// Soal Nomor 11

//  Jika Baihaki sedang belajar, jika bukan baihaki cetak bukan baihaki
$nama = "Baihaki";

if ($nama == "Baihaki") {
    echo "Baihaki sedang belajar.";
} else {
    echo "Bukan Baihaki.";
}

echo "<br>";

// Soal Nomor 12
// Jika Ghibto Umurnya Lebih dari 18 Tampilkan Sudah Dewasa, jika tidak tampilkan Belum Dewasa
$umur = 20;

if ($umur > 18) {
    echo "Ghibto sudah dewasa.";
} else {
    echo "Ghibto belum dewasa.";
}

echo "<br>";

// Soal Nomor 13
// Jika Rara Adalah Wanita, tampilkan Rara adalah Wanita Tangguh jika tidak tampilkan Rara adalah Pria
$jenis_kelamin = "perempuan";

if ($jenis_kelamin = "perempuan") {
    echo "Rara adalah wanita tangguh.";
} else {
    echo "Rara adalah Pria";
}

echo "<br>";

// Soal Nomor 14
// Jika nilai Desain Ian bagus maka ian siap untuk kerja
$nilai_desain = 85;

if ($nilai_desain >= 80) {
    echo "Ian siap untuk kerja.";
} else {
    echo "Ian perlu belajar lebih giat.";
}

echo "<br>";

// Soal Nomor 15
// jika Bagus suka Kopi maka tampilkan Bagus Ngopi di pagi hari kalau tidak tampilkan Bagus lebih suka Teh
$suka_kopi = true;
if ($suka_kopi) {
    echo "Bagus ngopi di pagi hari.";
} else {
    echo "Bagus lebih suka teh.";
}

echo "<br>";

// Soal Nomor 16
// jika Tinggi Badan Ardi lebih dari 170 tampilkan "Ardi Bisa Jadi Model" jika tidak tampilkan "Ardi Sangat Fokus Belajar dan Ngoding"
$tinggi_badan = 168;
if ($tinggi_badan > 170) {
    echo "Ardi bisa jadi model.";
} else {
    echo "Ardi sangat fokus belajar dan ngoding.";
}

echo "<br>";

// Soal Nomor 17
// jika Karina Memakai hijab tampilkan "Karina tampil anggun" jika tidak tampilkan "Karina tetap cantik"
$pakai_hijab = true;
if ($pakai_hijab) {
    echo "Karina tampil anggun.";
} else {
    echo "Karina tetap cantik.";
}

echo "<br>";

// Soal Nomor 18
// jika Jamal membawa gitar tampilkan "Jamal siap manggung" jika tidak tampilkan "Jamal jadi penonton"
$bawa_gitar = false;
if ($bawa_gitar) {
    echo "Jamal siap manggung.";
} else {
    echo "Jamal jadi penonton.";
}

echo "<br>";

// Soal Nomor 19
// jika nilai Darwis 90 keatas tampilkan "Darwis Dapat Beasiswa" jika tidak tampilkan "Darwis Perlu Belajar Lagi"
$nilai = 95;
if ($nilai > 90) {
    echo "Darwis dapat beasiswa.";
} else {
    echo "Darwis perlu belajar lagi.";
}

echo "<br>";

// Soal Nomor 20
// jika Althop suka Desain tampilkan "Althop Jago Figma" jika tidak Tampilkan "Althop Lebih Suka Canva"
$suka_desain = true;
if ($suka_desain) {
    echo "Althop jago Figma.";
} else {
    echo "Althop lebih suka Canva.";
}

?>