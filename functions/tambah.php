<?php
include "config.php";

if($_GET['act']== 'tambah'){
    $unit = $_POST['unit'];
  $auditor = $_POST['auditor'];
  $status = $_POST['status'];
  $tahun = $_POST['tahun'];
  $tanggal = $_POST['tanggal'];

    // //query
    // $result = mysqli_query($mysqli, "INSERT INTO tb_rencana_kerja VALUES('', '$unit', '$auditor', '$status', '$tahun', '$tanggal')");
    $result = mysqli_query($mysqli, "INSERT INTO tb_rencana_kerja VALUES('', 'A', 'A', 'A', 'A', 'A')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("#");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
?>