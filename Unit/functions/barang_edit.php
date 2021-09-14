<?php

use function PHPSTORM_META\sql_injection_subst;

include 'connect.php';

$id = $_GET['id']; // get id through query string

$result = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_barang='$id'"); // select query
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");
$data = mysqli_fetch_array($result); // fetch data

if (isset($_POST['edit'])) // when click on Update button
{
  $u = $_POST["unit"];
  $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

  $id_barang = $_POST['id'];
  $id_unit = $data_u["id_unit"]; //id_unit adalah field
  $barang = $_POST["nama_barang"];
  $no_kontrak = $_POST['no_kontrak'];
  $tanggal = $_POST['tanggal_kontrak'];
  $nilai = $_POST['nilai_kontrak'];
  $tahun = $_POST['tahun'];

  $edit = mysqli_query($conn, "UPDATE tb_barang SET id_unit='$id_unit' , nama_barang='$barang', no_kontrak='$no_kontrak', tanggal_kontrak='$tanggal', nilai_kontrak='$nilai', tahun_anggaran='$tahun' WHERE id_barang='$id_barang' ");

  if ($edit) {
    mysqli_close($conn); // Close connection
    header("location: barang.php"); // redirects to all records page
    exit;
  } else {
    echo mysqli_error($conn);
    // echo "Error: " . $sql . " " . mysqli_error($conn);
    echo ("GAGAL EDIT DATA");
  }
}
