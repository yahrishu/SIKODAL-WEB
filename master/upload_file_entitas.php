<?php
session_start();    
include "koneksi.php";

$id    = $_POST['id'];
$NCAGE = $_POST['NCAGE'];

$query = "UPDATE entitas SET NCAGE='$NCAGE'";

// Definisikan ekstensi diperbolehkan & ukuran maksimum
$ekstensi_diperbolehkan = array('pdf', 'xlsx', 'docx', 'png', 'jpg', 'jpeg');
$max_size = 40 * 1024 * 1024; // 40MB

// Proses upload Dok_Sertifikat
if (isset($_FILES['Dok_Sertifikat']) && $_FILES['Dok_Sertifikat']['error'] == 0) {
    $file1 = $_FILES['Dok_Sertifikat']['name'];
    $file_size1 = $_FILES['Dok_Sertifikat']['size'];
    $x1 = explode('.', $file1);
    $ekstensi1 = strtolower(end($x1));
    $file_tmp1 = $_FILES['Dok_Sertifikat']['tmp_name'];
    $nama_file_baru1 = uniqid() . '-sertifikat-' . $file1;

    if ($file_size1 <= $max_size) {
        if (in_array($ekstensi1, $ekstensi_diperbolehkan)) {
            move_uploaded_file($file_tmp1, 'uploads/' . $nama_file_baru1);
            $query .= ", Dok_Sertifikat='$nama_file_baru1'";
        } else {
            echo "Ekstensi file Dok_Sertifikat tidak diperbolehkan.";
            exit;
        }
    } else {
        echo "Ukuran file Dok_Sertifikat terlalu besar. Maksimal 40MB.";
        exit;
    }
}

// Proses upload Dok_NCAGE_NSPA
if (isset($_FILES['Dok_NCAGE_NSPA']) && $_FILES['Dok_NCAGE_NSPA']['error'] == 0) {
    $file2 = $_FILES['Dok_NCAGE_NSPA']['name'];
    $file_size2 = $_FILES['Dok_NCAGE_NSPA']['size'];
    $x2 = explode('.', $file2);
    $ekstensi2 = strtolower(end($x2));
    $file_tmp2 = $_FILES['Dok_NCAGE_NSPA']['tmp_name'];
    $nama_file_baru2 = uniqid() . '-nspa-' . $file2;

    if ($file_size2 <= $max_size) {
        if (in_array($ekstensi2, $ekstensi_diperbolehkan)) {
            move_uploaded_file($file_tmp2, 'uploads/' . $nama_file_baru2);
            $query .= ", Dok_NCAGE_NSPA='$nama_file_baru2'";
        } else {
            echo "Ekstensi file Dok_NCAGE_NSPA tidak diperbolehkan.";
            exit;
        }
    } else {
        echo "Ukuran file Dok_NCAGE_NSPA terlalu besar. Maksimal 40MB.";
        exit;
    }
}

// Eksekusi update
$update = mysqli_query($koneksi, $query . " WHERE id='$id'");

if ($update) {
    $_SESSION['sukses'] = 'Upload Berhasil';
    header('Location: data_entitas.php');
} else {
    echo "Query gagal: $query";
}

exit;
?>
