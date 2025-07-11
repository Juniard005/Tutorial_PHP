<?php

// Operator Perbandingan
// Operator Perbandingan adalah operator yang digunakan untuk membandingkan dua nilai
// Operator Perbandingan terdiri dari 6 jenis, yaitu:
// 1. Sama Dengan (==)
// 2. Tidak Sama Dengan (!=)
// 3. Lebih Besar Dari (>)
// 4. Lebih Kecil Dari (<)
// 5. Lebih Besar Sama Dengan (>=)
// 6. Lebih Kecil Sama Dengan (<=)

// Contoh Penggunaan Operator Perbandingan
$a = 10;
$b = 20;

// Sama Dengan
echo "ini adalah contoh operator perbandingan sama dengan (==)<br>";
var_dump($a == $b); // false
echo "<br>";

// kalau kedua nilai sama, maka hasilnya true, jika tidak sama maka hasilnya false
var_dump($a == 10); // true
echo "<br><br>";

// Tidak Sama Dengan
echo "ini adalah contoh operator perbandingan tidak sama dengan (!=)<br>";
var_dump($a != $b); // true
echo "<br><br>";

// lebih Besar Dari
echo "ini adalah contoh operator perbandingan lebih besar dari (>)<br>";
var_dump($b > $a); // false
echo "<br><br>";

// lebih Kecil Dari
echo "ini adalah contoh operator perbandingan lebih kecil dari (<)<br>";
var_dump($a < $b); // true
echo "<br><br>";

// Lebih Besar Sama Dengan
echo "ini adalah contoh operator perbandingan lebih besar sama dengan (>=)<br>";
var_dump($b >= $a); // true
echo "<br><br>";

// Lebih Kecil Sama Dengan
echo "ini adalah contoh operator perbandingan lebih kecil sama dengan (<=)<br>";
var_dump($a <= $b); // true
echo "<br><br>";

?>