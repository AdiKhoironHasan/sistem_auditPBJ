<?php

if (isset($_POST['tambah'])) {
    // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
    // $result = mysqli_query($conn, $unit);
    // while ($row = $result -> fetch_assoc()) {
    //     $id_unit =$row['id_unit'];
    // }
    // $unit = $_POST["unit"];
    // $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

    $barang = $_POST['barang'];
    // var_export($barang);
    // die();
    // $unit = $data_u["id_unit"];
    $auditor1 = $_POST['auditor1'];
    $auditor2 = $_POST['auditor2'];
    $auditor3 = $_POST['auditor3'];
    $status = 'Belum Terlaksana';
    $tahun = $_POST['tahun'];
    $tanggal = $_POST['tanggal'];

    // $sql = "INSERT INTO tb_rka VALUES(NULL, '$unit', '$auditor', '$status', '$tahun', '$tanggal')";
    $sql = "INSERT INTO tb_rka (id_barang, auditor1, auditor2, auditor3, status, tahun, tanggal) VALUES('$barang', '$auditor1', '$auditor2', '$auditor3', '$status', '$tahun', '$tanggal')";
    if (mysqli_query($conn, $sql)) {
        // $success    =   "New record created successfully !";
        echo "<script>alert('Tambah Data Berhasil')</script>";
        header("refresh: 0; url=rka.php");
    } else {
        // echo "Error: " . $sql . " " . mysqli_error($conn);
        echo "<script>alert('Tambah Data Gagal')</script>";
        header("refresh: 0; url=rka.php");
    }
    // //mysqli_close($conn);
}

if (isset($_POST['edit'])) // when click on Update button
{
    $id_rka = $_POST['id'];
    $barang = $_POST['barang'];
    $auditor1 = $_POST['auditor1'];
    $auditor2 = $_POST['auditor2'];
    $auditor3 = $_POST['auditor3'];
    $status = $_POST['status'];
    $tahun = $_POST['tahun'];
    $tanggal = $_POST['tanggal'];

    $edit = mysqli_query($conn, "UPDATE tb_rka SET id_barang='$barang' , auditor1='$auditor1', auditor2='$auditor2', auditor3='$auditor3', status='$status', tahun='$tahun', tanggal='$tanggal' WHERE id_rka='$id_rka' ");

    if ($edit) {
        // //mysqli_close($conn); // Close connection
        echo "<script>alert('Edit Data Berhasil')</script>";
        header("refresh: 0; url=rka.php");
        exit;
    } else {
        // echo mysqli_error();
        echo "<script>alert('Edit Data Gagal')</script>";
        header("refresh: 0; url=rka.php");
    }
}

$sql = mysqli_query($conn, "SELECT * FROM tb_rka");
$rka = mysqli_query($conn, "SELECT * FROM v_data_rka");
if (!$rka) {
    $rka = [];
} else {
    if (($rka->num_rows < 1)) {
        $rka = [];
    }
}
// $rkaBelumTerlaksana = mysqli_query($conn, "SELECT * FROM v_data_rka WHERE status='Belum Terlaksana'");
// $rkaTidakTerlaksana = mysqli_query($conn, "SELECT * FROM v_data_rka WHERE status='Tidak Terlaksana'");
// $rkaTerlaksana = mysqli_query($conn, "SELECT * FROM v_data_rka WHERE status='Terlaksana'");
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");

$dataAuditor = mysqli_query($conn, "SELECT id_user, nama FROM tb_user WHERE level='Anggota SPI' OR level='Ketua SPI'");

function NamaAuditor($id)
{
    global $conn;
    $query = "SELECT nama FROM tb_user WHERE id_user=$id";

    $sqlNamaAuditor = mysqli_query($conn, $query);
    $dataNamaAuditor = mysqli_fetch_array($sqlNamaAuditor);
    $namaAuditor = $dataNamaAuditor["nama"];

    return $namaAuditor;
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
    $tgl   = substr($tanggal, 8, 2);

    // membuat variabel result dimana variabel ini membentuk format untuk tanggal Indonesia
    $result = $tgl . " " . $bulanIndo[(int)$bulan - 1] . " " . $tahun;
    return ($result);
}

function sendToTimeline($id, $u, $a1, $a2, $a3, $k, $a, $b)
{
    $data = "id=$id&u=$u&a1=$a1&a2=$a2&a3=$a3&k=$k&a=$a&b=$b";
    return $data;
}

function idKetuaUnit($id_unit)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT id_user FROM tb_unit WHERE id_unit=$id_unit");
    $data = mysqli_fetch_array($query);

    return $data['id_user'];
}

$qKetuaSPI = mysqli_query($conn, "SELECT id_user, nama FROM tb_user WHERE level='Ketua SPI'");
$dataKetuaSPI = mysqli_fetch_array($qKetuaSPI);

function dataBarang($id)
{
    global $conn;

    $q = mysqli_query($conn, "SELECT id_barang, nama_barang FROM tb_barang WHERE id_unit = $id");
    $data = mysqli_fetch_array($q);

    $data;
}
