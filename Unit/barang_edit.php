<?php require "functions/barang_edit.php" ?>
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
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= $data["nama_barang"]; ?>">
            </div>
            <div class="form-group">
              <label>Nomor Kontrak</label>
              <input type="text" name="no_kontrak" class="form-control" placeholder="No." value="<?= $data["no_kontrak"]; ?>">
            </div>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal" value="<?= $data["tanggal_kontrak"]; ?>">
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