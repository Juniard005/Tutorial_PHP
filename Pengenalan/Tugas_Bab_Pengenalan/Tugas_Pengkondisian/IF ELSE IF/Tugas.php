<?php

// Tugas Pengkondisian IF ELSE IF

// Soal Nomor 1
// Ardi Mendapatkan nilai 85 Jika nilai Ardi > 90 Cetak "Ardi sangat pintar"
$nilai_ardi = 85;

if ($nilai_ardi > 90) {
    echo "Ardi sangat pintar.";
} elseif ($nilai_ardi > 75) {
    echo "Ardi pintar.";
} elseif ($nilai_ardi > 60) {
    echo "Ardi cukup";
} else {
    echo "Ardi perlu belajar lagi.";
}

echo "<br>";

// Soal Nomor 2
// Laila Memiliki Tinggi 165 cm Jika tinggi Laila > 170 cm Cetak "Laila sangat tinggi"
$tinggi_laila = 165;

if ($tinggi_laila > 170) {
    echo "Laila sangat tinggi.";
} elseif ($tinggi_laila > 160) {
    echo "Laila tinggi.";
} elseif ($tinggi_laila > 150) {
    echo "Laila cukup tinggi.";
} else {
    echo "Laila pendek.";
}

echo "<br>";

// Soal Nomor 3
// Baihaki Bangun Pukul 6 Pagi
$jam_baihaki = 6;
if ($jam_baihaki < 5) {
    echo "Baihaki bangun terlalu pagi.";
} elseif ($jam_baihaki < 7) {
    echo "Baihaki bangun pagi.";
} elseif ($jam_baihaki < 11) {
    echo "Baihaki bangun siang.";
} else {
    echo "Baihaki bangun terlalu siang.";
}

echo "<br>";

// Soal Nomor 4
// Usia Karina adalah 3 tahun kategori usia Karina
$usia_karina = 3;
if ($usia_karina <= 2) {
    echo "Karina masih bayi.";
} elseif ($usia_karina <= 4) {
    echo "Karina masih balita.";
} elseif ($usia_karina < 6) {
    echo "Karina anak-anak.";
} else {
    echo "Karina remaja.";
}

echo "<br>";

// Soal Nomor 5
// Ghibto Memiliki Berat Badan 78 kg kategori berat badan Ghibto
$berat_ghibto = 78;
if ($berat_ghibto < 50) {
    echo "Ghibto kekurangan berat badan.";
} elseif ($berat_ghibto >= 50 && $berat_ghibto <= 70) {
    echo "Ghibto memiliki berat badan Normal.";
} elseif ($berat_ghibto >= 71 && $berat_ghibto <= 90) {
    echo "Ghibto memiliki berat badan lebih.";
} else {
    echo "Ghibto obesitas.";
}

echo "<br>";

// Soal Nomor 6
// Ian Memiliki Suhu Udara hari ini adalah 36 derajat Celcius
$suhu_udara = 36;
if ($suhu_udara < 20) {
    echo "Ian Memiliki Suhu Sangat Dingin.";
} elseif ($suhu_udara >= 20 && $suhu_udara <= 30) {
    echo "Ian Memiliki Suhu Dingin.";
} elseif ($suhu_udara >= 31 && $suhu_udara <= 40) {
    echo "Ian Memiliki Suhu Normal.";
} else {
    echo "Ian Memiliki Suhu Sangat Panas.";
}

echo "<br>";

// Soal Nomor 7
// Salman Mendapatkan Nilai Etika 40
$nilai_etika = 40;
if ($nilai_etika > 80) {
    echo "Salman sangat baik.";
} elseif ($nilai_etika > 60) {
    echo "Salman baik.";
} elseif ($nilai_etika = 40) {
    echo "Salman gak Punya Adab.";
} else {
    echo "Salman gak ada Akhlak.";
}

echo "<br>";

// Soal Nomor 8
// Nilai Desain Bagus adalah 120
$nilai_desain = 120;
if ($nilai_desain = 120) {
    echo "Bagus Memiliki Desain sangat siap Untuk Kerja.";
} elseif ($nilai_desain > 100) {
    echo "Bagus Memiliki Desain bagus Untuk Magang.";
} elseif ($nilai_desain > 50) {
    echo "Bagus Memiliki Desain Bagus Perlu Ditingkatin.";
} else {
    echo "Bagus Memiliki Desain kurang.";
}

echo "<br>";

// Soal Nomor 9
// Althop Memiliki Duit Rp 1 Triliun
$duit_althop = "1 Triliun";
if ($duit_althop >= "1 Triliun") {
    echo "Althop kaya raya.";
} elseif ($duit_althop >= "800 Miliar") {
    echo "Althop kaya.";
} elseif ($duit_althop >= "500 Juta") {
    echo "Althop Orang Menengah.";
} else {
    echo "Althop Miskin.";
}

echo "<br>";

// Soal Nomor 10
// Darwis Memiliki 1 Juta Followers di Instagram
$followers_darwis = "1 Juta";
if ($followers_darwis >= "1 Juta") {
    echo "Darwis sangat terkenal.";
} elseif ($followers_darwis >= "500 Ribu") {
    echo "Darwis mulai terkenal.";
} elseif ($followers_darwis >= "100 Ribu") {
    echo "Darwis Influencer Kecil.";
} else {
    echo "Darwis belum terkenal.";
}