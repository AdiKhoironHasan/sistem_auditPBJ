<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
$query= "DELETE FROM tb_user WHERE id_user='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("refresh: 0; url=../data_user.php");
?>