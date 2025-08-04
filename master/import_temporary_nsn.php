<?php

session_start();

require 'vendor/autoload.php';
require 'koneksi.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

date_default_timezone_set('Asia/Jakarta'); // Set zona waktu ke WIB

// Pastikan file di-upload
if (!isset($_FILES['uploadfiletemporarynsn']) || $_FILES['uploadfiletemporarynsn']['error'] !== UPLOAD_ERR_OK) {
    die("Gagal upload file.");
}

// Simpan sementara file yang diupload
$tmpFilePath = $_FILES['uploadfiletemporarynsn']['tmp_name'];

// Baca file Excel
$spreadsheet = IOFactory::load($tmpFilePath);
$sheet = $spreadsheet->getActiveSheet();
$data = $sheet->toArray();

// Hapus semua data lama dari tabel temporary_nsn
$koneksi->query("DELETE FROM temporary_nsn");

// Mulai dari baris ke-1 (baris ke-0 adalah header)
for ($i = 1; $i < count($data); $i++) {
    $row = $data[$i];

    // Lewati baris jika kosong
    $isEmptyRow = true;
    foreach ($row as $cell) {
        if (strlen(trim($cell)) > 0) {
            $isEmptyRow = false;
            break;
        }
    }
    if ($isEmptyRow) {
        continue;
    }

    // Ambil dan sanitasi data dari Excel
    $NIIN = $koneksi->real_escape_string(trim($row[0]));
    $NSC = $koneksi->real_escape_string(trim($row[1]));
    $TMP_NSN = $koneksi->real_escape_string(trim($row[2]));
    $RPDMRC = $koneksi->real_escape_string(trim($row[3]));
    $NIIN_SC = $koneksi->real_escape_string(trim($row[4]));
    $INC = $koneksi->real_escape_string(trim($row[5]));
    $Type = $koneksi->real_escape_string(trim($row[6]));
    $FIIG = $koneksi->real_escape_string(trim($row[7]));
    $FMSN = $koneksi->real_escape_string(trim($row[8]));
    $Item_Name = $koneksi->real_escape_string(trim($row[9]));
    $Country = $koneksi->real_escape_string(trim($row[10]));
    $Date_NIIN = $koneksi->real_escape_string(trim($row[11]));
    $Date_of_NIIN_Assignment = $koneksi->real_escape_string(trim($row[12]));
    $Date_last_change1 = $koneksi->real_escape_string(trim($row[13]));
    $NIIN_Type = $koneksi->real_escape_string(trim($row[14]));
    $NCAGE = $koneksi->real_escape_string(trim($row[15]));
    $Manufacturer_Name = $koneksi->real_escape_string(trim($row[16]));
    $Reference = $koneksi->real_escape_string(trim($row[17]));
    $RNFC = $koneksi->real_escape_string(trim($row[18]));
    $RNCC = $koneksi->real_escape_string(trim($row[19]));
    $RNVC = $koneksi->real_escape_string(trim($row[20]));
    $DAC = $koneksi->real_escape_string(trim($row[21]));
    $RNAAC = $koneksi->real_escape_string(trim($row[22]));
    $RNSC = $koneksi->real_escape_string(trim($row[23]));
    $RNJC = $koneksi->real_escape_string(trim($row[24]));
    $Has_Doc = $koneksi->real_escape_string(trim($row[25]));
    $International_Registered_Users = $koneksi->real_escape_string(trim($row[26]));
    $National_registered_users = $koneksi->real_escape_string(trim($row[27]));
    $Repl_NIIN_1 = $koneksi->real_escape_string(trim($row[28]));
    $Repl_NIIN_2 = $koneksi->real_escape_string(trim($row[29]));
    $Segment_M = $koneksi->real_escape_string(trim($row[30]));
    $MOEC = $koneksi->real_escape_string(trim($row[31]));
    $Unit_of_Issue_Code = $koneksi->real_escape_string(trim($row[32]));
    $UnitIss_Conv_Factor = $koneksi->real_escape_string(trim($row[33]));
    $Form_Unit_Issue = $koneksi->real_escape_string(trim($row[34]));
    $CIIC = $koneksi->real_escape_string(trim($row[35]));
    $ShelfLifeCd = $koneksi->real_escape_string(trim($row[36]));
    $Date_Last_Change2 = $koneksi->real_escape_string(trim($row[37]));
    $UoM_Rel_NSN = $koneksi->real_escape_string(trim($row[38]));
    $Project_Shortname = $koneksi->real_escape_string(trim($row[39]));
    $Project_Longname = $koneksi->real_escape_string(trim($row[40]));
    $CPV = $koneksi->real_escape_string(trim($row[41]));
    $CPV_Text = $koneksi->real_escape_string(trim($row[42]));
    $RNAAC_ISO = $koneksi->real_escape_string(trim($row[43]));
    $International_Registered_Users_ISO = $koneksi->real_escape_string(trim($row[44]));
    $CATATAN = $koneksi->real_escape_string(trim($row[45]));

    $TGL_REPLACE = date('Y-m-d H:i:s'); // ⬅️ Tambahkan timestamp saat ini

    // Query insert
    $sql = "INSERT INTO temporary_nsn (
        NIIN, NSC, TMP_NSN, RPDMRC, NIIN_SC, INC, Type, FIIG, FMSN, Item_Name,
        Country, Date_NIIN, Date_of_NIIN_Assignment, Date_last_change1, NIIN_Type,
        NCAGE, Manufacturer_Name, Reference, RNFC, RNCC,
        RNVC, DAC, RNAAC, RNSC, RNJC,
        Has_Doc, International_Registered_Users, National_registered_users, Repl_NIIN_1, Repl_NIIN_2,
        Segment_M, MOEC, Unit_of_Issue_Code, UnitIss_Conv_Factor, Form_Unit_Issue,
        CIIC, ShelfLifeCd, Date_Last_Change2, UoM_Rel_NSN, Project_Shortname,
        Project_Longname, CPV, CPV_Text, RNAAC_ISO, International_Registered_Users_ISO, CATATAN, TGL_REPLACE
    ) VALUES (
        '$NIIN', '$NSC', '$TMP_NSN', '$RPDMRC', '$NIIN_SC', '$INC', '$Type', '$FIIG', '$FMSN', '$Item_Name',
        '$Country', '$Date_NIIN', '$Date_of_NIIN_Assignment', '$Date_last_change1', '$NIIN_Type',
        '$NCAGE', '$Manufacturer_Name', '$Reference', '$RNFC', '$RNCC',
        '$RNVC', '$DAC', '$RNAAC', '$RNSC', '$RNJC',
        '$Has_Doc', '$International_Registered_Users', '$National_registered_users', '$Repl_NIIN_1', '$Repl_NIIN_2',
        '$Segment_M', '$MOEC', '$Unit_of_Issue_Code', '$UnitIss_Conv_Factor', '$Form_Unit_Issue',
        '$CIIC', '$ShelfLifeCd', '$Date_Last_Change2', '$UoM_Rel_NSN', '$Project_Shortname',
        '$Project_Longname', '$CPV', '$CPV_Text', '$RNAAC_ISO', '$International_Registered_Users_ISO', '$CATATAN', '$TGL_REPLACE'
    )";

    if (!$koneksi->query($sql)) {
        echo "Gagal INSERT baris ke-" . ($i + 1) . ": " . $koneksi->error . "<br>";
    }
}

$_SESSION['sukses'] = 'Berhasil Import & Ganti Data Lama';
header("location:data_temporary_nsn.php");
exit;

?>
