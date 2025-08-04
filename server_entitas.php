    <?php
    include "koneksi.php"; // Pastikan koneksi sudah benar

    $request = $_POST;

    $table = "entitas";
    $primaryKey = "id";

    $columns = [
        'NCAGE',
        'NAME',
        'NCAGE_Status',
        'Creation_Date',
        'Last_Update_Date',
        'TOEC',
        'Address',
        'Country',
        'City',
        'US_State',
        'State',
        'US_Post_Code',
        'Post_Office_Box',
        'Post_Address',
        'Post_Code',
        'Phone',
        'Fax',
        'Identification',
        'Mail',
        'Website',
        'UFDC',
        'UNSPSC',
        'NSICC',
        'NAIC',
        'NACE',
        'CPVC',
        'NCAGE_Replacement',
        'NCAGE_Former'
    ];

    
    $index_columns = [
    0  => 'VIEW',
    1  => 'NCAGE',
    2  => 'NAME',
    3  => 'NCAGE_Status',
    4  => 'Creation_Date',
    5  => 'Last_Update_Date',
    6  => 'TOEC',
    7  => 'Address',
    8  => 'Country',
    9  => 'City',
    10 => 'US_State',
    11 => 'State',
    12 => 'US_Post_Code',
    13 => 'Post_Office_Box',
    14 => 'Post_Address',
    15 => 'Post_Code',
    16 => 'Phone',
    17 => 'Fax',
    18 => 'Identification',
    19 => 'Mail',
    20 => 'Website',
    21 => 'UFDC',
    22 => 'UNSPSC',
    23 => 'NSICC',
    24 => 'NAIC',
    25 => 'NACE',
    26 => 'CPVC',
    27 => 'NCAGE_Replacement',
    28 => 'NCAGE_Former'
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
        $sub_array['view'] = '<button type="button" name="view" id="'.$row['id'].'" class="btn btn-primary btn-sm view_data" data-id="'.$row['id'].'">
        <i class="bi bi-search"></i></button>';

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
