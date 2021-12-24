<?php
include 'data_audit.php';

if (isset($_POST['tambah'])) {
    $id_rka = $_POST['id_rka'];
    $tipe_monitoring = $_POST['tipe_monitoring'];
    $masa_monitoring_awal = $_POST['masa_monitoring_awal'];
    $masa_monitoring_akhir = $_POST['masa_monitoring_akhir'];
    $tgl_monitoring = $_POST['tgl_monitoring'];
    $kontrak_1 = $_POST['kontrak_1'];
    $kontrak_2 = $_POST['kontrak_2'];
    $kontrak_3 = $_POST['kontrak_3'];
    $kontrak_4 = $_POST['kontrak_4'];
    $surat_pesanan_1 = $_POST['surat_pesanan_1'];
    $surat_pesanan_2 = $_POST['surat_pesanan_2'];
    $surat_pesanan_3 = $_POST['surat_pesanan_3'];
    $surat_pesanan_4 = $_POST['surat_pesanan_4'];
    $penyusunan_program_mutu = $_POST['penyusunan_program_mutu'];
    $pemeriksaan_bersama = $_POST['pemeriksaan_bersama'];
    $pembayaran_uang_muka_1 = $_POST['pembayaran_uang_muka_1'];
    $pembayaran_uang_muka_2 = $_POST['pembayaran_uang_muka_2'];
    $uji_coba_barang = $_POST['uji_coba_barang'];
    $serah_terima_barang_1 = $_POST['serah_terima_barang_1'];
    $serah_terima_barang_2 = $_POST['serah_terima_barang_2'];
    $catatan = $_POST['catatan'];
    $kriteria = $_POST['kriteria'];
    $akar_penyebab = $_POST['akar_penyebab'];
    $akibat = $_POST['akibat'];
    $rekomendasi = $_POST['rekomendasi'];
    $tanggapan_auditee = $_POST['tanggapan_auditee'];
    $rencana_perbaikan = $_POST['rencana_perbaikan'];

    $sql = "INSERT INTO tb_desk VALUES(NULL, $id_rka, '$tipe_monitoring', '$masa_monitoring_awal', '$masa_monitoring_akhir', '$tgl_monitoring', '$kontrak_1', '$kontrak_2', '$kontrak_3', '$kontrak_4', '$surat_pesanan_1', '$surat_pesanan_2', '$surat_pesanan_3', '$surat_pesanan_4', '$penyusunan_program_mutu', '$pemeriksaan_bersama', '$pembayaran_uang_muka_1', '$pembayaran_uang_muka_2', '$uji_coba_barang', '$serah_terima_barang_1', '$serah_terima_barang_2', '$catatan', '$kriteria', '$akar_penyebab', '$akibat', '$rekomendasi', '$tanggapan_auditee', '$rencana_perbaikan')";
    if (mysqli_query($conn, $sql)) {
        // $success    =   "New record created successfully !";
        echo "<script>alert('Tambah Data Desk Berhasil')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
        // var_export(mysqli_error($conn));
        echo "<script>alert('Tambah Data Desk Gagal')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    }
    // //mysqli_close($conn);
}

if (isset($_POST['ubah'])) {
    $id_desk = $data_desk['id_desk'];
    $tipe_monitoring = $_POST['tipe_monitoring'];
    $masa_monitoring_awal = $_POST['masa_monitoring_awal'];
    $masa_monitoring_akhir = $_POST['masa_monitoring_akhir'];
    $tgl_monitoring = $_POST['tgl_monitoring'];
    $kontrak_1 = $_POST['kontrak_1'];
    $kontrak_2 = $_POST['kontrak_2'];
    $kontrak_3 = $_POST['kontrak_3'];
    $kontrak_4 = $_POST['kontrak_4'];
    $surat_pesanan_1 = $_POST['surat_pesanan_1'];
    $surat_pesanan_2 = $_POST['surat_pesanan_2'];
    $surat_pesanan_3 = $_POST['surat_pesanan_3'];
    $surat_pesanan_4 = $_POST['surat_pesanan_4'];
    $penyusunan_program_mutu = $_POST['penyusunan_program_mutu'];
    $pemeriksaan_bersama = $_POST['pemeriksaan_bersama'];
    $pembayaran_uang_muka_1 = $_POST['pembayaran_uang_muka_1'];
    $pembayaran_uang_muka_2 = $_POST['pembayaran_uang_muka_2'];
    $uji_coba_barang = $_POST['uji_coba_barang'];
    $serah_terima_barang_1 = $_POST['serah_terima_barang_1'];
    $serah_terima_barang_2 = $_POST['serah_terima_barang_2'];
    $catatan = $_POST['catatan'];
    $kriteria = $_POST['kriteria'];
    $akar_penyebab = $_POST['akar_penyebab'];
    $akibat = $_POST['akibat'];
    $rekomendasi = $_POST['rekomendasi'];
    $tanggapan_auditee = $_POST['tanggapan_auditee'];
    $rencana_perbaikan = $_POST['rencana_perbaikan'];

    $sql = "UPDATE tb_desk SET tipe_monitoring='$tipe_monitoring', masa_monitoring_awal='$masa_monitoring_awal', masa_monitoring_akhir='$masa_monitoring_akhir', tgl_monitoring='$tgl_monitoring', kontrak_1='$kontrak_1', kontrak_2='$kontrak_2', kontrak_3='$kontrak_3', kontrak_4='$kontrak_4', surat_pesanan_1='$surat_pesanan_1', surat_pesanan_2='$surat_pesanan_2', surat_pesanan_3='$surat_pesanan_3', surat_pesanan_4='$surat_pesanan_4', penyusunan_program_mutu='$penyusunan_program_mutu', pemeriksaan_bersama='$pemeriksaan_bersama', pembayaran_uang_muka_1='$pembayaran_uang_muka_1', pembayaran_uang_muka_2='$pembayaran_uang_muka_2', uji_coba_barang='$uji_coba_barang', serah_terima_barang_1='$serah_terima_barang_1', serah_terima_barang_2='$serah_terima_barang_2', catatan='$catatan', kriteria='$kriteria', akar_penyebab='$akar_penyebab', akibat='$akibat', rekomendasi='$rekomendasi', tanggapan_auditee='$tanggapan_auditee', rencana_perbaikan='$rencana_perbaikan' WHERE id_desk = $id_desk";
    if (mysqli_query($conn, $sql)) {
        // $success    =   "New record created successfully !";
        echo "<script>alert('Ubah Data Desk Berhasil')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        // var_export(mysqli_error($conn));
        echo "<script>alert('Ubah Data Desk Gagal')</script>";
        // header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    }
    // //mysqli_close($conn);
}
