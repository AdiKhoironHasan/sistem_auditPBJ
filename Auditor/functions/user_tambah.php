<?php
include_once 'connect.php';
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
            header("refresh: 0; url=user.php");
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
    mysqli_close($conn);
}
