<?php
session_start();    
include "koneksi.php";

$id    = $_POST['id'];
$NOMOR_KONTRAK = $_POST['NOMOR_KONTRAK'];
$file  = $_FILES['file']['name'];

$query = "UPDATE harwat SET id='$id', NOMOR_KONTRAK='$NOMOR_KONTRAK'";

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
    header('Location: data_ba_harwat.php');
} else {
    echo "$query";
}

exit;
?>
