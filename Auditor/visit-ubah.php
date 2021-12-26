<?php
require 'functions/connect.php';
include 'functions/auditor.php';
include 'functions/visit.php';
?>

<?php $page = "RKA"; ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<style>
    th {
        background-color: darkgrey;
    }

    td,
    th,
    .ctr {
        text-align: center;
        border: solid black;
    }

    .bdr {
        border: solid black;
    }

    .bdr-none {
        border: none;
    }

    .txt-lft-50 {
        text-align: left;
        padding-left: 50px;
    }

    .txt-lft-20 {
        text-align: left;
        padding-left: 20px;
    }

    .txt-lft-50 {
        text-align: left;
        padding-left: 50px;
    }

    .txt-lft {
        text-align: left;
    }

    .txt-up {
        text-transform: uppercase;
    }

    .txt-cap {
        text-transform: capitalize;
    }

    .bdr-none-top {
        border-top: none;
    }

    .bdr-none-bot {
        border-bottom: none;
    }

    .bdr-none-lft {
        border-left: none;
    }

    .bdr-none-rght {
        border-right: none;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Visit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="auditor.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Visit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Data Visit</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 20%" rowspan="3" class="bdr bdr-none-bot" style="padding-top: 30px"><img src="https://pnc.ac.id/wp-content/uploads/2019/09/LOGO-PNC-2-300x300.png" style="width: 100px; height: 100px"></td>
                            <td style="width: 40%;" rowspan="2" class="bdr"><b>FORM</b></td>
                            <td style="width: 15%;" class="txt-lft-20 bdr-none">Kode Dokumen</td>
                            <td style="width: 25%;" class="txt-lft bdr-none">:</td>
                        </tr>
                        <tr>
                            <td class="txt-lft-20 bdr-none">Revisi</td>
                            <td class="txt-lft bdr-none">:</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="bdr"><b>DESKRIPSI TEMUAN MONEV (DTV)</b></td>
                            <td class="txt-lft-20 bdr-none">Tanggal Terbit</td>
                            <td class="txt-lft bdr-none">:</td>
                        </tr>
                        <tr>
                            <td class="bdr bdr-none-top" style="padding-top: 10px;">
                                <h3><b>APIP</b></h3>
                            </td>
                            <td class="txt-lft-20 bdr-none">Halaman</td>
                            <td class="txt-lft bdr-none">:</td>
                        </tr>
                    </table>
                    <br>
                    <table style="width: 100%;">
                        <tr>
                            <th style="width: 20%;">UNIT KERJA</th>
                            <th style="width: 40%;">TIPE MONITORING</th>
                            <th style="width: 40%;">PAKET PEKERJAAN</th>
                        </tr>
                        <tr>
                            <td class="text-uppercase"><?= namaUnit($unit) ?></td>
                            <td style="background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['tipe_monitoring'] ?>" name="tipe_monitoring" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td class="text-uppercase"><?= namaBarang($id_barang) ?></td>
                        </tr>
                        <tr>
                            <th>MASA MONITORING</th>
                            <th>TANGGAL MONITORING</th>
                            <th>AUDITOR</th>
                        </tr>
                        <tr>
                            <td><?= date("d-m-Y", strtotime($data_visit["masa_monitoring_awal"])) ?></td>
                            <td rowspan="3" style="background-color: lightblue;">
                                <input type="text" value="<?= $data_visit["tgl_monitoring"] ?>" name="tgl_monitoring" class="forn-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini" onfocus="(this.type='date')">
                            </td>
                            <td class="bdr txt-lft-50 text-capitalize">1. <?= namaUser($auditor1) ?></td>
                        </tr>
                        <tr>
                            <td>s/d.</td>
                            <td class="bdr txt-lft-50 text-capitalize">2. <?= namaUser($auditor2) ?></td>
                        </tr>
                        <tr>
                            <td><?= date("d-m-Y", strtotime($data_visit['masa_monitoring_akhir'])) ?></td>
                            <td class="bdr txt-lft-50 text-capitalize">3. <?= namaUser($auditor3) ?></td>
                        </tr>
                    </table>
                    <br>

                    <table style="width: 100%;">
                        <tr>
                            <td colspan="4"><b>PENYUSUNAN PROGRAM MUTU</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">KETERLIBATAN UNIT KERJA DALAM PENYUSUNAN MUTU</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue; ">
                                <input type="text" value="<?= $data_visit['penyusunan_mutu_1'] ?>" name="penyusunan_mutu_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                            <td colspan="3" class="txt-lft-20">REVISI PROGRAM MUTU</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['penyusunan_mutu_2'] ?>" name="penyusunan_mutu_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>PEMERIKSAAN BERSAMA</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">PEMERIKSAAN KONDISI LAPANGAN PADA TAHAP AWAL PERUBAHAN KONTRAK</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['pemeriksaan_1'] ?>" name="pemeriksaan_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                            <td colspan="3" class="txt-lft-20">PEMERIKSAAN BERSAMA MENGAKIBATKAN PERUBAHAN KONTRAK</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['pemeriksaan_2'] ?>" name="pemeriksaan_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>PERUBAHAN KEGIATAN PERUBAHAN</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">PERUBAHAN KEGIATAN</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['perubahan_kegiatan'] ?>" name="perubahan_kegiatan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>ASURANSI</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">UNIT KERJA MEMERIKSA BARANG YANG DIKIRIM OLEH PENYEDIA</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['asuransi_1'] ?>" name="asuransi_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                            <td colspan="3" class="txt-lft-20">PENJELASAN MANFAAT SUDAH DI JELASKAN DI DALAM KONTRAK</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['asuransi_2'] ?>" name="asuransi_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>PENGIRIMAN BARANG OLEH PENYEDIA</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">PENGIRIMAN BARANG OLEH PENYEDIA</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['pengiriman'] ?>" name="pengiriman" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>UJI COBA BARANG</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">UJI COBA SETELAH DIKIRIM</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['uji_coba'] ?>" name="uji_coba" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>SERAH TERIMA BARANG</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">SERAH TERIMA BARANG</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['serah_terima'] ?>" name="serah_terima" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>DENDA DAN GANTI RUGI</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">DENDA DAN GANTI RUGI</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['denda'] ?>" name="denda" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>PERPANJANGAN WAKTU PELAKANAAN PEKERJAAN</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">PERPANJANGAN WAKTU PELAKANAAN PEKERJAAN</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['perpanjangan'] ?>" name="perpanjangan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>LAPORAN HASIL KEGIATAN</b></td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>1</b></td>
                            <td colspan="3" class="txt-lft-20">LAPORAN HASIL KEGIATAN</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" value="<?= $data_visit['laporan'] ?>" name="laporan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>CATATAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="catatan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['catatan'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>KRITERIA/PERSYARATAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="kriteria" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['kriteria'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>AKAR PENYEBAB</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="akar_penyebab" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['akar_penyebab'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>AKIBAT</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="akibat" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['akibat'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>REKOMENDASI</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="rekomendasi" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['rekomendasi'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="tanggapan_auditee" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['tanggapan_auditee'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="rencana_perbaikan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"><?= $data_visit['rencana_perbaikan'] ?></textarea>
                            </td>
                        </tr>
                    </table>
                    <table style="width: 100%;" class="bdr-none-top">
                        <tr>
                            <td colspan="2" style="width: 50%;" class="bdr-none-top bdr-none-rght"><b>Pimpinan Auditi</b></td>
                            <td colspan="2" style="width: 50%;" class="bdr-none-top bdr-none-lft"><b>Ketua Auditor</b></td>
                        </tr>
                        <tr>
                            <div style="width: 100%;">
                                <td colspan="2" style="height: 100px;" class="bdr-none-rght">
                                    <img src="../AdminLTE/dist/img/ttd/<?= ttdUser($auditee) ?>" height="100" width="100">
                                </td>
                                <td colspan="2" style="height: 100px;" class="bdr-none-lft">
                                    <img src="../AdminLTE/dist/img/ttd/<?= ttdUser($auditor1) ?>" height="100" width="100">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <td colspan="2" class="bdr-none-rght text-capitalize"><b><?= namaUser($auditee) ?></b></td>
                            <td colspan="2" class="bdr-none-lft text-capitalize"><b><?= namaUser($auditor1) ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>Direview Oleh</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <img src="../AdminLTE/dist/img/ttd/<?= $data_ketua_spi['ttd'] ?>" height="100" width="100">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-capitalize"><b><?= namaUser($ketua) ?></b></td>
                        </tr>
                    </table>
                    <div class="row justify-content-center mt-3 rounded-sm mx-1" style="background-color: #ADD8E6;">
                        <div class="col-md-8 text-center d-grid gap-2 my-2">
                            <a href="timeline.php?id=<?= $id_rka ?>" class="btn btn-primary btn-lg mx-2">Kembali</a>
                            <input type="submit" name="ubah" class="btn btn-success btn-lg mx-2" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require "layouts/footer.php" ?>