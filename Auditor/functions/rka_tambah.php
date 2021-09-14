<?php
include_once 'connect.php';
$success  = "";
if (isset($_POST['tambah'])) {
    // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
    // $result = mysqli_query($conn, $unit);
    // while ($row = $result -> fetch_assoc()) {
    //     $id_unit =$row['id_unit'];
    // }
    $u = $_POST["unit"];
    $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

    $unit = $data_u["id_unit"];
    $auditor = $_POST['auditor'];
    $status = 'Belum Terlaksana';
    $tahun = $_POST['tahun'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO tb_rka VALUES(NULL, '$unit', '$auditor', '$status', '$tahun', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        $success    =   "New record created successfully !";
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
