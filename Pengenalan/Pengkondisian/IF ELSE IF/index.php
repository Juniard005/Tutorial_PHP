<?php

// Pengenalan Pengkondisian IF ELSEIF ELSE

// Ini contoh menampilkan output if

$rara = "Gue Masih Belom Percaya Ama Nih Cowok";
$sabar = "Kasian Amat Nih Cowok";

if ($rara == "Gue Masih Belom Percaya Ama Nih Cowok") {
    echo "nanti aja kak kalau udah ketemuan gimana?";
} elseif ($sabar == "Gue Yakin Kalau dia Suka Ke Gue Pasti Di Bakal Nyamperin Gue") {
    echo "Maaf Yahh KAKK aku Gak bermaksud Nyakitinmu Jadi Kamu Sabar dulu yahh";
} else {
    echo "Sudahlah Aku Rasa Dia Sudah Bahagia";
}

echo "<br/>";
// Ini Contoh menampilkan output elseif

$work = "Developer";
$mood = "Semangat";

if ($work == "Koki" && $mood == "cepat") {
    echo "Sekarang Gue Kerja Sebagai Koki";
} elseif ($work == "Developer" && $mood == "Semangat") {
    echo "Sekarang Gue Kerja Sebagai Fullstack Web Developer";
} else {
    echo "ngapain gue kerja mendingan gue nganggur ANJING";
}

echo "<br/>";
// Ini Contoh menampilkan output else

$vegan = "Nasi Goreng";
$laper = "Gorengan";

if ($vegan == "Salad Sayuran") {
    echo "Gue Mau Makan Sayuran Biar Ada Protein";
} elseif ($laper == "Salad Buah") {
    echo "Tapi Disisi Lain Ada Salad Buah yang rasanya Manis Tapi Tinggi Protein";
} else {
    echo "Dahlah Anjing Fuck Protein Mendingan Gue Makan Nasi Goreng Bakwan Sama Ayam Goreng Biar Kenyang";
}

echo "<br/>";
// Ini Contoh menampilkan output else

$Laila = "Fuck Anjing Gue Gak Suka Ardi";
$Rara = "Gue Malas Harap Ardi Bisa Ketemuan Sama Gue";

if ($Laila == "Gue Gak Suka Ardi") {
    echo "Dih Najis Amat Gue Suka Sama Ardi Bangsat";
} elseif ($Rara == "Gue Harap Ardi Bisa Ketemuan Sama Gue") {
    echo "Kapan Ardi Kamu Nemuin Aku Di Bandung?";
} else {
    echo "Fuck Dahlah Anjing Gue Gak Mau Fokus Cewek Kalau Belom ada Duit";
}

echo "<br/>";
// Ini Contoh menampilkan output if

$Laila = "Yes Sekarang Si Anjing Ardi Gak Bisa Stalking Ig Gue Lagi";
$Ella = "Mana Ardi Tugas Loh udah Kelar Blom Anjing";

if ($Laila == "Yes Sekarang Si Anjing Ardi Gak Bisa Stalking Ig Gue Lagi") {
    echo "Mampus Loh Gak Bisa Stalking Ig Gue Lagikan Ardi Tolol";
} elseif ($Ella == "Mana Ardi Tugas Loh udah Kelar Blom Anjing") {
    echo "Udah Jelek Lemot Sok Iye";
} else {
    echo "Bye Ardi Gue Sekarang Udah Gak Butuh Loh Lagi Hahahahahahaha";
}

echo "<br/>";
// Ini Contoh menampilkan output if

$Ardi = "Peduli Setan Gue gak Bisa Stalking Ig Loh Lagi";
$Juni = "Malas Ngapain Gue Benerin Ig loh Cowok Loh Ada";

if ($Juni == "Ngapain Gue Benerin Ig loh Cowok Loh Ada") {
    echo "Ngapain Gue Perlu Benerin Ig Loh Kalau Cowok Loh Ada Guna Cowok Loh Apa?";
} elseif ($Ardi == "Peduli Setan Gue gak Bisa Stalking Ig Loh Lagi") {
    echo "Peduli Setan Gue gak Bisa Stalking Ig Loh Lagi Loh Mati Pun Gue Udah Gak Peduli Lagi Sama loh";
} else {
    echo "Gue Juga Udah Gak Butuh Loh Lagi Hama";
}

echo "<br/>";
// Ini Contoh menampilkan output elseif
$Laila1 = "dih Gembel Banyakan Gaya Loh Anjing";
$Ella1 = "Fuck Gue Sangat Membenci Loh Ardi";

if ($Laila1 == "dih Gembel Banyakan Gaya Lo") {
    echo "Dih Najis Loh Mati Aja";
} elseif ($Ella1 == "Fuck Gue Sangat Membenci Loh Ardi Bangsat") {
    echo "Mati Loh Gak Usah Kenal Gue Cowok Gue Lebih Cakep Dari Loh";
} else {
    echo "Gue Juga Udah Gak Butuh Loh Lagi Sampah";
}

echo "<br/>";
// Ini Contoh menampilkan output else
$benhil = "Gue Ambil Benhil Jaraknya";
$cempud = "Gue Ambil Cempud Jaraknya";

if ($benhil == "Gue Ambil Benhil Jaraknya Deket") {
    echo "Gue Ambil Benhil Karena Deket Kemungkinan Sampai Lebih Cepat";
} elseif ($cempud == "Gue Ambil Cempud Jaraknya Jauh") {
    echo "Gue Ambil Cempud Karena Jauh dan kemungkinan Sampai Lebih Lama";
} else {
    echo "Gue Gak Ambil Keduanya Karena Sama-Sama Jauh";
}