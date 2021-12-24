<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.1.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../AdminLTE/dist/js/demo.js"></script> -->

<!-- DataTables  & Plugins -->
<script src="../AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="../AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- <script src="../AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->

<!-- Page specific script -->
<!-- <script src="../functions/functions.js"></script> -->
<script>
  // Aktifkan script customfile
  $(function() {
    bsCustomFileInput.init();
  });

  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#usernameTambah').keyup(function() {
      var uname = $('#usernameTambah').val();
      if (uname == 0) {
        $('#hasilCekTambah').text('');
      } else {
        $.ajax({
          url: 'functions/cek_tambah_user.php',
          type: 'POST',
          data: 'username=' + uname,
          success: function(hasil) {
            if (hasil > 0) {
              $('#hasilCekTambah').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Username Tidak Tersedia</label>');
              $('#tambah').attr('disabled', 'disabled');
            } else if (hasil) {
              $('#hasilCekTambah').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Username Tersedia</label>');
              $('#tambah').removeAttr('disabled');
            }
          }
        });
      }
    });
  });

  $(document).ready(function() {
    $('#usernameEdit').keyup(function() {
      var uname = $('#usernameEdit').val();
      if (uname == 0) {
        $('#hasilCekEdit').text('');
      } else {
        $.ajax({
          url: 'functions/cek_edit_user.php',
          type: 'POST',
          data: 'username=' + uname,
          success: function(hasil) {
            if (hasil > 0) {
              $('#hasilCekEdit').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Username Tidak Tersedia</label>');
              $('#edit').attr('disabled', 'disabled');
            } else if (hasil) {
              $('#hasilCekEdit').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Username Tersedia</label>');
              $('#edit').removeAttr('disabled');
            }
          }
        });
      }
    });
  });
  
  $(document).ready(function() {
    $('#cekNamaUnit').keyup(function() {
      var namaUnit = $('#cekNamaUnit').val();
      if (namaUnit == 0) {
        $('#hasilCekUnit').text('');
      } else {
        $.ajax({
          url: 'functions/cek_edit_unit.php',
          type: 'POST',
          data: 'namaUnit=' + namaUnit,
          success: function(hasil) {
            if (hasil > 0) {
              $('#hasilCekUnit').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Nama Unit Tidak Tersedia</label>');
              $('#editUnit').attr('disabled', 'disabled');
            } else if (hasil) {
              $('#hasilCekUnit').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Nama Unit Tersedia</label>');
              $('#editUnit').removeAttr('disabled');
            }
          }
        });
      }
    });
  });

  $(document).ready(function() {
    $('#namaUnitTambah').keyup(function() {
      var namaUnit = $('#namaUnitTambah').val();
      if (namaUnit == 0) {
        $('#hasilUnitTambah').text('');
      } else {
        $.ajax({
          url: 'functions/cek_edit_unit.php',
          type: 'POST',
          data: 'namaUnit=' + namaUnit,
          success: function(hasil) {
            if (hasil > 0) {
              $('#hasilUnitTambah').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-times-circle"></i> Nama Unit Tidak Tersedia</label>');
              $('#tambahUnit').attr('disabled', 'disabled');
            } else if (hasil) {
              $('#hasilUnitTambah').html('<label class="col-form-label" for="inputSuccess"><i class="fas fa-check-circle"></i> Nama Unit Tersedia</label>');
              $('#tambahUnit').removeAttr('disabled');
            }
          }
        });
      }
    });
  });
</script>

<!-- ./wrapper -->
</body>

</html>