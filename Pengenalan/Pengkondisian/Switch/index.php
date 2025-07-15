<?php

// Ternary Operator Example
$nama = "Ardi Juni Yansyah";

switch ($nama) {
    case "Ardi Juni Yansyah":
        echo "Nama Gue: Ardi Juni Yansyah";
        break;
    case "Achmad Rizky Baihaki":
        echo "Nama Gue: Achmad Rizky Baihaki";
        break;
    case "Ghibto Syidqi":
        echo "Nama Gue: Ghibto Syidqi";
        break;
    default:
        echo "Nama Tidak Dikenal";
        break;
}

echo "<br>";

$menu = "Salad Buah";

switch ($menu) {
    case "Salad Buah":
        echo "Menu: Salad Buah";
        break;
    case "Mie Goreng":
        echo "Menu: Mie Goreng";
        break;
    default:
        echo "Menu Tidak Dikenal";
        break;
}

echo "<br>";

$vegan = "Salad Sayuran";

switch ($vegan) {
    case "Nasi Goreng":
        echo "Menu: Nasi Goreng";
        break;
    case "Salad Sayuran":
        echo "Menu: Salad Sayuran";
        break;
    default:
        echo "Menu Tidak Dikenal";
        break;
}

echo "<br>";

$minuman = "Kopi Moka";

switch ($minuman) {
    case "Coklat":
        echo "Minuman: Coklat";
        break;
    case "Kopi Susu":
        echo "Minuman: Kopi Susu";
        break;
    case "Kopi Susu Gula Aren":
        echo "Minuman: Kopi Susu Gula Aren";
        break;
    case "Kopi Moka":
        echo "Minuman: Kopi Moka";
        break;
    default:
        echo "Minuman Tidak Dikenal";
        break;
}

echo "<br>";

$timothy = "Timothy";

switch ($timothy) {
    case "Timothy":
        echo "Itu Formula Orang Tolol Makanya Miskin Semua yg Ngajarin itu";
        break;
    case "Skill":
        echo "Loh Miskin Loh Gak Punya Skill";
        break;
    case "Tidur Siang":
        echo "Siapa Yang Tidur Siang Loh Capek Yaa Kerja";
        break;
    default:
        echo "Timothy Tidak Dikenal";
        break;
}

echo "<br>";

$pekerjaan = "Fullstack Web Developer";

switch ($pekerjaan) {
    case "Fullstack Web Developer":
        echo "Pekerjaan: Fullstack Web Developer";
        break;
    case "Backend Developer":
        echo "Pekerjaan: Backend Developer";
        break;
    case "Frontend Developer":
        echo "Pekerjaan: Frontend Developer";
        break;
    case "Koki":
        echo "Pekerjaan: Koki";
        break;
    default:
        echo "Penganguran";
        break;
}

echo "<br>";

$hobi = "Basketball";

switch ($hobi) {
    case "Basketball":
        echo "Hobi: Basketball";
        break;
    case "Futasal":
        echo "Hobi: Futsal";
        break;
    case "Renang":
        echo "Hobi: Renang";
        break;
    default:
        echo "Hobi Tidak Dikenal";
        break;
}

?>