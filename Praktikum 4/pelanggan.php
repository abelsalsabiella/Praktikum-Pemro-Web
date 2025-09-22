<?php
$hargaProduk = 120000;
$diskon = 0.2; // 20%
$hargaBayar = $hargaProduk;

// Cek apakah harga produk memenuhi syarat diskon
if ($hargaProduk > 100000) {
    $hargaBayar = $hargaProduk - ($hargaProduk * $diskon);
}

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ",", ".") . "<br>";
echo "Diskon: " . ($diskon * 100) . "% <br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaBayar, 0, ",", ".") . "<br>";
?>
