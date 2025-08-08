<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Entity_Name'])) {
    $nama_perusahaan = '%' . strtoupper(trim($_POST['Entity_Name'])) . '%'; // Ubah jadi pola LIKE

    // Query dengan LIKE
    $stmt = $koneksi->prepare("SELECT * FROM ncage WHERE UPPER(Entity_Name) LIKE ?");
    $stmt->bind_param("s", $nama_perusahaan);
    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}
?>
