<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIKODAL - PUSKOD BARANAHAN KEMHAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

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
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/kemhanlogo.png" width="30" height="50">
        <span class="d-none d-lg-block">SIKODAL</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a>End Notification Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul>End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>End Messages Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul>End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <!-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a>End Profile Iamge Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->

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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Identifikasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_group_class.php">
              <i class="bi bi-clipboard-data"></i><span>H2</span>
            </a>
          </li>
          <li>
            <a href="data_nama_baku.php">
              <i class="bi bi-clipboard-data"></i><span>H6</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- </li>End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Skrinning</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-clipboard-dat"></i><span>NMCRL Raw DATA</span>
            </a>
          </li>
          <li>
            <a href="data_ios.php">
              <i class="bi bi-clipboard-dat"></i><span>IOS</span>
            </a>
          </li>
          <li>
            <a href="data_nsn.php">
              <i class="bi bi-clipboard-dat"></i><span>NSN 45</span>
            </a>
          </li>
          <li>
            <a href="data_pscn.php">
              <i class="bi bi-clipboard-dat"></i><span>PSCN</span>
            </a>
          </li>
          <li>
            <a href="data_harwat.php">
              <i class="bi bi-clipboard-dat"></i><span>Data katalog Harwat</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Publikasi Katalog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_ncb.php">
              <i class="bi bi-circle"></i><span>NCB</span>
            </a>
          </li>
          <li>
            <a href="data_ncage.php">
              <i class="bi bi-circle"></i><span>Data NCAGE</span>
            </a>
          </li>
          <li>
            <a href="data_ba_harwat.php">
              <i class="bi bi-circle"></i><span>Berita Acara Harwat</span>
            </a>
          </li>
        </ul> 
      </li><!-- End Tables Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Doc</h6>
                    </li>
                    <li><a class="dropdown-item" href="export_excel_ncage.php">Excel</a></li>
                    <li><a class="dropdown-item" href="export_pdf_ncage.php">PDF</a></li>
                    <!-- <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li> -->
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NCAGE <span>| <?php echo date("M Y");?></span></h5>
                    <?php
                        $data_ncage = mysqli_query($koneksi, "SELECT * FROM ncage");
                        $jumlah_data_ncage = mysqli_num_rows($data_ncage);
                    ?>
                    <?php
                        $bulan  = date('n');
                    ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-caret-up-square-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $jumlah_data_ncage;?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"><i> NCAGE (Entity Code)</i></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Doc</h6>
                    </li>

                    <li><a class="dropdown-item" href="export_excel_nsn.php">Excel</a></li>
                    <li><a class="dropdown-item" href="export_pdf_nsn.php">PDF</a></li>
                    <!-- <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li> -->
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NSN <span>| <?php echo date("M Y");?></span></h5>
                    <?php
                        $data_nsn45 = mysqli_query($koneksi, "SELECT * FROM nsn45");
                        $jumlah_data_nsn45 = mysqli_num_rows($data_nsn45);
                    ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-caret-up-square-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $jumlah_data_nsn45;?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"><i> Nato Stock Number 45</i>
                      </span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Doc</h6>
                    </li>

                    <li><a class="dropdown-item" href="export_excel_pscn.php">Excel</a></li>
                    <li><a class="dropdown-item" href="export_pdf_pscn.php">PDF</a></li>
                    <!-- <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li> -->
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">PSCN <span>| <?php echo date("M Y");?></span></h5>
                    <?php
                        $data_pscn = mysqli_query($koneksi, "SELECT * FROM pscn");
                        $jumlah_data_pscn = mysqli_num_rows($data_pscn);
                    ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-caret-up-square-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $jumlah_data_pscn;?></h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"><i>Permanent System Control Number</i></span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Katalog Materiil</h5>

              <!-- Pie Chart -->
              <canvas id="pieChart1" style="max-height: 355px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart1'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'TNI AD',
                        'TNI AU',
                        'TNI AL'
                      ],
                      datasets: [{
                        label: 'Unit Organiasi',
                        data: [
                            <?php 
								$jumlah_1 = mysqli_query($koneksi,"select * from skema_import_katalog_materiil_final where SATKER ='TNI AD'");
								echo mysqli_num_rows($jumlah_1);
							?>, 
							<?php 
								$jumlah_2 = mysqli_query($koneksi,"select * from skema_import_katalog_materiil_final where SATKER='TNI AU'");
								echo mysqli_num_rows($jumlah_2);
							?>, 
							<?php 
								$jumlah_3 = mysqli_query($koneksi,"select * from skema_import_katalog_materiil_final where SATKER='TNI AL'");
								echo mysqli_num_rows($jumlah_3);
							?>, 
                            ],
                        backgroundColor: [
                          'rgb(24, 150, 87)',
                          'rgb(127, 201, 250)',
                          'rgb(48, 136, 139)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kodifikasi</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ["BADIKLAT", "BIRO UMUM", "DISINFOLAHTAD", "DISLAIKAD","DISLITBANGAD","DISPENAD","DITTOPAD","KEMHAN","Litbang AL","PUSBENGANGAD","PUSHUBAD","PUSINTELAD","PUSKES TNI AD","PUSPALAD","PUSPENERBAD",
                              "PUSSANSIAD","PUSZIAD","RS UDAYANA BALI","TNI AD","TNI AL","TNI AU"],
                      datasets: [{
                        label: '',
                        data: [
                        <?php 
							$jumlah_1 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%BADIKLAT%'");
							echo mysqli_num_rows($jumlah_1);
						?>, 
						<?php 
							$jumlah_2 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%BIRO UMUM%'");
							echo mysqli_num_rows($jumlah_2);
						?>, 
						<?php 
							$jumlah_3 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%DISINFOLAHTAD%'");
							echo mysqli_num_rows($jumlah_3);
						?>, 
						<?php 
							$jumlah_4 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%DISLAIKAD%'");
							echo mysqli_num_rows($jumlah_4);
						?>,
						<?php
							$jumlah_5 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%DISLITBANGAD%'");
							echo mysqli_num_rows($jumlah_5);
						?>,
						<?php
							$jumlah_6 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%DISPENAD%'");
							echo mysqli_num_rows($jumlah_6);
						?>,
						<?php
							$jumlah_7 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%DITTOPAD%'");
							echo mysqli_num_rows($jumlah_7);
						?>,
						<?php
							$jumlah_8 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%KEMHAN%'");
							echo mysqli_num_rows($jumlah_8);
						?>,
						<?php
							$jumlah_9 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%Litbang AL%'");
							echo mysqli_num_rows($jumlah_9);
						?>,
						<?php
							$jumlah_10 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSBENGANGAD%'");
							echo mysqli_num_rows($jumlah_10);
						?>,
						<?php
							$jumlah_11 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSHUBAD%'");
							echo mysqli_num_rows($jumlah_11);
						?>,
						<?php
						    $jumlah_12 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSINTELAD%'");
							echo mysqli_num_rows($jumlah_12);
						?>,
						<?php
							$jumlah_13 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSKES TNI AD%'");
							echo mysqli_num_rows($jumlah_13);
						?>,
						<?php
							$jumlah_14 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSPALAD%'");
							echo mysqli_num_rows($jumlah_14);
						?>,									
                        <?php
							$jumlah_15 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSPENERBAD%'");
							echo mysqli_num_rows($jumlah_15);
						?>,
                        <?php
							$jumlah_16 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSSANSIAD%'");
							echo mysqli_num_rows($jumlah_16);
						?>,
                        <?php
							$jumlah_17 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%PUSZIAD%'");
							echo mysqli_num_rows($jumlah_17);
						?>,
                        <?php
							$jumlah_18 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%RS UDAYANA BALI%'");
							echo mysqli_num_rows($jumlah_18);
						?>,
                        <?php
							$jumlah_19 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%TNI AD%'");
							echo mysqli_num_rows($jumlah_19);
						?>,
                        <?php
							$jumlah_20 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%TNI AU%'");
							echo mysqli_num_rows($jumlah_20);
						?>,
                        <?php
							$jumlah_21 = mysqli_query($koneksi,"select * from kodifikasi where Satuan_Pengguna_Akhir like '%TNI AL%'");
							echo mysqli_num_rows($jumlah_13);
						?>],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)',
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)',
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                     options: {
                        plugins: {
                        legend: {
                        display: false,
                        labels: {
                        color: 'rgb(255, 99, 132)'
                        }
                    }
                    },
                    scales: {
                    yAxes: [{
                    ticks: {
                    beginAtZero:true
                    }
					}]
					}
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

            <!-- Recent Sales -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TOEC NCAGE</h5>

              <!-- Pie Chart -->
              <div id="pieChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#pieChart")).setOption({
                    title: {
                      text: 'TOEC NCAGE',
                      subtext: '',
                      left: 'center'
                    },
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      orient: 'vertical',
                      left: 'left'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: '50%',
                      data: [{
                        value: 
                        <?php 
							$jumlah_1 = mysqli_query($koneksi,"select * from ncage where TOEC like '%I%'");
							echo mysqli_num_rows($jumlah_1);
						?>,
                          name: 'I : US/Canada manufacturers'
                        },
                        {
                          value: 
                        <?php 
							$jumlah_2 = mysqli_query($koneksi,"select * from ncage where TOEC like '%E%'");
							echo mysqli_num_rows($jumlah_2);
						?>,
                          name: 'E : Non-US Manufactures'
                        },
                        {
                          value: 
                        <?php 
							$jumlah_3 = mysqli_query($koneksi,"select * from ncage where TOEC like '%F%'");
							echo mysqli_num_rows($jumlah_3);
						?>,
                          name: 'F : Non-manufacturers'
                        },
                        {
                          value: 
                        <?php 
							$jumlah_4 = mysqli_query($koneksi,"select * from ncage where TOEC like '%G%'");
							echo mysqli_num_rows($jumlah_4);
						?>,
                          name: 'G : Service providers'
                        },
                        {
                          value: 
                        <?php
							$jumlah_5 = mysqli_query($koneksi,"select * from ncage where TOEC like '%H%'");
							echo mysqli_num_rows($jumlah_5);
						?>,
                          name: 'H : Obsolote'
                        }
                      ],
                      emphasis: {
                        itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                      }
                    }]
                  });
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Unit Organiasi</h5>

              <!-- Donut Chart -->
              <div id="donutChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#donutChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 
                                <?php 
									$jumlah_1 = mysqli_query($koneksi,"select * from skema_impor_uo_final where UO ='KEMENTERIAN PERTAHANAN'");
										echo mysqli_num_rows($jumlah_1);
								?>,
                          name: 'KEMENTERIAN PERTAHANAN'
                        },
                        {
                          value: 
                                <?php 
									$jumlah_2 = mysqli_query($koneksi,"select * from skema_impor_uo_final where UO='UNIT ORGANISASI MABES TNI'");
										echo mysqli_num_rows($jumlah_2);
								?>,
                          name: 'MABES TNI'
                        },
                        {
                          value: 
                                <?php 
									$jumlah_3 = mysqli_query($koneksi,"select * from skema_impor_uo_final where UO='UNIT ORGANISASI TNI AD'");
										echo mysqli_num_rows($jumlah_3);
								?>,
                          name: 'TNI AD'
                        },
                        {
                          value: 
                                <?php 
									$jumlah_4 = mysqli_query($koneksi,"select * from skema_impor_uo_final where UO='UNIT ORGANISASI TNI AL'");
									echo mysqli_num_rows($jumlah_4);
								?>,
                          name: 'TNI AL'
                        },
                        {
                          value: 
                                <?php
									$jumlah_5 = mysqli_query($koneksi,"select * from skema_impor_uo_final where UO='UNIT ORGANISASI TNI AU'");
									echo mysqli_num_rows($jumlah_5);
								?>,
                          name: 'TNI AU'
                        }
                      ]
                    }]
                  });
                });
              </script>
              <!-- End Donut Chart -->

            </div>
          </div>
        </div>

            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Puskod Baranahan Kemhan</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>