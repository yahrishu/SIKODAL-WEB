<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['NCAGE'])) {
    $kode_ncage = strtoupper(trim($_POST['NCAGE'])); // sanitize & uppercase

    // Cek ke database
    $stmt = $koneksi->prepare("SELECT * FROM ncage WHERE NCAGE = ?");
    $stmt->bind_param("s", $kode_ncage);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}
?>