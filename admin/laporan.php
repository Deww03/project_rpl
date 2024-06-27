<?php
include 'koneksiAdmin.php';
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Laporan Penjualan | Awan Indonesia</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link gap-2">
            <img src="../assets/img/branding/logo.png" class="app-brand-logo w-px-50 h-auto" alt="logo" />
          </a>
          <span class="app-brand-text demo menu-text fw-bolder ms-3">Awan Ind</span>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <!-- Produk -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Produk</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Barang</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item">
                <a href="barang.php" class="menu-link">
                  <div data-i18n="Without menu">Data Barang</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="kategori.php" class="menu-link">
                  <div data-i18n="Without navbar">Kategori Barang</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Akun -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Akun</span>
          </li>
          <li class="menu-item">
            <a href="admin.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
              <div data-i18n="Account Settings">Admin</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="customer.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cube-alt"></i>
              <div data-i18n="Misc">Customer</div>
            </a>
          </li>

          <!-- Penjualan -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Penjualan</span>
          </li>
          <!-- Cards -->
          <li class="menu-item">
            <a href="transaksi.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div data-i18n="Basic">Transaksi</div>
            </a>
          </li>

          <li class="menu-item active">
            <a href="laporan.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Basic">Laporan Penjualan</div>
            </a>
          </li>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <h7 class="card-title text-primary"><?php echo $_SESSION['nama']; ?></h7>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <?php
                    $id_admin = $_SESSION['id'];
                    $profil = mysqli_query($koneksi, "select * from admin where admin_id='$id_admin'");
                    $profil = mysqli_fetch_assoc($profil);
                    if ($profil['admin_foto'] == "") {
                      ?>
                      <img src="../gambar/sistem/user.png" alt class="w-px-40 h-auto rounded-circle">
                    <?php } else { ?>
                      <img src="../gambar/user/<?php echo $profil['admin_foto'] ?>" alt
                        class="w-px-40 h-auto rounded-circle">
                    <?php } ?>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <?php
                            if ($profil['admin_foto'] == "") {
                              ?>
                              <img src="../gambar/sistem/user.png" alt class="w-px-40 h-auto rounded-circle">
                            <?php } else { ?>
                              <img src="../gambar/user/<?php echo $profil['admin_foto'] ?>" alt
                                class="w-px-40 h-auto rounded-circle">
                            <?php } ?>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"><?php echo $_SESSION['username']; ?></span>
                          <small class="text-muted">Online</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Ingin Logout ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    Tekan "Logout" dibawah jika kamu ingin keluar sesi.
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Tutup
                </button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- / Logout Modal -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Penjualan /</span> Laporan Penjualan</h4>
            <!-- Hoverable Table rows -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <h5 class="card-header">Filter Laporan</h5>
                  <form method="get" action="">
                    <div class="card-body">
                      <div class="mb-3 row">
                        <div class="col-md-2">
                          <label for="html5-date-input" class="col-form-label">Mulai Tanggal</label>
                          <input autocomplete="off" type="date" value="<?php if (isset($_GET['tanggal_dari'])) {
                            echo $_GET['tanggal_dari'];
                          } else {
                            echo "";
                          } ?>" name="tanggal_dari" class="form-control datepicker2" placeholder="Mulai Tanggal"
                            required="required">
                        </div>
                        <div class="col-md-2">
                          <label for="html5-date-input" class="col-form-label">Sampai Tanggal</label>
                          <input autocomplete="off" type="date" value="<?php if (isset($_GET['tanggal_sampai'])) {
                            echo $_GET['tanggal_sampai'];
                          } else {
                            echo "";
                          } ?>" name="tanggal_sampai" class="form-control datepicker2" placeholder="Sampai Tanggal"
                            required="required">
                        </div>
                        <div class="col-md-2">
                          <br />
                          <input type="submit" value="TAMPILKAN LAPORAN" class="btn btn-primary">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!--/ Hoverable Table rows -->
              </div>
            </div>

            <div class="col-12">
              <div class="card mb-4">
                <h5 class="card-header">Laporan Penjualan</h5>

                <?php
                if (isset($_GET['tanggal_sampai']) && isset($_GET['tanggal_dari'])) {
                  $tgl_dari = $_GET['tanggal_dari'];
                  $tgl_sampai = $_GET['tanggal_sampai'];
                  ?>

                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <tr>
                        <th width="15%">Dari Tanggal</th>
                        <th width="1%">:</th>
                        <td><?php echo $tgl_dari; ?></td>
                      </tr>
                      <tr>
                        <th>SAMPAI TANGGAL</th>
                        <th>:</th>
                        <td><?php echo $tgl_sampai; ?></td>
                      </tr>
                    </table>
                  </div>

                  <div class="card-body">
                    <div class="demo-inline-spacing">
                      <a href="laporan_print.php?tanggal_dari=<?php echo $tgl_dari ?>&tanggal_sampai=<?php echo $tgl_sampai ?>"
                        target="_blank" class="btn btn-info"><i class="fa fa-print"></i> &nbsp PRINT</a>
                    </div>
                  </div>

                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th width="1%">NO</th>
                          <th>INVOICE</th>
                          <th>TANGGAL MASUK</th>
                          <th>NAMA CUSTOMER</th>
                          <th>JUMLAH</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM invoice,customer WHERE invoice_customer=customer_id and date(invoice_tanggal) >= '$tgl_dari' AND date(invoice_tanggal) <= '$tgl_sampai'");
                        while ($i = mysqli_fetch_array($data)) {
                          ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td>INVOICE-00<?php echo $i['invoice_id'] ?></td>
                            <td><?php echo date('d-m-Y', strtotime($i['invoice_tanggal'])); ?></td>
                            <td><?php echo $i['customer_nama'] ?></td>
                            <td><?php echo "Rp. " . number_format($i['invoice_total_bayar']) . " ,-" ?></td>
                            <td>
                              <?php
                              if ($i['invoice_status'] == 0) {
                                echo "<span class='badge bg-label-primary'>Menunggu Pembayaran</span>";
                              } elseif ($i['invoice_status'] == 1) {
                                echo "<span class='badge bg-label-secondary'>Menunggu Konfirmasi</span>";
                              } elseif ($i['invoice_status'] == 2) {
                                echo "<span class='badge bg-label-danger'>Ditolak</span>";
                              } elseif ($i['invoice_status'] == 3) {
                                echo "<span class='badge bg-label-info'>Dikonfirmasi & Sedang Diproses</span>";
                              } elseif ($i['invoice_status'] == 4) {
                                echo "<span class='badge bg-label-warning'>Dikirim</span>";
                              } elseif ($i['invoice_status'] == 5) {
                                echo "<span class='badge bg-label-success'>Selesai</span>";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>

                  <?php
                } else {
                  ?>

                  <div class="alert alert-info text-center">
                    Silahkan Filter Laporan Terlebih Dulu.
                  </div>
                </div>
              </div>
              <!-- / Content -->
              <?php
                }
                ?>
          </div>


          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with Awan Indonesia by Kelompok 2
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>