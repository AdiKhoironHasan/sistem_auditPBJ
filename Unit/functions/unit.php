<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
}

$iduser = $_SESSION['id_user'];
$q_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user=$iduser");
$data_user = mysqli_fetch_array($q_user);
