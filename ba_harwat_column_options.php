<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'No_Rekam_Adm', 'Jenis_Kegiatan', 'Judul_Kegiatan', 'SUMBER_DATA', 'UAKPB',
        'No_Surat_Pengajuan', 'Tgl_Surat_Pengajuan', 'Contact_Person', 'JABATAN', 'No_Telp',
        'PENYEDIA', 'NCAGE', 'JENIS_PENGADAAN', 'NOMOR_KONTRAK', 'TANGGAL_KONTRAK',
        'EFEKTIF_KONTRAK', 'Tgl_Berakhir_Kontrak', 'NAMA_PENGADAAN', 'KOMODITI', 'UO_Pengguna',
        'Satuan_Pengguna_Akhir', 'Nomor_Sprint', 'Tgl_Sprint', 'Ketua_Tim', 'Tgl_Selesai_Kodifikasi' , 'file'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT 
    h.id,
    h.No_Rekam_Adm,
    h.Jenis_Kegiatan,
    h.Judul_Kegiatan,
    h.SUMBER_DATA,
    h.UAKPB,
    h.No_Surat_Pengajuan,
    h.Tgl_Surat_Pengajuan,
    h.Contact_Person,
    h.JABATAN,
    h.No_Telp,
    h.PENYEDIA,
    h.NCAGE,
    h.JENIS_PENGADAAN,
    h.NOMOR_KONTRAK,
    h.TANGGAL_KONTRAK,
    h.EFEKTIF_KONTRAK,
    h.Tgl_Berakhir_Kontrak,
    h.NAMA_PENGADAAN,
    h.KOMODITI,
    h.UO_Pengguna,
    h.Satuan_Pengguna_Akhir,
    h.Nomor_Sprint,
    h.Tgl_Sprint,
    h.Ketua_Tim,
    h.Tgl_Selesai_Kodifikasi
FROM harwat h
JOIN (
    SELECT MIN(id) as id_min
    FROM harwat
    GROUP BY NOMOR_KONTRAK
) x ON h.id = x.id_min
ORDER BY h.NOMOR_KONTRAK";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
