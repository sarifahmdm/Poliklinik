<?php
  include 'connection.php';
  $jenis_poli = $_GET['jenis_poli'];
  $id_diagnosa = $_POST['id_diagnosa'];
  $hemoglobin = $_POST['hemoglobin'];
  $lekosit = $_POST['lekosit'];
  $LED = $_POST['LED'];
  $trombosit = $_POST['trombosit'];
  $hemotrocit = $_POST['hemotrocit'];
  $MCV = $_POST['MCV'];
  $MCH = $_POST['MCH'];
  $MCHC = $_POST['MCHC'];
  $gula_darah_swaktu = $_POST['gula_darah_swaktu'];
  $gula_darah_puasa = $_POST['gula_darah_puasa'];
  $gula_darah_post_prandial = $_POST['gula_darah_post_prandial'];
  $kolestrol_total = $_POST['kolestrol_total'];
  $asam_urat = $_POST['asam_urat'];
  $urea = $_POST['urea'];
  $creatinine = $_POST['creatinine'];
  $SGOT = $_POST['SGOT'];
  $SGPT = $_POST['SGPT'];
  $dengue = $_POST['dengue'];
  $widal = $_POST['widal'];
  $PP_test = $_POST['PP_test'];
  $urine_lengkap = $_POST['urine_lengkap'];
  $select_pp = "SELECT * FROM `pemeriksaan_penunjang` WHERE id_diagnosa = $id_diagnosa";
  $query_select_pp = mysqli_query($conn, $select_pp);
  $data_pp = mysqli_fetch_array($query_select_pp);
  $insert_pemeriksaan_penunjang = "INSERT INTO `pemeriksaan_penunjang`(
    `hemoglobin`, `lekosit`, `led`, `trombosit`, `hemotrocit`, `mcv`, `mch`,
    `mchc`, `gula_darah_swaktu`, `gula_darah_puasa`, `gula_darah_post_prandial`,
    `kolestrol_total`, `asam_urat`, `urea`, `creatinine`, `sgot`, `sgpt`,
    `dengue`, `widal`, `pp_test`, `urine_lengkap`,`id_diagnosa`)
    VALUES ('$hemoglobin','$lekosit','$LED','$trombosit','$hemotrocit','$MCV','$MCH'
      ,'$MCHC','$gula_darah_swaktu','$gula_darah_puasa','$gula_darah_post_prandial'
      ,'$kolestrol_total','$asam_urat','$urea','$creatinine','$SGOT','$SGPT','$dengue'
      ,'$widal','$PP_test','$urine_lengkap','$id_diagnosa')";
  $query_insert = mysqli_query($conn,$insert_pemeriksaan_penunjang);

  $select_diagnosa = "SELECT no_rekam_medis FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
  $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
  $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
  $no_rekam_medis = $data_diagnosa['no_rekam_medis'];

  $update_pasien = "UPDATE `pasien` SET `level` = '4' WHERE `pasien`.
    `no_rekam_medis` = '$no_rekam_medis'";
  $query_update_pasien = mysqli_query($conn, $update_pasien);
  echo "$insert_pemeriksaan_penunjang";
      if($query_insert == 1 ){
        if ($query_update_pasien == 1) {
          header("Location: antrian_dokter.php?jenis_poli=".$jenis_poli);
        }
  } else {
   echo"<br><br><center><h3>Error, please try again!</h3></center>";
  }
?>
