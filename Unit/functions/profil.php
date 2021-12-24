<?php
if (isset($_POST['edit_foto'])) {
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        // header("location:unit.php?alert=ekstensi file tidak sesuai");
        echo "<script>alert('Ekstensi tidak sesuai')</script>";
        header("refresh: 0; url=unit.php");
    } else {
        if ($ukuran < 1044070) {
            $foto = $data_user['level'] . '_' . $data_user['nama'] . '_' . $rand . '.' . $ext;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../AdminLTE/dist/img/foto/' . $data_user['level'] . '_' . $data_user['nama'] . '_' . $rand . '.' . $ext);
            mysqli_query($conn, "UPDATE tb_user SET foto='$foto' WHERE id_user=$iduser");
            // header("location:unit.php?alert=berhasil");
            echo "<script>alert('Foto Berhasil Diubah')</script>";
            header("refresh: 0; url=unit.php");
        } else {
            // header("location:unit.php?alert=gagak_ukuran");
            echo "<script>alert('Foto terlalu besar')</script>";
            header("refresh: 0; url=unit.php");
        }
    }
}

if (isset($_POST['edit_ttd'])) {
    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['ttd']['name'];
    $ukuran = $_FILES['ttd']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        // header("location:unit.php?alert=ekstensi file tidak sesuai");
        echo "<script>alert('Ekstensi tidak sesuai')</script>";
        header("refresh: 0; url=unit.php");
    } else {
        if ($ukuran < 1044070) {
            $ttd = $data_user['level'] . '_' . $data_user['nama'] . '_' . $rand . '.' . $ext;
            move_uploaded_file($_FILES['ttd']['tmp_name'], '../AdminLTE/dist/img/ttd/' . $data_user['level'] . '_' . $data_user['nama'] . '_' . $rand . '.' . $ext);
            mysqli_query($conn, "UPDATE tb_user SET ttd='$ttd' WHERE id_user=$iduser");
            // header("location:unit.php?alert=berhasil");
            echo "<script>alert('Ttd Berhasil Diubah')</script>";
            header("refresh: 0; url=unit.php");
        } else {
            // header("location:unit.php?alert=gagak_ukuran");
            echo "<script>alert('Ttd terlalu besar')</script>";
            header("refresh: 0; url=unit.php");
        }
    }
}

if (isset($_POST['edit_profil'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $npak = $_POST['npak'];
    $nohp = $_POST['nohp'];

    $sql = mysqli_query($conn, "UPDATE tb_user SET nama='$nama', username='$username', nip_npak='$npak', no_hp='$nohp' WHERE id_user='$iduser'");

    if ($sql) {
        // //mysqli_close($conn); // Close connection
        echo "<script>alert('Data Berhasil Diubah')</script>";
        // exit;
        header("refresh: 0; url=unit.php"); // redirects to all records page
    } else {
        // echo mysqli_error($edit);
        echo ("GAGAL EDIT DATA");
        header("refresh: 0; url=unit.php"); // redirects to all records page
    }
}

if (isset($_POST['edit_password'])) {
    $passwordLama = $_POST['passwordLama'];

    $cekPassword = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user=$iduser AND password='$passwordLama'");
    if ($cekPassword->num_rows > 0) {
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        // $password = md5($_POST['password']);

        if (!empty($password1 && $password2)) {
            if ($password1 == $password2) {
                $sql = mysqli_query($conn, "UPDATE tb_user SET password='$password1' WHERE id_user=$iduser ");
                echo "<script>alert('Edit password berhasil')</script>";
                header("refresh: 0; url=unit.php");
            } else {
                echo "<script>alert('Password Tidak Sama')</script>";
                header("refresh: 0; url=unit.php");
            }
        } else {
            echo "<script>alert('Password Tidak Boleh Kosong')</script>";
            header("refresh: 0; url=unit.php");
        }
    } else {
        echo "<script>alert('Password Lama Tidak Sesuai')</script>";
        header("refresh: 0; url=unit.php");
    }
}
