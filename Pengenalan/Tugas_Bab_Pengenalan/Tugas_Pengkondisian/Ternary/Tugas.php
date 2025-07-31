<?php

// Soal Tugas Pengkondisian Ternary

// Soal Nomor 1
// Ardi Punya Uang Sebesar 2 Juta Dan Dia Beli Kelas Copywriting Dengan Harga 100 ribu
$duit = 2000000;
echo ($duit - 100000 >= 0) ? "Ardi Beli Kelas Copywriting" : "Ardi Tidak Beli Kelas Copywriting";
echo "<br>";

// Soal Nomor 2
// Laila Mendapatkan Nilai 85 Apakah Dia Lulus Dengan Nilai Lulus Minimal 75
$nilai = 85;
echo ($nilai >= 75) ? "Laila Lulus Dari Academy Backend Web Developer" : "Laila Tidak Lulus";
echo "<br>";

// Soal Nomor 3
// Baihaki memiliki SIM Apakah Dia Boleh Berkendara Jarak Jauh
$punyaSIM = true;
echo ($punyaSIM) ? "Baihaki Boleh Berkendara Jarak Jauh" : "Baihaki Tidak Boleh Berkendara Jarak Jauh";
echo "<br>";

// Soal Nomor 4
// Karina tidur pukul 23:00 Apakah dia termasuk larut malam (lebih dari pukul 22:00)
$jamTidur = 23;
echo ($jamTidur > 22) ? "Karina Termasuk Larut Malam" : "Karina Tepat Waktu";
echo "<br>";

// Soal Nomor 5
// Ghibto membawa 3 buku apakah dia membawa cukup buku (minimal 2 buku)
$buku = 3;
echo ($buku >= 2) ? "Ghibto Membawa Cukup Buku" : "Ghibto Tidak Membawa Cukup Buku";
echo "<br>";

// Soal Nomor 6
// ian berumur 20 tahun apakah dia sudah dewasa(minimal 18 tahun)
$umur = 20;
echo ($umur >= 18) ? "Ian Sudah Dewasa" : "Ian Belum Dewasa";
echo "<br>";

// Soal Nomor 7
// Salman mendapatkan 50 like di IG.Apakah Itu Cukup untuk Viral(Minimal 100)
$likes = 50;
echo ($likes >= 100) ? "Postingan Salman Viral" : "Postingan Salman Belum Viral";
echo "<br>";

// Soal Nomor 8
// Bagus Memiliki Desain Yang Bagus.Apakah Bagus Juara Desain
$peringkat = 1;
echo ($peringkat == 1) ? "Bagus Eka Juara Desain" : "Bagus Harus Lebih Memperdalam Desainya";
echo "<br>";

// Soal Nomor 9
// Althop Mendesain Pakai Software Desain Figma
$tools = "Figma";
echo ($tools == "Figma") ? "Althop Desain Pakai Figma" : "Althop DesainPakai Canva";
echo "<br>";

// Soal Nomor 10
// Darwis Punya laptop Apakah Dia Bisa Ikut Pelatihan Pemograman Online
$Device = true;
echo ($Device) ? "Darwis Bisa Ikut Pelatihan" : "Darwis Tidak Bisa Ikut Pelatihan";

?>