<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
$query = "DELETE FROM tb_desk WHERE id_rka='$id'";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Hapus Data Desk Berhasil')</script>";
    header("refresh: 0; url=../timeline.php?id=$id");
} else {
    echo "<script>alert('Hapus Data Desk Gagal')</script>";
    header("refresh: 0; url=../timeline.php?id=$id");
}
