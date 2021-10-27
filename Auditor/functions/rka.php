<?php

$success  = "";
if (isset($_POST['tambah'])) {
    // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
    // $result = mysqli_query($conn, $unit);
    // while ($row = $result -> fetch_assoc()) {
    //     $id_unit =$row['id_unit'];
    // }
    $unit = $_POST["unit"];
    // $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

    // $unit = $data_u["id_unit"];
    $auditor = $_POST['auditor'];
    $status = 'Belum Terlaksana';
    $tahun = $_POST['tahun'];
    $tanggal = $_POST['tanggal'];

    // $sql = "INSERT INTO tb_rka VALUES(NULL, '$unit', '$auditor', '$status', '$tahun', '$tanggal')";
    $sql = "INSERT INTO tb_rka VALUES(NULL, '$unit', '$auditor', '$status', '$tahun', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        // $success    =   "New record created successfully !";
        echo "<script>alert('Tambah Data Berhasil')</script>";
        header("refresh: 0; url=rka.php");
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
        echo "<script>alert('Tambah Data Gagal')</script>";
        header("refresh: 0; url=rka.php");
    }
    // //mysqli_close($conn);
}

if (isset($_POST['edit'])) // when click on Update button
{
    $id_rka = $_POST['id'];
    $unit = $_POST['unit'];
    $auditor = $_POST['auditor'];
    $status = $_POST['status'];
    $tahun = $_POST['tahun'];
    $tanggal = $_POST['tanggal'];
    
    $edit = mysqli_query($conn, "UPDATE tb_rka SET id_unit='$unit' , id_user='$auditor', status='$status', tahun='$tahun', tanggal='$tanggal' WHERE id_rka='$id_rka' ");
    
    if ($edit) {
        // //mysqli_close($conn); // Close connection
        echo "<script>alert('Edit Data Berhasil')</script>";
        header("refresh: 0; url=rka.php");
        exit;
    } else {
        // echo mysqli_error();
        echo "<script>alert('Edit Data Gagal')</script>";
        header("refresh: 0; url=rka.php");
    }
}

$sql = mysqli_query($conn, "SELECT * FROM tb_rka");
$sql_v_data_rka = mysqli_query($conn, "SELECT * FROM v_data_rka");
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");