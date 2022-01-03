<?php
include 'functions/connect.php';
include 'functions/unit.php';
include 'functions/audit.php';
?>

<?php $page = "Data Audit"; ?>
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
          <h1>Data Audit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="auditor.php">Home</a></li>
            <li class="breadcrumb-item active">Data Audit</li>
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
        <h3 class="card-title">Daftar Data Audit</h3>
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
              <th>Paket Barang</th>
              <th>Auditor 1</th>
              <th>Auditor 2</th>
              <th>Auditor 3</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($audit as $row) :
            ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row["nama_barang"]; ?></td>
                <td><?= namaUser($row["auditor1"]); ?></td>
                <td><?= namaUser($row["auditor2"]); ?></td>
                <td><?= namaUser($row["auditor3"]); ?></td>
                <td><span class="badge badge-<?php if ($row['status'] == "Terlaksana") {
                                                echo "success";
                                              } elseif ($row['status'] == "Tidak Terlaksana") {
                                                echo "danger";
                                              } elseif ($row['status'] == "Belum Terlaksana") {
                                                echo "primary";
                                              } ?>"><?= $row["status"]; ?></span></td>
                <td>
                  <div class="text-center">
                    <a href="timeline.php?id=<?= $row["id_rka"] ?>"><i class="fas fa-info-circle" style="color: deepskyblue;"></i></a>
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
<?php require "layouts/footer.php" ?>