<?php
include "koneksi.php"; // Pastikan koneksi sudah benar

$request = $_POST;

$table = "nsn45";
$primaryKey = "id";

$columns = [
    'Manufacturer_Name', 'NCAGE', 'Reference', 'NSC', 'NIIN', 'NSN',
    'INC', 'Type', 'FIIG', 'Item_Name', 'Country',
    'Date_of_NIIN_Assignment', 'Date_last_change',
    'RNFC', 'RNCC', 'RNVC', 'DAC', 'RNAAC', 'RNSC', 'GAMBAR'
];

$index_columns = [
    0 => 'CETAK',
    1 => 'VIEW',
    2 => 'Manufacturer_Name',
    3 => 'NCAGE',
    4 => 'Reference',
    5 => 'NSC',
    6 => 'NIIN',
    7 => 'NSN',
    8 => 'INC',
    9 => 'Type',
    10 => 'FIIG',
    11 => 'Item_Name',
    12 => 'Country',
    13 => 'Date_of_NIIN_Assignment',
    14 => 'Date_last_change',
    15 => 'RNFC',
    16 => 'RNCC',
    17 => 'RNVC',
    18 => 'DAC',
    19 => 'RNAAC',
    20 => 'RNSC',
    21 => 'GAMBAR'

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

// Filtering per column
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
    $col_idx = $request['order'][0]['column'] - 1; // -1 karena kolom aksi di depan
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

    // Tombol aksi
    
    $sub_array['cetak'] = '<a href="cetak_nsn.php?id=' . $row['id'] . '" class="btn btn-success btn-sm rounded-2" title="Cetak"><i class="bi bi-printer-fill"></i></a>';
    $sub_array['view'] = '<button type="button" name="view" id="'.$row['id'].'" class="btn btn-primary btn-sm view_data" data-id="'.$row['id'].'"><i class="bi bi-info"></i></button>';

    // Kolom data
    foreach ($columns as $col) {
        if ($col == 'RNFC') {
            $sub_array[$col] = $row[$col] . ' <i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-RNFC"></i>';
        } elseif ($col == 'RNCC') {
            $sub_array[$col] = $row[$col] . ' <i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-RNCC"></i>';
        } elseif ($col == 'RNVC') {
            $sub_array[$col] = $row[$col] . ' <i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-RNVC"></i>';
        } elseif ($col == 'DAC') {
            $sub_array[$col] = $row[$col] . ' <i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-DAC"></i>';
        } elseif ($col == 'RNAAC') {
            $sub_array[$col] = $row[$col] . ' <i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-RNAAC"></i>';
        } elseif ($col == 'RNSC') {
            $sub_array[$col] = $row[$col] . ' <i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-RNSC"></i>';
        } elseif ($col == 'GAMBAR') {
            if (!empty($row[$col]) && $row[$col] !== '0') {
                $imagePath = 'master/uploads/' . $row[$col];
                $sub_array[$col] = '<img src="'.$imagePath.'" alt="Gambar" style="max-width: 100px; height: auto;">';
            } else {
                $sub_array[$col] = '-';
            }
        } else {
            $sub_array[$col] = $row[$col];
        }
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
