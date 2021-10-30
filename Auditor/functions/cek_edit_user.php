<?php
include 'connect.php';
 
$username = $_POST['username'] ? $_POST['username'] : '';
 
$sql = "SELECT COUNT(*) AS countUsr FROM tb_user WHERE username = '$username'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$count = $row['countUsr'];
 
echo $count;
 
?>