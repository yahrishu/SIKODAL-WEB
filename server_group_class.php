<?php
include "koneksi.php"; // Pastikan koneksi sudah benar

$request = $_POST;
$table = "grupkelas";
$primaryKey = "id";

// Kolom data di database (tanpa kolom view cetak)
$columns = [
    'NSG', 'NSC', 'LANGUAGE_CODE', 'DATE_ESTABLISH', 'NSC_TITLES',
    'NSC_TITLES_Idn', 'NSC_NOTE_Idn', 'NSC_INCLUDES_Idn', 'NSC_EXCLUDES_Idn',
    'NSG_TITLE_Idn', 'NSG_NOTES_Idn', 'NMCRL_HITS'
];

// Hitung total records
$sqlTotal = "SELECT COUNT(*) FROM $table";
$totalRecords = $koneksi->query($sqlTotal)->fetch_row()[0];

// Filtering global (search utama)
$search_sql = "";
if (!empty($request['search']['value'])) {
    $search_value = $koneksi->real_escape_string($request['search']['value']);
    $search_arr = [];
    foreach ($columns as $col) {
        $search_arr[] = "`$col` LIKE '%$search_value%'";
    }
    $search_sql = " WHERE " . implode(" OR ", $search_arr);
}

// Filtering per kolom
$percolumn = "";
$percolumn_arr = [];

// Di client, kolom pertama = view, jadi offset -1 untuk $columns di server
foreach ($columns as $key => $col) {
    // Index kolom di request columns[] (ditambah 1 karena di JS ada "view" di index 0)
    $req_idx = $key + 1; 

    if (!empty($request['columns'][$req_idx]['search']['value'])) {
        $search = $koneksi->real_escape_string($request['columns'][$req_idx]['search']['value']);
        $percolumn_arr[] = "`$col` = '$search'";
    }
}

if (!empty($percolumn_arr)) {
    $final = !empty($search_sql) ? " AND " : " WHERE ";
    $percolumn = $final . implode(" AND ", $percolumn_arr);
}

// Total filtered
$sqlFiltered = "SELECT COUNT(*) FROM $table $search_sql $percolumn";
$filteredRecords = $koneksi->query($sqlFiltered)->fetch_row()[0];

// Ordering
$order_sql = "";
if (!empty($request['order'])) {
    $col_idx = $request['order'][0]['column'] - 1; // -1 karena kolom pertama di client adalah "view"
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

// Buat filters
$filters = [];
foreach ($columns as $col) {
    $sql = "SELECT DISTINCT `$col` FROM $table WHERE `$col` IS NOT NULL AND `$col` <> '' LIMIT 1000";
    $res = $koneksi->query($sql);
    $options = [];
    while ($r = $res->fetch_assoc()) {
        $options[] = $r[$col];
    }
    $filters[$col] = $options;
}

// Output JSON
echo json_encode([
    "draw" => isset($request['draw']) ? intval($request['draw']) : 0,
    "recordsTotal" => intval($totalRecords),
    "recordsFiltered" => intval($filteredRecords),
    "data" => $data,
    "filters" => $filters
]);
?>
