<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM harwat WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:1000px;font-family:sans-serif;">';

        // Tampilkan NAMA_PENGADAAN paling atas
        $nama_pengadaan = htmlspecialchars($row['NAMA_PENGADAAN'] ?? '');
        $output .= '
            <div style="margin-bottom:20px;">
                <label style="font-weight:bold;display:block;margin-bottom:5px;">NAMA PENGADAAN</label>
                <input type="text" value="' . $nama_pengadaan . '" readonly
                       style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f9f9f9;">
            </div>';

        // Mulai grid 3 kolom
        $output .= '<div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;">';

        foreach ($row as $key => $value) {
            if ($key === 'id' || $key === 'NAMA_PENGADAAN') continue;

            $label = htmlspecialchars(str_replace('_', ' ', $key));
            $val = htmlspecialchars($value);

            $output .= '<div>
                            <label style="font-weight:normal;display:block;margin-bottom:5px;">' . $label . '</label>
                            <input type="text" value="' . $val . '" readonly
                                   style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f9f9f9;">
                        </div>';
        }

        $output .= '</div></div>'; // Tutup grid dan container
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
