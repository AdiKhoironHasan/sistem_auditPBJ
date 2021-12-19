<?php
require 'functions/connect.php';
include 'functions/auditor.php';
include 'functions/desk.php';
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
                    <h1>Data Desk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="auditor.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Desk</li>
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
                <h3 class="card-title">Daftar Data Desk</h3>
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
                            <td rowspan="2" class="bdr"><b>KERTAS KERJA AUDIT</b></td>
                            <td class="txt-lft-20 bdr-none">Tanggal Terbit</td>
                            <td class="txt-lft bdr-none">:</td>
                        </tr>
                        <tr>
                            <td class="bdr bdr-none-top">
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
                            <td>*Perpustakaan*</td>
                            <td>**</td>
                            <td>*pengadaan pc untuk pencarian buku perpustakaan*</td>
                        </tr>
                        <tr>
                            <th>MASA MONITORING</th>
                            <th>TANGGAL MONITORING</th>
                            <th>AUDITOR</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="masa_monitoring_1" class="forn-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini" onfocus="(this.type='date')">
                            </td>
                            <td rowspan="3">
                                <input type="text" name="tgl_monitoring" class="forn-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini" onfocus="(this.type='date')">
                            </td>
                            <td class="bdr txt-lft-50">1. <?= namaUser($auditor1) ?></td>
                        </tr>
                        <tr>
                            <td>s/d.</td>
                            <td class="bdr txt-lft-50">2. <?= namaUser($auditor2) ?></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="masa_monitoring_2" class="forn-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini" onfocus="(this.type='date')">
                            </td>
                            <td class="bdr txt-lft-50">3. <?= namaUser($auditor3) ?></td>
                        </tr>
                    </table>
                    <br>
                    <table style="width: 100%;">
                        <tr>
                            <th style="width: 5%;">NO</th>
                            <th style="width: 35%;">ITEM</th>
                            <th style="width: 45%;">URAIAN</th>
                            <th style="width: 15%;">KODE TEMUAN</th>
                        </tr>
                        <tr>
                            <td colspan="4"><b>PENDANDATANGANAN KONTRAK</b></td>
                        </tr>
                        <tr>
                            <td><b>1</b></td>
                            <td colspan="3" class="txt-lft-20"><b>KONTRAK</b></td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td class="txt-lft-20">TGL SPPBJ</td>
                            <td class="txt-up">
                                <input type="text" name="kontrak_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>b</td>
                            <td class="txt-lft-20">SUBSTANSI KONTRAK</td>
                            <td class="txt-up">
                                <input type="text" name="kontrak_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td>01.04.03</td>
                        </tr>
                        <tr>
                            <td>c</td>
                            <td class="txt-lft-20">TTD KONTRAK OLEH PENYEDIA</td>
                            <td class="txt-up">
                                <input type="text" name="kontrak_3" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>d</td>
                            <td class="txt-lft-20">PERTENTANGAN</td>
                            <td class="txt-up">
                                <input type="text" name="kontrak_4" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 50px;"></td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>PELAKSANAAN KONTRAK PENGADAAN BARANG</b></td>
                        </tr>
                        <tr>
                            <td><b>1</b></td>
                            <td colspan="3" class="txt-lft-20"><b>SURAT PESANAN</b></td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td class="txt-lft-20">TGL SURAT PESANAN</td>
                            <td class="txt-up">
                                <input type="text" name="surat_pesanan_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>b</td>
                            <td class="txt-lft-20">TTD PENYEDIA</td>
                            <td class="txt-up">
                                <input type="text" name="surat_pesanan_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td>01.04.03</td>
                        </tr>
                        <tr>
                            <td>c</td>
                            <td class="txt-lft-20">MATERAI 6000</td>
                            <td class="txt-up">
                                <input type="text" name="surat_pesanan_3" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>d</td>
                            <td class="txt-lft-20">TANGGAL DISETUJUI</td>
                            <td class="txt-up">
                                <input type="text" name="surat_pesanan_4" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <td><b>2</b></td>
                            <td colspan="3" class="txt-lft-20"><b>PENYUSUNAN PROGRAM MUTU</b></td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td class="txt-lft-20">INFORMASI PENGADAAN BARANG</td>
                            <td class="txt-up">
                                <input type="text" name="penyusunan_program_mutu" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td>01.03.04</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 30px;"></td>
                        </tr>
                        <tr>
                            <td><b>3</b></td>
                            <td colspan="3" class="txt-lft-20"><b>PEMERIKSAAN BERSAMA</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="txt-lft-20">PEMERIKSAAN KONDISI LAPANGAN PADA TAHAP AWAL PELAKSANAAN KONTRAK</td>
                            <td class="txt-up">
                                <input type="text" name="pemeriksaan_bersama" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 30px;"></td>
                        </tr>

                        <tr>
                            <td><b>4</b></td>
                            <td colspan="3" class="txt-lft-20"><b>PEMBAYARAN UANG MUKA</b></td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td class="txt-lft-20">BESARAN UANG MUKA</td>
                            <td class="txt-up">
                                <input type="text" name="pembayaran_uang_muka_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>b</td>
                            <td class="txt-lft-20">JAMINAN UANG MUKA</td>
                            <td class="txt-up">
                                <input type="text" name="pembayaran_uang_muka_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 30px;"></td>
                        </tr>

                        <tr>
                            <td><b>5</b></td>
                            <td colspan="3" class="txt-lft-20"><b>UJI COBA BARANG</b></td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td class="txt-lft-20">UJI COBA YANG DILAKUKAN OLEH PENYEDIA</td>
                            <td class="txt-up">
                                <input type="text" name="uji_coba_barang_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td>01.03.04</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 30px;"></td>
                        </tr>

                        <tr>
                            <td><b>6</b></td>
                            <td colspan="3" class="txt-lft-20"><b>SERAH TERIMA BARANG</b></td>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td class="txt-lft-20">BERITA ACARA SERAH</td>
                            <td class="txt-up">
                                <input type="text" name="serah_terima_barang_1" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>b</td>
                            <td class="txt-lft-20">WAKTU PENERIMAAN</td>
                            <td class="txt-up">
                                <input type="text" name="serah_terima_barang_2" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 30px;"></td>
                        </tr>

                        <tr>
                            <td colspan="4"><b>CATATAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <textarea name="catatan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>KRITERIA / PERSYARATAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <textarea name="keriteria" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>AKAR PENYEAB</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <textarea name="akar_penyebab" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>AKIBAT</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <textarea name="akibat" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>REKOMENDASI</b></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="rekomendasi" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <textarea name="tanggapan_auditee" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">
                                <textarea name="rencana_perbaikan" class="form-control form-control-lg border-0 text-center bg-transparent" placeholder="ketik di sini"></textarea>
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
                        </tr>
                        <tr>
                            <td colspan="4" style="height: 100px;">*ttd*</td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>*Rostika Listyaningrum*</b></td>
                        </tr>
                    </table>
                    <div class="row justify-content-center mt-3 rounded-sm mx-1 bg-teal">
                        <div class="col-md-8 text-center d-grid gap-2 my-2">
                            <button type="button" class="btn btn-primary btn-lg">Submit</button>
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