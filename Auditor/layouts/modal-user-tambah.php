<!-- Modal Tambah -->
<div class="modal fade" id="modal_user_tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="data_user.php" method="post">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <!-- <input type="text" name="nama" class="form-control" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')"> -->
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" id="usernameTambah" class="form-control" placeholder="Username" required minlength="3" maxlength="10">
            <div id="hasilCekTambah"></div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password1" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label>Verifikasi Password</label>
            <input type="password" class="form-control" name="password2" placeholder="Verifikasi Password" required>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <select type="text" name="level" class="form-control" required>
              <option hidden selected value="">--Pilih Jabatan--</option>
              <option value="Anggota SPI">Anggota SPI</option>
              <option value="Ketua Unit">Ketua Unit</option>
              <option value="Direktur">Direktur</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!-- <button type="submit" name="tambah" class="btn btn-primary">Save changes</button> -->
          <input type="submit" name="tambah" id="tambah" class="btn btn-primary" value="Simpan" disabled="disabled">
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>