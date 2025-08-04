<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM ios";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

// Header awal
$header = '
<h2 style="text-align: center;">Data IOS</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 8pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>NSC</th>
            <th>NIIN</th>
            <th>NIIN*</th>
            <th>NSN</th>
            <th>N_S_N</th>
            <th>Status</th>
            <th>Assignment_Date</th>
            <th>Last_Update_Date</th>
            <th>INC</th>
            <th>Item_Name</th>
            <th>TIIC</th>
            <th>CPV</th>
            <th>Replacement</th>
            <th>NCAGE_Name</th>
            <th>NCAGE_Status</th>
            <th>NCAGE_Country</th>
            <th>NCAGE_City</th>
            <th>Reference_Number</th>
            <th>RNFC</th>
            <th>RNCC</th>
            <th>RNVC</th>
            <th>RNSC</th>
            <th>RNJC</th>
            <th>RNAAC</th>
            <th>DAC</th>
            <th>Procurement_Status</th>
            <th>NCAGE_Replacements</th>
            <th>Users</th>
            <th>CHARACTERISTIC</th>
        </tr>
    </thead>
    <tbody>';

$footer = '</tbody></table>';

$mpdf->WriteHTML($header);

$no = 1;
$chunkSize = 200;
$currentChunk = '';

while ($row = $result->fetch_assoc()) {
    $currentChunk .= '<tr>
        <td>' . $no++ . '</td>
        <td>' . htmlspecialchars($row['NSC']) . '</td>
        <td>' . htmlspecialchars($row['NIIN']) . '</td>
        <td>' . htmlspecialchars($row['NIIN_']) . '</td>
        <td>' . htmlspecialchars($row['NSN']) . '</td>
        <td>' . htmlspecialchars($row['N_S_N']) . '</td>
        <td>' . htmlspecialchars($row['Status']) . '</td>
        <td>' . htmlspecialchars($row['Assignment_Date']) . '</td>
        <td>' . htmlspecialchars($row['Last_Update_Date']) . '</td>
        <td>' . htmlspecialchars($row['INC']) . '</td>
        <td>' . htmlspecialchars($row['Item_Name']) . '</td>
        <td>' . htmlspecialchars($row['TIIC']) . '</td>
        <td>' . htmlspecialchars($row['CPV']) . '</td>
        <td>' . htmlspecialchars($row['Replacement']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Name']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Status']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Country']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_City']) . '</td>
        <td>' . htmlspecialchars($row['Reference_Number']) . '</td>
        <td>' . htmlspecialchars($row['RNFC']) . '</td>
        <td>' . htmlspecialchars($row['RNCC']) . '</td>
        <td>' . htmlspecialchars($row['RNVC']) . '</td>
        <td>' . htmlspecialchars($row['RNSC']) . '</td>
        <td>' . htmlspecialchars($row['RNJC']) . '</td>
        <td>' . htmlspecialchars($row['RNAAC']) . '</td>
        <td>' . htmlspecialchars($row['DAC']) . '</td>
        <td>' . htmlspecialchars($row['Procurement_Status']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Replacements']) . '</td>
        <td>' . htmlspecialchars($row['Users']) . '</td>
        <td>' . htmlspecialchars($row['CHARACTERISTIC']) . '</td>
    </tr>';

    if ($no % $chunkSize == 1) {
        $mpdf->WriteHTML($currentChunk);
        $currentChunk = '';
    }
}

if (!empty($currentChunk)) {
    $mpdf->WriteHTML($currentChunk);
}

$mpdf->WriteHTML($footer);

$mpdf->Output('data_ios.pdf', 'D');
exit;
?>
