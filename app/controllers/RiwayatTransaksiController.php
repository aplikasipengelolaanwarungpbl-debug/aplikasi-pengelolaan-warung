<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Produk.php';

class RiwayatTransaksiController
{
    private $db;
    private $produkModel;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->produkModel = new Produk($this->db);
    }

    public function riwayatTransaksi()
    {
        $data = $this->produkModel->getAll();
        require __DIR__ . '/../views/riwayat-transaksi/index.php';
    }
}