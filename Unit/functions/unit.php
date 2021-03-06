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


function namaUser($id_user)
{
    global $conn;
    $q = mysqli_query($conn, "SELECT nama FROM tb_user WHERE id_user=$id_user");
    $data = mysqli_fetch_array($q);

    return $data['nama'];
}

function tanggal($tanggal)
{
    // membuat sebuah variabel dengan nama bulanIndo dimana akan memuat array dari nama-nama bulan Indonesia mulai dari Januari sampai Desember
    $bulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    // membuat variabel dengan nama tahun dimana mengambil empet digit pertama dari format Date yaitu tahun
    $tahun = substr($tanggal, 0, 4);

    // membuat variabel dengan nama bulan dimana mengambil dua digit mulai dari digit ke lima dari format Date yaitu bulan
    $bulan = substr($tanggal, 5, 2);

    // membuat variabel dengan nama tgl dimana mengambil dua digit mulai dari digit ke delapan dari format Date yaitu tanggal
    $tgl = substr($tanggal, 8, 2);

    // membuat variabel result dimana variabel ini membentuk format untuk tanggal Indonesia
    $result = $tgl . " " . $bulanIndo[(int)$bulan - 1] . " " . $tahun;
    return ($result);
}
function namaUnit($id_unit)
{
    global $conn;
    $q = mysqli_query($conn, "SELECT nama_unit FROM tb_unit WHERE id_unit=$id_unit");
    $data = mysqli_fetch_array($q);

    return $data['nama_unit'];
}
function namaBarang($id_barang)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT nama_barang FROM tb_barang WHERE id_barang = $id_barang");
    $data = mysqli_fetch_array($query);

    return $data['nama_barang'];
}


function sendToDesk($id, $u, $a1, $a2, $a3, $k, $a, $b)
{
    $data = "id=$id&u=$u&a1=$a1&a2=$a2&a3=$a3&k=$k&a=$a&b=$b";
    return $data;
}

function sendToVisit($id, $u, $a1, $a2, $a3, $b)
{
    $data = "id=$id&u=$u&a1=$a1&a2=$a2&a3=$a3&b=$b";
    return $data;
}
