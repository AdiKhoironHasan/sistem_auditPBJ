<div class="modal fade" id="modal_rka_tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="rka.php" method="post">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Unit</label>
            <select type="text" id="unit" name="unit" class="form-control" required>
              <option hidden selected value="">--Pilih Unit--</option>
              <?php
              $q_unit = mysqli_query($conn, "SELECT * FROM tb_unit");
              foreach ($q_unit as $q_unit_row) :
              ?>
                <option value="<?= $q_unit_row["id_unit"]; ?>"><?= $q_unit_row["nama_unit"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Paket Barang</label>
            <select type="text" id="barang" name="barang" class="form-control" required>
              <option hidden selected value="">--Pilih Paket Barang--</option>
              <?php
              $q_barang = mysqli_query($conn, "SELECT * FROM tb_barang JOIN tb_unit WHERE tb_barang.id_unit = tb_unit.id_unit");
              foreach ($q_barang as $q_barang_row) :
              ?>
                <option class="<?= $q_barang_row['id_unit'] ?>" value="<?= $q_barang_row["id_barang"]; ?>"><?= $q_barang_row["nama_barang"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Auditor 1</label>
            <select type="text" name="auditor1" class="form-control" required>
              <option hidden selected value="">--Pilih Auditor 1--</option>
              <?php
              $q_v_nama_auditor = mysqli_query($conn, "SELECT * FROM v_nama_auditor");
              foreach ($q_v_nama_auditor as $q_v_nama_auditor_row) :
              ?>
                <option value="<?= $q_v_nama_auditor_row["id_user"]; ?>"><?= $q_v_nama_auditor_row["nama"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Auditor 2</label>
            <select type="text" name="auditor2" class="form-control" required>
              <option hidden selected value="">--Pilih Auditor 2--</option>
              <?php
              $q_v_nama_auditor = mysqli_query($conn, "SELECT * FROM v_nama_auditor");
              foreach ($q_v_nama_auditor as $q_v_nama_auditor_row) :
              ?>
                <option value="<?= $q_v_nama_auditor_row["id_user"]; ?>"><?= $q_v_nama_auditor_row["nama"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Auditor 3</label>
            <select type="text" name="auditor3" class="form-control" required>
              <option hidden selected value="">--Pilih Auditor 3--</option>
              <?php
              $q_v_nama_auditor = mysqli_query($conn, "SELECT * FROM v_nama_auditor");
              foreach ($q_v_nama_auditor as $q_v_nama_auditor_row) :
              ?>
                <option value="<?= $q_v_nama_auditor_row["id_user"]; ?>"><?= $q_v_nama_auditor_row["nama"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <select type="text" name="tahun" class="form-control" required>
              <option hidden selected value="">--Pilih Tahun--</option>
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
            <input type="date" class="form-control" name="tanggal" required>
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