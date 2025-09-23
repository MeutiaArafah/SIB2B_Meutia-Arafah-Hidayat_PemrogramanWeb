<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>";
echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";
// praktikkum 4 nomor 21 
$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiUjian);

// mengabaikan dua nilai tertinggi dan dua nilai terendah
$nilaiSortir = array_slice($nilaiUjian, 2, count($nilaiUjian) - 4);

// total nilai
$totalNilai = array_sum($nilaiSortir);

// rata rata nilai
$rataRata = $totalNilai / count($nilaiSortir);

echo "Total nilai tanpa 2 nilai terendah dan 2 nilai tertinggi: $totalNilai <br>";
echo "Rata rata nilai: $rataRata";

echo "<br><br>";
// praktikkum 4 nomor 23
$totalBeli = 120000;
$diskon = 0.20;

if ($totalBeli > 100000) {
    $potongan = $totalBeli * $diskon;
    $hargaDibayar = $totalBeli - $potongan;
    echo "Selamat kamu mendapatkan diskon sebesar 20% !<br>";
    echo "Total harga yang dibayar sebesar: $hargaDibayar";
} else {
    $hargaDibayar = $totalBeli;
    echo "Total harga yang dibayar sebesar: $hargaDibayar";
}

echo "<br><br>";
// praktikkum 4 nomor 25
// $poin = 300;
$poin = 550;

echo "Total skor pemain adalah: $poin <br>";

$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
