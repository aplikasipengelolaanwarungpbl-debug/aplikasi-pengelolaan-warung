<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Produk.php';

class ProdukController
{
    private $db;
    private $produkModel;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->produkModel = new Produk($this->db);
    }

    public function index()
    {
        $data = $this->produkModel->getAll();
        require __DIR__ . '/../views/produk/index.php';
    }

    public function dashboard()
    {
        $data = $this->produkModel->getAll();
        require __DIR__ . '/../views/dasbor/index.php';
    }

    public function dasbor()
    {
        $this->dashboard();
    }

    public function create()
    {
        require __DIR__ . '/../views/produk/create.php';
    }

    public function store()
    {
        if (empty($_POST['nama_produk']) || empty($_POST['harga'])) {
            die("Nama Produk dan harga wajib diisi!");
        };

        $this->produkModel->create(
            $_POST['nama_produk'],
            $_POST['harga'],
            $_POST['stok']
        );
        header("Location: index.php?action=index");
        exit;
    }

    public function edit()
    {
        $data = $this->produkModel->getById($_GET['id']);
        require __DIR__ . '/../views/produk/edit.php';
    }

    public function update()
    {
        $this->produkModel->update(
            $_POST['id'],
            $_POST['nama_produk'],
            $_POST['harga'],
            $_POST['stok']
        );
        header("Location: index.php?action=index");
        exit;
    }

    public function destroy()
    {
        $this->produkModel->delete($_GET['id']);
        header("Location: index.php?action=index");
        exit;
    }
}
