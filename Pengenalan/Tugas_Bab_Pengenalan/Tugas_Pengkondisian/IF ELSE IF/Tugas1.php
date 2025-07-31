<?php

// Tugas Pengkondisian IF ELSE IF

// Soal Nomor 1
// Jika Suhu Di Bandung 15 Derajat Celcius Rara Pakai
$suhu_bandung = 15;

if ($suhu_bandung < 15) {
    echo "Rara pakai jaket tebal.";
} elseif ($suhu_bandung >= 15 && $suhu_bandung <= 25) {
    echo "Rara pakai Sweater.";
} elseif ($suhu_bandung >= 25 && $suhu_bandung <= 40) {
    echo "Rara pakai kaos.";
} else {
    echo "Rara pakai baju pendek.";
}

echo "<br>";

// Soal Nomor 2
// Alwan Mendapatkan Nilai Ui/UX Desain 90
$nilai_alwan = 90;

if ($nilai_alwan >= 90) {
    echo "Alwan sangat bagus dalam UI/UX Desain & Siap Jadi Mentor.";
} elseif ($nilai_alwan >= 80) {
    echo "Alwan bagus dalam UI/UX Desain & Siap Kerja.";
} elseif ($nilai_alwan >= 70) {
    echo "Alwan cukup dalam UI/UX Desain.";
} else {
    echo "Alwan perlu belajar lebih banyak tentang UI/UX Desain.";
}

echo "<br>";

// Soal Nomor 3
// Jamal Suka Bersepeda Di Pagi Hari
$jamal_suka_bersepeda = true;

if ($jamal_suka_bersepeda) {
    echo "Jamal suka bersepeda di pagi hari.";
} elseif ($jamal_suka_bersepeda && date('H') < 12) {
    echo "Jamal Kadang Ketiduran di pagi hari.";
} elseif ($jamal_suka_bersepeda && date('H') >= 12) {
    echo "Jamal bersepeda di sore hari.";
} else {
    echo "Jamal tidak suka bersepeda.";
}

echo "<br>";

// Soal Nomor 4
// Ade Bangun Pagi Hari
$jam_ade = 7;
if ($jam_ade < 5) {
    echo "Ade bangun Shubuh Untuk Sholat Shubuh.";
} elseif ($jam_ade >= 6 && $jam_ade <= 9) {
    echo "Ade bangun Pagi Untuk Kerja.";
} elseif ($jam_ade < 11) {
    echo "Ade bangun siang.";
} else {
    echo "Ade bangun terlalu siang.";
}

echo "<br>";

// Soal Nomor 5
// Kaisya Memilih Satu Warna
$warna_kaisya = "merah";
if ($warna_kaisya == "merah") {
    echo "Kaisya memiliki kepribadian yang Berani.";
} elseif ($warna_kaisya == "biru") {
    echo "Kaisya memiliki kepribadian yang Tenang & Kalem.";
} elseif ($warna_kaisya == "hijau") {
    echo "Kaisya memiliki kepribadian yang Penyayang Alam.";
} else {
    echo "Kaisya memilih warna lain.";
}

echo "<br>";

// Soal Nomor 6
// Salman Memiliki Berat Badan 
$berat_salman = 52;
if ($berat_salman < 50) {
    echo "Salman kekurangan berat badan.";
} elseif ($berat_salman >= 50 && $berat_salman <= 70) {
    echo "Salman memiliki berat badan Normal.";
} elseif ($berat_salman >= 71 && $berat_salman <= 90) {
    echo "Salman memiliki berat badan lebih.";
} else {
    echo "Salman obesitas.";
}

echo "<br>";

// Soal Nomor 7
// Ghibto Memainkan Game Minecraft Mode
$mode_ghibto = "survival";
if ($mode_ghibto == "creative") {
    echo "Ghibto bermain Minecraft dalam mode Kreatif Untuk Building.";
} elseif ($mode_ghibto == "survival") {
    echo "Ghibto bermain Minecraft dalam mode Bertahan Hidup Untuk Latihan.";
} elseif ($mode_ghibto == "hardcore") {
    echo "Ghibto bermain Minecraft dalam mode Hardcore Untuk Uji Nyali.";
} else {
    echo "Ghibto bermain Minecraft dalam mode lain.";
}

echo "<br>";

// Soal Nomor 8
// Laila Ingin Tahu Apakah Sekarang Puasa Wajib
$hari_ini = "Senin";
if ($hari_ini == "Senin" || $hari_ini == "Kamis") {
    echo "Hari ini adalah hari puasa sunnah.";
} elseif ($hari_ini == "Puasa Wajib") {
    echo "Hari ini bukan hari puasa.";
} elseif ($hari_ini == "Puasa Nabi Daud") {
    echo "Hari ini adalah hari puasa sunnah bagi sebagian orang.";
} else {
    echo "Hari ini adalah hari biasa.";
}

echo "<br>";

// Soal Nomor 9
// Ardi Mendapatkan Gajian Bulanan Sekitar 2 Juta
$gaji_ardi = "2 juta";
if ($gaji_ardi == "2 juta") {
    echo "Ardi mendapatkan gaji yang cukup.";
} elseif ($gaji_ardi == "1 juta") {
    echo "Ardi mendapatkan gaji yang kurang.";
} elseif ($gaji_ardi == "500 ribu") {
    echo "Gaji Ardi tidak cukup untuk hidup Di Jakarta.";
} else {
    echo "Ardi mendapatkan gaji yang sangat baik.";
}

echo "<br>";

// Soal Nomor 10
// Baihaki Memiliki Umur 20 Tahun
$umur_baihaki = 20;
if ($umur_baihaki == 20) {
    echo "Baihaki Sudah Dewasa.";
} elseif ($umur_baihaki >= 21) {
    echo "Baihaki Sudah Siap Berkeluarga.";
} elseif ($umur_baihaki < 16) {
    echo "Baihaki Masih Remaja.";
} else {
    echo "Baihaki Masih Anak-anak.";
}
