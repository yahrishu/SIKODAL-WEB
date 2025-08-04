<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'NCAGE', 'NCAGESD', 'TOEC', 'Entity_Name', 'Street', 'City',
        'Post_Code', 'Country', 'State', 'Date_Last_Change_International', 'CreatDate',
        'telephone', 'fax','Email', 'website', 'Replaced', 'file'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM ncage WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
