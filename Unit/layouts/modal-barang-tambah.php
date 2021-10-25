<!-- Modal Tambah -->
<div class="modal fade" id="modal_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="barang.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data <?= $_SESSION['id_user'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $id = $_SESSION['id_user'];
                    $q_unit_id = mysqli_query($conn, "SELECT * FROM tb_unit WHERE id_user=$id");
                    foreach ($q_unit_id as $q_unit_id_row) :
                    ?>
                        <input type="hidden" name="id_unit" value="<?= $q_unit_id_row["id_unit"]; ?>">
                    <?php
                    endforeach;
                    ?>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontrak</label>
                        <input type="text" name="no_kontrak" class="form-control" placeholder="No.">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <input type="text" name="nilai_kontrak" class="form-control" placeholder="Rp.">
                        <!-- <input type="text" name="nilai_kontrak" id="rupiah" class="form-control" placeholder="Rp."> -->
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
                        <select type="text" name="tahun" class="form-control">
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
                    <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>