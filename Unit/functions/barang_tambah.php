<?php
require_once "connect.php";
$success  = "";
if (isset($_POST['tambah'])) {
    // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
    // $result = mysqli_query($conn, $unit);
    // while ($row = $result -> fetch_assoc()) {
    //     $id_unit =$row['id_unit'];
    // }
    $u = $_POST["unit"];
    $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

    $unit = $data_u["id_unit"];
    $no_kontrak = $_POST['no_kontrak'];
    $tanggal = $_POST['tanggal'];
    $nilai = $_POST['nilai_kontrak'];
    $tahun = $_POST['tahun'];

    $sql = "INSERT INTO tb_paket_barang VALUES(NULL, '$unit', '$no_kontrak', '$tanggal', '$nilai', '$tahun')";
    if (mysqli_query($conn, $sql)) {
        $success    =   "New record created successfully !";
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
