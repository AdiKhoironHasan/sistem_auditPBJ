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

                <form action="#">
                    <input type="hidden" name="id_desk" value="<?= $id_desk ?>">
                    <input type="hidden" name="unit" value="<?= $unit ?>">
                    <input type="hidden" name="auditor1" value="<?= $auditor1 ?>">
                    <input type="hidden" name="auditor2" value="<?= $auditor2 ?>">
                    <input type="hidden" name="auditor3" value="<?= $auditor3 ?>">
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
                            <td class="txt-up"><?= namaUnit($unit) ?></td>
                            <td>**</td>
                            <td>*pengadaan pc untuk pencarian buku perpustakaan*</td>
                        </tr>
                        <tr>
                            <th>MASA MONITORING</th>
                            <th>TANGGAL MONITORING</th>
                            <th>AUDITOR</th>
                        </tr>
                        <tr>
                            <td>*25/04/2021*</td>
                            <td rowspan="3" style="background-color: lightblue;">
                                <input type="text" name="tgl_monitoring" class="forn-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini" onfocus="(this.type='date')">
                            </td>
                            <td class="bdr txt-lft-50 text-capitalize">1. <?= namaUser($auditor1) ?></td>
                        </tr>
                        <tr>
                            <td>sd.</td>
                            <td class="bdr txt-lft-50 text-capitalize">2. <?= namaUser($auditor2) ?></td>
                        </tr>
                        <tr>
                            <td>*30/04/2021*</td>
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
                                <input type="text" name="penyusunan_mutu_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                            <td colspan="3" class="txt-lft-20">REVISI PROGRAM MUTU</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" name="penyusunan_mutu_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="pemeriksaan_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                            <td colspan="3" class="txt-lft-20">PEMERIKSAAN BERSAMA MENGAKIBATKAN PERUBAHAN KONTRAK</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" name="pemeriksaan_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="perubahan_kegiatan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="asuransi_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="vertical-align: text-top;"><b>2</b></td>
                            <td colspan="3" class="txt-lft-20">PENJELASAN MANFAAT SUDAH DI JELASKAN DI DALAM KONTRAK</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="txt-lft-20" style="height: 50px; background-color: lightblue;">
                                <input type="text" name="asuransi_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="pengiriman" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="uji_coba" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="serah_terima" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="denda" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="perpanjangan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
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
                                <input type="text" name="laporan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>CATATAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="catatan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>KRITERIA/PERSYARATAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="kriteria" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>AKAR PENYEBAB</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="akar_penyebab" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>AKIBAT</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="akibat" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>REKOMENDASI</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="rekomendasi" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="tanggapan_auditee" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px; background-color: lightblue;">
                                <textarea name="rencana_perbaikan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                    </table>
                    <table style="width: 100%;" class="bdr-none-top">
                        <tr>
                            <td colspan="2" style="width: 50%;" class="bdr-none-top bdr-none-rght"><b>Pimpinan Auditi</b></td>
                            <!--ketua unit -->
                            <td colspan="2" style="width: 50%;" class="bdr-none-top bdr-none-lft"><b>Ketua Auditor</b></td>
                            <!--auditor 1 -->
                        </tr>
                        <tr>
                            <div style="width: 100%;">
                                <td colspan="2" style="height: 100px;" class="bdr-none-rght">*ttd*</td>
                                <td colspan="2" style="height: 100px;" class="bdr-none-lft">*ttd*</td>
                            </div>
                        </tr>
                        <tr>
                            <td colspan="2" class="bdr-none-rght"><b>*nama*</b></td>
                            <td colspan="2" class="bdr-none-lft"><b>*nama*</b></td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>Direview Oleh</b></td>
                            <!--ketuaspi -->
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">*ttd*</td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>*Rostika Listyaningrum*</b></td>
                        </tr>
                    </table>
                    <!-- <div class="my-3 px-5 text-center">
                        <a href="timeline.php" class="btn btn-primary mx-2">Kembali</a>
                        <input type="submit" name="simpan-visit" class="btn btn-success mx-2" value="Simpan">
                    </div> -->
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