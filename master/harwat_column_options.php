<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'No_Rekam_Adm', 'Jenis_Kegiatan', 'Judul_Kegiatan', 'SUMBER_DATA', 'UAKPB',
        'No_Surat_Pengajuan', 'Tgl_Surat_Pengajuan', 'Contact_Person', 'JABATAN', 'No_Telp',
        'PENYEDIA', 'NCAGE', 'JENIS_PENGADAAN', 'NOMOR_KONTRAK', 'TANGGAL_KONTRAK',
        'EFEKTIF_KONTRAK', 'Tgl_Berakhir_Kontrak', 'NAMA_PENGADAAN', 'KOMODITI', 'UO_Pengguna',
        'Satuan_Pengguna_Akhir', 'Nomor_Sprint', 'Tgl_Sprint', 'Ketua_Tim', 'Tgl_Selesai_Kodifikasi',
        'REFERENCE_NUMBER', 'NAMA_MATERIIL', 'NSN', 'APPROVED_ITEM_NAME', 'INC', 'TIIC',
        'NCAGE_MANUFACTURE', 'NEGARA'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM harwat WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column` LIMIT 2000";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
