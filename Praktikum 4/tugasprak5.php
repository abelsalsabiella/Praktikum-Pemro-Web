<?php
// Data siswa dalam array dua dimensi
$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

// Menghitung total nilai
$total = 0;
foreach ($daftarNilai as $siswa) {
    $total += $siswa[1]; // mengambil nilai dari indeks ke-1
}

// Menghitung rata-rata
$rataRata = $total / count($daftarNilai);

// Menampilkan rata-rata
echo "<h3>Rata-rata nilai kelas: $rataRata</h3>";

// Menampilkan siswa dengan nilai di atas rata-rata
echo "Siswa dengan nilai di atas rata-rata:";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama</th><th>Nilai</th></tr>";

$no = 1;
foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>{$siswa[0]}</td>";
        echo "<td>{$siswa[1]}</td>";
        echo "</tr>";
        $no++;
    }
}

echo "</table>";
?>
