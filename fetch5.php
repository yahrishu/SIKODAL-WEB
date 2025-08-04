<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM pscn WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div style="padding: 20px; max-width: 1100px; font-family: sans-serif;">';
        $output .= '<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">';

        // Field biasa 3 kolom
        $fields = [
            'Manufacturer_Name' => 'Manufacturer Name',
            'NCAGE' => 'NCAGE',
            'Reference' => 'Reference',
            'NSC' => 'NSC',
            'NIIN' => 'NIIN',
            'PSCN' => 'PSCN',
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

        foreach ($fields as $key => $label) {
            $val = htmlspecialchars($row[$key] ?? '');
            $output .= '
                <div>
                    <label style="display: block; margin-bottom: 5px;">' . $label . '</label>
                    <input type="text" value="' . $val . '" readonly
                        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; background: #f9f9f9;">
                </div>';
        }

        // Khusus Item Name, panjang penuh 3 kolom
        $itemName = htmlspecialchars($row['Item_Name'] ?? '');
        $output .= '
            <div style="grid-column: span 3;">
                <label style="display: block; margin-bottom: 5px;">Item Name</label>
                <input type="text" value="' . $itemName . '" readonly
                    style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; background: #f9f9f9;">
            </div>';

        $output .= '</div></div>';
    } else {
        $output .= '<p style="color: red; font-weight: bold;">❌ Data tidak ditemukan!</p>';
    }

    echo $output;
}
?>
