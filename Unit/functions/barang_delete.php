<?php
require_once 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
$query= "DELETE FROM tb_barang WHERE id_barang='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location: ../barang.php");
?>