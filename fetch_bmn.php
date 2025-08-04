<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM bmn WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '
        <div style="padding:20px;max-width:800px;font-family:sans-serif;">

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">';

        $fields = [
            'GOL', 'BID', 'KEL', 'SUB_KEL', 'SUB_SUB_KEL',
            'KODEFIKASI_BMN', 'SAT', 'KODIFIKASI_SISTEM_NSN',
            'FSG', 'FSC', 'FSG_FSC'
        ];

        foreach ($fields as $field) {
            $output .= '
                <div>
                    <label style="display:block;margin-bottom:5px;font-weight:bold;">' . $field . '</label>
                    <input type="text" value="' . htmlspecialchars($row[$field]) . '" readonly 
                    style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>';
        }

        $output .= '</div>'; // end grid

        // URAIAN sebagai textarea di bawah
        $output .= '
        <div style="margin-top:20px;">
            <label style="display:block;margin-bottom:5px;font-weight:bold;">URAIAN</label>
            <textarea readonly rows="4"
            style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">' . htmlspecialchars($row['URAIAN']) . '</textarea>
        </div>';

        $output .= '</div>';
    } else {
        $output .= '<p style="color:red;font-weight:bold;">❌ Data tidak ditemukan!</p>';
    }

    echo $output;
}
?>
