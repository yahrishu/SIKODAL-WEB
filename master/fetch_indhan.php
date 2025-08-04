<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM indhan WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:900px;font-family:sans-serif;">';

        // Mulai grid 2 kolom
        $output .= '<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">';

        foreach ($row as $key => $value) {
            if ($key === 'id') continue;

            $label = htmlspecialchars(str_replace('_', ' ', $key));
            $val = htmlspecialchars($value);

            $output .= '<div>
                            <label style="font-weight:bold;display:block;margin-bottom:5px;">' . $label . '</label>
                            <input type="text" value="' . $val . '" readonly 
                                   style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                        </div>';
        }

        $output .= '</div>'; // end grid
        $output .= '</div>'; // end container
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
