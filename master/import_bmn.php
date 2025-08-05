<?php

session_start();

require 'vendor/autoload.php';
require 'koneksi.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

date_default_timezone_set('Asia/Jakarta');

// Cek upload file
if (!isset($_FILES['uploadfilebmn']) || $_FILES['uploadfilebmn']['error'] !== UPLOAD_ERR_OK) {
    die("Gagal upload file.");
}

$tmpFilePath = $_FILES['uploadfilebmn']['tmp_name'];

// Load Excel
$spreadsheet = IOFactory::load($tmpFilePath);
$sheet = $spreadsheet->getActiveSheet();
$data = $sheet->toArray();

// Hapus data lama
$koneksi->query("DELETE FROM bmn");

// Loop data dari baris ke-1 (baris 0 = header)
for ($i = 1; $i < count($data); $i++) {
    $row = $data[$i];

    if (empty(array_filter($row))) continue; // skip baris kosong

    // Sanitasi nilai kolom
    $GOL                    = $koneksi->real_escape_string(trim($row[0]));
    $BID                    = $koneksi->real_escape_string(trim($row[1]));
    $KEL                    = $koneksi->real_escape_string(trim($row[2]));
    $SUB_KEL                = $koneksi->real_escape_string(trim($row[3]));
    $SUB_SUB_KEL            = $koneksi->real_escape_string(trim($row[4]));
    $KODEFIKASI_BMN         = $koneksi->real_escape_string(trim($row[5]));
    $SAT                    = $koneksi->real_escape_string(trim($row[6]));
    $URAIAN                 = $koneksi->real_escape_string(trim($row[7]));
    $KODIFIKASI_SISTEM_NSN  = $koneksi->real_escape_string(trim($row[8]));
    $INC                    = $koneksi->real_escape_string(trim($row[9]));
    $FSG                    = $koneksi->real_escape_string(trim($row[10]));
    $FSC                    = $koneksi->real_escape_string(trim($row[11]));
    $IIG                    = $koneksi->real_escape_string(trim($row[12]));

    // Query insert
    $sql = "INSERT INTO bmn (
        GOL, BID, KEL, SUB_KEL, SUB_SUB_KEL, KODEFIKASI_BMN, SAT, URAIAN,
        KODIFIKASI_SISTEM_NSN, INC, FSG, FSC, IIG
    ) VALUES (
        '$GOL', '$BID', '$KEL', '$SUB_KEL', '$SUB_SUB_KEL', '$KODEFIKASI_BMN', '$SAT', '$URAIAN',
        '$KODIFIKASI_SISTEM_NSN', '$INC', '$FSG', '$FSC', '$IIG'
    )";

    if (!$koneksi->query($sql)) {
        echo "Gagal insert baris ke-" . ($i + 1) . ": " . $koneksi->error . "<br>";
    }
}

$_SESSION['sukses'] = 'Berhasil Import & Replace Data BMN';
header("location: data_bmn.php");
exit;

?>
