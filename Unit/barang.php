<?php include "functions/connect.php"; ?>
<?php include "functions/unit.php"; ?>
<?php include "functions/barang.php"; ?>

<?php $page = "Paket Barang"; ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="unit.php">Home</a></li>
                        <li class="breadcrumb-item active">Paket Barang</li>
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
                            <th>Unit</th>
                            <th>Nama Barang</th>
                            <th>No Kontrak</th>
                            <th>Tanggal</th>
                            <th>Nilai Kontrak</th>
                            <th>Tahun Anggaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        // $count = mysqli_num_rows($unit);
                        foreach ($sql_v_data_barang as $row) :
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row["nama_unit"]; ?></td>
                                <td><?= $row["nama_barang"]; ?></td>
                                <td><?= $row["no_kontrak"]; ?></td>
                                <td><?= $row["tanggal_kontrak"]; ?></td>
                                <td><?= rupiah($row["nilai_kontrak"]); ?></td>
                                <td><?= $row["tahun_anggaran"]; ?></td>
                                <td>
                                    <div class="text-center">
                                        <a href="#" style="color: deepskyblue"><i class="fas fa-info-circle"></i></a>
                                        <a href="#modal_barang_edit<?= $row["id_barang"]; ?>" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                                        <a href="functions/barang_delete.php?id=<?= $row["id_barang"] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            include "layouts/modal-barang-edit.php";
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

<?php require "layouts/modal-barang-tambah.php" ?>
<?php require "layouts/footer.php" ?>