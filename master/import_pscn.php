<?php

session_start();

require 'vendor/autoload.php';
require 'koneksi.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Pastikan file di-upload
if (!isset($_FILES['uploadfilepscn']) || $_FILES['uploadfilepscn']['error'] !== UPLOAD_ERR_OK) {
    die("Gagal upload file.");
}

// Simpan sementara file yang diupload
$tmpFilePath = $_FILES['uploadfilepscn']['tmp_name'];

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

    $Manufacturer_Name = $koneksi->real_escape_string(trim($row[0]));
    $NCAGE = $koneksi->real_escape_string(trim($row[1]));
    $Reference = $koneksi->real_escape_string(trim($row[2]));
    $NSC = $koneksi->real_escape_string(trim($row[3]));
    $NIIN = $koneksi->real_escape_string(trim($row[4]));
    $PSCN = $koneksi->real_escape_string(trim($row[5]));
    $INC = $koneksi->real_escape_string(trim($row[6]));
    $Type = $koneksi->real_escape_string(trim($row[7]));
    $FIIG = $koneksi->real_escape_string(trim($row[8]));
    $Item_Name = $koneksi->real_escape_string(trim($row[9]));
    $Country = $koneksi->real_escape_string(trim($row[10]));
    $Date_of_NIIN_Assignment = $koneksi->real_escape_string(trim($row[11]));
    $Date_last_change = $koneksi->real_escape_string(trim($row[12]));
    $RNFC = $koneksi->real_escape_string(trim($row[13]));
    $RNCC = $koneksi->real_escape_string(trim($row[14]));
    $RNVC = $koneksi->real_escape_string(trim($row[15]));
    $DAC = $koneksi->real_escape_string(trim($row[16]));
    $RNAAC = $koneksi->real_escape_string(trim($row[17]));
    $RNSC = $koneksi->real_escape_string(trim($row[18]));

   $sql = "INSERT INTO pscn (
    Manufacturer_Name, NCAGE, Reference, NSC, NIIN, PSCN,
    INC, Type, FIIG, Item_Name, Country, Date_of_NIIN_Assignment,
    Date_last_change, RNFC, RNCC, RNVC, DAC, RNAAC, RNSC
) VALUES (
    '$Manufacturer_Name', '$NCAGE', '$Reference', '$NSC', '$NIIN', '$PSCN',
    '$INC', '$Type', '$FIIG', '$Item_Name', '$Country', '$Date_of_NIIN_Assignment',
    '$Date_last_change', '$RNFC', '$RNCC', '$RNVC', '$DAC', '$RNAAC', '$RNSC'
)";

    if (!$koneksi->query($sql)) {
        echo "Gagal insert baris ke-" . ($i + 1) . ": " . $koneksi->error . "<br>";
    }
}

$_SESSION['sukses'] = 'Berhasil Import';
header("location:data_temporary_nsn.php");
exit;
?>
