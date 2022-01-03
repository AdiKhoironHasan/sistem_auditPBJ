<!-- Modal Tambah -->
<div class="modal fade" id="modal_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="barang.php" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    // $id = $_SESSION['id_user'];
                    $q_data_unit = mysqli_query($conn, "SELECT * FROM v_data_unit WHERE id_user=$iduser");
                    foreach ($q_data_unit as $q_data_unit_row) :
                    ?>
                        <input type="hidden" name="id_unit" value="<?= $q_data_unit_row["id_unit"]; ?>">
                    <?php
                    endforeach;
                    ?>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Kontrak</label>
                        <input type="text" name="no_kontrak" class="form-control" placeholder="No." required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <!-- <input type="number" name="nilai_kontrak" class="form-control" placeholder="Rp." required> -->
                        <input type="text" name="nilai_kontrak" id="rupiah" class="form-control" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label>Tahun Anggaran</label>
                        <select type="text" name="tahun" class="form-control" required>
                            <option value="" selected hidden>--Pilih Tahun Anggaran--</option>
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
                    <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>