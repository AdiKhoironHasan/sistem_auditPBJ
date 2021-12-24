<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
}

if ($_SESSION['level'] == 'Ketua SPI') {
    header("Location: ../404.php?level=Auditor/auditor.php");
} elseif ($_SESSION['level'] == 'Anggota SPI') {
    header("Location: ../Auditor/auditor.php?level=Auditor/auditor.php");
} elseif ($_SESSION['level'] == 'Direktur') {
    header("Location: ../Direktur/direktur.php?level=Direktur/direktur.php");
}

$iduser = $_SESSION['id_user'];
$q_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user=$iduser");
$data_user = mysqli_fetch_array($q_user);
