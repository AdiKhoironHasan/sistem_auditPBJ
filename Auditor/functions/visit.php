<?php
include 'data_audit.php';

if (isset($_POST['tambah'])) {
    $id_desk = $_POST['id_desk'];
    $masa_monitoring_awal = $_POST['masa_monitoring_awal'];
    $masa_monitoring_akhir = $_POST['masa_monitoring_akhir'];
    $tipe_monitoring = $_POST['tipe_monitoring'];
    $tgl_monitoring = $_POST['tgl_monitoring'];
    $penyusunan_mutu_1 = $_POST['penyusunan_mutu_1'];
    $penyusunan_mutu_2 = $_POST['penyusunan_mutu_2'];
    $pemeriksaan_1 = $_POST['pemeriksaan_1'];
    $pemeriksaan_2 = $_POST['pemeriksaan_2'];
    $perubahan_kegiatan = $_POST['perubahan_kegiatan'];
    $asuransi_1 = $_POST['asuransi_1'];
    $asuransi_2 = $_POST['asuransi_2'];
    $pengiriman = $_POST['pengiriman'];
    $uji_coba = $_POST['uji_coba'];
    $serah_terima = $_POST['serah_terima'];
    $denda = $_POST['denda'];
    $perpanjangan = $_POST['perpanjangan'];
    $laporan = $_POST['laporan'];
    $catatan = $_POST['catatan'];
    $kriteria = $_POST['kriteria'];
    $akar_penyebab = $_POST['akar_penyebab'];
    $akibat = $_POST['akibat'];
    $rekomendasi = $_POST['rekomendasi'];
    $tanggapan_auditee = $_POST['tanggapan_auditee'];
    $rencana_perbaikan = $_POST['rencana_perbaikan'];

    $sql = "INSERT INTO tb_visit VALUES(NULL, $id_desk, '$tipe_monitoring', '$masa_monitoring_awal', '$masa_monitoring_akhir', '$tgl_monitoring', '$penyusunan_mutu_1', '$penyusunan_mutu_2', '$pemeriksaan_1', '$pemeriksaan_2', '$perubahan_kegiatan', '$asuransi_1', '$asuransi_2', '$pengiriman', '$uji_coba', '$serah_terima', '$denda', '$perpanjangan', '$laporan', '$catatan', '$kriteria', '$akar_penyebab', '$akibat', '$rekomendasi', '$tanggapan_auditee', '$rencana_perbaikan')";
    if (mysqli_query($conn, $sql)) {
        // $success    =   "New record created successfully !";
        echo "<script>alert('Tambah Data Visit Berhasil')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
        // var_export(mysqli_error($conn));
        echo "<script>alert('Tambah Data Visit Gagal')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    }
    // //mysqli_close($conn);
}
