<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sorting nilai dari kecil ke besar
sort($nilaiSiswa);

// Hapus dua nilai terendah
array_shift($nilaiSiswa); // hapus nilai terkecil pertama
array_shift($nilaiSiswa); // hapus nilai terkecil kedua

// Hapus dua nilai tertinggi
array_pop($nilaiSiswa); // hapus nilai terbesar pertama
array_pop($nilaiSiswa); // hapus nilai terbesar kedua

// Hitung total nilai yang tersisa
$totalNilai = array_sum($nilaiSiswa);

// Hitung rata-rata
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: <br>";
echo implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai siswa yang digunakan: $totalNilai <br>";
echo "Rata-rata nilai siswa: $rataRata";
?>
