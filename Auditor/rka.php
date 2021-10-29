<?php
require 'functions/connect.php';
include 'functions/auditor.php';
include 'functions/rka.php';

// $unit = mysqli_query($conn, "SELECT unit.nama_unit AS nama_unit FROM tb_unit AS unit, tb_rencana_kerja AS rka WHERE rka.id_unit = unit.id_unit");
?>

<?php $page = "RKA"; ?>
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
            <li class="breadcrumb-item"><a href="auditor.php">Home</a></li>
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
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_rka_tambah">Tambah</button>
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
            foreach ($sql_v_data_rka as $row) :
            ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row["nama_unit"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><span class="badge badge-<?php if ($row['status'] == "Terlaksana"){echo "success";}elseif($row['status'] == "Tidak Terlaksana"){echo "danger";}elseif($row['status'] == "Belum Terlaksana"){echo "primary";} ?>"><?= $row["status"]; ?></span></td>
                <td><?= $row["tahun"]; ?></td>
                <td><?= tanggal($row["tanggal"]); ?></td>
                <td>
                  <div class="text-center">
                    <a href="#modal_rka_edit<?= $row["id_rka"] ?>" data-toggle="modal" style="color: limegreen;"><i class="far fa-edit"></i></a>
                    <a href="functions/rka_delete.php?id=<?= $row["id_rka"] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" style="color: crimson;"><i class="far fa-trash-alt"></i></a>
                  </div>
                </td>
              </tr>
            <?php
              include "layouts/modal-rka-edit.php";
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

<?php include "layouts/modal-rka-tambah.php" ?>
<?php require "layouts/footer.php" ?>