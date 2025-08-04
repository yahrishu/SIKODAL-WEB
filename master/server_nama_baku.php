<?php
include "koneksi.php"; // Pastikan koneksi sudah benar

$request = $_POST;
$table = "nama_baku_nmcrl";
$primaryKey = "id";

$columns = [
    'INC', 'ITEM_NAME', 'ITEM_NAME_DEFINITION', 'URAIAN_SINGKAT_NAMA_BARANG',
    'TIPE_NAMA_BARANG', 'STATUS', 'FIIG', 'FSG_FSC'
];

$index_columns = [
    0 => NULL, 1 => 'INC', 2 => 'ITEM_NAME'
];

// Hitung total records
$sqlTotal = "SELECT COUNT($primaryKey) FROM $table";
$totalRecords = $koneksi->query($sqlTotal)->fetch_row()[0];

// Filtering global (dengan wildcard *)
$search_sql = "";
if (!empty($request['search']['value'])) {
    $search_value = $request['search']['value'];
    $search_value = str_replace('*', '%', $search_value); // Ganti * jadi % untuk SQL
    $search_value = $koneksi->real_escape_string($search_value);

    $search_arr = [];
    foreach ($columns as $col) {
        $search_arr[] = "`$col` LIKE '$search_value'";
    }
    $search_sql = " WHERE " . implode(" OR ", $search_arr);
}

// Filter per kolom (exact match)
$percolumn = "";
foreach ($index_columns as $key => $col) {
    if (!empty($request['columns'][$key]['search']['value'])) {
        $search = $koneksi->real_escape_string($request['columns'][$key]['search']['value']);
        $final = !empty($search_sql) || !empty($percolumn) ? " AND " : " WHERE ";
        $percolumn .= $final . "`$col` = '$search'";
    }
}

// Total filtered
$sqlFiltered = "SELECT COUNT($primaryKey) FROM $table $search_sql $percolumn";
$filteredRecords = $koneksi->query($sqlFiltered)->fetch_row()[0];

// Ordering
$order_sql = "";
if (!empty($request['order'])) {
    $col_idx = $request['order'][0]['column'] - 1; // kolom pertama tombol view
    if ($col_idx >= 0 && $col_idx < count($columns)) {
        $dir = $request['order'][0]['dir'] === 'asc' ? "ASC" : "DESC";
        $order_sql = " ORDER BY `{$columns[$col_idx]}` $dir";
    }
}

// Paging
$start = isset($request['start']) ? intval($request['start']) : 0;
$length = isset($request['length']) ? intval($request['length']) : 10;
$limit_sql = " LIMIT $start, $length";

// Query data utama
$sqlData = "SELECT * FROM $table $search_sql $percolumn $order_sql $limit_sql";
$result = $koneksi->query($sqlData);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Output JSON untuk DataTables
echo json_encode([
    "draw" => isset($request['draw']) ? intval($request['draw']) : 0,
    "recordsTotal" => intval($totalRecords),
    "recordsFiltered" => intval($filteredRecords),
    "data" => $data
]);
?>
