<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
   'nama_lengkap', 'username', 'password', 'level', 'satuan_kerja'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM user WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column` LIMIT 1000";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
