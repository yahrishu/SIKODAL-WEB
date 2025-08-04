<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM ncage WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:100%;font-family:sans-serif;">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">';

        // Daftar field dan label
        $fields = [
            'NCAGE' => 'NCAGE',
            'NCAGESD' => 'NCAGESD',
            'TOEC' => 'TOEC',
            'Entity_Name' => 'Entity Name',
            'Street' => 'Street',
            'City' => 'City',
            'Post_Code' => 'Post Code',
            'Country' => 'Country',
            'State' => 'State',
            'Date_Last_Change_International' => 'Date Last Change International',
            'CreatDate' => 'Create Date',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'Email' => 'Email',
            'website' => 'Website',
            'Replaced' => 'Replaced',
        ];

        foreach ($fields as $key => $label) {
            $val = htmlspecialchars($row[$key] ?? '');

            $output .= "<div>
                            <label style='font-weight:bold;display:block;margin-bottom:5px;'>$label</label>
                            <input type='text' value='$val' readonly
                                   style='width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;'>
                        </div>";
        }

        $output .= '</div></div>';
    } else {
        $output .= "<p style='color:red;font-weight:bold;'>❌ Data tidak ditemukan!</p>";
    }

    echo $output;
}
?>
