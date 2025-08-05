    <?php
    include "koneksi.php"; // Pastikan koneksi sudah benar

    $request = $_POST;

    $table = "entitas";
    $primaryKey = "id";

    $columns = [
        'NCAGE',
        'Entity_Name',
        'Street',
        'City',
        'Country',
        'State',
        'TOEC',
        'DLC_International',
        'Dok_Sertifikat',
        'Dok_NCAGE_NSPA'
    ];

    
    $index_columns = [
    0  => 'AKSI',
    1  => 'NCAGE',
    2  => 'Entity_Name',
    3  => 'Street',
    4  => 'City',
    5  => 'Country',
    6  => 'State',
    7  => 'TOEC',
    8  => 'DLC_International',
    9  => 'Dok_Sertifikat',
    10 => 'Dok_NCAGE_NSPA'

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
        $sub_array['aksi'] = '<button type="button" name="view" id="'.$row['id'].'" class="btn btn-primary btn-sm view_data" data-id="'.$row['id'].'">
        <i class="bi bi-search"></i></button>';

        // Kolom data
          foreach ($columns as $col) {
            if ($col == 'NCAGESD') {
                $sub_array[$col] = $row[$col] . ' <span><i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-ncage"></i></span>';
            } else if ($col == 'TOEC') {
                $sub_array[$col] = $row[$col] . ' <span><i data-id="'.$row[$col].'" class="bi bi-info-square-fill info-toec"></i></span>';
            } else if ($col == 'Dok_Sertifikat' && !empty($row[$col])) {
                $file_url = 'master/uploads/' . $row[$col];
                $sub_array[$col] = '<a href="'.$file_url.'" target="_blank">'.$row['Entity_Name'].'</a>';
            } else if ($col == 'Dok_NCAGE_NSPA' && !empty($row[$col])) {
                $file_url = 'master/uploads/' . $row[$col];
                $sub_array[$col] = '<a href="'.$file_url.'" target="_blank">'.$row['Entity_Name'].'</a>';
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
