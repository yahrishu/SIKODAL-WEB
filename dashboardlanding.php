<?php
include "koneksi.php";
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PUSKOD BARANAHAN KEMHAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/kemhanlogo.png" rel="icon">
  <link href="assets/img/kemhanlogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
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

  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- datatable -->
  <link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" integrity="sha384-tn1ylSZtfgsRN1jKyE2NYigfJocW6ctEQ5zq+AvPZVQGFEI410niaUnp9iHzOLot" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/buttons/3.2.4/css/buttons.bootstrap4.min.css" rel="stylesheet" integrity="sha384-YHUnVhPYErA/IH3gGmVQyB2twaYx/xm4Nw+wQE2xZoB+VBmRPPt9Paqc4/eShUAF" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/select/3.0.1/css/select.bootstrap4.min.css" rel="stylesheet" integrity="sha384-UXVGt9tIdXKYH6jUZ3q9ALkXEGNXM1lwDN6Hx9rMLp3SFa+GulPnO4CEOdFDeZX9" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    }
    .section {
    min-height: 100vh;
    }
    </style>
    
</head>

<body>
  
<br>
  <main>
    <div class="container-fluid">
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
                  <h5 class="card-title">ENTITAS DALAM NEGERI <span>| <?php echo date("M Y");?></span></h5>
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
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"><i> ENTITAS DALAM NEGERI</i></span>

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
                  <h5 class="card-title">NOMOR SEDIAAN NASIONAL <span>| <?php echo date("M Y");?></span></h5>
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
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"><i> NOMOR SEDIAAN NASIONAL</i>
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
              <canvas id="pieChart1" style="max-height: 400px;"></canvas>
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
              <h5 class="card-title">TIPE ENTITAS</h5>

              <!-- Pie Chart -->
              <div id="pieChart" style="min-height: 370px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#pieChart")).setOption({
                    title: {
                      text: 'TIPE ENTITAS',
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
                          name: 'I : AC/135'
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
                          name: 'H : Goverenment'
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
              <h5 class="card-title">Track NCAGE Pertahun</h5>

              <!-- Line Chart -->
              <div style="min-height: 550px;" id="lineChart"></div>

              <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#lineChart"), {
                      series: [
                        {
                          name: "NCAGE",
                          <?php
                            include "koneksi.php";
                            $sql = "SELECT YEAR(CreatDate) AS tahun, COUNT(*) AS jumlah
                                    FROM ncage
                                    WHERE YEAR(CreatDate) BETWEEN 2017 AND 2025
                                    GROUP BY YEAR(CreatDate)
                                    ORDER BY tahun";
                            $result = $koneksi->query($sql);

                            $yearCounts = [];
                            for ($y = 2017; $y <= 2025; $y++) {
                              $yearCounts[$y] = 0;
                            }
                            while ($row = $result->fetch_assoc()) {
                              $yearCounts[$row['tahun']] = (int)$row['jumlah'];
                            }
                            echo "data: " . json_encode(array_values($yearCounts)) . ",";
                          ?>
                        }
                      ],
                      chart: {
                        height: 350,
                        type: 'line',
                        zoom: { enabled: false },
                        toolbar: { show: false }
                      },
                      dataLabels: { enabled: false },
                      stroke: { curve: 'straight' },
                      grid: {
                        row: {
                          colors: ['#f3f3f3', 'transparent'],
                          opacity: 0.5
                        }
                      },
                      xaxis: {
                        categories: ['2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025']
                      }
                    }).render();
                  });
                </script>
              <!-- End Line Chart -->

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Track NSN Pertahun</h5>
                <?php

                      // Query data
                      $sql = "SELECT YEAR(DATE_LAST_CHANGE) AS tahun, COUNT(*) AS jumlah
                              FROM nsn45
                              WHERE YEAR(DATE_LAST_CHANGE) BETWEEN 2017 AND 2025
                              GROUP BY YEAR(DATE_LAST_CHANGE)
                              ORDER BY tahun";

                      $result = $koneksi->query($sql);

                      // Siapkan array tahun dan jumlah
                      $labels = [];
                      $data = [];

                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              $labels[] = $row['tahun'];
                              $data[] = $row['jumlah'];
                          }
                      }

                      // Konversi ke JSON supaya bisa dipakai di JS
                      $labels_json = json_encode($labels);
                      $data_json = json_encode($data);
                    ?>
              <!-- Line Chart -->
              <canvas id="lineChartx" style="max-height: 400px;"></canvas>
              <script>
                 document.addEventListener("DOMContentLoaded", () => {
                  // Data dari PHP
                  const labels = <?php echo $labels_json; ?>;
                  const data = <?php echo $data_json; ?>;

                  new Chart(document.querySelector('#lineChartx'), {
                    type: 'line',
                    data: {
                      labels: labels,
                      datasets: [{
                        data: data,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                      }]
                    },
                    options: {
                      plugins: {
                        legend: {
                          display: false // Legend dimatikan
                        }
                      },
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Line CHart -->

            </div>
          </div>
        </div>
        <?php
        include "koneksi.php";

        $sql = "SELECT 
                    SUM(CASE WHEN (YEAR(CreatDate) + 5) >= YEAR(CURDATE()) THEN 1 ELSE 0 END) AS aktif,
                    SUM(CASE WHEN (YEAR(CreatDate) + 5) < YEAR(CURDATE()) THEN 1 ELSE 0 END) AS tidak_aktif
                FROM ncage";

        $result = $koneksi->query($sql);
        $row = $result->fetch_assoc();

        $aktif = (int)$row['aktif'];
        $tidak_aktif = (int)$row['tidak_aktif'];
        ?>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">NCAGE STATUS</h5>
              <!-- Donut Chart -->
              <div id="donutChart2"></div>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#donutChart2"), {
                    series: [<?= $aktif ?>, <?= $tidak_aktif ?>],
                    chart: {
                      height: 400,
                      type: 'donut',
                      toolbar: {
                        show: false
                      }
                    },
                    labels: ['Aktif', 'Tidak Aktif'],
                  }).render();
                });
                </script>
              </div>
              <!-- End Donut Chart -->
            </div>
          </div>
        </div>
            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
      

      </div>
    </section>

    </div>
  </main><!-- End #main -->
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
                            "cetak", "view", "Manufacturer_Name", "NCAGE", "Reference", "NSC", "NIIN", "NSN",
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
  <script>
  $(document).on('click', '.cetak_data', function () {
    window.print();
  });
</script>

</body>

</html>