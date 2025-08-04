<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM entitas WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:1100px;font-family:sans-serif;">';

        $output .= '<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:20px;">';

        foreach ($row as $key => $value) {
            if (strtolower($key) === 'id') continue;

            $label = htmlspecialchars($key);
            $val = htmlspecialchars($value);

            // Jika Address atau Post_Address tampil full lebar kolom
            $colSpan = in_array($key, ['Address', 'Post_Address']) ? 'grid-column: span 3;' : '';

            $output .= '
                <div style="' . $colSpan . '">
                    <label style="font-weight:bold;display:block;margin-bottom:5px;">' . $label . '</label>
                    <input type="text" value="' . $val . '" readonly
                           style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>';
        }

        $output .= '</div></div>';
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
