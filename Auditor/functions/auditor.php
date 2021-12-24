<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
}

if ($_SESSION['level'] == 'Ketua Unit') {
    header("Location: ../404.php?level=Unit/unit.php");
} elseif ($_SESSION['level'] == 'Direktur') {
    header("Location: ../404.php?level=Direktur/direktur.php");
}

$iduser = $_SESSION['id_user'];
$q_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user=$iduser");
$data_user = mysqli_fetch_array($q_user);

function namaUnit($id_unit)
{
    global $conn;
    $q = mysqli_query($conn, "SELECT nama_unit FROM tb_unit WHERE id_unit=$id_unit");
    $data = mysqli_fetch_array($q);

    return $data['nama_unit'];
}

function namaUser($id_user)
{
    global $conn;
    $q = mysqli_query($conn, "SELECT nama FROM tb_user WHERE id_user=$id_user");
    $data = mysqli_fetch_array($q);

    return $data['nama'];
}

function namaBarang($id_barang)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT nama_barang FROM tb_barang WHERE id_barang = $id_barang");
    $data = mysqli_fetch_array($query);

    return $data['nama_barang'];
}
