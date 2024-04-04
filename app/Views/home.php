<!-- Content-->
<section class="container-fluid">
  <div class="row">

    <div class="col-12">
      <!-- Basic Examples-->
      <div class="card mt-4">
        <div class="card-header">
          <h6 class="card-title">Home</h6>
        </div>
        <div class="card-body">
          <!-- Page Title-->
          <h2 class="fs-3 fw-bold mb-2">Selamat Datang di <b>ASA CIPTO ROSO</b> 👋</h2>
          <p class="text-muted mb-5">Aplikasi pembukuan yang digunakan untuk mencatat transaksi dan membuat pembukuan laporan keuangan.</p>
          <!-- / Page Title-->
        </div>
      </div>
    </div>


    <!-- Top Row Widgets-->
    <div class="row mt-2">


    <!-- total produk -->
      <div class="col-12 col-sm-6 col-xxl-3">
        <div class="card h-100">
          <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Total Produk</h6>
          </div>
          <div class="card-body">
            <div class="row gx-4 mb-3 mb-md-1">
              <div class="col-12 col-md-6">
                <p class="fs-3 fw-bold"><?= $jumlah_barang ?></p>
              </div>
              <div class="col-12 col-md-6">
                <div class="chart chart-sm">
                  <canvas id="chartPageviews"></canvas>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- total pemasukan -->
      <div class="col-12 col-sm-6 col-xxl-3">
        <div class="card h-100">
          <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Total Pemasukan</h6>
          </div>
          <div class="card-body">
            <div class="row gx-4 mb-3 mb-md-1">
              <div class="col-12 col-md-6">
                <p class="fs-3 fw-bold d-flex align-items-center"><span class="fs-9 me-1">Rp.</span> <?= number_format($jumlah_bayar, 0, ',', '.') ?></p>
              </div>
              <div class="col-12 col-md-6">
                <div class="chart chart-sm">
                  <canvas id="chartMonthlyIncome"></canvas>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- total pengeluaran -->
      <div class="col-12 col-sm-6 col-xxl-3">
        <div class="card h-100">
          <div class="card-header justify-content-between align-items-center d-flex border-0 pb-0">
            <h6 class="card-title m-0 text-muted fs-xs text-uppercase fw-bolder tracking-wide">Total Pengeluaran</h6>
          </div>
          <div class="card-body">
            <div class="row gx-4 mb-3 mb-md-1">
              <div class="col-12 col-md-6">
                <p class="fs-3 fw-bold d-flex align-items-center"><span class="fs-9 me-1">Rp.</span> <?= number_format($jumlah_pengeluaran, 0, ',', '.') ?></p>
              </div>
              <div class="col-12 col-md-6">
                <div class="chart chart-sm">
                  <canvas id="chartAvgOrders"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- / Basic Examples-->
  </div>