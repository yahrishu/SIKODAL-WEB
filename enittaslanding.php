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
              <h5 class="card-title"><i>ENTITAS</i></h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

              <!-- Table with stripped rows -->
                <table id="example1" class="table table-bordered table-striped nowrap" style="width: 100% !important;">                
                <thead>
                   <tr>
                    <th>AKSI</th>
                    <th style="width: 100px;">NCAGE</th>
                    <th style="width: 100px;">ENTITY NAME</th>
                    <th style="width: 100px;">STREET</th>
                    <th style="width: 100px;">CITY</th>
                    <th style="width: 100px;">COUNTRY</th>
                    <th style="width: 100px;">STATE</th>
                    <th style="width: 100px;">TOEC</th>
                    <th style="width: 100px;">DATE LAST CHANGE INTERNATIONAL</th>
                    <th style="width: 100px;">DOC PUSKOD</th>
                    <th style="width: 100px;">DOC NSPA</th>
                  </tr>
                  <tr>
                    <th></th>
                    <th><select id="filter-NCAGE" style="width: 100%"></select></th>
                    <th><select id="filter-Entity_Name" style="width: 100%"></select></th>
                    <th><select id="filter-Street" style="width: 100%"></select></th>
                    <th><select id="filter-City" style="width: 100%"></select></th>
                    <th><select id="filter-Country" style="width: 100%"></select></th>
                    <th><select id="filter-State" style="width: 100%"></select></th>
                    <th><select id="filter-TOEC" style="width: 100%"></select></th>
                    <th><select id="filter-DLC_International" style="width: 100%"></select></th>
                    <th><select id="filter-Dok_Sertifikat" style="width: 100%"></select></th>
                    <th><select id="filter-Dok_NCAGE_NSPA" style="width: 100%"></select></th>
                </tr>
                </thead>
                <tbody>
                </table>
                <td class="last">
                  <a href="export_excel_entitas.php" class="btn btn-success" target="_blank">
                      <i class="bi bi-file-excel"></i> Excel
                  </a>
                </td>
                <td class="last">
                  <a href="export_pdf_entitas.php" class="btn btn-danger" target="_blank">
                      <i class="bi bi-file-pdf-fill"></i> Pdf
                  </a>
                </td>
                <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ENTTIAS</h5>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body" id="detail_entitas">
                            <!-- Data akan dimuat di sini -->
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div> -->
                    </div>
                  </div>
                </div>
            <script>
                $(document).ready(function () {
                $(document).on('click', '.view_data', function () {
                    var user_id = $(this).data('id');
                    $.ajax({
                        url: "fetch_entitas.php",
                        method: "POST",
                        data: { id: user_id },
                        success: function (data) {
                            $('#detail_entitas').html(data);
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
                            "AKSI",
                            "NCAGE",
                            "Entity_Name",
                            "Street",
                            "City",
                            "Country",
                            "State",
                            "TOEC",
                            "DLC_International",
                            "Dok_Sertifikat",
                            "Dok_NCAGE_NSPA"
                        ];

                        var table = $('#example1').DataTable({
                            processing: true,
                            serverSide: true,
                            select: true,
                            scrollX: true,
                            orderCellsTop: true,
                            fixedHeader: true,
                            
                            ajax: {
                                url: "server_entitas.php",
                                type: "POST"
                            },
                            columns: [
                                { data: "aksi", width: "50px", orderable: false },
                                { data: "NCAGE" },
                                { data: "Entity_Name" },
                                { data: "Street" },
                                { data: "City" },
                                { data: "Country" },
                                { data: "State" },
                                { data: "TOEC" },
                                { data: "DLC_International" },
                                { data: "Dok_Sertifikat" },
                                { data: "Dok_NCAGE_NSPA" }
                            ],
                            initComplete: function(settings, json) {
                                var api = this.api();

                                columnNames.forEach(function(colName, i) {
                                    if (colName === "cetak") return; // skip cetak

                                    var columnIndex = i;

                                    $.ajax({
                                        url: 'entitas_column_options.php',
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