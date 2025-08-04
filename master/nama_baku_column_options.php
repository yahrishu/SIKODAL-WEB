<?php
include "koneksi.php";

// $column = $_GET['column'];
// $allowed_columns = [
//     'INC', 'LANGUAGE_CODE', 'DATE_ESTABLISHED', 'ITEM_NAME', 'ITEM_NAME_DEFINITION_IDN', 'ITEM_NAME_DEFINITION',
//     'RELATED_INC', 'NMCRL_HITS'
// ];

// // validasi kolom
// if (!in_array($column, $allowed_columns)) {
//   echo json_encode([]);
//   exit;
// }

// // Ambil distinct data
// $sql = "SELECT DISTINCT `$column` FROM namabaku WHERE `$column` IS NOT NULL AND `$column` <> '' ORDER BY `$column`";
// $res = $koneksi->query($sql);

// $data = [];
// while ($row = $res->fetch_assoc()) {
//   $data[] = $row[$column];
// }

// echo json_encode($data);

$search = $_GET['q'] ?? '';
$page = intval($_GET['page'] ?? 1);
$limit = 25;
$offset = ($page - 1) * $limit;

// Query data sesuai pencarian
$sql = "SELECT ITEM_NAME FROM nama_baku_nmcrl WHERE ITEM_NAME LIKE ? LIMIT ?, ?";
$stmt = $koneksi->prepare($sql);
$like = "%$search%";
$stmt->bind_param("sii", $like, $offset, $limit);
$stmt->execute();
$result = $stmt->get_result();

$items = [];
while ($row = $result->fetch_assoc()) {
    $items[] = [
        "id" => $row['ITEM_NAME'],
        "text" => $row['ITEM_NAME']
    ];
}

// Hitung apakah masih ada data selanjutnya
$sql2 = "SELECT COUNT(*) as total FROM nama_baku_nmcrl WHERE ITEM_NAME LIKE ?";
$stmt2 = $koneksi->prepare($sql2);
$stmt2->bind_param("s", $like);
$stmt2->execute();
$res2 = $stmt2->get_result()->fetch_assoc();
$total = $res2['total'];

$hasMore = ($offset + $limit) < $total;

echo json_encode([
    "results" => $items,
    "hasMore" => $hasMore
]);

?>
