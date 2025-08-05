<?php
session_start();    
include "koneksi.php";

$id    = $_POST['id'];
$NSN = $_POST['NSN'];
$GAMBAR  = $_FILES['GAMBAR']['name'];

$query = "UPDATE ios SET id='$id', NSN='$NSN'";

// Proses file upload
if (isset($_FILES['GAMBAR']) && $_FILES['GAMBAR']['error'] == 0) {
    $GAMBAR = $_FILES['GAMBAR']['name'];
    $file_size = $_FILES['GAMBAR']['size'];
    $ekstensi_diperbolehkan = array('pdf', 'xlsx', 'docx', 'png', 'jpg', 'jpeg');
    $x = explode('.', $GAMBAR);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['GAMBAR']['tmp_name'];
    $nama_GAMBAR_baru = uniqid() . '-' . $GAMBAR;

    // Validasi ukuran file (maksimal 10MB)
    if ($file_size <= 9000485760) {
        if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
            move_uploaded_file($file_tmp, 'uploads/' . $nama_GAMBAR_baru);
            $query .= ", GAMBAR='$nama_GAMBAR_baru'";
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
    $_SESSION['sukses'] = 'Upload Gambar Berhasil';
    header('Location: data_ios.php');
} else {
    echo "$query";
}

exit;
?>
