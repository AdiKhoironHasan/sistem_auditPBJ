<?php
include 'connect.php';
 
$namaUnit = $_POST['namaUnit'] ? $_POST['namaUnit'] : '';
 
$sql = "SELECT COUNT(*) AS countUnit FROM v_data_unit WHERE nama_unit = '$namaUnit'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUnit'];
 
echo $count;
 
?>