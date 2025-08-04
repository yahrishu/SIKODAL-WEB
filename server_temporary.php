    <?php
    include "koneksi.php"; // Pastikan koneksi sudah benar

    $request = $_POST;

    $table = "temporary_nsn";
    $primaryKey = "id";

    $columns = [
        'NIIN',
        'NSC',
        'TMP_NSN',
        'RPDMRC',
        'NIIN_SC',
        'INC',
        'Type',
        'FIIG',
        'FMSN',
        'Item_Name',
        'Country',
        'Date_NIIN',
        'Date_of_NIIN_Assignment',
        'Date_last_change1',
        'NIIN_Type',
        'NCAGE',
        'Manufacturer_Name',
        'Reference',
        'RNFC',
        'RNCC',
        'RNVC',
        'DAC',
        'RNAAC',
        'RNSC',
        'RNJC',
        'Has_Doc',
        'International_Registered_Users',
        'National_registered_users',
        'Repl_NIIN_1',
        'Repl_NIIN_2',
        'Segment_M',
        'MOEC',
        'Unit_of_Issue_Code',
        'UnitIss_Conv_Factor',
        'Form_Unit_Issue',
        'CIIC',
        'ShelfLifeCd',
        'Date_Last_Change2',
        'UoM_Rel_NSN',
        'Project_Shortname',
        'Project_Longname',
        'CPV',
        'CPV_Text',
        'RNAAC_ISO',
        'International_Registered_Users_ISO',
        'KETERANGAN',
        'CATATAN'
    ];

    
    $index_columns = [
    0  => 'VIEW',
    1  => 'NIIN',
    2  => 'NSC',
    3  => 'TMP_NSN',
    4  => 'RPDMRC',
    5  => 'NIIN_SC',
    6  => 'INC',
    7  => 'Type',
    8  => 'FIIG',
    9  => 'FMSN',
    10 => 'Item_Name',
    11 => 'Country',
    12 => 'Date_NIIN',
    13 => 'Date_of_NIIN_Assignment',
    14 => 'Date_last_change1',
    15 => 'NIIN_Type',
    16 => 'NCAGE',
    17 => 'Manufacturer_Name',
    18 => 'Reference',
    19 => 'RNFC',
    20 => 'RNCC',
    21 => 'RNVC',
    22 => 'DAC',
    23 => 'RNAAC',
    24 => 'RNSC',
    25 => 'RNJC',
    26 => 'Has_Doc',
    27 => 'International_Registered_Users',
    28 => 'National_registered_users',
    29 => 'Repl_NIIN_1',
    30 => 'Repl_NIIN_2',
    31 => 'Segment_M',
    32 => 'MOEC',
    33 => 'Unit_of_Issue_Code',
    34 => 'UnitIss_Conv_Factor',
    35 => 'Form_Unit_Issue',
    36 => 'CIIC',
    37 => 'ShelfLifeCd',
    38 => 'Date_Last_Change2',
    39 => 'UoM_Rel_NSN',
    40 => 'Project_Shortname',
    41 => 'Project_Longname',
    42 => 'CPV',
    43 => 'CPV_Text',
    44 => 'RNAAC_ISO',
    45 => 'International_Registered_Users_ISO',
    46 => 'KETERANGAN',
    47 => 'CATATAN'

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
