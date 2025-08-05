<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Mpdf\Mpdf;

$sql = "SELECT * FROM harwat";
$result = $koneksi->query($sql);

$mpdf = new Mpdf(['format' => 'A4-L']);

$header = '
<h2 style="text-align: center;">Data Harwat</h2>
<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%; font-size: 7pt;">
    <thead>
        <tr style="background-color: #cccccc;">
            <th>No</th>
            <th>No_Rekam_Adm</th>
            <th>Jenis_Kegiatan</th>
            <th>Judul_Kegiatan</th>
            <th>SUMBER_DATA</th>
            <th>UAKPB</th>
            <th>No_Surat_Pengajuan</th>
            <th>Tgl_Surat_Pengajuan</th>
            <th>Contact_Person</th>
            <th>JABATAN</th>
            <th>No_Telp</th>
            <th>PENYEDIA</th>
            <th>NCAGE</th>
            <th>JENIS_PENGADAAN</th>
            <th>NOMOR_KONTRAK</th>
            <th>TANGGAL_KONTRAK</th>
            <th>EFEKTIF_KONTRAK</th>
            <th>Tgl_Berakhir_Kontrak</th>
            <th>NAMA_PENGADAAN</th>
            <th>KOMODITI</th>
            <th>UO_Pengguna</th>
            <th>Satuan_Pengguna_Akhir</th>
            <th>Nomor_Sprint</th>
            <th>Tgl_Sprint</th>
            <th>Ketua_Tim</th>
            <th>Tgl_Selesai_Kodifikasi</th>
            <th>REFERENCE_NUMBER</th>
            <th>NAMA_MATERIIL</th>
            <th>NSN</th>
            <th>APPROVED_ITEM_NAME</th>
            <th>INC</th>
            <th>TIIC</th>
            <th>NCAGE_MANUFACTURE</th>
            <th>NEGARA</th>
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
        <td>' . htmlspecialchars($row['No_Rekam_Adm']) . '</td>
        <td>' . htmlspecialchars($row['Jenis_Kegiatan']) . '</td>
        <td>' . htmlspecialchars($row['Judul_Kegiatan']) . '</td>
        <td>' . htmlspecialchars($row['SUMBER_DATA']) . '</td>
        <td>' . htmlspecialchars($row['UAKPB']) . '</td>
        <td>' . htmlspecialchars($row['No_Surat_Pengajuan']) . '</td>
        <td>' . htmlspecialchars($row['Tgl_Surat_Pengajuan']) . '</td>
        <td>' . htmlspecialchars($row['Contact_Person']) . '</td>
        <td>' . htmlspecialchars($row['JABATAN']) . '</td>
        <td>' . htmlspecialchars($row['No_Telp']) . '</td>
        <td>' . htmlspecialchars($row['PENYEDIA']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE']) . '</td>
        <td>' . htmlspecialchars($row['JENIS_PENGADAAN']) . '</td>
        <td>' . htmlspecialchars($row['NOMOR_KONTRAK']) . '</td>
        <td>' . htmlspecialchars($row['TANGGAL_KONTRAK']) . '</td>
        <td>' . htmlspecialchars($row['EFEKTIF_KONTRAK']) . '</td>
        <td>' . htmlspecialchars($row['Tgl_Berakhir_Kontrak']) . '</td>
        <td>' . htmlspecialchars($row['NAMA_PENGADAAN']) . '</td>
        <td>' . htmlspecialchars($row['KOMODITI']) . '</td>
        <td>' . htmlspecialchars($row['UO_Pengguna']) . '</td>
        <td>' . htmlspecialchars($row['Satuan_Pengguna_Akhir']) . '</td>
        <td>' . htmlspecialchars($row['Nomor_Sprint']) . '</td>
        <td>' . htmlspecialchars($row['Tgl_Sprint']) . '</td>
        <td>' . htmlspecialchars($row['Ketua_Tim']) . '</td>
        <td>' . htmlspecialchars($row['Tgl_Selesai_Kodifikasi']) . '</td>
        <td>' . htmlspecialchars($row['REFERENCE_NUMBER']) . '</td>
        <td>' . htmlspecialchars($row['NAMA_MATERIIL']) . '</td>
        <td>' . htmlspecialchars($row['NSN']) . '</td>
        <td>' . htmlspecialchars($row['APPROVED_ITEM_NAME']) . '</td>
        <td>' . htmlspecialchars($row['INC']) . '</td>
        <td>' . htmlspecialchars($row['TIIC']) . '</td>
        <td>' . htmlspecialchars($row['NCAGE_MANUFACTURE']) . '</td>
        <td>' . htmlspecialchars($row['NEGARA']) . '</td>
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

$mpdf->Output('data_harwat.pdf', 'D');
exit;
?>
