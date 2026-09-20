<?php

/** @var array $data */
require __DIR__ . '/../layout/header.php';
?>

<h3 class="fw-bold">Pencatatan Transaksi</h3>

.<div
    class="row justify-content-center align-items-center g-4">
    <div class="col-8">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-semibold">Pilih produk</h6>
                <div class="d-flex align-items-cener gap-2">
                    <input
                        type="text"
                        style="max-width: 200px"
                        class=" form-control form-control-sm"
                        name=""
                        id=""
                        placeholder="Cari produk.." />
                    <div class="btn-group btn-sm" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text">Text</p>
            </div>
        </div>

    </div>
    <div class="col-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-semibold">Total belanja</h6>
                <span class="badge text-bg-primary">12</span>
            </div>
            <div class="card-body p-0" style="max-height: 320px; overflow-y: auto;">
                <ul class="list-group list-group-flush">

                    <!-- Contoh Item 1 -->
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        <div>
                            <h6 class="mb-1 fs-6 fw-semibold">Minyak Goreng 1L</h6>
                            <span class="text-muted small">Rp 15.000 x 2</span>
                        </div>
                        <div class="text-end">
                            <span class="fw-bold d-block mb-1">Rp 30.000</span>
                            <button class="btn btn-sm btn-outline-danger p-1 line-height-1" title="Hapus"><i class="ti ti-trash"></i></button>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="card-footer bg-white p-3 border-top">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-muted">Total Bayar</span>
                    <h5 class="mb-0 fw-bold text-primary">Rp 30.000</h5>
                </div>
                <button
                    type="button"
                    class="btn btn-primary  w-100 py-2 fw-semibold d-flex justify-content-center align-items-center gap-2 shadow-sm">
                    Bayar Sekarang
                </button>

            </div>
        </div>

    </div>
</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>