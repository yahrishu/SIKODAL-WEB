<?php

session_start();

require 'vendor/autoload.php';
require 'koneksi.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Pastikan file di-upload
if (!isset($_FILES['uploadfilencage']) || $_FILES['uploadfilencage']['error'] !== UPLOAD_ERR_OK) {
    die("Gagal upload file.");
}

// Simpan sementara file yang diupload
$tmpFilePath = $_FILES['uploadfilencage']['tmp_name'];

// Baca file Excel
$spreadsheet = IOFactory::load($tmpFilePath);
$sheet = $spreadsheet->getActiveSheet();
$data = $sheet->toArray();

// Mulai dari baris ke-1 (baris ke-0 header)
for ($i = 1; $i < count($data); $i++) {
    $row = $data[$i];

    // Lewati baris jika semua kolom kosong atau hanya berisi spasi
    $isEmptyRow = true;
    foreach ($row as $cell) {
        if (strlen(trim($cell)) > 0) {
            $isEmptyRow = false;
            break;
        }
    }
    if ($isEmptyRow) {
        continue;
    }

    $NCAGE     = $koneksi->real_escape_string(trim($row[0]));
    $NCAGESD   = $koneksi->real_escape_string(trim($row[1]));
    $TOEC      = $koneksi->real_escape_string(trim($row[2]));
    $Entity_Name = $koneksi->real_escape_string(trim($row[3]));
    $Street    = $koneksi->real_escape_string(trim($row[4]));
    $City      = $koneksi->real_escape_string(trim($row[5]));
    $Post_Code = $koneksi->real_escape_string(trim($row[6]));
    $Country   = $koneksi->real_escape_string(trim($row[7]));
    $State     = $koneksi->real_escape_string(trim($row[8]));
    $Date_Last_Change_International = $koneksi->real_escape_string(trim($row[9]));
    $CreatDate = $koneksi->real_escape_string(trim($row[10]));
    $telephone = $koneksi->real_escape_string(trim($row[11]));
    $fax       = $koneksi->real_escape_string(trim($row[12]));
    $Email     = $koneksi->real_escape_string(trim($row[13]));
    $website   = $koneksi->real_escape_string(trim($row[14]));
    $Replaced  = $koneksi->real_escape_string(trim($row[15]));

    $sql = "INSERT INTO ncage (
        NCAGE, NCAGESD, TOEC, Entity_Name, Street, City, Post_Code, Country, State,
        Date_Last_Change_International, CreatDate, telephone, fax, Email, website, Replaced
    ) VALUES (
        '$NCAGE', '$NCAGESD', '$TOEC', '$Entity_Name', '$Street', '$City', '$Post_Code',
        '$Country', '$State', '$Date_Last_Change_International', '$CreatDate',
        '$telephone', '$fax', '$Email', '$website', '$Replaced'
    )";

    if (!$koneksi->query($sql)) {
        echo "Gagal insert baris ke-" . ($i + 1) . ": " . $koneksi->error . "<br>";
    }
}

$_SESSION['sukses'] = 'Berhasil Import';
header("location:data_ncage.php");
exit;
?>
