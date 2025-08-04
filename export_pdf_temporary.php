<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM temporary_nsn";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

$header = '
<h2 style="text-align: center;">Data Temporary</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 7pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>NIIN</th>
            <th>NSC</th>
            <th>RPDMRC</th>
            <th>NIIN_SC</th>
            <th>INC</th>
            <th>Type</th>
            <th>FIIG</th>
            <th>FMSN</th>
            <th>Item_Name</th>
            <th>Country</th>
            <th>Date_NIIN</th>
            <th>Date_of_NIIN_Assignment</th>
            <th>Date_last_change1</th>
            <th>NIIN_Type</th>
            <th>NCAGE</th>
            <th>Manufacturer_Name</th>
            <th>Reference</th>
            <th>RNFC</th>
            <th>RNCC</th>
            <th>RNVC</th>
            <th>DAC</th>
            <th>RNAAC</th>
            <th>RNSC</th>
            <th>RNJC</th>
            <th>Has_Doc</th>
            <th>International_Registered_Users</th>
            <th>National_registered_users</th>
            <th>Repl_NIIN_1</th>
            <th>Repl_NIIN_2</th>
            <th>Segment_M</th>
            <th>MOEC</th>
            <th>Unit_of_Issue_Code</th>
            <th>UnitIss_Conv_Factor</th>
            <th>Form_Unit_Issue</th>
            <th>CIIC</th>
            <th>ShelfLifeCd</th>
            <th>Date_Last_Change2</th>
            <th>UoM_Rel_NSN</th>
            <th>Project_Shortname</th>
            <th>Project_Longname</th>
            <th>CPV</th>
            <th>CPV_Text</th>
            <th>RNAAC_ISO</th>
            <th>International_Registered_Users_ISO</th>
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
        <td>' . htmlspecialchars($row['NIIN']) . '</td>
        <td>' . htmlspecialchars($row['NSC']) . '</td>
        <td>' . htmlspecialchars($row['RPDMRC']) . '</td>
        <td>' . htmlspecialchars($row['NIIN_SC']) . '</td>
        <td>' . htmlspecialchars($row['INC']) . '</td>
        <td>' . htmlspecialchars($row['Type']) . '</td>
        <td>' . htmlspecialchars($row['FIIG']) . '</td>
        <td>' . htmlspecialchars($row['FMSN']) . '</td>
        <td>' . htmlspecialchars($row['Item_Name']) . '</td>
        <td>' . htmlspecialchars($row['Country']) . '</td>
        <td>' . htmlspecialchars($row['Date_NIIN']) . '</td>
        <td>' . htmlspecialchars($row['Date_of_NIIN_Assignment']) . '</td>
        <td>' . htmlspecialchars($row['Date_last_change1']) . '</td>
        <td>' . htmlspecialchars($row['NIIN_Type']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE']) . '</td>
        <td>' . htmlspecialchars($row['Manufacturer_Name']) . '</td>
        <td>' . htmlspecialchars($row['Reference']) . '</td>
        <td>' . htmlspecialchars($row['RNFC']) . '</td>
        <td>' . htmlspecialchars($row['RNCC']) . '</td>
        <td>' . htmlspecialchars($row['RNVC']) . '</td>
        <td>' . htmlspecialchars($row['DAC']) . '</td>
        <td>' . htmlspecialchars($row['RNAAC']) . '</td>
        <td>' . htmlspecialchars($row['RNSC']) . '</td>
        <td>' . htmlspecialchars($row['RNJC']) . '</td>
        <td>' . htmlspecialchars($row['Has_Doc']) . '</td>
        <td>' . htmlspecialchars($row['International_Registered_Users']) . '</td>
        <td>' . htmlspecialchars($row['National_registered_users']) . '</td>
        <td>' . htmlspecialchars($row['Repl_NIIN_1']) . '</td>
        <td>' . htmlspecialchars($row['Repl_NIIN_2']) . '</td>
        <td>' . htmlspecialchars($row['Segment_M']) . '</td>
        <td>' . htmlspecialchars($row['MOEC']) . '</td>
        <td>' . htmlspecialchars($row['Unit_of_Issue_Code']) . '</td>
        <td>' . htmlspecialchars($row['UnitIss_Conv_Factor']) . '</td>
        <td>' . htmlspecialchars($row['Form_Unit_Issue']) . '</td>
        <td>' . htmlspecialchars($row['CIIC']) . '</td>
        <td>' . htmlspecialchars($row['ShelfLifeCd']) . '</td>
        <td>' . htmlspecialchars($row['Date_Last_Change2']) . '</td>
        <td>' . htmlspecialchars($row['UoM_Rel_NSN']) . '</td>
        <td>' . htmlspecialchars($row['Project_Shortname']) . '</td>
        <td>' . htmlspecialchars($row['Project_Longname']) . '</td>
        <td>' . htmlspecialchars($row['CPV']) . '</td>
        <td>' . htmlspecialchars($row['CPV_Text']) . '</td>
        <td>' . htmlspecialchars($row['RNAAC_ISO']) . '</td>
        <td>' . htmlspecialchars($row['International_Registered_Users_ISO']) . '</td>
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

$mpdf->Output('data_temporary.pdf', 'D');
exit;
?>
