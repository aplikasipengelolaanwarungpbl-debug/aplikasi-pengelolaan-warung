<?php

/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>

<h2>Edit Produk</h2>
<form action="/produk/update" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <input type="text" name="nama_produk" value="<?= htmlspecialchars($data['nama_produk']) ?>" required><br>
    <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br>
    <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br>

    <button type="submit">Update</button>
</form>

<?php require __DIR__ . '/../layout/footer.php'; ?>