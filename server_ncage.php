    <?php
    include "koneksi.php"; // Pastikan koneksi sudah benar

    $request = $_POST;

    $table = "ncage";
    $primaryKey = "id";

    $columns = [
        'NCAGE', 'NCAGESD', 'TOEC', 'Entity_Name', 'Street', 'City',
        'Post_Code', 'Country', 'State', 'Date_Last_Change_International', 'CreatDate',
        'telephone', 'fax','Email', 'website', 'Replaced', 'file'
    ];

    
    $index_columns = [
    0 => 'CETAK',
    1 => 'VIEW',
    2 => 'NCAGE',
    3 => 'NCAGESD',
    4 => 'TOEC',
    5 => 'Entity_Name',
    6 => 'Street',
    7 => 'City',
    8 => 'Post_Code',
    9 => 'Country',
    10 => 'State',
    11 => 'Date_Last_Change_International',
    12 => 'CreatDate',
    13 => 'telephone',
    14 => 'fax',
    15 => 'Email',
    16 => 'website',
    17 => 'Replaced',
    18 => 'file'
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
            $search = $request['columns'][$key]['search']['value'];
            $final = !empty($search_sql) ? " AND " : " WHERE ";
            $percolumn = $final . "`$col` = '" . $search . "'";
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
        $sub_array['cetak'] = '<a href="cetak_ncage.php?id=' . $row['id'] . '" class="btn btn-success btn-sm rounded-2" title="Cetak">
        <i class="bi bi-printer-fill"></i> </a>';
        $sub_array['view'] = '<button type="button" name="view" id="'.$row['id'].'" class="btn btn-primary btn-sm view_data" data-id="'.$row['id'].'">
        <i class="bi bi-search"></i></button>';
        $sub_array['upload'] = '<a href="javascript:void(0);" class="btn btn-warning btn-sm rounded-2 upload-file" data-id="' . $row['id'] . '" title="Upload File">
        <i class="bi bi-upload"></i>
        </a>';

        // Kolom data
             foreach ($columns as $col) {
            if ($col == 'NCAGESD') {
                $sub_array[$col] = $row[$col] . ' <span><i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-ncage"></i></span>';
            } else if ($col == 'TOEC') {
                $sub_array[$col] = $row[$col] . ' <span><i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-toec"></i></span>';
            } else if ($col == 'file' && !empty($row[$col])) {
                $file_url = 'uploads/' . $row[$col]; // Sesuaikan folder file
                $sub_array[$col] = '<a href="'.$file_url.'" target="_blank">'.$row[$col].'</a>';
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
