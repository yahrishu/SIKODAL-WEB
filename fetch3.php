<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM nsn45 WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding:20px;max-width:100%;font-family:sans-serif;">
        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:20px;">';

        // Fields pendek (input)
        $fields_input = [
            'Manufacturer_Name' => 'Manufacturer Name',
            'NCAGE' => 'NCAGE',
            'Reference' => 'Reference',
            'NSC' => 'NSC',
            'NIIN' => 'NIIN',
            'NSN' => 'NSN',
            'INC' => 'INC',
            'Type' => 'Type',
            'FIIG' => 'FIIG',
            'Country' => 'Country',
            'Date_of_NIIN_Assignment' => 'Date of NIIN Assignment',
            'Date_last_change' => 'Date Last Change',
            'RNFC' => 'RNFC',
            'RNCC' => 'RNCC',
            'RNVC' => 'RNVC',
            'DAC' => 'DAC',
            'RNAAC' => 'RNAAC',
            'RNSC' => 'RNSC'
        ];

        foreach ($fields_input as $key => $label) {
            $val = htmlspecialchars($row[$key] ?? '');
            $output .= "
                <div>
                    <label style='font-weight:normal;display:block;margin-bottom:5px;'>$label</label>
                    <input type='text' value='$val' readonly
                           style='width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;'>
                </div>";
        }

        $output .= '</div>'; // end grid

        // Field panjang (input panjang, bukan textarea)
        $itemName = htmlspecialchars($row['Item_Name'] ?? '');
        $output .= '
            <div style="margin-top:20px;">
                <label style="font-weight:normal;display:block;margin-bottom:5px;">Item Name</label>
                <input type="text" value="' . $itemName . '" readonly
                       style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
            </div>';

        $output .= '</div>'; // end container
    } else {
        $output .= '<p style="color:red;font-weight:bold;">❌ Data tidak ditemukan!</p>';
    }

    echo $output;
}
?>
