<?php
/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>

<div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
  <div>
    <h3 class="fw-bold mb-1">Edit Produk</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php?action=dashboard" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.php?action=index" class="text-decoration-none">Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit #<?= $data['id'] ?></li>
      </ol>
    </nav>
  </div>
  <div>
    <a href="index.php?action=index" class="btn btn-outline-secondary d-inline-flex align-items-center gap-1">
      <i class="ti ti-arrow-left fs-5"></i>
      <span>Kembali</span>
    </a>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-12 col-lg-8">
    <div class="card border-0 shadow-sm">
      <div class="card-header bg-white py-3 border-bottom">
        <h5 class="card-title mb-0 fw-semibold text-dark">Ubah Informasi Produk</h5>
      </div>
      <div class="card-body p-4">
        <form action="index.php?action=update" method="POST">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">

          <div class="mb-3">
            <label for="nama_produk" class="form-label fw-medium text-secondary">Nama Produk <span class="text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-text bg-light text-muted"><i class="ti ti-box"></i></span>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= htmlspecialchars($data['nama_produk']) ?>" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="harga" class="form-label fw-medium text-secondary">Harga (Rp) <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light text-muted">Rp</span>
                <input type="number" class="form-control" id="harga" name="harga" min="0" value="<?= $data['harga'] ?>" required>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="stok" class="form-label fw-medium text-secondary">Jumlah Stok <span class="text-danger">*</span></label>
              <div class="input-group">
                <span class="input-group-text bg-light text-muted"><i class="ti ti-layers-intersect"></i></span>
                <input type="number" class="form-control" id="stok" name="stok" min="0" value="<?= $data['stok'] ?>" required>
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="d-flex justify-content-end gap-2">
            <a href="index.php?action=index" class="btn btn-light px-4">Batal</a>
            <button type="submit" class="btn btn-primary px-4 d-inline-flex align-items-center gap-1 shadow-sm">
              <i class="ti ti-device-floppy"></i>
              <span>Simpan Perubahan</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>