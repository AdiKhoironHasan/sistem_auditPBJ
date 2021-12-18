<?php
$id_rka = $_GET['id_rka'];
$cek_rka = mysqli_query($conn, "SELECT * FROM tb_rka WHERE id_rka=$id_rka");
$data_rka = mysqli_fetch_array($cek_rka);
$id = $data_rka['id_rka'];
$u = $data_rka['id_unit'];
$a1 = $data_rka['auditor1'];
$a2 = $data_rka['auditor2'];
$a3 = $data_rka['auditor3'];

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

$cek_berita = mysqli_query($conn, "SELECT id_lha, tanggal FROM tb_lha WHERE id_visit=$id_visit");
$data_berita = mysqli_fetch_array($cek_berita);
if (!empty($data_berita)) {
    $berita_cetak = '';
    $berita_color = 'success';
    $berita_icon = 'fa-check-circle';
    $berita_keterangan = 'berita acara dapat di cetak';
    // $rka_status = 'RKA selesai di laksanakan';
    // $rka_icon = 'fa-check-circle';
    // $rka_color = 'success';
} else {
    $berita_cetak = 'disabled';
    $berita_color = 'warning';
    $berita_icon = 'fa-exclamation-triangle';
    $berita_keterangan = 'berita acara tidak dapat di cetak';
    // $rka_status = 'RKA tidak di laksanakan';
    // $rka_icon = 'fa-times-circle';
    // $rka_color = 'danger';
}

function sendToVisit($id, $u, $a1, $a2, $a3)
{
    $data = "id=$id&u=$u&a1=$a1&a2=$a2&a3=$a3";
    return $data;
}
