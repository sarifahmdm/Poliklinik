<?php
  include 'connection.php';
  $jenis_poli = $_GET['jenis_poli'];
  $id_diagnosa = $_POST['id_diagnosa'];
  $no_rekam_medis = $_POST['no_rekam_medis'];
  $tujuan_rujukan = $_POST['tujuan_rujukan'];
  $lingkup = $_POST['lingkup'];

  $update_diagnosa = "UPDATE `diagnosa` SET `status_pembayaran` = '1' WHERE `diagnosa`.`id_diagnosa` = $id_diagnosa";
  $query_update_diagnosa = mysqli_query($conn, $update_diagnosa);
  $update_rujukan = "UPDATE `rujukan` SET `status_rujukan` = '1' WHERE `rujukan`.`id_diagnosa` = $id_diagnosa;";
  $query_update_rujukan = mysqli_query($conn, $update_rujukan);


  $select_user = "SELECT id_user FROM `user` WHERE jenis_poli = '$tujuan_rujukan'";
  $query_select_user = mysqli_query($conn, $select_user);
  $data_user = mysqli_fetch_array($query_select_user);
  $id_user = $data_user['id_user'];

  if ($lingkup == 'Internal') {
    $insert_diagnosa = "INSERT INTO `diagnosa` (`no_rekam_medis`,`id_user`,  `jenis_poli`, `tanggal_dibuat`, `tanggal_periksa`)
    VALUES ('$no_rekam_medis','$id_user',  '$tujuan_rujukan', CURRENT_TIME(), CURRENT_DATE())";
    $query_insert_diagnosa = mysqli_query($conn, $insert_diagnosa);
    if ($query_insert_diagnosa == 1) {
      $update_pasien = "UPDATE `pasien` SET `level` = '2' WHERE `pasien`.`no_rekam_medis` = '$no_rekam_medis'";
      header("Location:antrian_perawat.php?jenis_poli=$jenis_poli");
    }
  } elseif ($lingkup == 'Eksternal') {
    $update_pasien = "UPDATE `pasien` SET `level` = '5' WHERE `pasien`.`no_rekam_medis` = '$no_rekam_medis'";
    header("Location:antrian_perawat.php?jenis_poli=$jenis_poli");
  } else {
   echo"<br><br><center><h3>Error, please try again!</h3></center>";
  }
?>
