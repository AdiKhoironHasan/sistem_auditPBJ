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
            <select type="text" name="unit" class="form-control">
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
            <label>Auditor</label>
            <select type="text" name="auditor" class="form-control">
              <option hidden selected value="">--Pilih Auditor--</option>
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
            <select type="text" name="tahun" class="form-control">
              <option hidden selected value="">--Pilih Tahun--</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
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