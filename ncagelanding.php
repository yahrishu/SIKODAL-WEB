<!DOCTYPE html>
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
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i>DATA NCAGE</i></h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

              <!-- Table with stripped rows -->
                <table id="example1" class="table table-bordered table-striped nowrap" style="width: 100% !important;">                
                <thead>
                   <tr>
                    <th>CETAK</th>
                    <th>VIEW</th>
                    <th style="width: 100px;">NCAGE</th>
                    <th style="width: 100px;">NCAGESD</th>
                    <th style="width: 100px;">TOEC</th>
                    <th style="width: 100px;">ENTITY NAME</th>
                    <th style="width: 100px;">STREET</th>
                    <th style="width: 100px;">CITY</th>
                    <th style="width: 100px;">POST CODE</th> 
                    <th style="width: 100px;">COUNTRY</th>
                    <th style="width: 100px;">STATE</th>
                    <th style="width: 100px;">DATE LAST CHANGE INTERNATIONAL</th>
                    <th style="width: 100px;">CREATDATE</th>
                    <th style="width: 100px;">TELPON</th>
                    <th style="width: 100px;">FAX</th>
                    <th style="width: 100px;">EMAIL</th>
                    <th style="width: 100px;">WEBSITE</th>
                    <th style="width: 100px;">REPLACE</th>
                    <th style="width: 100px;">FILE</th>   
                  </tr>
                  <tr>
                    <th></th>
                    <th></th>
                    <th><select id="filter-NCAGE" style="width: 100%"></th>
                    <th><select id="filter-NCAGESD"style="width: 100%"></th>
                    <th><select id="filter-TOEC"style="width: 100%"></th>
                    <th><select id="filter-Entity_Name"style="width: 100%"></th>
                    <th><select id="filter-Street"style="width: 100%"></th>
                    <th><select id="filter-City"style="width: 100%"></th>
                    <th><select id="filter-Post_Code"style="width: 100%"></th>
                    <th><select id="filter-Country"style="width: 100%"></th>
                    <th><select id="filter-State"style="width: 100%"></th>
                    <th><select id="filter-Date_Last_Change_International"style="width: 100%"></th>
                    <th><select id="filter-CreatDate"style="width: 100%"></th>
                    <th><select id="filter-telephone"style="width: 100%"></th>
                    <th><select id="filter-fax"style="width: 100%"></th>
                    <th><select id="filter-Email"style="width: 100%"></th>
                    <th><select id="filter-website"style="width: 100%"></th>
                    <th><select id="filter-Replaced"style="width: 100%"></th>
                    <th><select id="filter-file"style="width: 100%"></th>
                </tr>
                </thead>
                <tbody>
                </table>
                <td class=" last">
                  <button type="button" class="btn btn-primary" data-id="" data-bs-toggle="modal" data-bs-target="#myModal"><i class="">Glossary</i></button>
                </td>
                <td class="last">
                  <a href="export_excel_ncage.php" class="btn btn-success" target="_blank">
                      <i class="bi bi-file-excel"></i> Excel
                  </a>
                </td>
                <td class="last">
                  <a href="export_pdf_ncage.php" class="btn btn-danger" target="_blank">
                      <i class="bi bi-file-pdf-fill"></i> Pdf
                  </a>
                </td>
              <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">NCAGE</h5>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body" id="detail_ncage">
                            <!-- Data akan dimuat di sini -->
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div> -->
                    </div>
                  </div>
              </div>
              <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-xl">
                <!-- konten modal-->
                <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header">NCAGE GLOSSARY
                    <!-- <button type="button" class="" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title"></h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body">
                    <p><b>NCAGE</b> <i>Nomor Kode Entitas<br> NCAGE (Number Commercial And Government Entity), Adalah Kode Entitas, terdiri dari 5 digit Angka dan Huruf, yang menunjukan dimana Barang perbekalan (Bekal) tersebut dibuat, negara mana, berikut alamat dan cara menghubungi. Kode Pabrik di Indonesia  (xxxxZ)</i></p>
                    <p><b>NCAGESD</b> <i> Kode penunjuk status<br> Status sebuah entitas </i></p>
                    <p><b>TOEC</b> <i> Jenis atau kode entitas organisasi <br> Kode yang mengidentifikasi produsen organisasi yang dianggap sebagai produsen</i></p>
                    <p><b>Entity Name</b> <i> <br> Nama Entitas (Pabrikan,Organisasi,dst)</p>
                    <p><b>Street</b> <i> <br> Alamat</p>
                    <p><b>Post Code</b> <i> <br>Kode Pos</p>
                    <p><b>Country</b> <i> <br>Negara</p>
                    <p><b>State</b> <i> <br>Provinsi</p>
                    <p><b>Date Last Change International</b> <i> <br>Memperbarui Data International</p>
                    <p><b>CreatDate</b> <i> <br>Tanggal Ditetapkan Puskod</p>
                    <p><b>Telphone</b> <i> <br>Nomor Telpon</p>
                    <p><b>Fax</b> <i> <br>Nomor Telpon</p>
                    <p><b>Email</b> <i> <br>Alamat Email</p>
                    <p><b>Website</b> <i> <br>Alamat Website</p>
                    <p><b>Replaced </b> <i> <br>Kode Entitas telah Digantikan Oleh </p>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup Glossary</button>
                  </div>
                </div>
              </div>
            </div>
            <script>
                $(document).ready(function () {
                $(document).on('click', '.view_data', function () {
                    var user_id = $(this).data('id');
                    $.ajax({
                        url: "fetch2.php",
                        method: "POST",
                        data: { id: user_id },
                        success: function (data) {
                            $('#detail_ncage').html(data);
                            $('#dataModal').modal('show');
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
                            "cetak", "view", "NCAGE", "NCAGESD", "TOEC", "Entity_Name", "Street", "City",
                            "Post_Code", "Country", "State", "Date_Last_Change_International", "CreatDate", "telephone",
                            "fax", "Email", "website", "Replaced", "file"
                        ];

                        var table = $('#example1').DataTable({
                            processing: true,
                            serverSide: true,
                            select: true,
                            scrollX: true,
                            orderCellsTop: true,
                            fixedHeader: true,
                            
                            ajax: {
                                url: "server_ncage.php",
                                type: "POST"
                            },
                            columns: [
                                { data: "cetak", width: "50px", orderable: false },
                                { data: "view", width: "50px", orderable: false },
                                { data: "NCAGE" },
                                { data: "NCAGESD" },
                                { data: "TOEC" },
                                { data: "Entity_Name" },
                                { data: "Street" },
                                { data: "City" },
                                { data: "Post_Code" },
                                { data: "Country" },
                                { data: "State" },
                                { data: "Date_Last_Change_International" },
                                { data: "CreatDate" },
                                { data: "telephone" },
                                { data: "fax" },
                                { data: "Email" },
                                { data: "website" },
                                { data: "Replaced" },
                                { data: "file" }
                            ],
                            initComplete: function(settings, json) {
                                var api = this.api();

                                columnNames.forEach(function(colName, i) {
                                    if (colName === "cetak") return; // skip cetak

                                    var columnIndex = i;

                                    $.ajax({
                                        url: 'ncage_column_options.php',
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