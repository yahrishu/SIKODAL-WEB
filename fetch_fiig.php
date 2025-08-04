<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM fiig WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:900px;font-family:sans-serif;">';

        $textareaFields = ['FIIG_Text']; // Kolom yang perlu pakai textarea
        foreach ($row as $key => $value) {
            if (strtolower($key) === 'id') continue; // Lewati kolom id

            $label = htmlspecialchars($key);
            $val = htmlspecialchars($value);

            $output .= '<div style="margin-bottom:15px;">
                            <label style="font-weight:bold;">' . $label . '</label>';

            if (in_array($key, $textareaFields)) {
                $output .= '<textarea readonly rows="4"
                                style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;font-weight:bold;">' . $val . '</textarea>';
            } else {
                $output .= '<input type="text" value="' . $val . '" readonly 
                                style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;font-weight:bold;background:#f7f7f7;">';
            }

            $output .= '</div>';
        }

        $output .= '</div>';
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
