<?php

require 'vendor/autoload.php'; // Pastikan path composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include "koneksi.php"; // Pastikan koneksi sudah benar

// Ambil semua data
$sql = "SELECT * FROM ios";
$result = $koneksi->query($sql);

// Buat spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$headers = [
    'NSC',
    'NIIN',
    'NIIN_',
    'NSN',
    'N_S_N',
    'Status',
    'Assignment_Date',
    'Last_Update_Date',
    'INC',
    'Item_Name',
    'TIIC',
    'CPV',
    'Replacement',
    'NCAGE_Name',
    'NCAGE_Status',
    'NCAGE_Country',
    'NCAGE_City',
    'Reference_Number',
    'RNFC',
    'RNCC',
    'RNVC',
    'RNSC',
    'RNJC',
    'RNAAC',
    'DAC',
    'Procurement_Status',
    'NCAGE_Replacements',
    'Users',
    'CHARACTERISTIC'
];

$col = 'A';
foreach ($headers as $header) {
    $sheet->setCellValue($col.'1', $header);
    $col++;
}

// Isi data
$rowNum = 2;
while ($row = $result->fetch_assoc()) {
    $col = 'A';
    foreach ($headers as $field) {
        $sheet->setCellValue($col.$rowNum, $row[$field]);
        $col++;
    }
    $rowNum++;
}

// Format kolom auto width
foreach (range('A', $col) as $colLetter) {
    $sheet->getColumnDimension($colLetter)->setAutoSize(true);
}

// Set judul sheet
$sheet->setTitle('Datap IOS');

// Output
if (ob_get_length()) ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_ios.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
