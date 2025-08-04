<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'NCAGE',
        'NAME',
        'NCAGE_Status',
        'Creation_Date',
        'Last_Update_Date',
        'TOEC',
        'Address',
        'Country',
        'City',
        'US_State',
        'State',
        'US_Post_Code',
        'Post_Office_Box',
        'Post_Address',
        'Post_Code',
        'Phone',
        'Fax',
        'Identification',
        'Mail',
        'Website',
        'UFDC',
        'UNSPSC',
        'NSICC',
        'NAIC',
        'NACE',
        'CPVC',
        'NCAGE_Replacement',
        'NCAGE_Former'
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
