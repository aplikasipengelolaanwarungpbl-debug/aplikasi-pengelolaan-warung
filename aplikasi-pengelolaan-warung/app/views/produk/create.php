<?php

/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>
<h2>Tambah Produk</h2>
<form action="index.php?action=store" method="POST">
    <input type="text" name="nama_produk" placeholder="Nama Produk" required><br>
    <input type="number" name="harga" placeholder="Harga" required><br>
    <input type="number" name="stok" placeholder="Stok" required><br>
    <button type="submit">Simpan</button>
</form>

<?php require __DIR__ . '/../layout/footer.php'; ?>