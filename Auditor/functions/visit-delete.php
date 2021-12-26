<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
$id_desk = $_GET['idd'];

// var_export($id_visit) && die();
// query SQL untuk insert data
$query = "DELETE FROM tb_visit WHERE id_desk='$id_desk'";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Hapus Data Visit Berhasil')</script>";
    header("refresh: 0; url=../timeline.php?id=$id");
} else {
    echo "<script>alert('Hapus Data Visit Gagal')</script>";
    header("refresh: 0; url=../timeline.php?id=$id");
}
