<?php
  include 'connection.php';
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
  $update_pp = "UPDATE `pemeriksaan_penunjang` SET `hemoglobin` = '$hemoglobin',
  `lekosit` = '$lekosit', `led` = '$LED', `trombosit` = '$trombosit', `hemotrocit` = '$hemotrocit',
  `mcv` = '$MCV', `mch` = '$MCH', `mchc` = '$MCHC', `gula_darah_swaktu` = '$gula_darah_swaktu',
  `gula_darah_puasa` = '$gula_darah_puasa', `gula_darah_post_prandial` = '$gula_darah_post_prandial',
  `kolestrol_total` = '$kolestrol_total', `asam_urat` = '$asam_urat', `urea` = '$urea',
  `creatinine` = '$creatinine', `sgot` = '$SGOT', `sgpt` = '$SGPT', `dengue` = '$dengue',
  `widal` = '$widal', `pp_test` = '$PP_test', `urine_lengkap` = '$urine_lengkap' WHERE
  `pemeriksaan_penunjang`.`id_diagnosa` = '$id_diagnosa'";
  $query_update_pp = mysqli_query($conn,$update_pp);
  $select_diagnosa = "SELECT no_rekam_medis FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
  $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
  $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
  $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
    if($query_update_pp == 1 ){
      $update_pasien = "UPDATE `pasien` SET `level` = '43' WHERE `pasien`.
        `no_rekam_medis` = '$no_rekam_medis'";
      $query_update_pasien = mysqli_query($conn, $update_pasien);
      if ($query_update_pasien == 1) {
          header("Location: antrian_lab.php");
        }
  } else {
   echo"<br><br><center><h3>Error, please try again!</h3></center>";
  }
?>
