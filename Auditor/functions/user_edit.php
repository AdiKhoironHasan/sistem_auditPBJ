<?php

require 'connect.php';

// $id = $_GET['id']; // get id through query string

// $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'"); // select query

// $data = mysqli_fetch_array($result); // fetch data

function successAlert()
{
    echo '<div class="btn btn-success swalDefaultSuccess"></div>';
}

if (isset($_POST['edit'])) // when click on Update button
{
    $id_user = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $level = $_POST['level'];

    $edit = mysqli_query($conn, "UPDATE tb_user SET username='$username', password='$password', status='$status', level='$level' WHERE id_user='$id_user' ");

    if ($edit) {
        mysqli_close($conn); // Close connection
        echo "<script>alert('Data Berhasil Diubah')</script>";
        // exit;
        header("refresh: 0; url=data_user.php"); // redirects to all records page
    } else {
        // echo mysqli_error($edit);
        echo ("GAGAL EDIT DATA");
    }
}
