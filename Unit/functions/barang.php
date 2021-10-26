<?php
if (isset($_POST['tambah'])) {
    // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
    // $result = mysqli_query($conn, $unit);
    // while ($row = $result -> fetch_assoc()) {
    //     $id_unit =$row['id_unit'];
    // }
    // $u = $_POST["unit"];
    // $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

    $unit = $_POST["id_unit"];
    $barang = $_POST["nama_barang"];
    $no_kontrak = $_POST['no_kontrak'];
    $tanggal = $_POST['tanggal'];
    $nilai = $_POST['nilai_kontrak'];
    $tahun = $_POST['tahun'];

    $sql = "INSERT INTO tb_barang VALUES(NULL, '$unit', '$barang', '$no_kontrak', '$tanggal', '$nilai', '$tahun')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Selamat, Tambah Barang berhasil!')</script>";
        header("refresh: 0; url=barang.php");
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
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
