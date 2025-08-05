<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'NCAGE',
        'Entity_Name',
        'Street',
        'City',
        'Country',
        'State',
        'TOEC',
        'DLC_International',
        'Dok_Sertifikat',
        'Dok_NCAGE_NSPA'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM entitas WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
