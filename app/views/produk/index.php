<?php

/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>
<h2>Daftar Produk</h2>
<a href="index.php?action=create">+ Tambah Produk</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['nama_produk']) ?></td>
            <td><?= number_format($row['harga']) ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $row['id'] ?>">Edit</a> |
                <a href="index.php?action=destroy&id=<?= $row['id'] ?>"
                    onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require __DIR__ . '/../layout/footer.php'; ?>