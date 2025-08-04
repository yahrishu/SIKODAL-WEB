<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $query = "SELECT * FROM harwat WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    $output = '';
    if ($row = mysqli_fetch_assoc($result)) {
        $output .= '
        <table style="width:100%;">
            <tr>
                <td><strong>No_Rekam_Adm</strong></td>
                <td>:</td>
                <td>'.$row['No_Rekam_Adm'].'</td>
            </tr>
            <tr>
                <td><strong>Jenis_Kegiatan</strong></td>
                <td>:</td>
                <td>'.$row['Jenis_Kegiatan'].'</td>
            </tr>
            <tr>
                <td><strong>Judul_Kegiatan</strong></td>
                <td>:</td>
                <td>'.$row['Judul_Kegiatan'].'</td>
            </tr>
            <tr>
                <td><strong>SUMBER_DATA</strong></td>
                <td>:</td>
                <td>'.$row['SUMBER_DATA'].'</td>
            </tr>
            <tr>
                <td><strong>UAKPB</strong></td>
                <td>:</td>
                <td>'.$row['UAKPB'].'</td>
            </tr>
            <tr>
                <td><strong>No_Surat_Pengajuan</strong></td>
                <td>:</td>
                <td>'.$row['No_Surat_Pengajuan'].'</td>
            </tr>
            <tr>
                <td><strong>Tgl_Surat_Pengajuan</strong></td>
                <td>:</td>
                <td>'.$row['Tgl_Surat_Pengajuan'].'</td>
            </tr>
            <tr>
                <td><strong>Contact_Person</strong></td>
                <td>:</td>
                <td>'.$row['Contact_Person'].'</td>
            </tr>
            <tr>
                <td><strong>JABATAN</strong></td>
                <td>:</td>
                <td>'.$row['JABATAN'].'</td>
            </tr>
            <tr>
                <td><strong>No_Telp</strong></td>
                <td>:</td>
                <td>'.$row['No_Telp'].'</td>
            </tr>
            <tr>
                <td><strong>PENYEDIA</strong></td>
                <td>:</td>
                <td>'.$row['PENYEDIA'].'</td>
            </tr>
            <tr>
                <td><strong>NCAGE</strong></td>
                <td>:</td>
                <td>'.$row['NCAGE'].'</td>
            </tr>
            <tr>
                <td><strong>JENIS_PENGADAAN</strong></td>
                <td>:</td>
                <td>'.$row['JENIS_PENGADAAN'].'</td>
            </tr>
            <tr>
                <td><strong>NOMOR_KONTRAK</strong></td>
                <td>:</td>
                <td>'.$row['NOMOR_KONTRAK'].'</td>
            </tr>
            <tr>
                <td><strong>TANGGAL_KONTRAK</strong></td>
                <td>:</td>
                <td>'.$row['TANGGAL_KONTRAK'].'</td>
            </tr>
            <tr>
                <td><strong>EFEKTIF_KONTRAK</strong></td>
                <td>:</td>
                <td>'.$row['EFEKTIF_KONTRAK'].'</td>
            </tr>
            <tr>
                <td><strong>Tgl_Berakhir_Kontrak</strong></td>
                <td>:</td>
                <td>'.$row['Tgl_Berakhir_Kontrak'].'</td>
            </tr>
            <tr>
                <td><strong>NAMA_PENGADAAN</strong></td>
                <td>:</td>
                <td>'.$row['NAMA_PENGADAAN'].'</td>
            </tr>
            <tr>
                <td><strong>KOMODITI</strong></td>
                <td>:</td>
                <td>'.$row['KOMODITI'].'</td>
            </tr>
            <tr>
                <td><strong>UO_Pengguna</strong></td>
                <td>:</td>
                <td>'.$row['UO_Pengguna'].'</td>
            </tr>
            <tr>
                <td><strong>Satuan_Pengguna_Akhir</strong></td>
                <td>:</td>
                <td>'.$row['Satuan_Pengguna_Akhir'].'</td>
            </tr>
            <tr>
                <td><strong>Nomor_Sprint</strong></td>
                <td>:</td>
                <td>'.$row['Nomor_Sprint'].'</td>
            </tr>
            <tr>
                <td><strong>Tgl_Sprint</strong></td>
                <td>:</td>
                <td>'.$row['Tgl_Sprint'].'</td>
            </tr>
            <tr>
                <td><strong>Ketua_Tim</strong></td>
                <td>:</td>
                <td>'.$row['Ketua_Tim'].'</td>
            </tr>
            <tr>
                <td><strong>Tgl_Selesai_Kodifikasi</strong></td>
                <td>:</td>
                <td>'.$row['Tgl_Selesai_Kodifikasi'].'</td>
            </tr>
        </table>';
    } else {
        $output .= '<p>Data tidak ditemukan!</p>';
    }

    echo $output;
}
?>
