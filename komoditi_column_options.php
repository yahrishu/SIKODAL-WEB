<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'U_O',
        'Kode_Group',
        'Kode_Klass',
        'Kode_Sub_Klass',
        'GROUP_ALUTSISTA',
        'KLASS_ALUTSISTA',
        'Sub_Klass_Alutsista'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM komoditi WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
