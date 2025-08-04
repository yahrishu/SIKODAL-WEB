<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM komoditi";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

$header = '
<h2 style="text-align: center;">Data Komoditi</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 7pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>U_O</th>
            <th>Kode_Group</th>
            <th>Kode_Klass</th>
            <th>Kode_Sub_Klass</th>
            <th>GROUP_ALUTSISTA</th>
            <th>KLASS_ALUTSISTA</th>
            <th>Sub_Klass_Alutsista</th>
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
        <td>' . htmlspecialchars($row['U_O']) . '</td>
        <td>' . htmlspecialchars($row['Kode_Group']) . '</td>
        <td>' . htmlspecialchars($row['Kode_Klass']) . '</td>
        <td>' . htmlspecialchars($row['Kode_Sub_Klass']) . '</td>
        <td>' . htmlspecialchars($row['GROUP_ALUTSISTA']) . '</td>
        <td>' . htmlspecialchars($row['KLASS_ALUTSISTA']) . '</td>
        <td>' . htmlspecialchars($row['Sub_Klass_Alutsista']) . '</td>
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

$mpdf->Output('data_komiditi.pdf', 'D');
exit;
?>
