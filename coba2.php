<head>
    <script src="AdminLTE/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="AdminLTE/plugins/toastr/toastr.min.css"></script>
</head>

<body>
    <?php
    $id = $_GET['id'];
    // echo $id;
    if ($id > 0) {
        echo "<script>Toast.fire({
            icon: 'error',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })</script>";
    } else {
        echo "<script>alert('id = 0')</script>";
    }
    ?>
    <!-- <script>
        Swal.fire({
            title: 'Great job',
            text: 'You clicked the button!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then(function() {
            location.href = '../data_unit.php'
            location.reload()
        })
    </script> -->
</body>