<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

// Query data
$sql = "SELECT * FROM nsn45";
$result = $koneksi->query($sql);

// Siapkan HTML
$mpdf = new Mpdf(['format' => 'A4-L']); // A4 Landscape

// Tulis header & tabel buka
$mpdf->WriteHTML('
    <h2 style="text-align: center;">Data NSN</h2>
    <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
        <thead>
            <tr style="background-color: #cccccc;">
                <th>No</th>
                <th>MANUFACTURER NAME</th>
                <th>NCAGE</th>
                <th>REFERENCE</th>
                <th>FSC</th>
                <th>NIIN</th>
                <th>NSN</th>
                <th>INC</th>
                <th>TYPE</th>
                <th>FIIG</th>
                <th>ITEM_NAME</th>
                <th>COUNTRY</th>
                <th>DATE OF NIIN ASSIGNMENT</th>
                <th>DATE LAST CHANGE</th>
                <th>RNFC</th>
                <th>RNCC</th>
                <th>RNVC</th>
                <th>DAC</th>
                <th>RNAAC</th>
                <th>RNSC</th>
            </tr>
        </thead>
        <tbody>
');

$no = 1;
while ($row = $result->fetch_assoc()) {
    $mpdf->WriteHTML('
        <tr>
            <td>' . $no++ . '</td>
            <td>' . htmlspecialchars($row['MANUFACTURER_NAME']) . '</td>
            <td>' . htmlspecialchars($row['NCAGE']) . '</td>
            <td>' . htmlspecialchars($row['REFERENCE']) . '</td>
            <td>' . htmlspecialchars($row['FSC']) . '</td>
            <td>' . htmlspecialchars($row['NIIN']) . '</td>
            <td>' . htmlspecialchars($row['NSN']) . '</td>
            <td>' . htmlspecialchars($row['INC']) . '</td>
            <td>' . htmlspecialchars($row['TYPE']) . '</td>
            <td>' . htmlspecialchars($row['FIIG']) . '</td>
            <td>' . htmlspecialchars($row['ITEM_NAME']) . '</td>
            <td>' . htmlspecialchars($row['COUNTRY']) . '</td>
            <td>' . htmlspecialchars($row['DATE_OF_NIIN_ASSIGNMENT']) . '</td>
            <td>' . htmlspecialchars($row['DATE_LAST_CHANGE']) . '</td>
            <td>' . htmlspecialchars($row['RNFC']) . '</td>
            <td>' . htmlspecialchars($row['RNCC']) . '</td>
            <td>' . htmlspecialchars($row['RNVC']) . '</td>
            <td>' . htmlspecialchars($row['DAC']) . '</td>
            <td>' . htmlspecialchars($row['RNAAC']) . '</td>
            <td>' . htmlspecialchars($row['RNSC']) . '</td>
        </tr>
    ');
}

$mpdf->WriteHTML('</tbody></table>');
$mpdf->Output('data_nsn.pdf', 'D');
exit;
