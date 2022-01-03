<?php
if (isset($_POST['tambah'])) {
  // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
  // $result = mysqli_query($conn, $unit);
  // while ($row = $result -> fetch_assoc()) {
  //     $id_unit =$row['id_unit'];
  // }
  // $u = $_POST["unit"];
  // $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));
  $sNilai = $_POST['nilai_kontrak'];


  $nilai = (int) filter_var($sNilai, FILTER_SANITIZE_NUMBER_INT);
  // echo ("The extracted numbers are: $int \n");

  $unit = $_POST["id_unit"];
  $barang = $_POST["nama_barang"];
  $no_kontrak = $_POST['no_kontrak'];
  $tanggal = $_POST['tanggal'];
  $tahun = $_POST['tahun'];

  $sql = "INSERT INTO tb_barang VALUES(NULL, '$unit', '$barang', '$no_kontrak', '$tanggal', '$nilai', '$tahun')";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Selamat, Tambah Barang berhasil..!')</script>";
    header("refresh: 0; url=barang.php");
  } else {
    echo "<script>alert('Tambah data barang gagal..!')</script>";
    header("refresh: 0; url=barang.php");
    // echo "Error: " . $sql . " " . mysqli_error($conn);

  }
  // //mysqli_close($conn);
}

if (isset($_POST['edit'])) // when click on Update button
{
  // $id_unit = $data_u["id_unit"]; //id_unit adalah field
  $id_barang = $_POST['id'];
  $barang = $_POST["nama_barang"];
  $no_kontrak = $_POST['no_kontrak'];
  $tanggal = $_POST['tanggal_kontrak'];

  $sNilai = $_POST['nilai_kontrak'];


  $nilai = (int) filter_var($sNilai, FILTER_SANITIZE_NUMBER_INT);

  $tahun = $_POST['tahun'];

  $edit = mysqli_query($conn, "UPDATE tb_barang SET nama_barang='$barang', no_kontrak='$no_kontrak', tanggal_kontrak='$tanggal', nilai_kontrak='$nilai', tahun_anggaran='$tahun' WHERE id_barang='$id_barang' ");

  if ($edit) {
    // //mysqli_close($conn); // Close connection
    echo "<script>alert('Selamat, Ubah Data Barang berhasil!')</script>";
    header("refresh: 0; url=barang.php");
    exit;
  } else {
    // echo mysqli_error($conn);
    // echo "Error: " . $sql . " " . mysqli_error($conn);
    echo ("GAGAL EDIT DATA");
  }
}

$q_unit_user = mysqli_query($conn, "SELECT * FROM tb_unit WHERE id_user=$iduser");
$q_unit_user_row = mysqli_fetch_array($q_unit_user);
$id_unit = $q_unit_user_row['id_unit'];

if (empty($id_unit)) {
  $sql_v_data_barang = [];
} else {
  // $sql = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_unit=$id_unit");
  $sql_v_data_barang = mysqli_query($conn, "SELECT * FROM v_data_barang WHERE id_unit=$id_unit");
}
// $unit = mysqli_query($conn, "SELECT unit.nama_unit AS nama_unit FROM tb_unit AS unit, tb_rencana_kerja AS rka WHERE rka.id_unit = unit.id_unit");
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");

function rupiah($angka)
{

  $hasil_rupiah = "Rp. " . number_format($angka, 0, ',', '.');
  return $hasil_rupiah;
}
