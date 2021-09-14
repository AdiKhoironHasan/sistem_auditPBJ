<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
$query= "DELETE FROM tb_rka WHERE id_rka='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location: ../rka.php");
?>