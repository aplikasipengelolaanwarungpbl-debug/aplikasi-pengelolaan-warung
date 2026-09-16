<?php
$currentAction = $_GET['action'] ?? 'index';
$isInventaris = in_array($currentAction, ['index', 'create', 'edit', 'kategori']);
$isTransaksi = in_array($currentAction, ['transaksi_create', 'transaksi_riwayat']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Pengelolaan Warung</title>
  <link rel="icon" type="image/png" href="assets/images/favicon_io/favicon-32x32.png">
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Tabler Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
  <!-- InApp Custom Style -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div id="overlay" class="overlay"></div>

  <!-- SIDEBAR -->
  <aside id="sidebar" class="sidebar">
    <div class="logo-area">
      <img src="assets/images/logo-icon.svg" alt="Logo" width="30" height="30">
      <span class="logo-text fw-bold fs-5 text-dark">WarungApp</span>
    </div>
    <ul class="list-unstyled mb-0 mt-3">
      <!-- Dasbor -->
      <li>
        <a href="index.php?action=dashboard" class="nav-link <?= in_array($currentAction, ['dashboard', 'dasbor']) ? 'active' : '' ?>" title="Dasbor">
          <i class="ti ti-layout-dashboard"></i>
          <span class="nav-text">Dasbor</span>
        </a>
      </li>

      <!-- Transaksi (Dropdown) -->
      <li class="sidebar-dropdown position-relative">
        <a href="#menuTransaksi" class="nav-link <?= $isTransaksi ? 'active' : '' ?>" data-bs-toggle="collapse" role="button" aria-expanded="<?= $isTransaksi ? 'true' : 'false' ?>" aria-controls="menuTransaksi" title="Transaksi">
          <i class="ti ti-shopping-cart"></i>
          <span class="nav-text">Transaksi</span>
          <i class="ti ti-chevron-right sidebar-chevron ms-auto"></i>
        </a>
        <div class="collapse <?= $isTransaksi ? 'show' : '' ?> sidebar-collapse" id="menuTransaksi">
          <ul class="sidebar-submenu">
            <li>
              <a href="index.php?action=transaksi_create" class="nav-link <?= $currentAction === 'transaksi_create' ? 'active' : '' ?>">
                <i class="ti ti-receipt"></i>
                <span class="nav-text">Pencatatan Transaksi</span>
              </a>
            </li>
            <li>
              <a href="index.php?action=transaksi_riwayat" class="nav-link <?= $currentAction === 'transaksi_riwayat' ? 'active' : '' ?>">
                <i class="ti ti-history"></i>
                <span class="nav-text">Riwayat Transaksi</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Inventaris (Dropdown) -->
      <li class="sidebar-dropdown position-relative">
        <a href="#menuInventaris" class="nav-link <?= $isInventaris ? 'active' : '' ?>" data-bs-toggle="collapse" role="button" aria-expanded="<?= $isInventaris ? 'true' : 'false' ?>" aria-controls="menuInventaris" title="Inventaris">
          <i class="ti ti-building-warehouse"></i>
          <span class="nav-text">Inventaris</span>
          <i class="ti ti-chevron-right sidebar-chevron ms-auto"></i>
        </a>
        <div class="collapse <?= $isInventaris ? 'show' : '' ?> sidebar-collapse" id="menuInventaris">
          <ul class="sidebar-submenu">
            <li>
              <a href="index.php?action=index" class="nav-link <?= in_array($currentAction, ['index', 'create', 'edit']) ? 'active' : '' ?>">
                <i class="ti ti-box"></i>
                <span class="nav-text">List Produk</span>
              </a>
            </li>
            <li>
              <a href="index.php?action=kategori" class="nav-link <?= $currentAction === 'kategori' ? 'active' : '' ?>">
                <i class="ti ti-category"></i>
                <span class="nav-text">Category</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Laporan -->
      <li>
        <a href="index.php?action=laporan" class="nav-link <?= $currentAction === 'laporan' ? 'active' : '' ?>" title="Laporan">
          <i class="ti ti-report-analytics"></i>
          <span class="nav-text">Laporan</span>
        </a>
      </li>
    </ul>
  </aside>

  <!-- TOPBAR -->
  <nav id="topbar" class="navbar bg-white border-bottom fixed-top topbar px-3 d-flex justify-content-between">
    <div class="d-flex align-items-center">
      <button id="toggleBtn" class="d-none d-lg-inline-flex btn btn-light btn-icon btn-sm me-2" type="button" aria-label="Toggle Sidebar">
        <i class="ti ti-layout-sidebar-left-expand"></i>
      </button>
      <button id="mobileBtn" class="btn btn-light btn-icon btn-sm d-lg-none me-2" type="button" aria-label="Open Sidebar">
        <i class="ti ti-layout-sidebar-left-expand"></i>
      </button>
    </div>

    <div class="d-flex align-items-center gap-3">
      <!-- Notification Dropdown -->
      <div class="dropdown">
        <a class="position-relative btn-icon btn-sm btn-light btn rounded-circle d-inline-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false" href="#" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
          </svg>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2" style="font-size: 10px; padding: 2px 5px;">
            2
            <span class="visually-hidden">notifikasi belum dibaca</span>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow-sm p-0" style="min-width: 270px; font-size: 13px;">
          <div class="px-3 py-2 border-bottom fw-semibold text-dark d-flex justify-content-between align-items-center" style="font-size: 12px;">
            <span>Notifikasi</span>
            <span class="badge bg-primary-subtle text-primary" style="font-size: 10px;">2 Baru</span>
          </div>
          <ul class="list-unstyled p-0 m-0">
            <li class="p-2 px-3 border-bottom">
              <div class="d-flex gap-2 align-items-start">
                <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-xs rounded-circle mt-1" />
                <div class="flex-grow-1">
                  <p class="mb-0 fw-medium" style="font-size: 12.5px;">Pesanan Baru Diterima</p>
                  <p class="mb-0 text-muted" style="font-size: 11.5px;">Pesanan #12345 telah dibuat</p>
                  <span class="text-secondary" style="font-size: 10.5px;">5 menit yang lalu</span>
                </div>
              </div>
            </li>
            <li class="p-2 px-3 border-bottom">
              <div class="d-flex gap-2 align-items-start">
                <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar avatar-xs rounded-circle mt-1" />
                <div class="flex-grow-1">
                  <p class="mb-0 fw-medium" style="font-size: 12.5px;">Pelanggan Baru</p>
                  <p class="mb-0 text-muted" style="font-size: 11.5px;">Pelanggan @john_doe mendaftar</p>
                  <span class="text-secondary" style="font-size: 10.5px;">30 menit yang lalu</span>
                </div>
              </div>
            </li>
            <li class="p-2 px-3 border-bottom">
              <div class="d-flex gap-2 align-items-start">
                <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-xs rounded-circle mt-1" />
                <div class="flex-grow-1">
                  <p class="mb-0 fw-medium" style="font-size: 12.5px;">Pembayaran Diterima</p>
                  <p class="mb-0 text-muted" style="font-size: 11.5px;">Pembayaran Rp 299.000 sukses</p>
                  <span class="text-secondary" style="font-size: 10.5px;">1 jam yang lalu</span>
                </div>
              </div>
            </li>
            <li class="px-3 py-2 text-center bg-light rounded-bottom">
              <a href="#" class="text-primary text-decoration-none fw-medium" style="font-size: 12px;">Lihat semua notifikasi</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- User Dropdown -->
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/avatar/avatar-1.jpg" alt="User" class="avatar avatar-sm rounded-circle me-2">
          <span class="fw-medium d-none d-md-inline" style="font-size: 13px;">Kasir / Pemilik</span>
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow-sm p-0" style="min-width: 210px; font-size: 13px;" aria-labelledby="dropdownUser">
          <div class="d-flex gap-2 align-items-center border-dashed border-bottom px-3 py-2">
            <img src="assets/images/avatar/avatar-1.jpg" alt="User" class="avatar avatar-sm rounded-circle" />
            <div>
              <h6 class="mb-0 fw-semibold" style="font-size: 13px;">Kasir / Pemilik</h6>
              <p class="mb-0 text-muted" style="font-size: 11.5px;">@pemilikwarung</p>
            </div>
          </div>
          <div class="p-1 d-flex flex-column gap-1">
            <a class="dropdown-item rounded-2 py-1 px-3 d-flex align-items-center gap-2" href="index.php?action=account_settings" style="font-size: 13px;">
              <i class="ti ti-settings fs-6"></i>
              <span>Pengaturan Akun</span>
            </a>
            <div class="dropdown-divider my-1"></div>
            <a class="dropdown-item rounded-2 py-1 px-3 d-flex align-items-center gap-2 text-danger" href="index.php?action=logout" style="font-size: 13px;">
              <i class="ti ti-logout fs-6"></i>
              <span>Keluar</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT CONTAINER -->
  <main id="content" class="content">
    <div class="container-fluid py-4 px-3 px-lg-4">