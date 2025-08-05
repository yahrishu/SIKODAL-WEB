<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
    'GOL', 'BID', 'KEL', 'SUB_KEL', 'SUB_SUB_KEL', 
    'KODEFIKASI_BMN', 'SAT', 'URAIAN', 'KODIFIKASI_SISTEM_NSN', 'INC',
    'FSG', 'FSC', 'IIG'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM bmn WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
