<?php
require_once __DIR__ . '/../controllers/ProdukController.php';
require_once __DIR__ . '/../controllers/DashboardController.php';
require_once __DIR__ . '/../controllers/PencatatanTransaksiController.php';

$produkController = new ProdukController();
$dashboardController = new DashboardController();
$pencatatanTransaksiController = new PencatatanTransaksi();

// Ambil action dari URL, default ke 'index' kalau kosong
$action = $_GET['action'] ?? 'dashboard';

// Cek apakah method ini benar-benar ada di controller
if (method_exists($produkController, $action)) {
    $produkController->$action();
} elseif (method_exists($dashboardController, $action)) {
    $dashboardController->$action();
} elseif (method_exists($pencatatanTransaksiController, $action)) {
    $pencatatanTransaksiController->$action();
} else {
    die("404 - Halaman tidak ditemukan");
}
