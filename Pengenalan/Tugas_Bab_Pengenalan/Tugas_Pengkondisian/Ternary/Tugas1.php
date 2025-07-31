<?php

// Soal Tugas Pengkondisian Ternary

// Soal Nomor 1
// Rara Sedang Mengecek Suhu Tubuhnya
$suhuTubuh = 38;
echo ($suhuTubuh > 36) ? "Rara Saat Ini Sedang Sehat" : "Rara Saat Ini Sedang Sakit";
echo "<br>";

// Soal Nomor 2
// Alwan ingin tahu apakah dia bisa naik bus hari ini. Jika saldo e-money di bawah 3000
$saldo = 10000;
echo ($saldo > 3000) ? "Alwan Bisa Naik Bus" : "Alwan Tidak Bisa Naik Bus";
echo "<br>";

// Soal Nomor 3
// Jamal Saat Ini Punya Misi Live Tiktok Dari Jam 8 Sampai Jam 12 Siang
$live = 9;
echo ($live > 8 && $live < 12) ? "Jamal Sedang Live Tiktok Jualan Produk" : "Jamal Sedang Naik Sepeda";
echo "<br>";

// Soal Nomor 4
// Ade Mau Beli KopiSusu Dengan Harga Rp. 21.000 dengan Uang Yang Dibawanya Rp. 1 Juta
$uang = 1000000;
echo ($uang > 21000) ? "Ade Bisa Beli Kopi Susu" : "Ade Tidak Bisa Beli KopiSusu";
echo "<br>";

// Soal Nomor 5
// Kaisya Mau Sarapan Dulu Abis Itu Lanjut Desain
$sarapan = true;
echo ($sarapan) ? "Kaisya Sedang Sarapan" : "Kaisya Sedang Desain";
echo "<br>";

// Soal Nomor 6
// Ardi Mengecek Status Login Jika Sudah Tampilkan Dashboard Jika Belum Tampilkan Login
$login = true;
echo ($login) ? "Ardi Sedang Berada Di Dashboard" : "Ardi Sedang Berada Di Login";
echo "<br>";

// Soal Nomor 7
// Laila Sedang Prospek 1 Orang Jika Berhasil Siap Prospek Jika Gagal dia Harus Calling Lagi
$prospek = false;
echo ($prospek) ? "Laila Sedang Prospek" : "Laila Ditolak & Harus Calling Lagi";
echo "<br>";

// Soal Nomor 8
// Baihaki Sedang Mendesain Baju Jika Selesai Baihaki Lanjut Mendesain Poster
$desain = true;
echo ($desain) ? "Baihaki Sedang Mendesain Baju" : "Baihaki Sedang Mendesain Poster";
echo "<br>";

// Soal Nomor 9
// Karina Ingin Melihat Oulitenya Buka Gak Kalau Minggu
$buka = "Minggu";
echo ($buka != "Minggu") ? "Karina Bisa Melihat Oulitenya Buka" : "Karina Tidak Bisa Melihat Oulitenya Buka";
echo "<br>";

// Soal Nomor 10
// Ghibto Mau Nonton Sama Ceweknya Selanjutnya Ghibto Mau Makan Sama Ceweknya
$ngedate = "Nonton";
echo ($ngedate == "Nonton") ? "Ghibto Sedang Nonton Sama Ceweknya" : "Ghibto Sedang Makan Sama Ceweknya";

?>