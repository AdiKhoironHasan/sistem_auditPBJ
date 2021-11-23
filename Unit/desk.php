<?php include "functions/connect.php"; ?>
<?php include "functions/unit.php"; ?>
<?php include "functions/desk.php"; ?>

<?php $page = "Data Desk"; ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Desk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="unit.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Audit</li>
                        <li class="breadcrumb-item active"><b>Data Desk</b></li>
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
                <h3 class="card-title">Tabel Data Barang</h3>

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
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_tambah">Tambah</button>
                    <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
                </div>
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Unit</th>
                            <th>Id Desk</th>
                            <th>Id Barang</th>
                            <th>Id RKA</th>
                            <th>Tanggal</th>
                            <th>Nama Penyedia</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        // $count = mysqli_num_rows($unit);
                        foreach ($dataDesk as $row) :
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row["id_unit"]; ?></td>
                                <td><?= $row["id_desk"]; ?></td>
                                <td><?= $row["id_barang"]; ?></td>
                                <td><?= $row["id_rka"]; ?></td>
                                <td><?= $row["tanggal"]; ?></td>
                                <td><?= $row["nama_penyedia"]; ?></td>
                                <td>
                                    <div class="text-center">
                                        <a href="#" style="color: deepskyblue"><i class="fas fa-info-circle"></i></a>
                                        <a href="#" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                                        <a href="#" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            // include "layouts/modal-barang-edit.php";
                            ?>
                        <?php
                            $no++;
                        endforeach
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- <?php require "layouts/modal-barang-tambah.php" ?> -->
<?php require "layouts/footer.php" ?>