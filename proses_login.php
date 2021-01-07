<?php
  include 'connection.php';
    // memulai session
    session_start();
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    // mengambil isian dari form login

    $select_user = "SELECT * FROM `user` WHERE username = '$username' && password= '$password'";
    $query_user = mysqli_query($conn, $select_user);
    $data_user = mysqli_fetch_array($query_user);
    $jabatan = $data_user['jabatan'];
    $jenis_poli = $data_user['jenis_poli'];
    if ($data_user != null) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['jabatan'] = $jabatan;
        if ($jabatan == 1) {
          header("Location:index_manajer.php");
        } elseif ($jabatan == 2) {
          header("Location:antrian_dokter.php?jenis_poli=".$jenis_poli);
        } elseif ($jabatan == 3) {
          header("Location:index_perawat.php?jenis_poli=".$jenis_poli);
        } elseif ($jabatan == 4) {
          header("Location:index_lab.php?jenis_poli=".$jenis_poli);
        } elseif ($jabatan == 5) {
          header("Location:index_kasir.php");
        } elseif ($jabatan == 6) {
          header("Location:index_admin.php");
        }
    }
    else {
      header("Location: login.php");
   }
?>
