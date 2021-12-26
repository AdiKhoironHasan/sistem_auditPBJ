<?php
$id_rka = $_GET['id'];

$data_rka = mysqli_query($conn, "SELECT * FROM v_data_audit WHERE id_rka = $id_rka");
$data_rka = mysqli_fetch_array($data_rka);
$data_ketua_spi = mysqli_query($conn, "SELECT id_user, ttd, nama FROM tb_user WHERE level = 'KETUA SPI'");
$data_ketua_spi = mysqli_fetch_array($data_ketua_spi);

// echo "<pre>" . var_export($data_ketua_spi, true) . "</pre>";
// die();

$unit = $data_rka['id_unit'];
$auditor1 = $data_rka['auditor1'];
$auditor2 = $data_rka['auditor2'];
$auditor3 = $data_rka['auditor3'];
$ketua = $data_ketua_spi['id_user'];
$auditee = $data_rka['id_user'];
$id_barang = $data_rka['id_barang'];
// $ketua_spi = $data_ketua_spi['nama'];
// DATA DESK
$data_desk = mysqli_query($conn, "SELECT * FROM tb_desk WHERE id_rka = $id_rka");
$data_desk = mysqli_fetch_array($data_desk);

if (!empty($data_desk)) {
    $id_desk = $data_desk['id_desk'];
    $data_visit = mysqli_query($conn, "SELECT * FROM tb_visit WHERE id_desk = $id_desk");
    $data_visit = mysqli_fetch_array($data_visit);

    if (!empty($data_visit)) {
        $id_visit = $data_visit['id_visit'];
        $data_berita = mysqli_query($conn, "SELECT * FROM tb_berita WHERE id_visit=$id_visit");
        $data_berita = mysqli_fetch_array($data_berita);
    }
}

function ttdUser($id)
{
    global $conn;
    $data = mysqli_query($conn, "SELECT ttd FROM tb_user WHERE id_user = $id");
    $data = mysqli_fetch_array($data);

    return $data['ttd'];
}
