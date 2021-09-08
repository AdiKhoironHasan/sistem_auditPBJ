<?php
include('connect.php');
$id = $_GET['id_rka'];
$unit = $_GET['unit'];
$auditor = $_GET['auditor'];
$status = $_GET['status'];
$tahun = $_GET['tahun'];
$tanggal = $_GET['tanggal'];
//query update
$query = "UPDATE tb_rencana_kerja SET id_unit='$unit' , id_auditor='$auditor', status='$status', tahun='$tahun', tanggal='$tanggal' WHERE id_rka='$id ";
if (mysqli_query($koneksi, $query)) {
    # credirect ke page index
    header("location:input_rka.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>