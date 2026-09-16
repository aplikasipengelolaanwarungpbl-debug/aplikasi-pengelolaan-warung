<?php
/** @var array $data */
require __DIR__ . '/../layout/header.php';

// Kalkulasi statistik dari data produk jika tersedia
$totalProduk = count($data ?? []);
$stokKritis = array_filter($data ?? [], fn($item) => $item['stok'] <= 5);
$totalStok = array_sum(array_column($data ?? [], 'stok'));
?>
