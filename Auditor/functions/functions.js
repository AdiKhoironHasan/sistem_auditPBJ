$(document).ready(function() {
    $(document).on('click', '.edit_data', function() {
      var id_rka = $(this).attr("id");
      $.ajax({
        url: "fetch.php",
        method: "POST",
        data: {
          id_rka: id_rka
        },
        dataType: "json",
        success: function(data) {
          console.log("success")
          $('#id_rka').val(data.id_rka);
          $('#id_unit').val(data.id_unit);
          $('#id_auditor').val(data.id_auditor);
          $('#status').val(data.status);
          $('#tahun').val(data.tahun);
          $('#tanggal').val(data.tanggal);
          $('#edit').val("Update");
          $('#modal_edit').modal('show');
        }
      });
    });
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