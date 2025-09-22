<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persenKursiKosong = ($kursiKosong/$totalKursi) * 100;

echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persen kursi kosong: $persenKursiKosong% <br>";
?>