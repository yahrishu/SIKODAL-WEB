<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

// Query data
$sql = "SELECT * FROM bmn";
$result = $koneksi->query($sql);

// Siapkan PDF
$mpdf = new Mpdf(['format' => 'A4-L']); // A4 Landscape

// Header & buka tabel
$mpdf->WriteHTML('
    <h2 style="text-align: center;">Data BMN</h2>
    <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
        <thead>
            <tr style="background-color: #cccccc;">
                <th>No</th>
                <th>GOL</th>
                <th>BID</th>
                <th>BID</th>
                <th>SUB KEL</th>
                <th>SUB SUB KEL</th>
                <th>KODEFIKASI BMN</th>
                <th>SAT</th>
                <th>URAIAN</th>
                <th>KODIFIKASI SISTEM NSN</th>
                <th>FSG</th>
                <th>FSC</th>
                <th>FSG_FSC</th>
            </tr>
        </thead>
        <tbody>
');

$no = 1;
while ($row = $result->fetch_assoc()) {
    $mpdf->WriteHTML('
        <tr>
            <td>' . $no++ . '</td>
            <td>' . htmlspecialchars($row['GOL']) . '</td>
            <td>' . htmlspecialchars($row['BID']) . '</td>
            <td>' . htmlspecialchars($row['KEL']) . '</td>
            <td>' . htmlspecialchars($row['SUB_KEL']) . '</td>
            <td>' . htmlspecialchars($row['SUB_SUB_KEL']) . '</td>
            <td>' . htmlspecialchars($row['KODEFIKASI_BMN']) . '</td>
            <td>' . htmlspecialchars($row['SAT']) . '</td>
            <td>' . htmlspecialchars($row['URAIAN']) . '</td>
            <td>' . htmlspecialchars($row['KODIFIKASI_SISTEM_NSN']) . '</td>
            <td>' . htmlspecialchars($row['FSG']) . '</td>
            <td>' . htmlspecialchars($row['FSC']) . '</td>
            <td>' . htmlspecialchars($row['FSG_FSC']) . '</td>
        </tr>
    ');
}

$mpdf->WriteHTML('</tbody></table>');
$mpdf->Output('data_bmn.pdf', 'D');
exit;
