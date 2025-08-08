<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PUSKOD BAHARWAT KEMHAN</title>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- datatable -->
  <link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" integrity="sha384-tn1ylSZtfgsRN1jKyE2NYigfJocW6ctEQ5zq+AvPZVQGFEI410niaUnp9iHzOLot" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/buttons/3.2.4/css/buttons.bootstrap4.min.css" rel="stylesheet" integrity="sha384-YHUnVhPYErA/IH3gGmVQyB2twaYx/xm4Nw+wQE2xZoB+VBmRPPt9Paqc4/eShUAF" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/select/3.0.1/css/select.bootstrap4.min.css" rel="stylesheet" integrity="sha384-UXVGt9tIdXKYH6jUZ3q9ALkXEGNXM1lwDN6Hx9rMLp3SFa+GulPnO4CEOdFDeZX9" crossorigin="anonymous">


  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

     <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <img src="assets/img/logox.png" style="width: 300px; height: 200px; object-fit: contain;">
              <div class="d-flex justify-content-center py-4">
                <style>
                .text-merah {
                color: #960f0fff !important; /* merah Bootstrap */
                }
                </style>
                <a href="#" class="logo d-flex align-items-center w-auto">
                    <span class="d-none d-lg-block text-merah"><center>PUSKOD BAHARWAT KEMHAN</center></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <!-- <h5 class="card-title text-center pb-0 fs-4"></h5>
                    <p class="text-center small"></p> -->
                  </div>

                    <form id="formNcage" class="row g-3 needs-validation" novalidate>
                      <div class="col-12">
                        <label for="namaperusahaan" class="form-label">NAMA PERUSAHAAN</label>
                        <div class="input-group has-validation">
                          <input type="text" name="Entity_Name" class="form-control" id="namaperusahaan" required>
                          <div class="invalid-feedback">Silakan masukkan Nama Perusahaan terlebih dahulu.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <button class="btn btn-danger w-100" type="submit">Cari</button>
                      </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modalNcage" tabindex="-1" aria-labelledby="modalNcageLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title" id="modalNcageLabel">Hasil Pencarian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                          </div>
                          <div class="modal-body">
                            <table id="ncageTable" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Kode NCAGE</th>
                                  <th>Nama Perusahaan</th>
                                  <th>Negara</th>
                                  <th>Alamat</th>
                                </tr>
                              </thead>
                              <tbody></tbody>
                            </table>
                            <div id="ncageLink" class="mt-3 text-center"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <script>
                    document.addEventListener("DOMContentLoaded", function () {
                      const form = document.getElementById("formNcage");
                      const input = document.getElementById("namaperusahaan");

                      form.addEventListener("submit", function (e) {
                        e.preventDefault();

                        const entityName = input.value.trim();
                        const tbody = document.querySelector('#ncageTable tbody');
                        const linkContainer = document.getElementById("ncageLink");

                        if (!entityName) {
                          input.classList.add("is-invalid");
                          input.focus();
                          return;
                        } else {
                          input.classList.remove("is-invalid");
                        }

                        // AJAX ke proses_cari_ncage.php
                        fetch("proses_cari_ncage.php", {
                          method: "POST",
                          headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                          },
                          body: "Entity_Name=" + encodeURIComponent(entityName)
                        })
                        .then(response => response.json())
                        .then(data => {
                          tbody.innerHTML = "";
                          linkContainer.innerHTML = "";

                          if (data.length > 0) {
                            let html = '';
                            data.forEach(function(item) {
                              html += `
                                <tr>
                                  <td>${item.NCAGE}</td>
                                  <td>${item.Entity_Name}</td>
                                  <td>${item.Country}</td>
                                  <td>${item.Street}</td>
                                </tr>
                                <tr>
                                  <td colspan="4" class="text-center">
                                    <a href="registrasi_kodifikasi.php?ncage=${encodeURIComponent(item.NCAGE)}&namaperusahaan=${encodeURIComponent(item.Entity_Name)}" class="btn btn-success">
                                      Lanjut Registrasi Kodifikasi
                                    </a>
                                  </td>
                                </tr>
                              `;
                            });
                            tbody.innerHTML = html;
                          } else {
                            tbody.innerHTML = `
                              <tr>
                                <td colspan="4" class="text-center text-danger">
                                  Data tidak ditemukan.
                                </td>
                              </tr>
                            `;
                            linkContainer.innerHTML = `
                              <a href="daftar_ncage.php" class="btn btn-primary">Daftar NCAGE Baru</a>
                            `;
                          }

                          // Tampilkan modal
                          const ncageModal = new bootstrap.Modal(document.getElementById('modalNcage'));
                          ncageModal.show();
                        })
                        .catch(error => {
                          console.error("Error:", error);
                        });
                      });
                    });
                    </script>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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

  <!-- datatable -->
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js" integrity="sha384-RZEqG156bBQSxYY9lwjUz/nKVkqYj/QNK9dEjjyJ/EVTO7ndWwk6ZWEkvaKdRm/U" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap4.min.js" integrity="sha384-lzE84zE76t/xTDUpoKl8o6c0h10nNP8YllhiEMM0c/sSn4F16OzlMehMoHkVTsTN" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.4/js/dataTables.buttons.min.js" integrity="sha384-W+u8oyKVP+xXIEiQx3Zffi+rKULG3CX+yYaA+Ww6nUjUsL8Pn6fBTE7swLLBtJWQ" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/3.2.4/js/buttons.bootstrap4.min.js" integrity="sha384-1oeq8jb8l26AfnhvoQ1kcuVi2ty/y+QuzyJCi5E+GC31PymbE9QEla3XuYTwZHBC" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/select/3.0.1/js/dataTables.select.min.js" integrity="sha384-rJdomZwznaHW2zmRyvbgDRNVWK3XuD1AVsMUn+IVFBOZTW871NIFjfNinziLytgY" crossorigin="anonymous"></script>


</body>

</html>