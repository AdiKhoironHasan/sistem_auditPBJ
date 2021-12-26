<?php
include 'data_audit.php';

$cek_rka = mysqli_query($conn, "SELECT * FROM tb_rka WHERE id_rka=$id_rka");
$data_rka = mysqli_fetch_array($cek_rka);

$cek_desk = mysqli_query($conn, "SELECT id_desk FROM tb_desk WHERE id_rka = $id_rka");
$data_desk = mysqli_fetch_array($cek_desk);
if (!empty($data_desk)) {
    $desk_tambah = 'disabled';
    $desk_ubah = '';
    $desk_cetak = '';
    $desk_keterangan = 'data sudah di isi';
    $desk_icon = 'fa-check-circle';
    $desk_color = 'success';
    $id_desk = $data_desk['id_desk'];
    $visit_tambah = '';
} else {
    $visit_tambah = 'disabled';
    $desk_tambah = '';
    $desk_ubah = 'disabled';
    $desk_cetak = 'disabled';
    $desk_keterangan = 'data belum di isi';
    $desk_icon = 'fa-exclamation-triangle';
    $desk_color = 'warning';
    $id_desk = 0;
}

$cek_visit = mysqli_query($conn, "SELECT id_visit FROM tb_visit WHERE id_desk = $id_desk");
$data_visit = mysqli_fetch_array($cek_visit);
if (!empty($data_visit)) {
    $visit_tambah = 'disabled';
    $visit_ubah = '';
    $visit_cetak = '';
    $visit_keterangan = 'data sudah di isi';
    $visit_icon = 'fa-check-circle';
    $visit_color = 'success';
    $id_visit = $data_visit['id_visit'];
} else {
    $visit_ubah = 'disabled';
    $visit_cetak = 'disabled';
    $visit_keterangan = 'data belum di isi';
    $visit_icon = 'fa-exclamation-triangle';
    $visit_color = 'warning';
    $id_visit = 0;
}

$cek_berita = mysqli_query($conn, "SELECT id_berita, tanggal FROM tb_berita WHERE id_visit=$id_visit");
$data_berita = mysqli_fetch_array($cek_berita);
if (!empty($data_berita)) {
    $konfirmasi_icon = 'fa-check-circle';
    $konfirmasi_button = 'disabled';
    $konfirmasi_status = 'Data sudah di konfirmasi';
    $konfirmasi_color = 'success';
    $berita_tgl = $data_berita['tanggal'];
    $berita_status = 'Berita acara sudah ada';
    $konfirmasi_cetak = '';
} else {
    $konfirmasi_icon = 'fa-exclamation-triangle';
    $konfirmasi_button = '';
    $konfirmasi_status = 'Data belum di konfirmasi';
    $konfirmasi_color = 'warning';
    $berita_tgl = 'Belum Selesai';
    $berita_status = 'Berita acara belum ada';
    $berita_cetak = 'disabled';
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

if (isset($_POST['audit-terima'])) {
    $id_visit = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    mysqli_autocommit($conn, FALSE);

    mysqli_query($conn, "INSERT INTO tb_berita VALUES (NULL, $id_visit, '$tanggal', 'Disetujui')");
    mysqli_query($conn, "UPDATE tb_rka SET status='Terlaksana' WHERE id_rka=$id_rka");

    if (!mysqli_commit($conn)) {
        echo "<script>alert('Gagal Melakukan Konfirmasi')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    } else {
        echo "<script>alert('Berhasil Melakukan Konfirmasi')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    }
}

if (isset($_POST['audit-tolak'])) {
    $id_visit = $_POST['id'];
    $tanggal = $_POST['tanggal'];

    mysqli_autocommit($conn, FALSE);

    mysqli_query($conn, "INSERT INTO tb_berita VALUES (NULL, $id_visit, '$tanggal', 'Tidak Disetujui')");
    mysqli_query($conn, "UPDATE tb_rka SET status='Terlaksana' WHERE id_rka=$id_rka");

    if (!mysqli_commit($conn)) {
        echo "<script>alert('Gagal Melakukan Konfirmasi')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    } else {
        echo "<script>alert('Berhasil Melakukan Konfirmasi')</script>";
        header("refresh: 0; url=timeline.php?id=" . $id_rka . "");
    }
}
