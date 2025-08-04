<?php
include "koneksi.php"; // Pastikan koneksi sudah benar

$request = $_POST;

$table = "harwat";
$primaryKey = "id";

$columns = [
    'No_Rekam_Adm', 'Jenis_Kegiatan', 'Judul_Kegiatan', 'SUMBER_DATA', 'UAKPB',
    'No_Surat_Pengajuan', 'Tgl_Surat_Pengajuan', 'Contact_Person', 'JABATAN', 'No_Telp',
    'PENYEDIA', 'NCAGE', 'JENIS_PENGADAAN', 'NOMOR_KONTRAK', 'TANGGAL_KONTRAK',
    'EFEKTIF_KONTRAK', 'Tgl_Berakhir_Kontrak', 'NAMA_PENGADAAN', 'KOMODITI', 'UO_Pengguna',
    'Satuan_Pengguna_Akhir', 'Nomor_Sprint', 'Tgl_Sprint', 'Ketua_Tim', 'Tgl_Selesai_Kodifikasi',
    'REFERENCE_NUMBER', 'NAMA_MATERIIL', 'NSN', 'APPROVED_ITEM_NAME', 'INC', 'TIIC',
    'NCAGE_MANUFACTURE', 'NEGARA'
];

$index_columns = [
    0 => 'VIEW',
    1 => 'No_Rekam_Adm',
    2 => 'Jenis_Kegiatan',
    3 => 'Judul_Kegiatan',
    4 => 'SUMBER_DATA',
    5 => 'UAKPB',
    6 => 'No_Surat_Pengajuan',
    7 => 'Tgl_Surat_Pengajuan',
    8 => 'Contact_Person',
    9 => 'JABATAN',
    10 => 'No_Telp',
    11 => 'PENYEDIA',
    12 => 'NCAGE',
    13 => 'JENIS_PENGADAAN',
    14 => 'NOMOR_KONTRAK',
    15 => 'TANGGAL_KONTRAK',
    16 => 'EFEKTIF_KONTRAK',
    17 => 'Tgl_Berakhir_Kontrak',
    18 => 'NAMA_PENGADAAN',
    19 => 'KOMODITI',
    20 => 'UO_Pengguna',
    21 => 'Satuan_Pengguna_Akhir',
    22 => 'Nomor_Sprint',
    23 => 'Tgl_Sprint',
    24 => 'Ketua_Tim',
    25 => 'Tgl_Selesai_Kodifikasi',
    26 => 'REFERENCE_NUMBER',
    27 => 'NAMA_MATERIIL',
    28 => 'NSN',
    29 => 'APPROVED_ITEM_NAME',
    30 => 'INC',
    31 => 'TIIC',
    32 => 'NCAGE_MANUFACTURE',
    33 => 'NEGARA'
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
$percolumn_arr = [];
foreach ($index_columns as $key => $col) {
    if (!empty($request['columns'][$key]['search']['value'])) {
        $search = $koneksi->real_escape_string($request['columns'][$key]['search']['value']);
        $percolumn_arr[] = "`$col` = '$search'";
    }
}
if (!empty($percolumn_arr)) {
    $final = !empty($search_sql) ? " AND " : " WHERE ";
    $percolumn = $final . implode(" AND ", $percolumn_arr);
} else {
    $percolumn = "";
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

if (!$result) {
    die("Query error: " . $koneksi->error . "<br>SQL: " . $sqlData);
}

$data = [];
while ($row = $result->fetch_assoc()) {
    $sub_array = [];

    // Tombol CETAK
         $sub_array['view'] = '<button type="button" class="btn btn-info view_data" data-id="'.$row['id'].'"><i class="bi bi-info-square-fill"></i></button>';

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
