<div class="modal fade" id="modal_unit_edit<?= $row["id_unit"]; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="data_unit.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Unit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $row["id_unit"]; ?>">
                    <div class="form-group">
                        <label>Nama Unit</label>
                        <input type="text" name="nama_unit" class="form-control" placeholder="Nama Unit">
                    </div>
                    <div class="form-group">
                        <label>Ketua Unit</label>
                        <?php
                        $q_user_id = mysqli_query($conn, "SELECT nama FROM tb_user WHERE level = 'Ketua Unit'");
                        ?>
                        <select type="text" name="ketua_unit" class="form-control">
                            <?php
                            foreach ($q_user_id as $q_user_id_row) :
                            ?>
                                <option><?= $q_user_id_row['nama']; ?></option>
                            <?php
                            endforeach
                            ?>
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