<?php
set_time_limit(0);
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM nama_baku_nmcrl";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

// Header awal
$header = '
<h2 style="text-align: center;">Data Nama Baku NMCRL</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>INC</th>
            <th>ITEM_NAME</th>
            <th>ITEM_NAME_DEFINITION</th>
            <th>URAIAN_SINGKAT_NAMA_BARANG</th>
            <th>TIPE_NAMA_BARANG</th>
            <th>STATUS</th>
            <th>FIIG</th>
            <th>FSG_FSC</th>
        </tr>
    </thead>
    <tbody>';

$footer = '</tbody></table>';

$mpdf->WriteHTML($header);

$no = 1;
$chunkSize = 200; // Jumlah baris per chunk
$currentChunk = '';

while ($row = $result->fetch_assoc()) {
    $currentChunk .= '<tr>
        <td>' . $no++ . '</td>
        <td>' . htmlspecialchars($row['INC']) . '</td>
        <td>' . htmlspecialchars($row['ITEM_NAME']) . '</td>
        <td>' . htmlspecialchars($row['ITEM_NAME_DEFINITION']) . '</td>
        <td>' . htmlspecialchars($row['URAIAN_SINGKAT_NAMA_BARANG']) . '</td>
        <td>' . htmlspecialchars($row['TIPE_NAMA_BARANG']) . '</td>
        <td>' . htmlspecialchars($row['STATUS']) . '</td>
        <td>' . htmlspecialchars($row['FIIG']) . '</td>
        <td>' . htmlspecialchars($row['FSG_FSC']) . '</td>
    </tr>';

    if ($no % $chunkSize == 1) {
        $mpdf->WriteHTML($currentChunk);
        $currentChunk = '';
    }
}

// Tulis sisa data terakhir
if (!empty($currentChunk)) {
    $mpdf->WriteHTML($currentChunk);
}

$mpdf->WriteHTML($footer);

$mpdf->Output('data_nama_baku_nmcrl.pdf', 'D');
exit;
