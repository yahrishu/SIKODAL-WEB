<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM nama_baku_nmcrl WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '
        <div style="max-width:700px;padding:20px;border-radius:10px;background:#f9f9f9;font-family:Arial,sans-serif;box-shadow:0 4px 10px rgba(0,0,0,0.1);">
            <h3 style="margin-top:0;color:#2c3e50;"><span style="font-size:24px;">📁</span> Detail Nama Baku</h3>
                    <!-- INC -->
            <div style="margin-bottom:12px;">
                <label style="font-weight:bold;font-size:15px;">INC:</label>
                <input type="text" value="' . htmlspecialchars($row['INC']) . '" readonly style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;background:#fff;font-weight:bold;" />
            </div>

            <!-- ITEM NAME -->
            <div style="margin-bottom:12px;">
                <label style="font-weight:bold;text-transform:uppercase;">Item Name:</label>
                <input type="text" value="' . htmlspecialchars($row['ITEM_NAME']) . '" readonly style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;background:#fff;text-transform:uppercase;font-weight:bold;" />
            </div>
            <div style="margin-bottom:12px;">
                <label style="font-weight:bold;color:#555;">Item Name Definition:</label>
                <textarea readonly rows="1"
                    style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;background:#fff;resize:none;overflow:hidden;"
                    oninput="this.style.height=\'auto\'; this.style.height=this.scrollHeight + \'px\';">'
                    . htmlspecialchars($row["ITEM_NAME_DEFINITION"]) .
                '</textarea>
            </div>

            <div style="margin-bottom:12px;">
                <label style="font-weight:bold;color:#555;">Uraian Singkat:</label>
                <textarea readonly rows="1"
                    style="width:100%;padding:10px;border:1px solid #ccc;border-radius:6px;background:#fff;resize:none;overflow:hidden;"
                    oninput="this.style.height=\'auto\'; this.style.height=this.scrollHeight + \'px\';">'
                    . htmlspecialchars($row["URAIAN_SINGKAT_NAMA_BARANG"]) .
                '</textarea>
            </div>
        </div>
        ';
    } else {
        $output .= '<p style="color:red;">❌ Data tidak ditemukan!</p>';
    }

    echo $output;
}
?>
<script>
    // Function untuk auto resize textarea readonly
    function autoResizeTextareas() {
        document.querySelectorAll('textarea[readonly]').forEach(function(el) {
            el.style.height = 'auto';
            el.style.height = el.scrollHeight + 'px';
        });
    }

    // Jalankan setelah content dimuat
    autoResizeTextareas();

    // Jika kamu pakai Bootstrap modal:
    document.querySelectorAll('.modal').forEach(function(modal) {
        modal.addEventListener('shown.bs.modal', function () {
            autoResizeTextareas();
        });
    });
</script>
