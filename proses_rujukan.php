<?php
  include 'connection.php';
  error_reporting(0);
  $jenis_poli=$_POST['jenis_poli'];
  $id_diagnosa = $_POST['id_diagnosa'];
  $lingkup = $_POST['lingkup'];
  if($lingkup==null){
    $select_diagnosa = "SELECT no_rekam_medis FROM `diagnosa` WHERE id_diagnosa ='$id_diagnosa'";
    $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
    $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
    $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
    $update_pasien = "UPDATE `pasien` SET `level` = '5' WHERE `pasien` .no_rekam_medis = $no_rekam_medis";
    $query_update_pasien = mysqli_query($conn, $update_pasien);
    $update_diagnosa = "UPDATE `diagnosa` SET `status_pembayaran` = '1' WHERE `diagnosa`
    .id_diagnosa = $id_diagnosa";
    $query_update_diagnosa=mysqli_query($conn, $update_diagnosa);
    if ($query_update_pasien == $query_update_diagnosa) {
      echo "$update_pasien";
      header("Location: antrian_dokter.php?jenis_poli=".$jenis_poli);
    }
  } else {
    if ($lingkup=='Internal') {
      $tujuan = $_POST['tujuan_internal'];
    } elseif ($lingkup=='Eksternal') {
      $tujuan = $_POST['tujuan'];
    }
    $insert_rujukan = "INSERT INTO `rujukan` (`lingkup`, `tujuan`, `id_diagnosa`)
    VALUES ('$lingkup', '$tujuan', '$id_diagnosa');";
    $query_insert = mysqli_query($conn,$insert_rujukan);

    $select_diagnosa = "SELECT no_rekam_medis FROM `diagnosa` WHERE id_diagnosa ='$id_diagnosa'";
    $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
    $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
    $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
    if($query_insert == 1 ){
      $update_pasien = "UPDATE `pasien` SET `level` = '6'  WHERE `pasien` .no_rekam_medis = $no_rekam_medis";
      $query_update_pasien = mysqli_query($conn, $update_pasien);
      $update_diagnosa = "UPDATE `diagnosa` SET `status_pembayaran` = '1' WHERE `diagnosa`
      .id_diagnosa = $id_diagnosa";
      $query_update_diagnosa=mysqli_query($conn, $update_diagnosa);
      if ($query_update_pasien == $query_update_diagnosa) {
        header("Location: antrian_dokter.php?jenis_poli=".$jenis_poli);
      }
    } else {
     echo"<br><br><center><h3>Error, please try again!</h3></center>";
    }
  }

?>
