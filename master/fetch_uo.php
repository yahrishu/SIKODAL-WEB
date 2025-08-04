<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM skema_impor_uo_final WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:700px;font-family:sans-serif;">';

        // Daftar field yang akan ditampilkan
        $fields = [
            'KODE_UO' => 'Kode UO',
            'UO' => 'UO',
            'KODE_SATKER' => 'Kode Satker',
            'SATUAN_KERJA' => 'Satuan Kerja',
            'KUASA_PENGGUNA_ANGGARAN' => 'Kuasa Pengguna Anggaran',
            'KODE_JENIS_KEWENANGAN' => 'Kode Jenis Kewenangan',
            'JENIS_KEWENANGAN' => 'Jenis Kewenangan',
        ];

        foreach ($fields as $key => $label) {
            $val = htmlspecialchars($row[$key] ?? '');
            $output .= '<div style="margin-bottom:15px;">
                            <label style="font-weight:bold;display:block;margin-bottom:5px;">' . $label . '</label>
                            <input type="text" value="' . $val . '" readonly
                                   style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f9f9f9;font-weight:bold;">
                        </div>';
        }

        $output .= '</div>';
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
