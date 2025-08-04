<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

// Coba tes koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM grupkelas";
$result = $koneksi->query($sql);

if (!$result) {
    die("Query error: " . $koneksi->error);
}

// Cek jika data kosong
if ($result->num_rows == 0) {
    die("Tidak ada data ditemukan di tabel grupkelas.");
}

$html = '
<h2 style="text-align: center;">Data NSC & NSG (grupkelas)</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 9pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>NSG</th>
            <th>NSC</th>
            <th>LANGUAGE_CODE</th>
            <th>DATE_ESTABLISH</th>
            <th>NSC_TITLES</th>
            <th>NSC_TITLES_Idn</th>
            <th>NSC_NOTE_Idn</th>
            <th>NSC_INCLUDES_Idn</th>
            <th>NSC_EXCLUDES_Idn</th>
            <th>NSG_TITLE_Idn</th>
            <th>NSG_NOTES_Idn</th>
            <th>NMCRL_HITS</th>
        </tr>
    </thead>
    <tbody>';

$no = 1;
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
        <td>' . $no++ . '</td>
        <td>' . htmlspecialchars($row['NSG'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSC'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['LANGUAGE_CODE'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['DATE_ESTABLISH'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSC_TITLES'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSC_TITLES_Idn'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSC_NOTE_Idn'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSC_INCLUDES_Idn'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSC_EXCLUDES_Idn'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSG_TITLE_Idn'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NSG_NOTES_Idn'] ?? '-') . '</td>
        <td>' . htmlspecialchars($row['NMCRL_HITS'] ?? '-') . '</td>
    </tr>';
}

$html .= '</tbody></table>';

$mpdf = new Mpdf(['format' => 'A4-L']);
$mpdf->WriteHTML($html);
$mpdf->Output('data_group_class.pdf', 'D');
exit;
