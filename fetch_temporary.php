<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM temporary_nsn WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:1100px;font-family:sans-serif;">';
        $output .= '<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:20px;">';

        foreach ($row as $key => $value) {
            if ($key === 'id') continue;

            $label = htmlspecialchars(str_replace('_', ' ', $key));
            $val = htmlspecialchars($value);

            $output .= '
                <div>
                    <label style="display:block;margin-bottom:5px;">' . $label . '</label>
                    <input type="text" value="' . $val . '" readonly
                           style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f9f9f9;">
                </div>';
        }

        $output .= '</div></div>';
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
