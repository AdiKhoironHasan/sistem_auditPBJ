<?php
if (isset($_POST['edit'])) // when click on Update button
{
  // $id_unit = $data_u["id_unit"]; //id_unit adalah field
  $id_barang = $_POST['id'];
  $barang = $_POST["nama_barang"];
  $no_kontrak = $_POST['no_kontrak'];
  $tanggal = $_POST['tanggal_kontrak'];
  $nilai = $_POST['nilai_kontrak'];
  $tahun = $_POST['tahun'];

  $edit = mysqli_query($conn, "UPDATE tb_barang SET nama_barang='$barang', no_kontrak='$no_kontrak', tanggal_kontrak='$tanggal', nilai_kontrak='$nilai', tahun_anggaran='$tahun' WHERE id_barang='$id_barang' ");

  if ($edit) {
    // //mysqli_close($conn); // Close connection
    echo "<script>alert('Selamat, Ubah Data Barang berhasil!')</script>";
    header("refresh: 0; url=barang.php");
    exit;
  } else {
    echo mysqli_error($conn);
    // echo "Error: " . $sql . " " . mysqli_error($conn);
    echo ("GAGAL EDIT DATA");
  }
}
