<?php

// Output String
// Fungsi echo digunakan untuk menampilkan output text biasa
// Fungsi echo tidak mengembalikan nilai apapun
// Fungsi echo dapat digunakan untuk menampilkan string, variabel, atau ekspresi
echo "Nama Gue adalah Ardi Juni Yansyah";

echo "<br>";

// Ouput String
// Fungsi print digunakan untuk menampilkan output text & bisa di return
// Fungsi print mengembalikan nilai 1 jika berhasil
print ("Nama Istriku adalah Sumire Kakei");

echo "<br>";

// Output Array
// Fungsi print_r digunakan untuk menampilkan output array
// Fungsi print_r mengembalikan nilai true jika berhasil
$MyTim = array("Ardi", "Sumire", "Ghibto", "Baihaqi", "Bagus", "Ian", "Althop", "Ade", "Salman", "Iwan", "Faiz", "Hubeb", "Alfin", "Reno", "Rizki", "Dani", "Kaisya", "Darwis");
print_r($MyTim);

echo "<br>";

// Output Tipe Data
// Fungsi var_dump digunakan untuk menampilkan tipe data dari variabel
// Fungsi var_dump mengembalikan nilai true jika berhasil
$Team = array("Ardi", "Sumire", "Ghibto", "Baihaqi", "Bagus", "Ian", "Althop", "Ade", "Salman", "Iwan", "Faiz", "Hubeb", "Alfin", "Reno", "Rizki", "Dani", "Kaisya", "Darwis");
var_dump($Team);

?>
