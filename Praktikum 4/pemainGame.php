<?php
$totalSkor = 650; // contoh total skor pemain

// Cek apakah pemain mendapatkan hadiah tambahan menggunakan ternary
$hadiah = ($totalSkor > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
