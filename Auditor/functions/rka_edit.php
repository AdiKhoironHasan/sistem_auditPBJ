<?php
// session_start();
include 'connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
  }
  
if (isset($_POST['edit'])) // when click on Update button
{
    $id_rka = $_POST['id'];
    $unit = $_POST['unit'];
    $auditor = $_POST['auditor'];
    $status = $_POST['status'];
    $tahun = $_POST['tahun'];
    $tanggal = $_POST['tanggal'];
    
    $edit = mysqli_query($conn, "UPDATE tb_rka SET id_unit='$unit' , id_user='$auditor', status='$status', tahun='$tahun', tanggal='$tanggal' WHERE id_rka='$id_rka' ");
    
    if ($edit) {
        //mysqli_close($conn); // Close connection
        header("refresh: 0; url=rka.php"); // redirects to all records page
        exit;
    } else {
        // echo mysqli_error();
        echo ("GAGAL TAMBAH DATA");
    }
}

// $id = $_GET['id']; // get id through query string

// $result = mysqli_query($conn, "SELECT * FROM tb_rka WHERE id_rka='$id'"); // select query

// $data = mysqli_fetch_array($result); // fetch data
