<?php
require_once 'functions/user_edit.php';
require_once 'functions/user_tambah.php';
require 'functions/connect.php';
include_once 'functions/f_auditor.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
}

$sqlOn = mysqli_query($conn, "SELECT * FROM tb_user WHERE status='Aktif'");
$sqlOff = mysqli_query($conn, "SELECT * FROM tb_user WHERE status='Tidak Aktif' || status='Mendaftar'");

?>

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
                    <h1>Data User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
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
                <h3 class="card-title">Data User Aktif</h3>
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
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_user_tambah">Tambah</button>
                </div>
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sqlOn as $row) :
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["username"]; ?></td>
                                <td><?= $row["level"]; ?></td>
                                <td><?= $row["status"]; ?></td>
                                <td>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#modal_user<?= $row["id_user"]; ?>" data-toggle="modal" style="color: deepskyblue"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="col-0">
                                                <a href="#modal_user_edit<?= $row["id_user"]; ?>" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="functions/user_delete.php?id=<?= $row["id_user"] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php include "layouts/modal-user.php"; ?>
                            <?php include "layouts/modal-user-edit.php"; ?>
                        <?php
                            $no++;
                        endforeach
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data User Tidak Aktif</h3>
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
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($sqlOff as $row) :
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row["nama"]; ?></td>
                                <td><?= $row["username"]; ?></td>
                                <td><?= $row["level"]; ?></td>
                                <td><?= $row["status"]; ?></td>
                                <td>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#modal_user<?= $row["id_user"]; ?>" data-toggle="modal" style="color: deepskyblue"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="col-0">
                                                <a href="#modal_user_edit<?= $row["id_user"]; ?>" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="functions/user_delete.php?id=<?= $row["id_user"] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php include "layouts/modal-user.php"; ?>
                            <?php include "layouts/modal-user-edit.php"; ?>
                        <?php
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

<?php include "layouts/modal-user-tambah.php" ?>
<?php require "layouts/footer.php" ?>