<?php
include "koneksi.php";

$request = $_POST;

$table = "ncb";
$primaryKey = "id";

$columns = [
    'COUNTRY_CODE', 'MOE_CODE', 'COUNTRY_NAME', 'NCAGE_CODE', 'TIER_STATUS', 
    'NATION_TYPE'
];

$index_columns = [
    1 => 'COUNTRY_CODE', 2 => 'MOE_CODE', 3 => 'COUNTRY_NAME', 
    4 => 'NCAGE_CODE', 5 => 'TIER_STATUS', 6 => 'NATION_TYPE'
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

// Filter per column
$percolumn = "";
foreach ($index_columns as $key => $col) {
    if (!empty($request['columns'][$key]['search']['value'])) {
        $search = $koneksi->real_escape_string($request['columns'][$key]['search']['value']);
        $final = (!empty($search_sql) || !empty($percolumn)) ? " AND " : " WHERE ";
        $percolumn .= $final . "`$col` = '$search'";
    }
}

// Total filtered
$sqlFiltered = "SELECT COUNT(*) FROM $table $search_sql $percolumn";
$filteredRecords = $koneksi->query($sqlFiltered)->fetch_row()[0];

// Ordering
$order_sql = "";
if (!empty($request['order'])) {
    $col_idx = $request['order'][0]['column'] - 1; // -1 karena view
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

    // Tambah tombol view
    $sub_array['view'] = '<button type="button" class="btn btn-info view_data" data-id="'.$row['id'].'"><i class="bi bi-info-square-fill"></i></button>';

    // Kolom lain
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
