<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM ncb";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

$header = '
<h2 style="text-align: center;">Data NCB</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>COUNTRY_CODE</th>
            <th>MOE_CODE</th>
            <th>COUNTRY_NAME</th>
            <th>FLAG</th>
            <th>NCAGE_CODE</th>
            <th>TIER_STATUS</th>
            <th>NATION_TYPE</th>
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
        <td>' . htmlspecialchars($row['COUNTRY_CODE']) . '</td>
        <td>' . htmlspecialchars($row['MOE_CODE']) . '</td>
        <td>' . htmlspecialchars($row['COUNTRY_NAME']) . '</td>
        <td>' . htmlspecialchars($row['FLAG']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_CODE']) . '</td>
        <td>' . htmlspecialchars($row['TIER_STATUS']) . '</td>
        <td>' . htmlspecialchars($row['NATION_TYPE']) . '</td>
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

$mpdf->Output('data_ncb.pdf', 'D');
exit;
?>
