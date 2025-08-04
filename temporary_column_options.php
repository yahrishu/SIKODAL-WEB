<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
        'NIIN',
        'NSC',
        'TMP_NSN',
        'RPDMRC',
        'NIIN_SC',
        'INC',
        'Type',
        'FIIG',
        'FMSN',
        'Item_Name',
        'Country',
        'Date_NIIN',
        'Date_of_NIIN_Assignment',
        'Date_last_change1',
        'NIIN_Type',
        'NCAGE',
        'Manufacturer_Name',
        'Reference',
        'RNFC',
        'RNCC',
        'RNVC',
        'DAC',
        'RNAAC',
        'RNSC',
        'RNJC',
        'Has_Doc',
        'International_Registered_Users',
        'National_registered_users',
        'Repl_NIIN_1',
        'Repl_NIIN_2',
        'Segment_M',
        'MOEC',
        'Unit_of_Issue_Code',
        'UnitIss_Conv_Factor',
        'Form_Unit_Issue',
        'CIIC',
        'ShelfLifeCd',
        'Date_Last_Change2',
        'UoM_Rel_NSN',
        'Project_Shortname',
        'Project_Longname',
        'CPV',
        'CPV_Text',
        'RNAAC_ISO',
        'International_Registered_Users_ISO',
        'KETERANGAN',
        'CATATAN'
];

// validasi kolom
if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

// Ambil distinct data
$sql = "SELECT DISTINCT `$column` FROM temporary_nsn WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
$res = $koneksi->query($sql);

$data = [];
while ($row = $res->fetch_assoc()) {
  $data[] = $row[$column];
}

echo json_encode($data);
?>
