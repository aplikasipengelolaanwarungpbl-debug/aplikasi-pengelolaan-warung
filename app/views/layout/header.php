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
        <a href="index.php?action=dashboard" class="nav-link <?= in_array($currentAction, ['dashboard', 'dasbor']) ? 'active' : '' ?>">
          <i class="ti ti-layout-dashboard"></i>
          <span class="nav-text">Dasbor</span>
        </a>
      </li>

      <!-- Transaksi (Dropdown) -->
      <li class="sidebar-dropdown position-relative">
        <a href="#menuTransaksi" class="nav-link justify-content-between <?= $isTransaksi ? 'active' : '' ?>" data-bs-toggle="collapse" role="button" aria-expanded="<?= $isTransaksi ? 'true' : 'false' ?>" aria-controls="menuTransaksi">
          <div class="d-flex align-items-center gap-2">
            <i class="ti ti-shopping-cart"></i>
            <span class="nav-text">Transaksi</span>
          </div>
          <i class="ti ti-chevron-right sidebar-chevron"></i>
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
        <a href="#menuInventaris" class="nav-link justify-content-between <?= $isInventaris ? 'active' : '' ?>" data-bs-toggle="collapse" role="button" aria-expanded="<?= $isInventaris ? 'true' : 'false' ?>" aria-controls="menuInventaris">
          <div class="d-flex align-items-center gap-2">
            <i class="ti ti-building-warehouse"></i>
            <span class="nav-text">Inventaris</span>
          </div>
          <i class="ti ti-chevron-right sidebar-chevron"></i>
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
        <a href="index.php?action=laporan" class="nav-link <?= $currentAction === 'laporan' ? 'active' : '' ?>">
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
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/avatar/avatar-1.jpg" alt="User" class="avatar avatar-sm rounded-circle me-2">
          <span class="small fw-medium d-none d-md-inline">Kasir / Pemilik</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="dropdownUser">
          <li><h6 class="dropdown-header">Pengelola Warung</h6></li>
          <li><a class="dropdown-item" href="index.php?action=index"><i class="ti ti-dashboard me-2"></i>Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-muted" href="#"><i class="ti ti-logout me-2"></i>Keluar</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT CONTAINER -->
  <main id="content" class="content">
    <div class="container-fluid py-4 px-3 px-lg-4">