<?php

/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>

<div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
  <div>
    <h3 class="fw-bold mb-1">Tambah Produk Baru</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php?action=dashboard" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.php?action=index" class="text-decoration-none">Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
      </ol>
    </nav>
  </div>
</div>

<div class="card border-0 shadow-sm">
  <div class="card-header bg-white py-3 border-bottom">
    <div class="d-flex align-items-center gap-2">
      <i class="ti ti-package fs-5 text-primary"></i>
      <h5 class="card-title mb-0 fw-semibold text-dark">Informasi Produk</h5>
    </div>
  </div>
  <div class="card-body p-4">
    <form action="index.php?action=store" method="POST">

      <!-- Nama Produk -->
      <div class="mb-4">
        <label for="nama_produk" class="form-label fw-medium text-secondary">
          Nama Produk <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <span class="input-group-text bg-light text-muted"><i class="ti ti-box"></i></span>
          <input
            type="text"
            class="form-control"
            name="nama_produk"
            id="nama_produk"
            placeholder="Contoh: Beras Anak Ajaib"
            required />
        </div>
      </div>

      <!-- Kategori & Satuan -->
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="kategori" class="form-label fw-medium text-secondary">Kategori</label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted"><i class="ti ti-category"></i></span>
            <select class="form-select" name="kategori" id="kategori">
              <option value="Minuman" selected>Minuman</option>
              <option value="Makanan Ringan">Makanan Ringan</option>
              <option value="ATK">ATK (Alat Tulis Kantor)</option>
              <option value="Bumbu Masak">Bumbu Masak</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <label for="satuan" class="form-label fw-medium text-secondary">Satuan</label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted"><i class="ti ti-scale"></i></span>
            <select class="form-select" name="satuan" id="satuan">
              <option value="kg" selected>kg</option>
              <option value="pcs">pcs</option>
              <option value="dus">dus</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Harga Beli, Harga Jual, Untung -->
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <label for="harga_beli" class="form-label fw-medium text-secondary">Harga Beli</label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted">Rp</span>
            <input
              type="number"
              class="form-control"
              name="harga_beli"
              id="harga_beli"
              placeholder="0"
              min="0" />
          </div>
        </div>
        <div class="col-md-4">
          <label for="harga" class="form-label fw-medium text-secondary">
            Harga Jual <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted">Rp</span>
            <input
              type="number"
              class="form-control"
              name="harga"
              id="harga"
              placeholder="0"
              min="0"
              required />
          </div>
        </div>
        <div class="col-md-4">
          <label for="untung" class="form-label fw-medium text-secondary">Untung</label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted">Rp</span>
            <input
              type="text"
              class="form-control bg-light"
              name="untung"
              id="untung"
              placeholder="0"
              readonly />
          </div>
        </div>
      </div>

      <!-- Stok Awal & Minimum Stok -->
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="stok" class="form-label fw-medium text-secondary">Stok Awal</label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted"><i class="ti ti-layers-intersect"></i></span>
            <input
              type="number"
              class="form-control"
              name="stok"
              id="stok"
              placeholder="0"
              min="0" />
          </div>
        </div>
        <div class="col-md-6">
          <label for="minimum_stok" class="form-label fw-medium text-secondary">Minimum Stok</label>
          <div class="input-group">
            <span class="input-group-text bg-light text-muted"><i class="ti ti-alert-triangle"></i></span>
            <input
              type="number"
              class="form-control"
              name="minimum_stok"
              id="minimum_stok"
              placeholder="0"
              min="0" />
          </div>
        </div>
      </div>

      <hr class="my-4">

      <div class="d-flex justify-content-end gap-2">
        <a href="index.php?action=list_produk" class="btn btn-light px-4">Batal</a>
        <button type="submit" class="btn btn-primary px-4 d-inline-flex align-items-center gap-1 shadow-sm">
          <i class="ti ti-device-floppy"></i>
          <span>Simpan</span>
        </button>
      </div>
    </form>
  </div>
</div>
</div>
</div>


<?php require __DIR__ . '/../layout/footer.php'; ?>