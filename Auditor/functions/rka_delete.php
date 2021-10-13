<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
$query= "DELETE FROM tb_rka WHERE id_rka='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Hapus Data Berhasil')</script>";
header("refresh: 0; url=../rka.php");
?>