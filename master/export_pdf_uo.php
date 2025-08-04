<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

// Query data
$sql = "SELECT * FROM skema_impor_uo_final";
$result = $koneksi->query($sql);

// Siapkan HTML
$mpdf = new Mpdf(['format' => 'A4-L']); // A4 Landscape

// Tulis header & tabel buka
$mpdf->WriteHTML('
    <h2 style="text-align: center;">Data PSCN</h2>
    <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
        <thead>
            <tr style="background-color: #cccccc;">
                <th>No</th>
                <th>KODE UO</th>
                <th>UO</th>
                <th>KODE SATKER</th>
                <th>SATUAN KERJA</th>
                <th>KUASA PENGGUNA ANGGARAN</th>
                <th>KODE JENIS KEWENANGAN</th>
                <th>KODE_JENIS_KEWENANGAN</th>
            </tr>
        </thead>
        <tbody>
');

$no = 1;
while ($row = $result->fetch_assoc()) {
    $mpdf->WriteHTML('
        <tr>
            <td>' . $no++ . '</td>
            <td>' . htmlspecialchars($row['KODE_UO']) . '</td>
            <td>' . htmlspecialchars($row['UO']) . '</td>
            <td>' . htmlspecialchars($row['KODE_SATKER']) . '</td>
            <td>' . htmlspecialchars($row['SATUAN_KERJA']) . '</td>
            <td>' . htmlspecialchars($row['KUASA_PENGGUNA_ANGGARAN']) . '</td>
            <td>' . htmlspecialchars($row['KODE_JENIS_KEWENANGAN']) . '</td>
            <td>' . htmlspecialchars($row['JENIS_KEWENANGAN']) . '</td>
        </tr>
    ');
}

$mpdf->WriteHTML('</tbody></table>');
$mpdf->Output('data_uo.pdf', 'D');
exit;
