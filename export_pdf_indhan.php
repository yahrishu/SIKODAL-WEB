<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

// Query data
$sql = "SELECT * FROM indhan";
$result = $koneksi->query($sql);

// Siapkan PDF
$mpdf = new Mpdf(['format' => 'A4-L']); // A4 Landscape

// Header & buka tabel
$mpdf->WriteHTML('
    <h2 style="text-align: center;">Data INDHAN</h2>
    <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
        <thead>
            <tr style="background-color: #cccccc;">
                <th>No</th>
                <th>NAMA PERUSAHAAN</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>PROVINSI</th>
                <th>Tanggal SP</th>
                <th>NOMOR SP</th>
                <th>Tanggal Nomor SIPROD</th>
                <th>NOMOR SIPROD</th>
                <th>MASA BERLAKU</th>
                <th>KET</th>
            </tr>
        </thead>
        <tbody>
');

$no = 1;
while ($row = $result->fetch_assoc()) {
    $mpdf->WriteHTML('
        <tr>
            <td>' . $no++ . '</td>
            <td>' . htmlspecialchars($row['NAMA_PERUSAHAAN']) . '</td>
            <td>' . htmlspecialchars($row['ALAMAT']) . '</td>
            <td>' . htmlspecialchars($row['KOTA']) . '</td>
            <td>' . htmlspecialchars($row['PROVINSI']) . '</td>
            <td>' . htmlspecialchars($row['Tanggal_SP']) . '</td>
            <td>' . htmlspecialchars($row['NOMOR_SP']) . '</td>
            <td>' . htmlspecialchars($row['Tanggal_Nomor_SIPROD']) . '</td>
            <td>' . htmlspecialchars($row['NOMOR_SIPROD']) . '</td>
            <td>' . htmlspecialchars($row['MASA_BERLAKU']) . '</td>
            <td>' . htmlspecialchars($row['KET']) . '</td>
        </tr>
    ');
}

$mpdf->WriteHTML('</tbody></table>');
$mpdf->Output('data_indhan.pdf', 'D');
exit;
