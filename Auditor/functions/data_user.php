<?php

if (isset($_POST['tambah'])) {
    // $unit = "SELECT id_unit FROM tb_unit WHERE nama_unit = '$u'";
    // $result = mysqli_query($conn, $unit);
    // while ($row = $result -> fetch_assoc()) {
    //     $id_unit =$row['id_unit'];
    // }

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $level = $_POST['level'];

    if ($password1 == $password2) {
        $sql = "SELECT * FROM tb_user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tb_user (id_user, nama, username,password, status, level) VALUES (NULL, '$nama', '$username','$password1', 'Aktif', '$level')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                // header("refresh: 0; url=data_user.php");
                // header("Location: login.php");
                // $username = "";
                // $email = "";
                // $_POST['password'] = "";
                // $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
    // //mysqli_close($conn);
}


// $id = $_GET['id']; // get id through query string

// $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id'"); // select query

// $data = mysqli_fetch_array($result); // fetch data

// function successAlert()
// {
//     echo '<div class="btn btn-success swalDefaultSuccess"></div>';
// }

if (isset($_POST['edit'])) // when click on Update button
{
    $id_user = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $level = $_POST['level'];

    $edit = mysqli_query($conn, "UPDATE tb_user SET username='$username', password='$password', status='$status', level='$level' WHERE id_user='$id_user' ");

    if ($edit) {
        // //mysqli_close($conn); // Close connection
        echo "<script>alert('Data Berhasil Diubah')</script>";
        // exit;
        header("refresh: 0; url=data_user.php"); // redirects to all records page
    } else {
        // echo mysqli_error($edit);
        echo ("GAGAL EDIT DATA");
    }
}
