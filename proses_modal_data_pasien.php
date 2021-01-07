<?php
  include 'connection.php';
  $id_pasien = $_POST['id_pasien'];
  $alamat_rumah = $_POST['alamat_lengkap'];
  $status_perkawinan = $_POST['status_perkawinan'];
  $jenis_poli = $_GET['jenis_poli'];
  $select_pasien ="SELECT * FROM `pasien` WHERE id_pasien = $id_pasien";
  $query_pasien = mysqli_query($conn, $select_pasien);
  $data_pasien = mysqli_fetch_array($query_pasien);
  $id_alamat = $data_pasien['id_alamat'];

  $update_pasien = "UPDATE `alamat` SET `alamat_lengkap` = '$alamat_rumah' WHERE `alamat`.`id_alamat` = '$id_alamat'";
  $query_pasien = mysqli_query($conn, $update_pasien);
      if($query_pasien == 1 ){
          header("Location: antrian_perawat.php?jenis_poli=".$jenis_poli);
      } else {
          echo"<br><br><center><h3>Error, please try again!</h3></center>";
      }
?>
