<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT 
        nama_baku_nmcrl.*,
        group_class_nmcrl.*,
        fiig.FIIG_Text
        FROM nama_baku_nmcrl
        LEFT JOIN group_class_nmcrl 
        ON nama_baku_nmcrl.FSG_FSC = group_class_nmcrl.FSG_FSC
        RIGHT JOIN fiig 
        ON nama_baku_nmcrl.FIIG = fiig.FIIG_Number
        WHERE nama_baku_nmcrl.id = '$id'";
    
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '
        <div style="padding:20px;font-family:sans-serif;max-width:100%;">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;align-items:start;">

                <div>
                    <label style="font-weight:bold;">FIIG</label>
                    <input type="text" value="' . htmlspecialchars($row['FIIG']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div>
                    <label style="font-weight:bold;">FIIG TEXT</label>
                    <input type="text" value="' . htmlspecialchars($row['FIIG_Text']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div>
                    <label style="font-weight:bold;">INC</label>
                    <input type="text" value="' . htmlspecialchars($row['INC']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div>
                    <label style="font-weight:bold;">FSG_FSC</label>
                    <input type="text" value="' . htmlspecialchars($row['FSG_FSC']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div>
                    <label style="font-weight:bold;">Item Name</label>
                    <input type="text" value="' . htmlspecialchars($row['ITEM_NAME']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div>
                    <label style="font-weight:bold;">Kelompok Barang</label>
                    <input type="text" value="' . htmlspecialchars($row['KELOMPOK_BARANG']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div style="grid-column:1 / span 2;">
                    <label style="font-weight:bold;">Klasifikasi Barang</label>
                    <input type="text" value="' . htmlspecialchars($row['KLASIFIKASI_BARANG']) . '" readonly 
                    style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">
                </div>

                <div style="grid-column:1 / span 2;">
                    <label style="font-weight:bold;">Item Name Definition</label>
                    <textarea readonly rows="5"
                    style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">' . htmlspecialchars($row['ITEM_NAME_DEFINITION']) . '</textarea>
                </div>

                <div style="grid-column:1 / span 2;">
                    <label style="font-weight:bold;">Uraian Singkat</label>
                    <textarea readonly rows="4"
                    style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;background:#f7f7f7;">' . htmlspecialchars($row['URAIAN_SINGKAT_NAMA_BARANG']) . '</textarea>
                </div>

            </div>
        </div>';

    } else {
        $output .= '<p style="color:red;font-weight:bold;">❌ Data tidak ditemukan!</p>';
    }

    echo $output;
}
?>
