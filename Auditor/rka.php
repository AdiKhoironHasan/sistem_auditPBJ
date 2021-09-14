<?php

use function PHPSTORM_META\sql_injection_subst;

session_start();

include_once 'functions/rka_tambah.php';
include 'functions/connect.php';

if (!isset($_SESSION['username'])) {
  header("Location: ../Login/login.php");
}

$sql = mysqli_query($conn, "SELECT * FROM tb_rka");
// $unit = mysqli_query($conn, "SELECT unit.nama_unit AS nama_unit FROM tb_unit AS unit, tb_rencana_kerja AS rka WHERE rka.id_unit = unit.id_unit");
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");
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
          <h1>Rencana Kerja Audit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Rencana Kerja Audit</li>
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
        <h3 class="card-title">Daftar Rencana Kerja Audit</h3>
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
              <th>Auditor</th>
              <th>Status</th>
              <th>Tahun</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($sql as $row) :
            ?>
              <tr>
                <td><?= $no; ?></td>
                <td> <?= $row["id_unit"]; ?> </td>
                <td><?= $row["id_user"]; ?></td>
                <td> <?= $row["status"]; ?> </td>
                <td> <?= $row["tahun"]; ?> </td>
                <td> <?= $row["tanggal"]; ?> </td>
                <td>
                  <div class="text-center">
                    <a href="rka_edit.php?id=<?= $row["id_rka"] ?>" style="color: limegreen;"><i class="far fa-edit"></i></a>
                    <a href="functions/rka_delete.php?id=<?= $row["id_rka"] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                  </div>
                </td>
              </tr>
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

<!-- Modal Tambah -->
<div class="modal fade" id="modal_tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="rka.php" method="post">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label>Unit</label>
            <select type="text" name="unit" class="form-control">
              <?php
              $count = mysqli_num_rows($unit);
              foreach ($unit as $u) :
              ?>
                <option><?= $u["nama_unit"]; ?></option>
              <?php
              endforeach;
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Auditor</label>
            <select type="text" name="auditor" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <select type="text" name="tahun" class="form-control">
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
              <option>2021</option>
              <option>2022</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
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