<?php
$a = 10;
$b = 5;

$hasilTambah = $a +$b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "<br>";

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Pangkat: $pangkat <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesarSama = $a >= $b;
$hasilLebihKecilSama = $a <= $b;

// pakai ternary
echo "Hasil a sama dengan b: " . ($a == $b ? "Benar" : "Salah") . "<br>";
echo "Hasil a tidak sama dengan b: " . ($a != $b ? "Benar" : "Salah") . "<br>";
echo "Hasil a lebih besar dari b: " . ($a > $b ? "Benar" : "Salah") . "<br>";
echo "Hasil a lebih kecil dari b: " . ($a < $b ? "Benar" : "Salah") . "<br>";
echo "Hasil a lebih besar sama dengan b: " . ($a >= $b ? "Benar" : "Salah") . "<br>";
echo "Hasil a lebih kecil sama dengan b: " . ($a <= $b ? "Benar" : "Salah") . "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: " . ($hasilAnd ? "Benar" : "Salah") . "<br>";
echo "Hasil OR: " . ($hasilOr ? "Benar" : "Salah") . "<br>";
echo "Hasil NOT a: " . ($hasilNotA ? "Benar" : "Salah") . "<br>";
echo "Hasil NOT b: " . ($hasilNotB ? "Benar" : "Salah") . "<br>";
echo "<br>";

$a += $b;
echo "Setelah a += b, nilai a = $a <br>";
$a -= $b;
echo "Setelah a -= b, nilai a = $a <br>";
$a *= $b;
echo "Setelah a *= b, nilai a = $a <br>";
$a /= $b;
echo "Setelah a /= b, nilai a = $a <br>";
$a %= $b;
echo "Setelah a %= b, nilai a = $a <br>";
echo "<br>";

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil a identik dengan b: " . ($hasilIdentik ? "Benar" : "Salah") . "<br>";
echo "Hasil a tidak identik dengan b: " . ($hasilTidakIdentik ? "Benar" : "Salah") . "<br>";
?>