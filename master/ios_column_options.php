<?php
include "koneksi.php";

// Validasi parameter
$column = isset($_GET['column']) ? $_GET['column'] : '';
$allowed_columns = [
    'NCAGE',
    'NCAGE_Name',
    'N_S_N',
    'Item_Name',
    'Reference_Number',
    'RNFC',
    'RNCC',
    'RNVC',
    'RNSC',
    'RNJC',
    'RNAAC',
    'DAC',
    'Users',
    'CHARACTERISTIC',
    'GAMBAR'
];

// Validasi kolom
if (!in_array($column, $allowed_columns)) {
    echo json_encode([]);
    exit;
}

// Query distinct
$sql = "SELECT DISTINCT `$column` FROM ios WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $data[] = $row[$column];
    }
}

echo json_encode($data);
?>
