<?php
include "../functions/connect.php";
include "../functions/auditor.php";
include "../functions/data_audit.php";

// $Querydata$data_desk = mysqli_query($conn, "SELECT * FROM tb_desk WHERE id_desk = 2"); //id dari row yang dipilih
// $data_desk = mysqli_fetch_array($Querydata$data_desk);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desk PDF</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../AdminLTE/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="../../AdminLTE/plugins/sweetalert2/sweetalert2.all.min.js"></script>

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
    <!-- 720- -->
</head>

<body>
    <div class="container mt-5 mb-5">
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
                    <h3><b>SPI</b></h3>
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
                <td class="text-uppercase"><?= $data_desk["tipe_monitoring"]; ?></td>
                <td class="text-uppercase"><?= namaBarang($id_barang) ?></td>
            </tr>
            <tr>
                <th>MASA MONITORING</th>
                <th>TANGGAL MONITORING</th>
                <th>AUDITOR</th>
            </tr>
            <tr>
                <td><?= date("d-m-Y", strtotime($data_desk["masa_monitoring_awal"])) ?></td>
                <td rowspan="3"><?= date("d-m-Y", strtotime($data_desk["tgl_monitoring"])) ?></td>
                <td class="bdr txt-lft-50 text-capitalize">1. &nbsp;&nbsp;<?= namaUser($auditor1) ?></td>
            </tr>
            <tr>
                <td>s/d.</td>
                <td class="bdr txt-lft-50 text-capitalize">2. &nbsp;&nbsp;<?= namaUser($auditor2) ?></td>
            </tr>
            <tr>
                <td><?= date("d-m-Y", strtotime($data_desk['masa_monitoring_akhir'])) ?></td>
                <td class="bdr txt-lft-50 text-capitalize">3. &nbsp;&nbsp;<?= namaUser($auditor3) ?></td>
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
                <td class="txt-up"><?= $data_desk['kontrak_1'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>b</td>
                <td class="txt-lft-20">SUBSTANSI KONTRAK</td>
                <td class="txt-up"><?= $data_desk['kontrak_2'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>c</td>
                <td class="txt-lft-20">TTD KONTRAK OLEH PENYEDIA</td>
                <td class="txt-up"><?= $data_desk['kontrak_3'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>d</td>
                <td class="txt-lft-20">PERTENTANGAN</td>
                <td class="txt-up"><?= $data_desk['kontrak_4'] ?></td>
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
                <td class="txt-up"><?= $data_desk['surat_pesanan_1'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>b</td>
                <td class="txt-lft-20">TTD PENYEDIA</td>
                <td class="txt-up"><?= $data_desk['surat_pesanan_2'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>c</td>
                <td class="txt-lft-20">MATERAI 6000</td>
                <td class="txt-up"><?= $data_desk['surat_pesanan_3'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>d</td>
                <td class="txt-lft-20">TANGGAL DISETUJUI</td>
                <td class="txt-up"><?= $data_desk['surat_pesanan_4'] ?></td>
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
                <td class="txt-up"><?= $data_desk['penyusunan_program_mutu'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 30px;"></td>
            </tr>
            <tr>
                <td><b>3</b></td>
                <td colspan="3" class="txt-lft-20"><b>PEMERIKSAAN BERSAMA</b></td>
            </tr>
            <tr>
                <td>a</td>
                <td class="txt-lft-20">PEMERIKSAAN KONDISI LAPANGAN PADA TAHAP AWAL PELAKSANAAN KONTRAK</td>
                <td class="txt-up"><?= $data_desk['pemeriksaan_bersama'] ?></td>
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
                <td class="txt-up"><?= $data_desk['pembayaran_uang_muka_1'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>b</td>
                <td class="txt-lft-20">JAMINAN UANG MUKA</td>
                <td class="txt-up"><?= $data_desk['pembayaran_uang_muka_2'] ?></td>
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
                <td class="txt-up"><?= $data_desk['uji_coba_barang'] ?></td>
                <td></td>
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
                <td class="txt-up"><?= $data_desk['serah_terima_barang_1'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td>b</td>
                <td class="txt-lft-20">WAKTU PENERIMAAN</td>
                <td class="txt-up"><?= $data_desk['serah_terima_barang_2'] ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 30px;"></td>
            </tr>

            <tr>
                <td colspan="4"><b>CATATAN</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk['catatan'] ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>KRITERIA / PERSYARATAN</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk["kriteria"]; ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>AKAR PENYEAB</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk["akar_penyebab"]; ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>AKIBAT</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk["akibat"]; ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>REKOMENDASI</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk["rekomendasi"]; ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>TANGGAPAN AUDITEE</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk["tanggapan_auditee"]; ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>RENCANA PERBAIKAN</b></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 100px;"><?= $data_desk["rencana_perbaikan"]; ?></td>
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
                        <img src="../../AdminLTE/dist/img/ttd/<?= ttdUser($auditee) ?>" height="100" width="100">
                    </td>
                    <td colspan="2" style="height: 100px;" class="bdr-none-lft">
                        <img src="../../AdminLTE/dist/img/ttd/<?= ttdUser($auditor1) ?>" height="100" width="100">
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
                    <img src="../../AdminLTE/dist/img/ttd/<?= $data_ketua_spi['ttd'] ?>" height="100" width="100">
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-capitalize"><b><?= namaUser($ketua) ?></b></td>
            </tr>
        </table>
    </div>
</body>
<!-- <script>
    window.print();
</script> -->

</html>