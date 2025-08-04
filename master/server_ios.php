<?php
include "koneksi.php"; // Pastikan koneksi sudah benar

$request = $_POST;
$table = "ios";
$primaryKey = "id";

$columns = [
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

$index_columns = [
   0 => 'VIEW',
    1 => 'NSC',
    2 => 'NIIN',
    3 => 'NIIN_',
    4 => 'NSN',
    5 => 'N_S_N',
    6 => 'Status',
    7 => 'Assignment_Date',
    8 => 'Last_Update_Date',
    9 => 'INC',
    10 => 'Item_Name',
    11 => 'TIIC',
    12 => 'CPV',
    13 => 'Replacement',
    14 => 'NCAGE_Name',
    15 => 'NCAGE_Status',
    16 => 'NCAGE_Country',
    17 => 'NCAGE_City',
    18 => 'Reference_Number',
    19 => 'RNFC',
    20 => 'RNCC',
    21 => 'RNVC',
    22 => 'RNSC',
    23 => 'RNJC',
    24 => 'RNAAC',
    25 => 'DAC',
    26 => 'Procurement_Status',
    27 => 'NCAGE_Replacements',
    28 => 'Users',
    29 => 'CHARACTERISTIC'
];

// Hitung total records
$sqlTotal = "SELECT COUNT(*) FROM $table";
$totalRecords = $koneksi->query($sqlTotal)->fetch_row()[0];

// Filtering global
$search_sql = "";
if (!empty($request['search']['value'])) {
    $search_value = $koneksi->real_escape_string($request['search']['value']);
    $search_arr = [];
    foreach ($columns as $col) {
        $search_arr[] = "`$col` LIKE '%$search_value%'";
    }
    $search_sql = " WHERE " . implode(" OR ", $search_arr);
}

// filter per column
$percolumn = "";
foreach ($index_columns as $key => $col) {
    if (!empty($request['columns'][$key]['search']['value'])) {
        $search = $koneksi->real_escape_string($request['columns'][$key]['search']['value']);
        $final = !empty($search_sql) ? " AND " : " WHERE ";
        $percolumn .= $final . "`$col` = '$search'";
    }
}

// Total filtered
$sqlFiltered = "SELECT COUNT(*) FROM $table $search_sql $percolumn";
$filteredRecords = $koneksi->query($sqlFiltered)->fetch_row()[0];

// Ordering
$order_sql = "";
if (!empty($request['order'])) {
    $col_idx = $request['order'][0]['column'] - 1; // -1 karena CETAK di kolom pertama
    if ($col_idx >= 0 && $col_idx < count($columns)) {
        $dir = $request['order'][0]['dir'] === 'asc' ? "ASC" : "DESC";
        $order_sql = " ORDER BY `{$columns[$col_idx]}` $dir";
    }
}

// Paging
$start = isset($request['start']) ? intval($request['start']) : 0;
$length = isset($request['length']) ? intval($request['length']) : 10;
$limit_sql = " LIMIT $start, $length";

// Query data
$sqlData = "SELECT * FROM $table $search_sql $percolumn $order_sql $limit_sql";
$result = $koneksi->query($sqlData);

$data = [];
while ($row = $result->fetch_assoc()) {
    $sub_array = [];

    // Tombol CETAK
         $sub_array['view'] = '<button type="button" class="btn btn-info view_data" data-id="'.$row['id'].'"><i class="bi bi-info-square-fill"></i></button>';

    // Kolom data
    foreach ($columns as $col) {
        $sub_array[$col] = $row[$col];
    }

    $data[] = $sub_array;
}

// Output JSON
echo json_encode([
    "draw" => isset($request['draw']) ? intval($request['draw']) : 0,
    "recordsTotal" => intval($totalRecords),
    "recordsFiltered" => intval($filteredRecords),
    "data" => $data
]);
?>
