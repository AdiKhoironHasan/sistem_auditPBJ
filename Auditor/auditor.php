<?php require "functions/connect.php" ?>
<?php require "functions/f_auditor.php" ?>
<?php require "functions/f_profil.php" ?>
<?php require "layouts/header.php" ?>
<?php require "layouts/navbar.php" ?>
<?php require "layouts/sidebar.php" ?>

<!-- <link rel="stylesheet" href="../../AdminLTE/dist/css/adminlte.min.css"> -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <?php
                if ($data_user['foto'] == NULL) {
                ?>
                  <img class="profile-user-img img-fluid img-circle" src="../AdminLTE/dist/img/user2.png" alt="User profile picture">
                <?php
                } else {
                ?>
                  <img class="profile-user-img img-fluid img-circle h-25 w-25" src="../AdminLTE/dist/img/auditor/foto/<?= $data_user['foto']; ?>" alt="User profile picture">
              </div>
            <?php
                }
            ?>

            <h3 class="profile-username text-center"><?= $data_user['nama']; ?></h3>

            <p class="text-muted text-center"><?= $data_user['level']; ?></p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Followers</b> <a class="float-right">1,322</a>
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
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $dataUser_row['nama']; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username" value="<?= $dataUser_row['username']; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">NPAK</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="npak" id="npak" value="<?= $dataUser_row['nip_npak']; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">No. Handphone</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nohp" id="nohp" value="<?= $dataUser_row['no_hp']; ?>">
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
                              <input type="password" class="form-control" id="passwordLama" name="passwordLama" placeholder="Password">
                              <!-- <span toggle="#password1" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Password Baru</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                              <!-- <span toggle="#password1" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Password Lagi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="password2" name="password2" placeholder="Password Lagi">
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
                            <img src="../AdminLTE/dist/img/auditor/foto/<?= $data_user['foto']; ?>" class="h-25 w-25 border border-primary">
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Foto Profil</label>
                            <div class="col-sm-10 input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="foto" onchange="return fotoValidation()">
                                <label class="custom-file-label" for="customFile">Choose file</label>
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
                            <img src="../AdminLTE/dist/img/auditor/ttd/<?= $data_user['ttd']; ?>" class="h-25 w-25  border border-primary">
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10 input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="ttd">
                                <label class="custom-file-label" for="customFile">Choose file</label>
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
<!-- /.content-wrapper -->

<?php require "layouts/footer.php" ?>

<script>
  function fotoValidation() {
    var fileInput = document.getElementById('foto');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
      alert('Tolong upload file dengan format .jpeg/.jpg/.png/.gif');
      fileInput.value = '';
      return false;
    } else {
      //Image preview
      if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('fotoPreview').innerHTML = '<img src="' + e.target.result + '" class="h-25 w-25" />';
        };
        reader.readAsDataURL(fileInput.files[0]);
      }
    }
  }

  function ttdValidation() {
    var fileInput = document.getElementById('ttd');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
      alert('Tolong upload file dengan format .jpeg/.jpg/.png/.gif');
      fileInput.value = '';
      return false;
    } else {
      //Image preview
      if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('ttdPreview').innerHTML = '<img src="' + e.target.result + '" class="h-25 w-25" />';
        };
        reader.readAsDataURL(fileInput.files[0]);
      }
    }
  }

  $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>