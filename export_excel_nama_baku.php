<?php
require 'vendor/autoload.php'; // Pastikan path composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include "koneksi.php"; // Pastikan koneksi sudah benar

// Ambil semua data
$sql = "SELECT * FROM nama_baku_nmcrl";
$result = $koneksi->query($sql);

// Buat spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$headers = [
    'INC', 'ITEM_NAME', 'ITEM_NAME_DEFINITION', 'URAIAN_SINGKAT_NAMA_BARANG',
    'TIPE_NAMA_BARANG', 'STATUS', 'FIIG', 'FSG_FSC'
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
$sheet->setTitle('Data Nama baku');

// Output
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_nama_baku.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
