<?php
require 'functions/connect.php';
include 'functions/auditor.php';
include 'functions/data_unit.php';
?>

<?php $page = "Data Unit"; ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Unit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="auditor.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Unit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Unit</h3>
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
                <div class="mb-2">
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_unit_tambah">Tambah</button>
                </div>
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Unit</th>
                            <th>Ketua Unit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sql_v_data_unit as $row) :
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row["nama_unit"]; ?></td>
                                <?php
                                $user_unit = $row["nama"];
                                if (!($user_unit == NULL)) {
                                ?>
                                    <td><?= $row["nama"]; ?></td>
                                <?php
                                } else {
                                ?>
                                    <td>Belum Ada</td>
                                <?php
                                }
                                ?>
                                <td>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#modal_unit_edit<?= $row["id_unit"]; ?>" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="functions/unit_delete.php?id=<?= $row["id_unit"] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            include "layouts/modal-unit-edit.php";
                            $no++;
                        endforeach
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "layouts/modal-unit-tambah.php"; ?>
<?php require "layouts/footer.php" ?>