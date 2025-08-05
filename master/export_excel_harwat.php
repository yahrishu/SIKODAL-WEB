<?php

require 'vendor/autoload.php'; // Pastikan path composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include "koneksi.php"; // Pastikan koneksi sudah benar

// Ambil semua data
$sql = "SELECT * FROM harwat";
$result = $koneksi->query($sql);

// Buat spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$headers = [
    'No_Rekam_Adm', 'Jenis_Kegiatan', 'Judul_Kegiatan', 'SUMBER_DATA', 'UAKPB',
    'No_Surat_Pengajuan', 'Tgl_Surat_Pengajuan', 'Contact_Person', 'JABATAN', 'No_Telp',
    'PENYEDIA', 'NCAGE', 'JENIS_PENGADAAN', 'NOMOR_KONTRAK', 'TANGGAL_KONTRAK',
    'EFEKTIF_KONTRAK', 'Tgl_Berakhir_Kontrak', 'NAMA_PENGADAAN', 'KOMODITI', 'UO_Pengguna',
    'Satuan_Pengguna_Akhir', 'Nomor_Sprint', 'Tgl_Sprint', 'Ketua_Tim', 'Tgl_Selesai_Kodifikasi',
    'REFERENCE_NUMBER', 'NAMA_MATERIIL', 'NSN', 'APPROVED_ITEM_NAME', 'INC', 'TIIC',
    'NCAGE_MANUFACTURE', 'NEGARA'
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
$sheet->setTitle('Datap Katalog Harwat');

// Output
if (ob_get_length()) ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_katalog_harwat.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
