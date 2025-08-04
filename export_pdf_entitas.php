<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM entitas";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

$header = '
<h2 style="text-align: center;">Data Entitas</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 7pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>NCAGE</th>
            <th>NAME</th>
            <th>NCAGE_Status</th>
            <th>Creation_Date</th>
            <th>Last_Update_Date</th>
            <th>TOEC</th>
            <th>Address</th>
            <th>Country</th>
            <th>City</th>
            <th>US_State</th>
            <th>State</th>
            <th>US_Post_Code</th>
            <th>Post_Office_Box</th>
            <th>Post_Address</th>
            <th>Post_Code</th>
            <th>Phone</th>
            <th>Fax</th>
            <th>Identification</th>
            <th>Mail</th>
            <th>Website</th>
            <th>UFDC</th>
            <th>UNSPSC</th>
            <th>NSICC</th>
            <th>NAIC</th>
            <th>NACE</th>
            <th>CPVC</th>
            <th>NCAGE_Replacement</th>
            <th>NCAGE_Former</th>
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
        <td>' . htmlspecialchars($row['NCAGE']) . '</td>
        <td>' . htmlspecialchars($row['NAME']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Status']) . '</td>
        <td>' . htmlspecialchars($row['Creation_Date']) . '</td>
        <td>' . htmlspecialchars($row['Last_Update_Date']) . '</td>
        <td>' . htmlspecialchars($row['TOEC']) . '</td>
        <td>' . htmlspecialchars($row['Address']) . '</td>
        <td>' . htmlspecialchars($row['Country']) . '</td>
        <td>' . htmlspecialchars($row['City']) . '</td>
        <td>' . htmlspecialchars($row['US_State']) . '</td>
        <td>' . htmlspecialchars($row['State']) . '</td>
        <td>' . htmlspecialchars($row['US_Post_Code']) . '</td>
        <td>' . htmlspecialchars($row['Post_Office_Box']) . '</td>
        <td>' . htmlspecialchars($row['Post_Address']) . '</td>
        <td>' . htmlspecialchars($row['Post_Code']) . '</td>
        <td>' . htmlspecialchars($row['Phone']) . '</td>
        <td>' . htmlspecialchars($row['Fax']) . '</td>
        <td>' . htmlspecialchars($row['Identification']) . '</td>
        <td>' . htmlspecialchars($row['Mail']) . '</td>
        <td>' . htmlspecialchars($row['Website']) . '</td>
        <td>' . htmlspecialchars($row['UFDC']) . '</td>
        <td>' . htmlspecialchars($row['UNSPSC']) . '</td>
        <td>' . htmlspecialchars($row['NSICC']) . '</td>
        <td>' . htmlspecialchars($row['NAIC']) . '</td>
        <td>' . htmlspecialchars($row['NACE']) . '</td>
        <td>' . htmlspecialchars($row['CPVC']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Replacement']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_Former']) . '</td>
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

$mpdf->Output('data_entitas.pdf', 'D');
exit;
?>
