<head>
    <script src="AdminLTE/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</head>
<body>
    <?php
    include 'connect.php';
    // menyimpan data id kedalam variabel
    $id = $_GET['id'];
    // query SQL untuk insert data
    $query = "DELETE FROM tb_unit WHERE id_unit='$id'";
    $sql_delete =  mysqli_query($conn, $query);
    // mengalihkan ke halaman index.php
    if ($sql_delete) {
        echo "<script>alert('Data Berhasil Dihapus')</script>";
        header("refresh: 0; url=../data_unit.php");
    } else {
        echo "<script>alert('Data Gagal Dihapus')</script>";
        header("refresh: 0; url=../data_unit.php");
    }
    ?>
</body>