<?php

require 'vendor/autoload.php'; // Pastikan path composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include "koneksi.php"; // Pastikan koneksi sudah benar

// Ambil semua data
$sql = "SELECT * FROM entitas";
$result = $koneksi->query($sql);

// Buat spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$headers = [
        'NCAGE',
        'NAME',
        'NCAGE_Status',
        'Creation_Date',
        'Last_Update_Date',
        'TOEC',
        'Address',
        'Country',
        'City',
        'US_State',
        'State',
        'US_Post_Code',
        'Post_Office_Box',
        'Post_Address',
        'Post_Code',
        'Phone',
        'Fax',
        'Identification',
        'Mail',
        'Website',
        'UFDC',
        'UNSPSC',
        'NSICC',
        'NAIC',
        'NACE',
        'CPVC',
        'NCAGE_Replacement',
        'NCAGE_Former'
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
$sheet->setTitle('Datap Entitas');

// Output
if (ob_get_length()) ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_entitas.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
