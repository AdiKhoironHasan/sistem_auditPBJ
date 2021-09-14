<div class="modal fade" id="modal_user_edit<?= $row["id_user"]; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="user.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $row["id_user"]; ?>">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $row["username"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?= $row["password"]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Status User</label>
                        <select type="text" name="status" class="form-control">
                            <option hidden selected><?= $row["status"]; ?></option>
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select type="text" name="level" class="form-control">
                            <option hidden selected><?= $row["level"]; ?></option>
                            <option>Ketua SPI</option>
                            <option>Anggota SPI</option>
                            <option>Ketua Unit</option>
                            <option>Direktur</option>
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>