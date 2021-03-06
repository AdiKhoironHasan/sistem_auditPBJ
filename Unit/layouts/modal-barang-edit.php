<div class="modal fade" id="modal_barang_edit<?= $row["id_barang"]; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $row["id_barang"]; ?>">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= $row["nama_barang"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontrak</label>
                        <input type="text" name="no_kontrak" class="form-control" placeholder="No." value="<?= $row["no_kontrak"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal_kontrak" value="<?= $row["tanggal_kontrak"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <!-- id="rupiah" -->
                        <input type="text" name="nilai_kontrak" id="rupiah" class="form-control" placeholder="Rp." value="<?= $row["nilai_kontrak"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
                        <select type="text" name="tahun" class="form-control" required>
                            <option hidden selected><?= $row["tahun_anggaran"]; ?></option>
                            <?php
                            $tahunAwal = date('Y') - 5;
                            $tahunAkhir = date('Y') + 10;
                            for ($tahun = $tahunAkhir; $tahun >= $tahunAwal; $tahun--) {
                                echo "<option value='$tahun'>$tahun</option>";
                            }
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