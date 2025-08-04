<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIKODAL - PUSKOD BARANAHAN KEMHAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Favicons -->
  <link href="assets/img/kemhanlogo.png" rel="icon">
  <link href="assets/img/kemhanlogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->

  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- datatable -->
  <link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" integrity="sha384-tn1ylSZtfgsRN1jKyE2NYigfJocW6ctEQ5zq+AvPZVQGFEI410niaUnp9iHzOLot" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/buttons/3.2.4/css/buttons.bootstrap4.min.css" rel="stylesheet" integrity="sha384-YHUnVhPYErA/IH3gGmVQyB2twaYx/xm4Nw+wQE2xZoB+VBmRPPt9Paqc4/eShUAF" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/select/3.0.1/css/select.bootstrap4.min.css" rel="stylesheet" integrity="sha384-UXVGt9tIdXKYH6jUZ3q9ALkXEGNXM1lwDN6Hx9rMLp3SFa+GulPnO4CEOdFDeZX9" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/kemhanlogo.png" alt="">
        <span class="d-none d-lg-block">SIKODAL</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/kemhanlogo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"> <?php echo htmlspecialchars($_SESSION['nama_lengkap']); ?></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6> <?php echo htmlspecialchars($_SESSION['nama_lengkap']); ?></h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php" onclick="return confirmLogout();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script>
                    function confirmLogout() {
                      Swal.fire({
                          title: 'Yakin mau logout?',
                          text: "Anda akan keluar dari sistem!",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Ya, logout!',
                          cancelButtonText: 'Batal'
                      }).then((result) => {
                          if (result.isConfirmed) {
                              // Redirect atau submit form logout
                              window.location.href = 'logout.php';
                          }
                      });

                      // Jangan return apa-apa (hindari default confirm)
                      return false;
                  }
              </script>
            </li>

          </ul>
        </li>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Pelayanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#p">
              <i class="bi bi-clipboard-data"></i><span>NCAGE</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-clipboard-data"></i><span>Kodifikasi</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-clipboard-data"></i><span>Verifikasi Data</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-clipboard-data"></i><span>Asistensi</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Penetapan Nama Baku</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_nama_baku.php">
              <i class="bi bi-clipboard-data"></i><span>Nama Baku (H6)</span>
            </a>
          </li>
          <li>
            <a href="data_group_class.php">
              <i class="bi bi-clipboard-data"></i><span>Group Class (H2)</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- </li>End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Skrinning</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_ios.php">
              <i class="bi bi-circle"></i><span>IOS</span>
            </a>
          </li>
         <li>
            <a href="data_ncage.php">
              <i class="bi bi-circle"></i><span>Data NCAGE</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Publikasi Katalog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_nsn.php">
              <i class="bi bi-circle"></i><span>NSN 45</span>
            </a>
          </li>
          <li>
            <a href="data_entitas.php">
              <i class="bi bi-circle"></i><span>Entitas</span>
            </a>
          </li>
          <li>
            <a href="data_temporary_nsn.php">
              <i class="bi bi-circle"></i><span>Temporary NSN</span>
            </a>
          </li>
           <li>
            <a href="data_pscn.php">
              <i class="bi bi-circle"></i><span>PSCN</span>
            </a>
          </li>
          <li>
            <a href="data_harwat.php">
              <i class="bi bi-circle"></i><span>Data katalog Materiil</span>
            </a>
          </li>
          <!-- <li>
            <a href="data_ba_harwat.php">
              <i class="bi bi-circle"></i><span>Berita Acara Harwat</span>
            </a>
          </li> -->
        </ul> 
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav3" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_nama_baku.php">
              <i class="bi bi-clipboard-data"></i><span>H6</span>
            </a>
          </li>
          <li>
            <a href="data_group_class.php">
              <i class="bi bi-clipboard-data"></i><span>H2</span>
            </a>
          </li>
          <li>
            <a href="data_fiig.php">
              <i class="bi bi-clipboard-data"></i><span>FIIG</span>
            </a>
          </li>
          <li>
            <a href="data_bmn.php">
              <i class="bi bi-clipboard-data"></i><span>Data BMN</span>
            </a>
          </li>
          <li>
            <a href="data_ncb.php">
              <i class="bi bi-circle"></i><span>NCB</span>
            </a>
          </li>
           <li>
            <a href="data_uo_pengguna.php">
              <i class="bi bi-circle"></i><span>Data U.O (Unit Organiasai)</span>
            </a>
          </li>
          <li>
            <a href="data_komoditi.php">
              <i class="bi bi-circle"></i><span>Data Komiditi</span>
            </a>
          </li>
           <li>
            <a href="data_indhan.php">
              <i class="bi bi-circle"></i><span>Data Indhan</span>
            </a>
          </li>
        </ul> 
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav4" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Interface Angkatan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Kemhan</span>
            </a>
          </li>
           <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Mabes TNI</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>TNI AD</span>
            </a>
            <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>TNI AU</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>TNI AL</span>
            </a>
          </li> 
        </ul> 
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav5" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Dalam Negeri</span>
            </a>
          </li>
           <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Luar Negeri</span>
            </a>
          </li>
        </ul> 
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a href="#" class="nav-link" onclick="showMessage()">
          <i class="bi bi-info"></i><span>Info</span>
        </a>
      </li>

      <!-- SweetAlert2 -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
      function showMessage() {
        Swal.fire({
          title: 'Created By',
          html: `
            <div style="text-align:center;">
              <img src="assets/img/kemhanlogo.png" alt="Logo 1" width="80" style="margin:5px;">
              <img src="assets/img/swj.png" alt="Logo 2" width="60" style="margin:5px;">
            </div>
            <br>
            Cahyadi Adiwijaya, S.Kom., M.Si(Han)<br>
            M. Haris Suhud, S.Kom<br>
            Rian Andri, S.Kom
          `,
          showCloseButton: false,
          showConfirmButton: false,
          allowOutsideClick: true, // boleh tutup dengan klik di luar
          timer: 3000 // misalnya auto-close setelah 3 detik (opsional)
        });
      }
      </script>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data HARWAT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="data_harwat.php">Data</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i>DATA KATALOG HARWAT</i></h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

              <!-- Table with stripped rows -->
                <table id="example1" class="table table-bordered table-striped nowrap" style="width: 100% !important;">                
                <thead>
                  <tr>
                    <th>VIEW</th>
                    <th style="width: 100px;">No_Rekam_Adm</th>
                    <th style="width: 100px;">Jenis_Kegiatan</th>
                    <th style="width: 100px;">Judul_Kegiatan</th>
                    <th style="width: 100px;">SUMBER_DATA</th>
                    <th style="width: 100px;">UAKPB</th>
                    <th style="width: 100px;">No_Surat_Pengajuan</th>
                    <th style="width: 100px;">Tgl_Surat_Pengajuan</th> 
                    <th style="width: 100px;">Contact_Person</th>
                    <th style="width: 100px;">JABATAN</th>
                    <th style="width: 100px;">No_Telp</th>
                    <th style="width: 100px;">PENYEDIA</th>
                    <th style="width: 100px;">NCAGE</th>
                    <th style="width: 100px;">JENIS_PENGADAAN</th>
                    <th style="width: 100px;">NOMOR_KONTRAK</th>
                    <th style="width: 100px;">TANGGAL_KONTRAK</th>
                    <th style="width: 100px;">EFEKTIF_KONTRAK</th>
                    <th style="width: 100px;">Tgl_Berakhir_Kontrak</th>   
                    <th style="width: 100px;">NAMA_PENGADAAN</th>
                    <th style="width: 100px;">KOMODITI</th>
                    <th style="width: 100px;">UO_Pengguna</th>
                    <th style="width: 100px;">Satuan_Pengguna_Akhir</th>
                    <th style="width: 100px;">Nomor_Sprint</th>
                    <th style="width: 100px;">Tgl_Sprint</th> 
                    <th style="width: 100px;">Ketua_Tim</th>
                    <th style="width: 100px;">Tgl_Selesai_Kodifikasi</th>
                    <th style="width: 100px;">FILE</th>
                  </tr>
                  <tr>
                    <th></th>
                    <th><select id="filter-No_Rekam_Adm" style="width: 100%"></select></th>
                    <th><select id="filter-Jenis_Kegiatan" style="width: 100%"></select></th>
                    <th><select id="filter-Judul_Kegiatan" style="width: 100%"></select></th>
                    <th><select id="filter-SUMBER_DATA" style="width: 100%"></select></th>
                    <th><select id="filter-UAKPB" style="width: 100%"></select></th>
                    <th><select id="filter-No_Surat_Pengajuan" style="width: 100%"></select></th>
                    <th><select id="filter-Tgl_Surat_Pengajuan" style="width: 100%"></select></th>
                    <th><select id="filter-Contact_Person" style="width: 100%"></select></th>
                    <th><select id="filter-JABATAN" style="width: 100%"></select></th>
                    <th><select id="filter-No_Telp" style="width: 100%"></select></th>
                    <th><select id="filter-PENYEDIA" style="width: 100%"></select></th>
                    <th><select id="filter-NCAGE" style="width: 100%"></select></th>
                    <th><select id="filter-JENIS_PENGADAAN" style="width: 100%"></select></th>
                    <th><select id="filter-NOMOR_KONTRAK" style="width: 100%"></select></th>
                    <th><select id="filter-TANGGAL_KONTRAK" style="width: 100%"></select></th>
                    <th><select id="filter-EFEKTIF_KONTRAK" style="width: 100%"></select></th>
                    <th><select id="filter-Tgl_Berakhir_Kontrak" style="width: 100%"></select></th>
                    <th><select id="filter-NAMA_PENGADAAN" style="width: 100%"></select></th>
                    <th><select id="filter-KOMODITI" style="width: 100%"></select></th>
                    <th><select id="filter-UO_Pengguna" style="width: 100%"></select></th>
                    <th><select id="filter-Satuan_Pengguna_Akhir" style="width: 100%"></select></th>
                    <th><select id="filter-Nomor_Sprint" style="width: 100%"></select></th>
                    <th><select id="filter-Tgl_Sprint" style="width: 100%"></select></th>
                    <th><select id="filter-Ketua_Tim" style="width: 100%"></select></th>
                    <th><select id="filter-Tgl_Selesai_Kodifikasi" style="width: 100%"></select></th>
                    <th><select id="filter-FILE" style="width: 100%"></select></th>
                </tr>
                </thead>
                <tbody>
                </table>
                <!-- <td class=" last">
                   <button type="button" class="btn btn-primary" data-id="" data-toggle="modal" data-target="#myModal"><i class="">Glossary</i></button>
                </td> -->
                <td class="last">
                  <a href="#" class="btn btn-success" target="_blank">
                      <i class="bi bi-file-excel"></i> Excel
                  </a>
                </td>
                <td class="last">
                  <a href="#" class="btn btn-danger" target="_blank">
                      <i class="bi bi-file-pdf-fill"></i> Pdf
                  </a>
                </td>
                <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">KATALOG BA HARWAT</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button> -->
                          </div>
                          <div class="modal-body" id="detail_ba_harwat">
                              <!-- Data akan dimuat di sini -->
                          </div>
                          <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal" class="close">Tutup</button>
                          </div> -->
                      </div>
                  </div>
                </div>
                 <div id="dataModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">UPLOAD FILE HARWAT</h5>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body" id="detail_upload_harwat">
                            <!-- Data akan dimuat di sini -->
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> -->
                        </div>
                    </div>
                </div>
              </div>
                <script>
                $(document).ready(function () {
                    $(document).on('click', '.view_data', function () {
                        var user_id = $(this).data('id');
                        $.ajax({
                            url: "fetch_ba_harwat.php",
                            method: "POST",
                            data: { id: user_id },
                            success: function (data) {
                                $('#detail_ba_harwat').html(data);
                                $('#dataModal').modal('show');
                            }
                        });
                    });
                });
                 $(document).ready(function () {
                $(document).on('click', '.upload-file_ba_harwat', function () {
                    var user_id = $(this).data('id');
                    $.ajax({
                        url: "fetch_upload_file_harwat.php",
                        method: "POST",
                        data: { id: user_id },
                        success: function (data) {
                            $('#detail_upload_harwat').html(data);
                            $('#dataModal1').modal('show');
                        }
                    });
                });
            });
            </script>
            </div>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Pusat Kodifikasi Baranahan Kemhan</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- select2 -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- datatable -->
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js" integrity="sha384-RZEqG156bBQSxYY9lwjUz/nKVkqYj/QNK9dEjjyJ/EVTO7ndWwk6ZWEkvaKdRm/U" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap4.min.js" integrity="sha384-lzE84zE76t/xTDUpoKl8o6c0h10nNP8YllhiEMM0c/sSn4F16OzlMehMoHkVTsTN" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.4/js/dataTables.buttons.min.js" integrity="sha384-W+u8oyKVP+xXIEiQx3Zffi+rKULG3CX+yYaA+Ww6nUjUsL8Pn6fBTE7swLLBtJWQ" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.4/js/buttons.bootstrap4.min.js" integrity="sha384-1oeq8jb8l26AfnhvoQ1kcuVi2ty/y+QuzyJCi5E+GC31PymbE9QEla3XuYTwZHBC" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/select/3.0.1/js/dataTables.select.min.js" integrity="sha384-rJdomZwznaHW2zmRyvbgDRNVWK3XuD1AVsMUn+IVFBOZTW871NIFjfNinziLytgY" crossorigin="anonymous"></script>

  <!-- misc -->
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
                    $(document).ready(function() {
                        var columnNames = [
                            "cetak", "No_Rekam_Adm", "Jenis_Kegiatan", "Judul_Kegiatan", "SUMBER_DATA", "UAKPB",
                            "No_Surat_Pengajuan", "Tgl_Surat_Pengajuan", "Contact_Person", "JABATAN", "No_Telp",
                            "PENYEDIA", "NCAGE", "JENIS_PENGADAAN", "NOMOR_KONTRAK", "TANGGAL_KONTRAK",
                            "EFEKTIF_KONTRAK", "Tgl_Berakhir_Kontrak", "NAMA_PENGADAAN", "KOMODITI", "UO_Pengguna",
                            "Satuan_Pengguna_Akhir", "Nomor_Sprint", "Tgl_Sprint", "Ketua_Tim", "Tgl_Selesai_Kodifikasi","file"
                        ];

                        var table = $('#example1').DataTable({
                            processing: true,
                            serverSide: true,
                            select: true,
                            scrollX: true,
                            orderCellsTop: true,
                            fixedHeader: true,
                            
                            ajax: {
                                url: "server_ba_harwat.php",
                                type: "POST"
                            },
                            columns: [
                                { data: "view", width: "50px", orderable: false },
                                { data: "No_Rekam_Adm" },
                                { data: "Jenis_Kegiatan" },
                                { data: "Judul_Kegiatan" },
                                { data: "SUMBER_DATA" },
                                { data: "UAKPB" },
                                { data: "No_Surat_Pengajuan" },
                                { data: "Tgl_Surat_Pengajuan" },
                                { data: "Contact_Person" },
                                { data: "JABATAN" },
                                { data: "No_Telp" },
                                { data: "PENYEDIA" },
                                { data: "NCAGE" },
                                { data: "JENIS_PENGADAAN" },
                                { data: "NOMOR_KONTRAK" },
                                { data: "TANGGAL_KONTRAK" },
                                { data: "EFEKTIF_KONTRAK" },
                                { data: "Tgl_Berakhir_Kontrak" },
                                { data: "NAMA_PENGADAAN" },
                                { data: "KOMODITI" },
                                { data: "UO_Pengguna" },
                                { data: "Satuan_Pengguna_Akhir" },
                                { data: "Nomor_Sprint" },
                                { data: "Tgl_Sprint" },
                                { data: "Ketua_Tim" },
                                { data: "Tgl_Selesai_Kodifikasi" },
                                { data: "file" }
                            ],
                            initComplete: function(settings, json) {
                                var api = this.api();

                                columnNames.forEach(function(colName, i) {
                                    if (colName === "cetak") return; // skip cetak

                                    var columnIndex = i;

                                    $.ajax({
                                        url: 'ba_harwat_column_options.php',
                                        data: { column: colName },
                                        dataType: 'json',
                                        success: function(data) {
                                            var select = $('#filter-' + colName);
                                            select.empty();
                                            
                                            // Aktifkan Select2
                                            select.select2();

                                            select.append('<option value="">-</option>');
                                            data.forEach(function(d) {
                                                if (d !== null && d !== '') {
                                                    select.append('<option value="' + d + '">' + d + '</option>');
                                                }
                                            });

                                            // Event change
                                            select.on('change', function () {
                                                var val = $(this).val();
                                                if (val) {
                                                    api.column(columnIndex)
                                                        .search(val)
                                                        .draw();
                                                } else {
                                                    api.column(columnIndex)
                                                        .search('')
                                                        .draw();
                                                }
                                            });
                                        },
                                        error: function(e) {
                                            console.error('Gagal ambil data filter untuk kolom', colName, e);
                                        }
                                    });
                                });
                            }
                        });
                    });
                    $("#example1").on("click", ".info-ncage", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case "A" : 
                            result = "ACTIVE RECORD: The entity is currently active";
                            break;
                          case "Y" :
                            result = "ACTIVE SPECIALIZED USE RECORD: NCAGE Code assigned to an entity still actively engaged in business operations; however, the entity no longer wishes to be considered for contracting OR SELLS ITS PRODUCTS ONLY THROUGH DISTRIBUTORS. Do not use for procurement purposes.";
                            break;
                          case "H" : 
                            result = "OBSOLETE / Invalid - Entity has been discontinued, cancelled without replacement and/or CAGE/NCAGE no longer required.";
                            break;
                          case "R" :
                            result = "REPLACED OR CONVERTED RECORD, WITH REPLACEMENT: Entity discontinued and replaced by one or more successor firm(s) or the NCAGE has been converted from a generic code with an 'S' prefix to a national NCAGE assigned by the nation where the entity is located. Refer to replacement NCAGE Code(s).";
                            break;
                          case "E" :
                            result = "ACTIVE RECORD BUT DEBARRED IN USA: The entity shown is debarred, suspended or proposed for debarment in the U.S. NOTE: After the eligibility of the entity has been reinstated, the status code will be changed to indicate that the entity is active. Debarred NCAGEs may be considered active records for all countries except the U.S. and the U.S. will assign NSNs to debarred NCAGEs at the request of other countries.";
                            break;
                          case "U" :
                            result = "ACTIVE SPECIALIZED USE RECORD: Code is assigned to an entity that represents other various companies for various reasons. The compnay being represented will usually have their own specific NCAGE Code assigned. (Do not use for cataloging purposes). Note: For US use only";
                            break;
                          case "T" :
                            result = "ACTIVE SPECIALIZED USE RECORD: Entity is a Joint Venture Comany.";
                            break;
                          case "W" :
                            result = "ACTIVE SPECIALIZED USE RECORD: NCAGE Code assigned to an individual employed by a company where that induvidual performs contrated work in his own name separate from the company location. Address on this record may by different than the address of the company itself. (Do not use for cataloging purposes). Note: For US use only";
                            break;
                          case "M" :
                            result = "ACTIVE SPECIALIZED USE RECORD: NCAGE Code is referenced to a special numbering system, developed by the Government, used in conjunction with the identification of codification data in the TIR. This code is used only by Canada, Denmark and the United States. Note: For US use only";
                            break;
                          case "C" :
                            result = "ACTIVE SPEZIALIZED USE RECORD: Do not use for codification purposes. Use the NCAGE code as indicated. Used by the procurement officials in cases where the design control entity is different form the manufacturer. Note: For US use only";
                            break;
                          default :
                            result = "ID TIDAK DITEMUKAN";
                            break;
                        }
                        // alert(result);
                        Swal.fire({
                          text: result,
                          icon: "info"
                        });
                    });

                    $("#example1").on("click", ".info-toec", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case "E" : 
                            result = "Non-US Manufactures";
                            break;
                          case "G" :
                            result = "Service providers - Organisational entities that provide intangible services rather than products, such as the following, Service organisations, Professional organisations, including engineering, construction and mining firms, Banks and universities, Providers of services, including consultation, training, research studies, These NCAGEs may be assigned to individuals.";
                            break;
                          case "H" : 
                            result = "OBSOLETE / Invalid";
                            break;
                          case "R" :
                            result = "REPLACED OR CONVERTED RECORD, WITH REPLACEMENT";
                            break;
                          case "F" :
                            result = "Non-manufacturers - Entities of the following types which do not manufacture: - Vendors/distributors - Sales offices - Retail establishments -Wholesale or jobbing establishments";
                            break;
                          case "A" :
                            result = "US/Canada manufacturers";
                            break;
                          case "I" :
                            result = "AD/135 allocated special codes (example: IREF0)";
                            break;
                          case "C" :
                            result = "Civilian Standards and Standards Organisations, including non-military government standards and standards organisations(example: ISO, DIN, BS, ANSI, etc.)";
                            break;
                          case "M" :
                            result = "Military Standards and Standards Organisations (example: STANAGS, MILSPECs, DEFSTANs, etc)";
                            break;
                          default :
                            result = "ID TIDAK DITEMUKAN";
                            break;
                        }
                        // alert(result);
                        Swal.fire({
                          text: result,
                          icon: "info"
                        });
                    });
                    </script>

</body>

</html>