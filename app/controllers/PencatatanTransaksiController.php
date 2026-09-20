<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Produk.php';


class PencatatanTransaksi
{
    private $db;
    private $produkModel;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->produkModel = new Produk($this->db);
    }


    public function pencatatan_transaksi()
    {
        $data = $this->produkModel->getAll();
        require __DIR__ . '/../views/pencatatan-transaksi/index.php';
    }

    
}
