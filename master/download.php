<?php
if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $filepath = 'file/' . $file; // pastikan file berada di folder 'files'

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush();
        readfile($filepath);
        exit;
    } else {
        echo "File tidak ditemukan.";
    }
} else {
    echo "Parameter file tidak tersedia.";
}