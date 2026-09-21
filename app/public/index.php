<?php
require_once __DIR__ . '/../controllers/ProdukController.php';
require_once __DIR__ . '/../controllers/DashboardController.php';
require_once __DIR__ . '/../controllers/PencatatanTransaksiController.php';
require_once __DIR__ . '/../controllers/RiwayatTransaksiController.php';


$produkController = new ProdukController();
$dashboardController = new DashboardController();
$pencatatanTransaksiController = new PencatatanTransaksiController();
$riwayatTransaksiController = new RiwayatTransaksiController();


// Ambil action dari URL, default ke 'dashboard' kalau kosong
$action = $_GET['action'] ?? 'dashboard';

// Hindari memanggil method sembarangan seperti __construct
if (str_starts_with($action, '__')) {
    die("404 - Halaman tidak ditemukan");
}

if (method_exists($produkController, $action)) {
    $produkController->$action();
} elseif (method_exists($dashboardController, $action)) {
    $dashboardController->$action();
} elseif (method_exists($pencatatanTransaksiController, $action)) {
    $pencatatanTransaksiController->$action();
} elseif (method_exists($riwayatTransaksiController, $action)) {
    $riwayatTransaksiController->$action();
} else {
    die("404 - Halaman tidak ditemukan");
}