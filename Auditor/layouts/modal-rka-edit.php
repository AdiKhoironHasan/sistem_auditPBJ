<div class="modal fade" id="modal_rka_edit<?= $row["id_rka"]; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="rka.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit RKA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $row["id_rka"]; ?>">
                    <div class="form-group">
                        <label>Unit</label>
                        <select type="text" name="unit" class="form-control" required>
                            <option hidden selected value="<?= $row["id_unit"]; ?>"><?= $row["nama_unit"]; ?></option>
                            <?php
                            $q_unit = mysqli_query($conn, "SELECT * FROM tb_unit");
                            foreach ($q_unit as $q_unit_row) :
                            ?>
                                <option value="<?= $q_unit_row["id_unit"]; ?>"><?= $q_unit_row["nama_unit"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 1</label>
                        <select type="text" name="auditor1" class="form-control" required>
                            <option hidden selected value="<?= $row["auditor1"]; ?>"><?= NamaAuditor($row["auditor1"]); ?></option>
                            <?php foreach ($dataAuditor as $dataAuditor_row) : ?>
                                <option value="<?= $dataAuditor_row["id_user"] ?>"><?= $dataAuditor_row["nama"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 2</label>
                        <select type="text" name="auditor2" class="form-control" required>
                            <option hidden selected value="<?= $row["auditor2"]; ?>"><?= NamaAuditor($row["auditor2"]); ?></option>
                            <?php foreach ($dataAuditor as $dataAuditor_row) : ?>
                                <option value="<?= $dataAuditor_row["id_user"] ?>"><?= $dataAuditor_row["nama"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Auditor 3</label>
                        <select type="text" name="auditor3" class="form-control" required>
                            <option hidden selected value="<?= $row["auditor3"]; ?>"><?= NamaAuditor($row["auditor3"]); ?></option>
                            <?php foreach ($dataAuditor as $dataAuditor_row) : ?>
                                <option value="<?= $dataAuditor_row["id_user"] ?>"><?= $dataAuditor_row["nama"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select type="text" name="status" class="form-control" required>
                            <option hidden selected><?= $row["status"]; ?></option>
                            <option>Belum Terlaksana</option>
                            <option>Terlaksana</option>
                            <option>Tidak Terlaksana</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <select type="text" name="tahun" class="form-control" required>
                            <option hidden selected value="<?= $row["tahun"]; ?>"><?= $row["tahun"]; ?></option>
                            <?php
                            $tahunAwal = date('Y') - 5;
                            $tahunAkhir = date('Y') + 10;
                            for ($tahun = $tahunAkhir; $tahun >= $tahunAwal; $tahun--) {
                                echo "<option value='$tahun'>$tahun</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $row["tanggal"] ?>" required>
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