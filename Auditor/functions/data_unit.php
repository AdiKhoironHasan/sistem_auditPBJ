<?php

if (isset($_POST['edit'])) {

    $ketua = $_POST['ketua_unit'];

    $id_unit = $_POST['id'];
    $nama = $_POST['nama_unit'];
    $q_ketua = mysqli_fetch_array(mysqli_query($conn, "SELECT id_user FROM tb_user WHERE nama = '$ketua'"));
    $id_ketua = $q_ketua['id_user'];
    $sql = "UPDATE tb_unit SET id_user=$id_ketua, nama_unit='$nama' WHERE id_unit=$id_unit";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Edit unit berhasil diedit !')</script>";
        header("refresh: 0; url=data_unit.php");
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    // //mysqli_close($conn);
}


if (isset($_POST['tambah'])) {

    $ketua = $_POST['ketua_unit'];

    $nama = $_POST['nama_unit'];
    $q_ketua = mysqli_fetch_array(mysqli_query($conn, "SELECT id_user FROM tb_user WHERE nama = '$ketua'"));
    $id_ketua = $q_ketua['id_user'];
    $sql = "INSERT INTO tb_unit VALUES(NULL, '$id_ketua', '$nama')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Unit baru berhasil ditambahkan !')</script>";
        header("refresh: 0; url=data_unit.php");
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    //mysqli_close($conn);
}


$sql = mysqli_query($conn, "SELECT * FROM tb_unit");
$sql_v_data_unit = mysqli_query($conn, "SELECT * FROM v_data_unit");
