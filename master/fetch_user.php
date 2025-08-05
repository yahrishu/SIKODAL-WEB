<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:800px;font-family:sans-serif;">';

        foreach ($row as $key => $value) {
            if ($key === 'id') continue;

            $label = htmlspecialchars(str_replace('_', ' ', $key));
            $val = htmlspecialchars($value);

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
