<?php

require 'vendor/autoload.php'; // Pastikan path composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include "koneksi.php"; // Pastikan koneksi sudah benar

// Ambil semua data
$sql = "SELECT * FROM nsn45";
$result = $koneksi->query($sql);

// Buat spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$headers = [
    'MANUFACTURER_NAME', 'NCAGE', 'REFERENCE', 'FSC', 'NIIN', 'NSN',
    'INC', 'TYPE', 'FIIG', 'ITEM_NAME', 'COUNTRY',
    'DATE_OF_NIIN_ASSIGNMENT', 'DATE_LAST_CHANGE','RNFC', 'RNCC', 'RNVC', 'DAC',
    'RNAAC', 'RNSC'
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
$sheet->setTitle('Data NSN');

// Output
if (ob_get_length()) ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_nsn.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
