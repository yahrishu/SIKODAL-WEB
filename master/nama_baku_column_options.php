<?php
include "koneksi.php";

$column = $_GET['column'];
$allowed_columns = [
    'INC', 'ITEM_NAME', 'ITEM_NAME_DEFINITION', 'URAIAN_SINGKAT_NAMA_BARANG',
    'TIPE_NAMA_BARANG', 'STATUS', 'FIIG', 'FSG_FSC'
];

if (!in_array($column, $allowed_columns)) {
  echo json_encode([]);
  exit;
}

$search = $_GET['q'] ?? '';
$page = intval($_GET['page'] ?? 1);
$limit = 25;
$offset = ($page - 1) * $limit;

// Query data
$sql = "SELECT DISTINCT `$column` FROM nama_baku_nmcrl 
        WHERE `$column` IS NOT NULL AND `$column` <> '' AND `$column` LIKE ? 
        ORDER BY `$column` LIMIT ?, ?";
$stmt = $koneksi->prepare($sql);
$like = "%$search%";
$stmt->bind_param("sii", $like, $offset, $limit);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        "id" => $row[$column],
        "text" => $row[$column]
    ];
}

// Hitung total untuk pagination
$sql2 = "SELECT COUNT(DISTINCT `$column`) AS total FROM nama_baku_nmcrl 
        WHERE `$column` IS NOT NULL AND `$column` <> '' AND `$column` LIKE ?";
$stmt2 = $koneksi->prepare($sql2);
$stmt2->bind_param("s", $like);
$stmt2->execute();
$res2 = $stmt2->get_result()->fetch_assoc();
$total = $res2['total'];
$hasMore = ($offset + $limit) < $total;

echo json_encode([
    "results" => $data,
    "pagination" => ["more" => $hasMore]
]);

?>
