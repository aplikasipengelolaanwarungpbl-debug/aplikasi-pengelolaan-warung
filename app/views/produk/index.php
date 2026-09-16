<?php
/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>

<div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
  <div>
    <h3 class="fw-bold mb-1">Daftar Produk Warung</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php?action=dashboard" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produk</li>
      </ol>
    </nav>
  </div>
  <div>
    <a href="index.php?action=create" class="btn btn-primary d-inline-flex align-items-center gap-1 shadow-sm">
      <i class="ti ti-plus fs-5"></i>
      <span>Tambah Produk</span>
    </a>
  </div>
</div>

<div class="card border-0 shadow-sm">
  <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
    <h5 class="card-title mb-0 fw-semibold text-dark">Stok Produk</h5>
    <span class="badge bg-light text-secondary border"><?= count($data) ?> Item Terdaftar</span>
  </div>
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th scope="col" class="ps-4" style="width: 60px;">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col" class="text-end pe-4" style="width: 140px;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($data)): ?>
          <?php $no = 1; foreach ($data as $row): ?>
            <tr>
              <td class="ps-4 text-secondary"><?= $no++ ?></td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="bg-light rounded p-2 me-3 text-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="ti ti-package fs-4"></i>
                  </div>
                  <div>
                    <h6 class="mb-0 fw-semibold text-dark"><?= htmlspecialchars($row['nama_produk']) ?></h6>
                    <small class="text-muted">ID: #<?= $row['id'] ?></small>
                  </div>
                </div>
              </td>
              <td>
                <span class="fw-medium text-dark">Rp <?= number_format($row['harga'], 0, ',', '.') ?></span>
              </td>
              <td>
                <?php if ($row['stok'] <= 0): ?>
                  <span class="badge bg-danger-subtle text-danger border border-danger-subtle badge-stock">Habis (0)</span>
                <?php elseif ($row['stok'] <= 5): ?>
                  <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle badge-stock"><?= $row['stok'] ?> (Kritis)</span>
                <?php else: ?>
                  <span class="badge bg-success-subtle text-success border border-success-subtle badge-stock"><?= $row['stok'] ?> pcs</span>
                <?php endif; ?>
              </td>
              <td class="text-end pe-4">
                <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-secondary btn-icon me-1" title="Edit Produk">
                  <i class="ti ti-edit"></i>
                </a>
                <a href="index.php?action=destroy&id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger btn-icon" title="Hapus Produk" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                  <i class="ti ti-trash"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center py-5 text-muted">
              <i class="ti ti-package-off fs-1 d-block mb-2 text-secondary"></i>
              Belum ada data produk. <br>
              <a href="index.php?action=create" class="btn btn-sm btn-primary mt-2">Tambah Produk Baru</a>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>