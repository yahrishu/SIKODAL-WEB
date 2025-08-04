<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
    'Manufacturer_Name', 'NCAGE', 'Reference', 'NSC', 'NIIN', 'NSN',
    'INC', 'Type', 'FIIG', 'Item_Name', 'Country',
    'Date_of_NIIN_Assignment', 'Date_last_change',
    'RNFC', 'RNCC', 'RNVC', 'DAC', 'RNAAC', 'RNSC', 'GAMBAR'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM nsn45 WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column` LIMIT 7000";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
