<?php
include "koneksi.php"; // Pastikan koneksi sudah benar

$request = $_POST;
$table = "nama_baku_nmcrl";
$primaryKey = "id";

$columns = [
    'INC', 'ITEM_NAME', 'ITEM_NAME_DEFINITION', 'URAIAN_SINGKAT_NAMA_BARANG',
    'TIPE_NAMA_BARANG', 'STATUS', 'FIIG', 'FSG_FSC'
];

// Kolom yang bisa difilter per column
$index_columns = [
    1 => 'INC',
    2 => 'ITEM_NAME'
];

// Hitung total records
$sqlTotal = "SELECT COUNT($primaryKey) FROM $table";
$totalRecords = $koneksi->query($sqlTotal)->fetch_row()[0];

// Filtering global — hanya untuk kolom ITEM_NAME dan support wildcard *
$search_sql = "";
if (!empty($request['search']['value'])) {
    // Ganti wildcard * menjadi % untuk SQL LIKE
    $search_value = str_replace('*', '%', $request['search']['value']);
    $search_value = $koneksi->real_escape_string($search_value);

    $search_sql = " WHERE `ITEM_NAME` LIKE '$search_value'";
}

// Filter per column
$percolumn_sql = "";
foreach ($index_columns as $key => $col) {
    if (!empty($request['columns'][$key]['search']['value'])) {
    $raw_search = $request['columns'][$key]['search']['value'];
    
    // Ganti * menjadi % agar bisa dipakai di LIKE
    $search = $koneksi->real_escape_string(str_replace('*', '%', trim($raw_search)));
    
    $final = (!empty($search_sql) || !empty($percolumn_sql)) ? " AND " : " WHERE ";
    
    // Gunakan LIKE untuk mendukung wildcard
    $percolumn_sql .= $final . "`$col` LIKE '$search'";
}
}

// Total filtered
$sqlFiltered = "SELECT COUNT($primaryKey) FROM $table $search_sql $percolumn_sql";
$filteredRecords = $koneksi->query($sqlFiltered)->fetch_row()[0];

// Ordering
$order_sql = "";
if (!empty($request['order'])) {
    $col_idx = $request['order'][0]['column'] - 1; // -1 karena kolom pertama view
    if ($col_idx >= 0 && $col_idx < count($columns)) {
        $dir = ($request['order'][0]['dir'] === 'asc') ? "ASC" : "DESC";
        $order_sql = " ORDER BY `{$columns[$col_idx]}` $dir";
    }
}

// Paging
$start = isset($request['start']) ? intval($request['start']) : 0;
$length = isset($request['length']) ? intval($request['length']) : 10;
$limit_sql = " LIMIT $start, $length";

// Query data
$sqlData = "SELECT * FROM $table $search_sql $percolumn_sql $order_sql $limit_sql";
$result = $koneksi->query($sqlData);

$data = [];
while ($row = $result->fetch_assoc()) {
    $sub_array = [];

    // Tambahkan kolom view
    $sub_array['view'] = '<button type="button" class="btn btn-info view_data" data-id="'.$row['id'].'"><i class="bi bi-info-square-fill"></i></button>';

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
