<?php

use function PHPSTORM_META\sql_injection_subst;

include 'functions/connect.php';

$id = $_GET['id']; // get id through query string

$result = mysqli_query($conn, "SELECT * FROM tb_paket_barang WHERE id_barang='$id'"); // select query
$unit = mysqli_query($conn, "SELECT nama_unit FROM tb_unit");
$data = mysqli_fetch_array($result); // fetch data

if (isset($_POST['edit'])) // when click on Update button
{
  $u = $_POST["unit"];
  $data_u = mysqli_fetch_array(mysqli_query($conn, "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'"));

  $id_barang = $_POST['id'];
  $id_unit = $data_u["id_unit"]; //id_unit adalah field
  $no_kontrak = $_POST['no_kontrak'];
  $tanggal = $_POST['tanggal'];
  $nilai = $_POST['nilai_kontrak'];
  $tahun = $_POST['tahun'];

  $edit = mysqli_query($conn, "UPDATE tb_paket_barang SET id_unit='$id_unit' , no_kontrak='$no_kontrak', tanggal='$tanggal', nilai_kontrak='$nilai', tahun_anggaran='$tahun' WHERE id_barang='$id_barang' ");

  if ($edit) {
    mysqli_close($conn); // Close connection
    header("location:barang.php"); // redirects to all records page
    exit;
  } else {
    echo mysqli_error($conn);
    // echo "Error: " . $sql . " " . mysqli_error($conn);
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
        <form action="barang_edit.php" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" value="<?= $data["id_barang"]; ?>">
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
              <label>Nomor Kontrak</label>
              <input type="text" name="no_kontrak" class="form-control" placeholder="No." value="<?= $data["no_kontrak"]; ?>">
            </div>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="<?= $data["tanggal"]; ?>">
            </div>
            <div class="form-group">
              <label>Nilai Kontrak</label>
              <input type="text" name="nilai_kontrak" id="rupiah" class="form-control" placeholder="Rp." value="<?= $data["nilai_kontrak"]; ?>">
            </div>
            <div class="form-group">
              <label>Tahun Anggaran</label>
              <select type="text" name="tahun" class="form-control">
                <option hidden selected><?= $data["tahun_anggaran"]; ?></option>
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