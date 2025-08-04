<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
    'KODE_UO', 'UO', 'KODE_SATKER', 'SATUAN_KERJA', 'KUASA_PENGGUNA_ANGGARAN', 
    'KODE_JENIS_KEWENANGAN', 'JENIS_KEWENANGAN'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM skema_impor_uo_final WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column` LIMIT 1000";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
