<?php
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../Auditor/auditor.php");
}

if (isset($_POST['getlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $password = md5($_POST['password']);

    $sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['status'] == 'Aktif') {
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['foto'] = $row['foto'];
            $_SESSION['nama'] = $row['nama'];
            if ($row['level'] == 'Ketua Unit') {
                header("refresh: 0; url=../Unit/unit.php");
            } else if ($row['level'] == 'Direktur') {
                header("refresh: 0; url=../Direktur/direktur.php");
            } else if ($row['level'] == 'Ketua SPI' || $row['level'] == 'Anggota SPI') {
                header("refresh: 0; url=../Auditor/auditor.php");
            } else {
                header("refresh: 0; url=login.php");
            }
        } else {
            echo "<script>alert('User Anda Belum Aktif!')</script>";
            header("refresh: 0; url=login.php");
        }
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        header("refresh: 0; url=login.php");
    }
}
