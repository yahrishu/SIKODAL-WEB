<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

$request = $_POST;
$table = "bmn";
$primaryKey = "id";

$columns = [
    'GOL', 'BID', 'KEL', 'SUB_KEL', 'SUB_SUB_KEL',
    'KODEFIKASI_BMN', 'SAT', 'URAIAN', 'KODIFIKASI_SISTEM_NSN',
    'FSG', 'FSC', 'FSG_FSC'
];

$sqlTotal = "SELECT COUNT(*) FROM $table";
$totalRecords = $koneksi->query($sqlTotal)->fetch_row()[0];

$search_sql = "";
if (!empty($request['search']['value'])) {
    $search_value = $koneksi->real_escape_string($request['search']['value']);
    $search_arr = [];
    foreach ($columns as $col) {
        $search_arr[] = "`$col` LIKE '%$search_value%'";
    }
    $search_sql = " WHERE " . implode(" OR ", $search_arr);
}

$percolumn = "";
foreach ($columns as $key => $col) {
    if (!empty($request['columns'][$key + 1]['search']['value'])) { // +1 karena kolom view
        $search = $koneksi->real_escape_string($request['columns'][$key + 1]['search']['value']);
        $final = !empty($search_sql) || !empty($percolumn) ? " AND " : " WHERE ";
        $percolumn .= $final . "`$col` = '$search'";
    }
}

$sqlFiltered = "SELECT COUNT(*) FROM $table $search_sql $percolumn";
$filteredRecords = $koneksi->query($sqlFiltered)->fetch_row()[0];

$order_sql = "";
$col_idx = $request['order'][0]['column'] - 1; // -1 karena view
if ($col_idx >= 0 && $col_idx < count($columns)) {
    $dir = $request['order'][0]['dir'] === 'asc' ? "ASC" : "DESC";
    $order_sql = " ORDER BY `{$columns[$col_idx]}` $dir";
}

$start = isset($request['start']) ? intval($request['start']) : 0;
$length = isset($request['length']) ? intval($request['length']) : 10;
$limit_sql = " LIMIT $start, $length";

$sqlData = "SELECT * FROM $table $search_sql $percolumn $order_sql $limit_sql";
$result = $koneksi->query($sqlData);

$data = [];
while ($row = $result->fetch_assoc()) {
    $sub_array = [];

    $sub_array['view'] = '<button type="button" class="btn btn-info view_data" data-id="'.$row['id'].'"><i class="bi bi-info-square-fill"></i></button>';

    foreach ($columns as $col) {
        $sub_array[$col] = $row[$col];
    }

    $data[] = $sub_array;
}

header('Content-Type: application/json');
echo json_encode([
    "draw" => isset($request['draw']) ? intval($request['draw']) : 0,
    "recordsTotal" => intval($totalRecords),
    "recordsFiltered" => intval($filteredRecords),
    "data" => $data
]);
?>
