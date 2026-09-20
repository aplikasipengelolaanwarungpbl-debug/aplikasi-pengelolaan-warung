<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Produk.php';

class DashboardController
{
    
    private $db;
    private $produkModel;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->produkModel = new Produk($this->db);
    }


    public function dashboard()
    {
        $data = $this->produkModel->getAll();
        require __DIR__ . '/../views/dasbor/index.php';
    }
}
