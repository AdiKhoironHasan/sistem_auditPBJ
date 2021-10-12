<div class="modal fade" id="modal_rka_edit<?= $row["id_rka"]; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="rka.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $row["id_rka"]; ?>">
                    <div class="form-group">
                        <label>Unit</label>
                        <select type="text" name="unit" class="form-control">
                            <?php
                            $id_unit = $row["id_unit"];
                            $q_unit_id = mysqli_query($conn, "SELECT * FROM tb_unit WHERE id_unit=$id_unit");
                            foreach ($q_unit_id as $unit_id_row) :
                            ?>
                                <option hidden selected value="<?= $unit_id_row["id_unit"]; ?>"><?= $unit_id_row["nama_unit"]; ?></option>
                            <?php endforeach ?>
                            <?php
                            $q_unit = mysqli_query($conn, "SELECT * FROM tb_unit");
                            foreach ($q_unit as $q_unit_row) :
                            ?>
                                <option value="<?= $q_unit_row["id_unit"]; ?>"><?= $q_unit_row["nama_unit"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor</label>
                        <select type="text" name="auditor" class="form-control">
                            <option hidden selected><?= $row["id_user"]; ?></option>
                            <?php
                            $id_user = $row["id_user"];
                            $q_user_id = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user=$id_user");
                            foreach ($q_user_id as $user_id_row) :
                            ?>
                                <option hidden selected value="<?= $user_id_row["id_user"]; ?>"><?= $user_id_row["nama"]; ?></option>
                            <?php endforeach ?>
                            <?php
                            $q_auditor = mysqli_query($conn, "SELECT * FROM tb_user WHERE level='Anggota SPI' OR level='Ketua SPI'");
                            foreach ($q_auditor as $q_auditor_row) :
                            ?>
                                <option value="<?= $q_auditor_row["id_user"]; ?>"><?= $q_auditor_row["nama"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select type="text" name="status" class="form-control">
                            <option hidden selected><?= $row["status"]; ?></option>
                            <option>Belum Terlaksana</option>
                            <option>Terlaksana</option>
                            <option>Tidak Terlaksana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <select type="text" name="tahun" class="form-control">
                            <option hidden selected><?= $row["tahun"]; ?></option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $row["tanggal"] ?>">
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