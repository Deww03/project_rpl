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

  <title>Edit Barang | Awan Indonesia</title>

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

<div>
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
          <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Layouts">Barang</div>
            </a>

            <ul class="menu-sub">
              <li class="menu-item active">
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

          <li class="menu-item">
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
          <form action="produk_update.php" method="post" enctype="multipart/form-data">
            <?php
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from produk where produk_id='$id'");
            while ($d = mysqli_fetch_array($data)) {
              ?>
              <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Barang /</span> Edit Barang</h4>

                <div class="row">
                  <div class="col-md-12">
                    <div class="card mb-4">
                      <h5 class="card-header">Detail Barang</h5>
                      <!-- Account -->
                      <hr class="my-0" />
                      <div class="card-body">
                        <div class="row">
                          <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $d['produk_nama'] ?>"
                              required="required" placeholder="Masukan Nama .." autofocus>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $d['produk_id'] ?>"
                              required="required">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Kategori Barang</label>
                            <select name="kategori" required="required" class="form-select">
                              <option value="">Pilih Kategori Produk</option>
                              <?php
                              include '../koneksi.php';
                              $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                              while ($k = mysqli_fetch_array($kategori)) {
                                ?>
                                <option <?php if ($k['kategori_id'] == $d['produk_kategori']) {
                                  echo "selected='selected'";
                                } ?>
                                  value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?></option>
                              <?php
                              }
                              ?>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga"
                              value="<?php echo $d['produk_harga']; ?>" required="required"
                              placeholder="Masukan Harga ..">
                          </div>
                          <div class="mb-3">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="5" name="keterangan"
                              value="<?php echo $d['produk_keterangan']; ?>"
                              placeholder="Masukan Keterangan .."></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Berat Barang (Gram)</label>
                            <input type="number" class="form-control" name="berat"
                              value="<?php echo $d['produk_berat']; ?>" required="required"
                              placeholder="Masukan Berat ..">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Jumlah Stock</label>
                            <input type="number" class="form-control" name="jumlah"
                              value="<?php echo $d['produk_jumlah']; ?>" required="required"
                              placeholder="Masukan Jumlah ..">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Foto 1 (Utama)</label>
                            <input class="form-control" type="file" id="formFile" name="foto1" />

                            <?php if ($d['produk_foto1'] == "") { ?>
                              <img src="../gambar/sistem/produk.png" style="width: 120px;height: auto">
                            <?php } else { ?>
                              <img src="../gambar/produk/<?php echo $d['produk_foto1'] ?>"
                                style="width: 120px;height: auto">
                            <?php } ?>

                            <br />
                            <small class="text-muted">Kosongkan Jika Tidak Ingin Mengubah Foto</small>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Foto 2</label>
                            <input class="form-control" type="file" id="formFile" name="foto2" />

                            <?php if ($d['produk_foto2'] == "") { ?>
                              <img src="../gambar/sistem/produk.png" style="width: 120px;height: auto">
                            <?php } else { ?>
                              <img src="../gambar/produk/<?php echo $d['produk_foto2'] ?>"
                                style="width: 120px;height: auto">
                            <?php } ?>

                            <br />
                            <small class="text-muted">Kosongkan Jika Tidak Ingin Mengubah Foto</small>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label>Foto 3</label>
                            <input class="form-control" type="file" id="formFile" name="foto3" />

                            <?php if ($d['produk_foto3'] == "") { ?>
                              <img src="../gambar/sistem/produk.png" style="width: 120px;height: auto">
                            <?php } else { ?>
                              <img src="../gambar/produk/<?php echo $d['produk_foto3'] ?>"
                                style="width: 120px;height: auto">
                            <?php } ?>

                            <br />
                            <small class="text-muted">Kosongkan Jika Tidak Ingin Mengubah Foto</small>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" value="Simpan">Simpan</button>
                          <button type="submit" class="btn btn-outline-secondary" href="barang.php">Cancel</button>
                        </div>
            </form>
          </div>
          <?php
            }
            ?>
        <!-- /Account -->
      </div>
    </div>
  </div>
</div>
<!-- / Content -->

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