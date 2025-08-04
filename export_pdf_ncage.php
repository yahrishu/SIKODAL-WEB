<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

// Query data
$sql = "SELECT * FROM ncage";
$result = $koneksi->query($sql);

// Siapkan HTML
$html = '
<h2 style="text-align: center;">Data NCAGE</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>NCAGE</th>
            <th>NCAGESD</th>
            <th>TOEC</th>
            <th>ENTITY NAME</th>
            <th>STREET</th>
            <th>CITY</th>
            <th>POST CODE</th>
            <th>COUNTRY</th>
            <th>STATE</th>
            <th>DATE LAST CHANGE INTERNATIONAL</th>
            <th>CREATDATE</th>
            <th>TELPON</th>
            <th>FAX</th>
            <th>EMAIL</th>
            <th>WEBSITE</th>
            <th>REPLACE</th>
            <th>FILE</th>
        </tr>
    </thead>
    <tbody>';

$no = 1;
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
        <td>' . $no++ . '</td>
        <td>' . htmlspecialchars($row['NCAGE']) . '</td>
        <td>' . htmlspecialchars($row['NCAGESD']) . '</td>
        <td>' . htmlspecialchars($row['TOEC']) . '</td>
        <td>' . htmlspecialchars($row['Entity_Name']) . '</td>
        <td>' . htmlspecialchars($row['Street']) . '</td>
        <td>' . htmlspecialchars($row['City']) . '</td>
        <td>' . htmlspecialchars($row['Post_Code']) . '</td>
        <td>' . htmlspecialchars($row['Country']) . '</td>
        <td>' . htmlspecialchars($row['State']) . '</td>
        <td>' . htmlspecialchars($row['Date_Last_Change_International']) . '</td>
        <td>' . htmlspecialchars($row['CreatDate']) . '</td>
        <td>' . htmlspecialchars($row['telephone']) . '</td>
        <td>' . htmlspecialchars($row['fax']) . '</td>
        <td>' . htmlspecialchars($row['Email']) . '</td>
        <td>' . htmlspecialchars($row['website']) . '</td>
        <td>' . htmlspecialchars($row['Replaced']) . '</td>
        <td>' . htmlspecialchars($row['file']) . '</td>
    </tr>';
}

$html .= '</tbody></table>';

// Inisialisasi mPDF
$mpdf = new Mpdf(['format' => 'A4-L']); // A4 Landscape
$mpdf->WriteHTML($html);
$mpdf->Output('data_ncage.pdf', 'D');
exit;
