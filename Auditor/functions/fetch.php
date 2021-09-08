<?php

include '../../functions/connect.php';

if (isset($_POST["id_rka"])) {
    $query = "SELECT * FROM tb_rencana_kerja WHERE id = '" . $_POST["id_rka"] . "'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}
?>