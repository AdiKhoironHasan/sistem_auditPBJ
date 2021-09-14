<?php
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
  header("Location: ../Auditor/auditor.php");
}

if (isset($_POST['register'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  $npak = $_POST['npak'];
  $level = $_POST['level'];
  $nohp = $_POST['nohp'];

  if ($password1 == $password2) {
    $sql = "SELECT * FROM tb_user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO tb_user VALUES (NULL, '$nama', '$username', '$password1', '$npak', '$level', '$nohp', NULL, NULL, 'Tidak Aktif')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        header("refresh: 0; url=login.php");
        // header("Location: login.php");
        // $username = "";
        // $email = "";
        // $_POST['password'] = "";
        // $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        header("refresh: 0; url=register.php");
      }
    } else {
      echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
      header("refresh: 0; url=register.php");
    }
  } else {
    echo "<script>alert('Password Tidak Sesuai')</script>";
    header("refresh: 0; url=register.php");
  }
}
