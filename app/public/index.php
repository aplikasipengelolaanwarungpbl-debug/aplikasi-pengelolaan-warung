<?php
require_once __DIR__ . '/../controllers/ProdukController.php';

$controller = new ProdukController();

// Ambil action dari URL, default ke 'index' kalau kosong
$action = $_GET['action'] ?? 'index';

// Cek apakah method ini benar-benar ada di controller
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die("404 - Halaman tidak ditemukan");
}
