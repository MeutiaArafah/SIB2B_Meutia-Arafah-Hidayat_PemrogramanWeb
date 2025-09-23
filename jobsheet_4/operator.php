<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah $a dan $b adalah $hasilTambah<br>";
echo "Hasil kurang $a dan $b adalah $hasilKurang<br>";
echo "Hasil kali $a dan $b adalah $hasilKali<br>";
echo "Hasil bagi $a dan $b adalah $hasilBagi<br>";
echo "Hasil sisa bagi $a dan $b adalah $sisaBagi<br>";
echo "Hasil pangkat $a dan $b adalah $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;


echo "<br><br>";

echo "Apakah a sama dengan b? ";
var_dump($hasilSama);
echo "<br>";

echo "Apakah a tidak sama dengan b? ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Apakah a lebih kecil dari b? ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Apakah a lebih besar dari b? ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Apakah a lebih kecil atau sama dengan b? ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Apakah a lebih besar atau sama dengan b? ";
var_dump($hasilLebihBesarSama);
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br><br>";

echo "Hasil AND (&&) : ";
var_dump($hasilAnd);
echo "<br>";

echo "Hasil OR (||) : ";
var_dump($hasilOr);
echo "<br>";

echo "Hasil NOT A (!=) : ";
var_dump($hasilNotA);
echo "<br>";

echo "Hasil NOT B (!=) : ";
var_dump($hasilNotB);
echo "<br>";

echo "<br><br>";
$a += $b;
echo "Hasil operator += : $a<br>";
$a -= $b;
echo "Hasil operator -= : $a<br>";
$a *= $b;
echo "Hasil operator *= : $a<br>";
$a /= $b;
echo "Hasil operator /= : $a<br>";
$a %= $b;
echo "Hasil operator %= : $a<br>";

echo "<br><br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a hasilnya identik dengan b? ";
var_dump($hasilIdentik);
echo "<br>";

echo "Apakah a hasilnya tidak identik dengan b? ";
var_dump($hasilTidakIdentik);
echo "<br>";

echo "<br><br>";
// tugas praktikum 3
$kursiAwal = 45;
$kursiDitempati = 28;

$kursiKosong = $kursiAwal - $kursiDitempati;
$hasilPersentase = $kursiKosong / $kursiAwal * 100;

echo "Jumlah kursi kosong : $kursiKosong<br>";
echo "Persentase kursi kosong : $hasilPersentase<br>";

?>