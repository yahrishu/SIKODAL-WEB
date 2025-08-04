<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM grupkelas WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:100%;font-family:sans-serif;">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">';

        foreach ($row as $key => $value) {
            if ($key === 'id') continue;

            $label = htmlspecialchars($key);
            $val = htmlspecialchars($value);

            // Hanya NSG_NOTES_Idn yang textarea
            $isTextarea = ($key === 'NSG_NOTES_Idn');
            $gridSpan = $isTextarea ? 'style="grid-column:1 / span 2;"' : '';

            $output .= "<div $gridSpan>
                            <label style='font-weight:bold;'>$label</label>";

            if ($isTextarea) {
                $output .= "<textarea readonly rows='4' 
                            style='width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;'>$val</textarea>";
            } else {
                $output .= "<input type='text' value='$val' readonly 
                            style='width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;'>";
            }

            $output .= '</div>';
        }

        $output .= '</div></div>';
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
