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
