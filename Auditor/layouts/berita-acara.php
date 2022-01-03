<?php
include "../functions/connect.php";
include "../functions/auditor.php";
include "../functions/data_audit.php";

if ($data_berita['status'] == 'Disetujui') {
    $status = 'menerima';
} elseif ($data_berita['status'] == 'Tidak Disetujui') {
    $status = 'menolak';
}

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

        .txt-rght-50 {
            text-align: right;
            padding-right: 50px;
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
                <!-- <td style="width: 20%" rowspan="3" class="bdr bdr-none-bot" style="padding-top: 30px"><img src="../AdminLTE/dist/img/logo_pnc.png" style="width: 100px; height: 100px"></td> -->
                <td style="width: 50%;" rowspan="2" class="bdr"><b>FORM</b></td>
                <td style="width: 15%;" class="txt-lft-20 bdr-none">Kode Dokumen</td>
                <td style="width: 35%;" class="txt-lft bdr-none">:</td>
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
                <!-- <td class="bdr bdr-none-top" style="padding-top: 10px;">
                    <h3><b>SPI</b></h3>
                </td> -->
                <td class="txt-lft-20 bdr-none">Halaman</td>
                <td class="txt-lft bdr-none">:</td>
            </tr>
        </table>
        <br>
        <br>
        <div class="text-center">
            <h3>BERITA ACARA VISITASI</h3>
        </div>
        <br>
        <p>Dengan ini kami dari pihak Auditor Internal :</p>
        <table style="width: 100%;">
            <tr>
                <td style="width: 8%;" class="bdr-none txt-lft">Nama</td>
                <td class="bdr-none">:</td>
                <td class="txt-lft bdr-none"><?= namaUser($auditor1) ?></td>
            </tr>
            <tr>
                <td class="bdr-none txt-lft">Jabatan</td>
                <td class="bdr-none">:</td>
                <td class="txt-lft bdr-none">Auditor</td>
            </tr>
        </table>
        <br>
        <p>Mengadakan final meeting di kantor pihak auditi <b><?= $status ?></b> hasil pemeriksaan yang telah dilaksanakan oleh pihak Auditor.</p>
        <p>Dengan demikian hasil final meeting yang dilakukan antara auditor dan auditi dengan data temuan audit (DTA) terlampir</p>
        <br>
        <table style="width: 100%;">
            <tr>
                <td colspan="2" class="txt-rght-50 bdr-none">Cilacap, <?= tanggal($data_berita['tanggal']) ?></td>
            </tr>
            <tr>
                <td colspan="2" style="height: 20px;" class="bdr-none"></td>
            </tr>
            <tr>
                <td style="width: 50%;" class="bdr-none">Pihak Auditi</td>
                <td class="bdr-none">Pihak Auditor</td>
            </tr>
            <tr>
                <td class="bdr-none">
                    <img src="../../AdminLTE/dist/img/ttd/<?= ttdUser($auditee) ?>" height="100" width="100">
                </td>
                <td class="bdr-none">
                    <img src="../../AdminLTE/dist/img/ttd/<?= ttdUser($auditor1) ?>" height="100" width="100">
                </td>
            </tr>
            <tr>
                <td class="bdr-none"><?= namaUser($auditee) ?></td>
                <td class="bdr-none"><?= namaUser($auditor1) ?></td>
            </tr>
        </table>
    </div>
</body>