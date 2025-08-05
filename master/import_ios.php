<?php

session_start();

require 'vendor/autoload.php';
require 'koneksi.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

date_default_timezone_set('Asia/Jakarta');

if (!isset($_FILES['uploadfileios']) || $_FILES['uploadfileios']['error'] !== UPLOAD_ERR_OK) {
    die("Gagal upload file.");
}

$tmpFilePath = $_FILES['uploadfileios']['tmp_name'];
$spreadsheet = IOFactory::load($tmpFilePath);
$sheet = $spreadsheet->getActiveSheet();
$data = $sheet->toArray();

$koneksi->query("DELETE FROM ios");

// mulai dari baris ke-1 (baris ke-0 adalah header)
for ($i = 1; $i < count($data); $i++) {
    $row = $data[$i];

    $isEmptyRow = true;
    foreach ($row as $cell) {
        if (strlen(trim($cell)) > 0) {
            $isEmptyRow = false;
            break;
        }
    }
    if ($isEmptyRow) continue;

    // sanitasi dan ambil nilai
    list(
        $NSC, $NIIN, $NIIN_, $NSN, $N_S_N,
        $Status, $Assignment_Date, $Last_Update_Date, $INC, $Item_Name,
        $TIIC, $Demil_Code, $Schedule_B, $HS_Code, $CPV,
        $NSN_Replacement_1, $NSN_Replacement_2, $NCAGE, $NCAGE_NAME, $NCAGE_Status,
        $NCAGE_Country, $NCAGE_City, $Reference_Number, $RNFC, $RNCC,
        $RNVC, $RNSC, $RNJC, $RNAAC, $DAC,
        $Procurement_Status, $NCAGE_Replacements, $Users, $CHARACTERISTIC, $GAMBAR
    ) = array_map(fn($val) => $koneksi->real_escape_string(trim($val)), array_pad($row, 35, ''));

    $sql = "INSERT INTO ios (
        NSC, NIIN, NIIN_, NSN, N_S_N,
        Status, Assignment_Date, Last_Update_Date, INC, Item_Name,
        TIIC, Demil_Code, Schedule_B, HS_Code, CPV,
        NSN_Replacement_1, NSN_Replacement_2, NCAGE, NCAGE_NAME, NCAGE_Status,
        NCAGE_Country, NCAGE_City, Reference_Number, RNFC, RNCC,
        RNVC, RNSC, RNJC, RNAAC, DAC,
        Procurement_Status, NCAGE_Replacements, Users, CHARACTERISTIC, GAMBAR
    ) VALUES (
        '$NSC', '$NIIN', '$NIIN_', '$NSN', '$N_S_N',
        '$Status', '$Assignment_Date', '$Last_Update_Date', '$INC', '$Item_Name',
        '$TIIC', '$Demil_Code', '$Schedule_B', '$HS_Code', '$CPV',
        '$NSN_Replacement_1', '$NSN_Replacement_2', '$NCAGE', '$NCAGE_NAME', '$NCAGE_Status',
        '$NCAGE_Country', '$NCAGE_City', '$Reference_Number', '$RNFC', '$RNCC',
        '$RNVC', '$RNSC', '$RNJC', '$RNAAC', '$DAC',
        '$Procurement_Status', '$NCAGE_Replacements', '$Users', '$CHARACTERISTIC', '$GAMBAR'
    )";

    if (!$koneksi->query($sql)) {
        echo "Gagal INSERT baris ke-" . ($i + 1) . ": " . $koneksi->error . "<br>";
    }
}

$_SESSION['sukses'] = 'Berhasil Import & Ganti Data Lama';
header("location:data_ios.php");
exit;

?>
