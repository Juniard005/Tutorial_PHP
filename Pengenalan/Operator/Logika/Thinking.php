<?php

// Operator Logika
// Operator logika digunakan untuk menggabungkan beberapa kondisi.
// Operator logika yang umum digunakan adalah Double Dan (&&), Double ORE (||), dan NOT (!).

// Contoh penggunaan operator logika double dan (&&)
$s = 250;
var_dump($s < 100 && $s * 2 == 1000); // false
// ini contoh hasil false 
echo "<br>";

var_dump($s > 100 && $s * 4 == 1000); // true
// ini contoh hasil true
echo "<br>";
echo "<hr>";

// contoh penggunaan operator logika double ore (||)
$k = 1000;
var_dump($k < 100 || $k * 2 == 2000); // true
// ini contoh hasil true
echo "<br>";

var_dump($k < 100 || $k - 300 == 600); // false
// ini contoh hasil false
echo "<br>";
echo "<hr>";

// contoh penggunaan operator logika not (!)
$h = 500;   
var_dump(!($h < 100)); // true
// ini contoh hasil true
echo "<br>";

var_dump(!($h < 1000)); // false
// ini contoh hasil false
echo "<br>";

?>