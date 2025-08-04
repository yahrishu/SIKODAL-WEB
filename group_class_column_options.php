<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'NSG', 'NSC', 'LANGUAGE_CODE', 'DATE_ESTABLISH', 'NSC_TITLES',
        'NSC_TITLES_Idn', 'NSC_NOTE_Idn', 'NSC_INCLUDES_Idn', 'NSC_EXCLUDES_Idn',
        'NSG_TITLE_Idn', 'NSG_NOTES_Idn', 'NMCRL_HITS'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM grupkelas WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
