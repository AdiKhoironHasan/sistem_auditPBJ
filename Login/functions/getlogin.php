<?php
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    // header("Location: ../Auditor/auditor.php");
    include "logout.php";
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
            $iduser = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['id_user'] = $row['id_user'];
            if ($row['level'] == 'Ketua Unit') {
                $cekUnit = mysqli_query($conn, "SELECT * FROM tb_unit WHERE id_user=$iduser");
                if ($cekUnit->num_rows == 1) {
                    header("refresh: 0; url=../Unit/unit.php");
                } else {
                    echo "<script>alert('User Belum Terdaftar Unit')</script>";
                    header("refresh: 0; url=login.php");
                }
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
