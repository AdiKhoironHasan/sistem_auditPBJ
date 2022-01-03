<?php include "functions/connect.php"; ?>
<?php include "functions/unit.php"; ?>
<?php include "functions/profil.php"; ?>

<?php $page = "Dashboard"; ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="unit.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle h-25 w-25" src="../AdminLTE/dist/img/foto/<?= $data_user['foto']; ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $data_user['nama']; ?></h3>
                            <?php
                            $q_unit = mysqli_query($conn, "SELECT nama_unit FROM v_data_unit WHERE id_user=$iduser");
                            $result_unit = mysqli_fetch_array($q_unit);
                            ?>
                            <p class="text-muted text-center"><?= $data_user['level']; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Unit Kerja</b> <a class="float-right"><?= $result_unit['nama_unit'] ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">

                                    POST

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    TIMELINE
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <div class="container-fluid h-100">

                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Edit Profil</h3>
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
                                                <form class="form-horizontal" action="" method="POST">
                                                    <?php
                                                    $dataUser = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user=$iduser ");

                                                    foreach ($dataUser as $dataUser_row) :
                                                    ?>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $dataUser_row['nama']; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="username" id="username" value="<?= $dataUser_row['username']; ?>" required maxlength="10" minlength="3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">NPAK</label>
                                                            <div class="col-sm-10">
                                                                <?php
                                                                if ($data_user['nip_npak'] == NULL) {
                                                                ?>
                                                                    <input type="number" class="form-control" name="npak" id="npak" placeholder="---- Data Belum Diisi ---" required>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <input type="number" class="form-control" name="npak" id="npak" value="<?= $dataUser_row['nip_npak']; ?>" required>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-2 col-form-label">No. Handphone</label>
                                                            <div class="col-sm-10">
                                                                <?php
                                                                if ($data_user['no_hp'] == NULL) {
                                                                ?>
                                                                    <input type="number" class="form-control" name="nohp" id="nohp" placeholder="---- Data Belum Diisi ---" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;">
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <input type="number" class="form-control" name="nohp" id="nohp" value="<?= $dataUser_row['no_hp']; ?>" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;">
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    endforeach
                                                    ?>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <input type="submit" name="edit_profil" class="btn btn-danger" value="Simpan Perubahan">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Edit Password</h3>
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
                                                <form class="form-horizontal" action="" method="POST">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Password Lama</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="passwordLama" name="passwordLama" placeholder="Password" required>
                                                            <!-- <span toggle="#password1" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Password Baru</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required>
                                                            <!-- <span toggle="#password1" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Password Lagi</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Password Lagi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <input type="submit" name="edit_password" class="btn btn-danger" value="Simpan Perubahan">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Edit Foto Profil</h3>
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
                                                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                                    <div class="text-center mb-3">
                                                        <img src="../AdminLTE/dist/img/foto/<?= $data_user['foto']; ?>" class="h-25 w-25  border border-primary">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Foto Profil</label>
                                                        <div class="col-sm-10 input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="foto" id="foto" accept="image/*" required>
                                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <input type="submit" name="edit_foto" class="input-group-text" value="Upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <input type="submit" name="edit_foto" class="btn btn-danger" value="Simpan Perubahan">
                            </div>
                          </div> -->
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Edit Tanda Tangan</h3>
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
                                                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                                    <div class="text-center mb-3">
                                                        <img src="../AdminLTE/dist/img/ttd/<?= $data_user['ttd']; ?>" class="h-25 w-25  border border-primary">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Tanda Tangan</label>
                                                        <div class="col-sm-10 input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="ttd" accept="image/*" required>
                                                                <label class="custom-file-label" for="customFile">Pilih File</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <input type="submit" name="edit_ttd" class="input-group-text" value="Upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
<?php require "layouts/footer.php" ?>