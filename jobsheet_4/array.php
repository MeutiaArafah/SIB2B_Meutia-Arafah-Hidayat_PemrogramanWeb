<?php 
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);


echo "<br><br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', 
$karyawanPengalamanLimaTahun);

echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br><br>";
// praktikum terakhir nomor 13 => cetak nilai saja
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$nilaiDiatasRataRata = [];

// total nilai seluruh siswa
$totalNilai = 0;
foreach($daftarNilai as $data){
    $totalNilai += $data[1];
}

// rata rata nilai
$rataRata = $totalNilai / count($daftarNilai);

foreach ($daftarNilai as $data){
    if($data[1] > $rataRata){
        $nilaiDiatasRataRata[] = $data;
    }
}

echo "Rata- rata nilai: $rataRata<br>";
echo "Daftar siswa yang nilainya diatas rata-rata: <br>";

foreach ($daftarNilai as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>
