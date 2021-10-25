<?php
session_start();

include 'functions/connect.php';
include 'functions/barang_tambah.php';
include 'functions/barang_edit.php';

$userid = $_SESSION['id_user'];
$q_unit_user = mysqli_query($conn, "SELECT * FROM tb_unit WHERE id_user=$userid");
while ($q_unit_user_row = mysqli_fetch_array($q_unit_user)) {
    $id_unit =  $q_unit_user_row['id_unit'];
};

if (empty($id_unit)) {
    $sql_v_data_barang = [];
} else {
    // $sql = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_unit=$id_unit");
    $sql_v_data_barang = mysqli_query($conn, "SELECT * FROM v_data_barang WHERE id_unit=$id_unit");
}
// $unit = mysqli_query($conn, "SELECT unit.nama_unit AS nama_unit FROM tb_unit AS unit, tb_rencana_kerja AS rka WHERE rka.id_unit = unit.id_unit");
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");
?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blank Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                <h3 class="card-title">Title</h3>

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
                                <td><?= $row["nilai_kontrak"]; ?></td>
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

<!-- Modal Tambah -->
<div class="modal fade" id="modal_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="barang.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data <?= $_SESSION['id_user'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $id = $_SESSION['id_user'];
                    $q_unit_id = mysqli_query($conn, "SELECT * FROM tb_unit WHERE id_user=$id");
                    foreach ($q_unit_id as $q_unit_id_row) :
                    ?>
                        <input type="hidden" name="id_unit" value="<?= $q_unit_id_row["id_unit"]; ?>">
                    <?php
                    endforeach;
                    ?>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontrak</label>
                        <input type="text" name="no_kontrak" class="form-control" placeholder="No.">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <input type="text" name="nilai_kontrak" class="form-control" placeholder="Rp.">
                        <!-- <input type="text" name="nilai_kontrak" id="rupiah" class="form-control" placeholder="Rp."> -->
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
                        <select type="text" name="tahun" class="form-control">
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" name="tambah" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php require "layouts/footer.php" ?>