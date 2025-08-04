<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
    'NSC',
    'NIIN',
    'NIIN_',
    'NSN',
    'N_S_N',
    'Status',
    'Assignment_Date',
    'Last_Update_Date',
    'INC',
    'Item_Name',
    'TIIC',
    'CPV',
    'Replacement',
    'NCAGE_Name',
    'NCAGE_Status',
    'NCAGE_Country',
    'NCAGE_City',
    'Reference_Number',
    'RNFC',
    'RNCC',
    'RNVC',
    'RNSC',
    'RNJC',
    'RNAAC',
    'DAC',
    'Procurement_Status',
    'NCAGE_Replacements',
    'Users',
    'CHARACTERISTIC'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM ios WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column` LIMIT 3000";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
