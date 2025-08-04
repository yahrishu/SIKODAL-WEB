<?php
session_start();    
include "koneksi.php";

$id    = $_POST['id'];
$NCAGE = $_POST['NCAGE'];
$file  = $_FILES['file']['name'];

$query = "UPDATE ncage SET id='$id', NCAGE='$NCAGE'";

// Proses file upload
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $file = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $ekstensi_diperbolehkan = array('pdf', 'xlsx', 'docx', 'png', 'jpg', 'jpeg');
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['file']['tmp_name'];
    $nama_file_baru = uniqid() . '-' . $file;

    // Validasi ukuran file (maksimal 10MB)
    if ($file_size <= 9000485760) {
        if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
            move_uploaded_file($file_tmp, 'uploads/' . $nama_file_baru);
            $query .= ", file='$nama_file_baru'";
        } else {
            echo "Ekstensi file tidak diperbolehkan.";
            exit;
        }
    } else {
        echo "Ukuran file terlalu besar. Maksimal 10MB.";
        exit;
    }
}

$insert = mysqli_query($koneksi, $query . " WHERE id='$id'");

if ($insert) {
    $_SESSION['sukses'] = 'Upload File Berhasil';
    header('Location: data_ncage.php');
} else {
    echo "$query";
}

exit;
?>
