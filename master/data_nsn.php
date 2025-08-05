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
           <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Indhan</span>
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
        <a class="nav-link collapsed" data-bs-target="#tables-nav6" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Management User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav6" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_user.php">
              <i class="bi bi-circle"></i><span>User Pengguna</span>
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
      <h1>Data Nomor Sediaan Nasional</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="data_nsn.php">Data</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i>NOMOR SEDIAAN NASIONAL</i></h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

              <!-- Table with stripped rows -->
                <table id="example1" class="table table-bordered table-striped nowrap" style="width: 100% !important;">                
                <thead>
                  <tr>
                    <th>CETAK</th>
                    <th>VIEW</th>
                    <th>UPLOAD</th>
                    <th style="width: 100px;">MANUFACTURER NAME</th>
                    <th style="width: 100px;">NCAGE</th>
                    <th style="width: 100px;">REFERENCE NUMBER</th>
                    <th style="width: 100px;">NSC</th>
                    <th style="width: 100px;">NIIN</th>
                    <th style="width: 100px;">NSN</th>
                    <th style="width: 100px;">INC</th>
                    <th style="width: 100px;">TYPE</th> 
                    <th style="width: 100px;">FIIG</th>
                    <th style="width: 100px;">ITEM_NAME</th>
                    <th style="width: 100px;">COUNTRY</th>
                    <th style="width: 100px;">DATE_OF_NIIN_ASSIGNMENT</th>
                    <th style="width: 100px;">DATE_LAST_CHANGE</th>
                    <th style="width: 100px;">RNFC</th>
                    <th style="width: 100px;">RNCC</th>
                    <th style="width: 100px;">RNVC</th>
                    <th style="width: 100px;">DAC</th>
                    <th style="width: 100px;">RNAAC</th>
                    <th style="width: 100px;">RNSC</th>  
                    <th style="width: 100px;">GAMBAR</th> 
                  </tr>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><select id="filter-Manufacturer_Name" style="width: 100%"></th>
                    <th><select id="filter-NCAGE"style="width: 100%"></th>
                    <th><select id="filter-Reference"style="width: 100%"></th>
                    <th><select id="filter-NSC"style="width: 100%"></th>
                    <th><select id="filter-NIIN"style="width: 100%"></th>
                    <th><select id="filter-NSN"style="width: 100%"></th>
                    <th><select id="filter-INC"style="width: 100%"></th>
                    <th><select id="filter-Type"style="width: 100%"></th>
                    <th><select id="filter-FIIG"style="width: 100%"></th>
                    <th><select id="filter-Item_Name"style="width: 100%"></th>
                    <th><select id="filter-Country"style="width: 100%"></th>
                    <th><select id="filter-Date_of_NIIN_Assignment"style="width: 100%"></th>
                    <th><select id="filter-Date_last_change"style="width: 100%"></th>
                    <th><select id="filter-RNFC"style="width: 100%"></th>
                    <th><select id="filter-RNCC"style="width: 100%"></th>
                    <th><select id="filter-RNVC"style="width: 100%"></th>
                    <th><select id="filter-DAC"style="width: 100%"></th>
                    <th><select id="filter-RNAAC"style="width: 100%"></th>
                    <th><select id="filter-RNSC"style="width: 100%"></th>
                    <th><select id="filter-GAMBAR"style="width: 100%"></th>
                </tr>
                </thead>
                <tbody>
                </table>
                <td class=" last">
                   <button type="button" class="btn btn-primary" data-id="" data-toggle="modal" data-target="#myModal"><i class="">Glossary</i></button>
                </td>
                <td class="last">
                  <a href="export_excel_nsn.php" class="btn btn-success" target="_blank">
                      <i class="bi bi-file-excel"></i> Excel
                  </a>
                </td>
                <td class="last">
                  <a href="export_pdf_nsn.php" class="btn btn-danger" target="_blank">
                      <i class="bi bi-file-pdf-fill"></i> Pdf
                  </a>
                </td>
                <td class="last">
                  <button type="button" class="btn btn-warning" data-id="" data-toggle="modal" data-target="#dataModal2">
                      <i class="bi bi-cloud-upload-fill"></i> Import</i></button>
                  </a>
                </td>
                <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">NSN 45</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button> -->
                          </div>
                          <div class="modal-body" id="detail_nsn_lokal">
                              <!-- Data akan dimuat di sini -->
                          </div>
                          <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          </div> -->
                      </div>
                  </div>
                </div>
                <div id="dataModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">UPLOAD GAMBAR NSN</h5>
                          </div>
                          <div class="modal-body" id="detail_upload_gambar_nsn">
                              <!-- Data akan dimuat di sini -->
                          </div>
                          <div class="modal-footer">
                              <!-- optional tombol -->
                          </div>
                      </div>
                  </div>
              </div>
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-xl">
                <!-- konten modal-->
                <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header">NSN GLOSSARY
                    <!-- <button type="button" class="" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title"></h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body">
                    <p><b>MANUFACTURE NAME</b> <i><br> Nama Entitas /Pabrikan</i></p>
                    <p><b>NCAGE</b> <i> Nomor Kode Pabrik <br> NCAGE (Number Commercial And Government Entity), Adalah Kode Entitas, terdiri dari 5 digit Angka dan Huruf, yang menunjukan dimana Barang perbekalan (Bekal) tersebut dibuat, negara mana, berikut alamat dan cara menghubungi. Kode Pabrik di Indonesia  (xxxxZ)</i></p>
                    <p><b>REFERENCE NUMBER</b> <i> <br> P/N (Part Number) atau RN (Reference Number). Adalah Nomor Barang atau Katalog Barang yang ditetapkan oleh pembuat/pabrik sesuai sistem yang dianut oleh Pabrikan atau Produsen Barang tersebut, dapat berupa Huruf, numerik atau gabungan keduanya</i></p>
                    <p><b>FSC</b> <i> <br> (Federal Supply Classification Code-FSC) Pengelompokan GroupKlass suati Materiil, adalah Kode yang ditetapkan dengan 4 (empat) digit Numerik, digunakan untuk menghubungkan Barang yang satu dengan barang lainnya</p>
                    <p><b>NIIN</b> <i> <br> Nomor Identifikasi Barang Nasional, Kode yang ditetapkan dengan 9 (sembilan) digit numerik, yang ditetapkan secara Unik pada identifikasi suatu Barang,  Kode 9 digit ini,  ditetapkan hanya untuk Satu Bekal (IOS), dan berlaku selamanya (tidak dapat berobah sepanjang daur hidup barang)</p>
                    <p><b>NSN</b> <i> <br>Kode yang ditetapkan dengan 13 (tiga belas) digit numerik, yang merupakan gabungan dari FSC, dan NIIN, yang merupakan identitas dan hubungannya dengan satu Barang, dengan lainnya didalam sistem</p>
                    <p><b>INC</b> <i> <br>ITEM NAME CODE, merupakan kode pengenal dari suatu materiil yang akan diidentifikasi</p>
                    <p><b>TYPE</b> <i> <br>Provinsi</p>
                    <p><b>FIIG</b> <i> <br>Kode FIIG, sebagai Panduan yang digunakan dalam kegiatan identifikasi barang adalah FIIG (Federal Item Identification Guide)</p>
                    <p><b>ITEM NAME</b> <i> <br>Nama Materiil</p>
                    <p><b>COUNTRY</b> <i> <br>Negara</p>
                    <p><b>DATE OF NIIN ASSIGNMENT</b> <i> <br>Tanggal ditetapkan NCB Indonesia</p>
                    <p><b>DATE_LAST_CHANGE</b> <i> <br>Tanggal Pembaruan Data</p>
                    <p><b>RNFC</b> <i> Reference Number Format Code <br>RNFC adalah Kode yang mengidentifikasi format Nomor Referensi.</p>
                    <p><b>RNCC </b> <i> Reference Number Category Code<br>Kode yang menunjukkan hubungan antara sebuah Nomor referensi dengan Barang Bekal (Item of Supply)</p>
                    <p><b>RNVC </b> <i> REFERENCE NUMBER VARIATION CODE<br>nomor referensi yang merupakan suatu bentuk identifikasi barang/bukan/hanya merupakan informasi</p>
                    <p><b>DAC </b> <i> Document Availability Code <br>Kode yang ditetapkan untuk tipe dan ketersediaan Dokumen Teknik. Kode berupa Angka menandakan tipe dan ketersedian dari dokumen aslinya, yang diperoleh pada saat pengenalan Barang dan penyerahan Nomor rujukan (referensi), ketika terjadi transaksi katalogisasi. Sedangkan Kode Huruf menandakan dokumen yang sama, dapat digunakan dan akan dilengkapi pada pelaksanaan identifikasi dengan merujuk Kode Aktivitas Kegiatan (RNAAC) sebagai sarana rujukan silang. Kode Ketersediaan Dokumen (DAC) menunjukan ketersediaan dokumentasi RNAAC (Reference Action Activity Code)</p>
                    <p><b>RNSC </b> <i> Reference Number Status Code <br>Kode referensi yang menunjukkan dapat diterima atau distandarkan dari referensi untuk perolehan data</p>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Glossary</button>
                  </div>
                </div>
              </div>
            </div>
            <div id="dataModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data NSN Official </h5>
                            
                        </div>
                          <div class="modal-body" id="detail_import">
                              <form action="import_nsn.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">FILE IMPORT</label>
                                          <div class="col-sm-8">
                                            <input type="file" name="uploadfilensn" id="uploadfilensn" multiple class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" >
                                            <a href="download.php?file=nsn.xlsx">Download Format Import Excel</a>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary pull-right">Save</a></button>
                                    </div>            
                              </form>
                          </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
              </div>
            <script>
               $(document).on('click', '.view_data', function () {
                    var user_id = $(this).data('id');
                    $.ajax({
                        url: "fetch3.php",
                        method: "POST",
                        data: { id: user_id },
                        success: function (data) {
                            $('#detail_nsn_lokal').html(data);
                            $('#dataModal').modal('show');
                        }
                    });
                });
                $(document).ready(function () {
                $(document).on('click', '.upload-gambar-nsn', function () {
                    var user_id = $(this).data('id');
                    $.ajax({
                        url: "fetch_upload_gambar_nsn.php",
                        method: "POST",
                        data: { id: user_id },
                        success: function (data) {
                            $('#detail_upload_gambar_nsn').html(data);
                            $('#dataModal1').modal('show');
                        }
                    });
                });
            });
            </script>
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
                            "cetak", "view", "upload", "Manufacturer_Name", "NCAGE", "Reference", "NSC", "NIIN", "NSN",
                            "INC", "Type", "FIIG", "Item_Name", "Country", "Date_of_NIIN_Assignment",
                            "Date_last_change", "RNFC", "RNCC", "RNVC", "DAC", "RNAAC", "RNSC", "GAMBAR"
                        ];

                        var table = $('#example1').DataTable({
                            processing: true,
                            serverSide: true,
                            select: true,
                            scrollX: true,
                            orderCellsTop: true,
                            fixedHeader: true,
                            
                            ajax: {
                                url: "server_nsn.php",
                                type: "POST"
                            },
                            columns: [
                                { data: "cetak", width: "50px", orderable: false },
                                { data: "view", width: "50px", orderable: false },
                                { data: "upload", width: "50px", orderable: false },
                                { data: "Manufacturer_Name" },
                                { data: "NCAGE" },
                                { data: "Reference" },
                                { data: "NSC" },
                                { data: "NIIN" },
                                { data: "NSN" },
                                { data: "INC" },
                                { data: "Type" },
                                { data: "FIIG" },
                                { data: "Item_Name" },
                                { data: "Country" },
                                { data: "Date_of_NIIN_Assignment" },
                                { data: "Date_last_change" },
                                { data: "RNFC" },
                                { data: "RNCC" },
                                { data: "RNVC" },
                                { data: "DAC" },
                                { data: "RNAAC" },
                                { data: "RNSC" },
                                { data: "GAMBAR" }
                            ],
                            initComplete: function(settings, json) {
                                var api = this.api();

                                columnNames.forEach(function(colName, i) {
                                    if (colName === "cetak") return; // skip cetak

                                    var columnIndex = i;

                                    $.ajax({
                                        url: 'nsn_column_options.php',
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
                    $("#example1").on("click", ".info-RNFC", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case 1 : 
                            result = "Angka diformat seperti yang dikonfigurasikan pada dokumen asal dengan pengecualian modifikasi";
                            break;
                          case 3 :
                            result = "Format angka tidak diketahui karena nomor referensi telah dicatat sebelum impelementasi kode saat ini -RNFC-";
                            break;
                          case 4 : 
                            result = "Nomor asli tanpa modifikasi seperti yang awalnya dikonfigurasikan oleh pabrikan yang ditunjukkan oleh kode NCAGE";
                            break;
                          case 5 :
                            result = "Nomor referensi dihasilkan dari perubahan nomor bagian (PN) dengan konversi karakter nasional non-Latin ke karakter Latin yang termasuk dalam tabel Sub-set Karakter untuk Pertukaran Data Kodifikasi NATO. Konversi ini sesuai dengan tabel konversi nasional seperti yang ditentukan oleh NCB negara tempat produsen/distributor berada; metode konversi ini biasanya sesuai dengan standar ISO.";
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
                    $("#example1").on("click", ".info-RNCC", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case 1 : 
                            result = "Nomor barang (produk) yang ditentukan oleh pabrik pembuat peralatan siap pakai termasuk yang dibuat oleh pemerintah";
                            break;
                          case 2 :
                            result = "Nomor barang (suku cadang) yang digunakan atau dikembangkan dalam spesifikasi standar pemerintah untuk mengindentifikasi suatu IOS secara utuh";
                            break;
                          case 3 : 
                            result = "Nomor barang (produk) yang digunakan untuk mengidentifikasi suatu barang (produksi)/item atau serangkaian barang produksi yang digunakan oleh pabrik pembuat dalam mengatur desain, karakteristik, dan jumlah untuk keperluan pembuatan gambar teknik, spesifikasi, dan evaluasi";
                            break;
                          case 4 :
                            result = "Nomor barang (produk) dipakai untuk spesifikasi pemerintah dan standar referensi non definitif, serta nomor barang (suku cadang), tipe desaintor dan style nomor non defenitif yang termasuk dalam kode RNVC";
                            break;
                          case 5 :
                            result = "Nomor-nomor tambahan lainnya yang tidak termasuk kedalam nomor barang/produk (kode 1,2,3,4)";
                            break;
                          case 6 :
                            result = "Nomor barang (produk) yang memungkinkan berkaitan dengan nomor NSN";
                            break;
                          case 7 :
                            result = "Nomor barang (produk) yang menunjukkan suatu gambar yang bukan merupakan identifikasi suatu barang tetapi dirancang oleh pabrikan/perusahaan";
                            break;
                          case "A" :
                            result = "Kode dokumen yang menunjukkan ketentuan-ketentuan data berkaitan dengan logistik";
                            break;
                          case "C" :
                            result = "Nomor yang menunjukkan suatu barang (produksi) atau suplai diluar konsep IOS dalam NSN. Hanya digunakan saat dibutuhkan sebagai rujukan silang dalam mengidentifikasi item suplai";
                            break;
                          case "D" :
                            result = "Nomor yang menunjukkan suatu gambar atau dokumen teknis dalam mengidentifikasi IOS atau barang(produk)";
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
                    $("#example1").on("click", ".info-RNVC", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case 1 : 
                            result = "Suatu nomor referensi desain kontrol yang tidak dapat mengidentifikasi barang produk tanpa informasi tambahan";
                            break;
                          case 2 :
                            result = "Suatu nomor referensi desain kontrol dari suatu barang produksi yang akan menjadi barang bekal (Item of Supply/IOS)";
                            break;
                          case 3 : 
                            result = "Suatu nomor referensi desain kontrol dari suku cadang pabrik yang dapat diperbaiki, diganti atau diinstal";
                            break;
                          case 9 :
                            result = "Suatu spesifikasi, standar, atau nomor referensi yang telah diganti, ditunda, tidak dipakai lagi atau tidak dilanjutkan yang hanya berisi informasi";
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
                    $("#example1").on("click", ".info-DAC", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case 1 : 
                            result = "Pabrik memiliki gambar dan dapat diminta";
                            break;
                          case 2 :
                            result = "Pabrik memiliki gambar tetapi tidak diberikan";
                            break;
                          case 3 : 
                            result = "Pabrik memiliki dokumen teknis dan dapat diminta";
                            break;
                          case 4 :
                            result = "Pabrik memiliki dokumen teknis tetapi tidak diberikan";
                            break;
                          case 5 : 
                            result = "Pabrik memberikan gambar tetapi tidak menyertakan dokumen teknis";
                            break;
                          case 6 :
                            result = "Pabrik tidak memiliki gambar";
                            break;
                          case 9 : 
                            result = "Gambar, dokumen tidak ada";
                            break;
                          case "A" :
                            result = "Tersedianya gambar teknis dan gambar tersebut dapat digunakan tanpa batas/bebas";
                            break;
                          case "B" :
                            result = "Tersedianya gambar teknis dan gambar tersebut dapat digunakan terbatas sesuai dengan klausa kontrak oleh pabrik/perusahaan dan bersifat rahasia";
                            break;
                          case "C" :
                            result = "Tersedianya gambar teknis dan gambar tersebut dapat digunakan tanpa batas dan dibawah pengawasan pabrik";
                            break;
                          case "D" :
                            result = "Tersedianya gambar teknis dan gambar tersebut dapat digunakan tanpa batas dan dibawah pengawasan pabrik, bersifat bebas";
                            break;
                          case "E" :
                            result = "Tersedianya data teknik selain gambar teknik, digunakan tanpa batas dan dapat diminta kepada pabrik";
                            break;
                          case "F" :
                            result = "Tersedianya data teknik selain gambar teknik digunakan terbatas dapat diminta kepada pabrik dan bersifat rahasia";
                            break;
                          case "G" :
                            result = "Tersedianya data teknik selain gambar teknik digunakan tanpa batas dan dibawah pengawasan pabrik untuk permintaan tertentu";
                            break;
                          case "H" :
                            result = "Tersedianya data teknik digunakan secara terbatas sesuai dengan clausa kontrak pabrik dan bersifat rahasia";
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
                    $("#example1").on("click", ".info-RNAAC", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case "YT" : 
                            result = "Kode untuk mengenali dimana dokumen teknik tersebut digunakan, untuk Indonesia kodenya “YT”.";
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
                    $("#example1").on("click", ".info-RNSC", function() {
                      var result = "";
                        var info_id = $(this).data('id');
                        switch (info_id) {
                          case "A" : 
                            result = "Hanya digunakan untuk nomor referensi, daftar, nomor, gambar dari standar pabrikan (sesuai standar)";
                            break;
                          case "B" :
                            result = "Hanya digunakan untuk nomor referesi, daftar, nomor, gambar yang lama(tidak sesuai standar)";
                            break;
                          case "C" : 
                            result = "Nomor referensi dari spesifikasi/standar umum yang tidak sesuai";
                            break;
                          case "D" :
                            result = "Nomor referensi belum dikenali/ditemukan";
                            break;
                          case "E" :
                            result = "Nomor referensi dari dokumen teknik produk yang hanya bisa digunakan dengan persetujua kontrak";
                            break;
                          case "F" :
                            result = "Dokumen teknik produk yang bermutu";
                            break;
                          case "G" :
                            result = "Pabrikan dan nomor referensi tidak sesuai";
                            break;
                          case "H" :
                            result = "Nomor referensi asli dari dokumen teknik dengan kondisi spesial, digunakan hanya untuk satu pabrik";
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
                    <?php if (isset($_SESSION['sukses'])): ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: '<?php echo $_SESSION['sukses']; ?>',
                            showConfirmButton: false,
                            timer: 2000
                        });
                    </script>
                    <?php unset($_SESSION['sukses']); ?>
                <?php endif; ?>

</body>

</html>