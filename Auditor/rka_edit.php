<?php

use function PHPSTORM_META\sql_injection_subst;

include '../../functions/connect.php';

$id = $_GET['id']; // get id through query string

$result = mysqli_query($conn, "SELECT * FROM tb_rencana_kerja WHERE id_rka='$id'"); // select query

$data = mysqli_fetch_array($result); // fetch data

if (isset($_POST['edit'])) // when click on Update button
{
  $id_rka = $_POST['id'];
  $unit = $_POST['unit'];
  $auditor = $_POST['auditor'];
  $status = $_POST['status'];
  $tahun = $_POST['tahun'];
  $tanggal = $_POST['tanggal'];

  $edit = mysqli_query($conn, "UPDATE tb_rencana_kerja SET id_unit='$unit' , id_auditor='$auditor', status='$status', tahun='$tahun', tanggal='$tanggal' WHERE id_rka='$id_rka' ");

  if ($edit) {
    mysqli_close($conn); // Close connection
    header("location:rka.php"); // redirects to all records page
    exit;
  } else {
    // echo mysqli_error();
    echo ("GAGAL TAMBAH DATA");
  }
}
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
        <h3 class="card-title">Edit Data Rencana Kerja Audit</h3>
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
        <form action="rka_edit.php" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" value="<?= $data["id_rka"]; ?>">
            <div class="form-group">
              <label>Unit</label>
              <select type="text" name="unit" class="form-control">
                <option hidden selected><?= $data["id_unit"]; ?></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label>Auditor</label>
              <select type="text" name="auditor" class="form-control">
                <option hidden selected><?= $data["id_auditor"]; ?></option>
                <option>1</option>
                <option>2</option>
              </select>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select type="text" name="status" class="form-control">
                <option hidden selected><?= $data["status"]; ?></option>
                <option>Terlaksana</option>
                <option>Tidak Terlaksana</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tahun</label>
              <select type="text" name="tahun" class="form-control">
                <option hidden selected><?= $data["tahun"]; ?></option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="<?= $data["tanggal"] ?>">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="submit" name="tambah" class="btn btn-primary">Save changes</button> -->
            <input type="submit" name="edit" class="btn btn-primary" value="Simpan">
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require "layouts/footer.php" ?>