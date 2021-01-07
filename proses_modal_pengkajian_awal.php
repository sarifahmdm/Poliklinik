<?php
     include 'connection.php';
     $id_diagnosa = $_POST['id_diagnosa'];
     $keluhan_utama = $_POST['keluhan_utama'];
     $riwayat_sekarang = $_POST['rp_sekarang'];
     $riwayat_dahulu = $_POST['rp_dahulu'];
     $riwayat_keluarga = $_POST['rp_keluarga'];
     $riwayat_pribadi = $_POST['rp_pribadi_sosial'];
     $tekanan_darah = $_POST['tekanan_darah'];
     $nadi = $_POST['nadi'];
     $suhu = $_POST['suhu'];
     $respirasi = $_POST['respirasi'];
     $jenis_poli=$_GET['jenis_poli'];

     $update_diagnosa = "UPDATE `diagnosa` SET `keluhan_utama` = '$keluhan_utama',
        `rp_sekarang` = '$riwayat_sekarang', `rp_dahulu` = '$riwayat_dahulu',
        `rp_keluarga` = '$riwayat_keluarga', `rp_pribadi_sosial` = '$riwayat_pribadi',`time_update_anamnesis` = CURRENT_TIME()
        WHERE `diagnosa`.`id_diagnosa` = '$id_diagnosa'";
     $query_diagnosa = mysqli_query ($conn, $update_diagnosa);

     $insert_tanda_vital = "UPDATE  `tanda_vital` SET `tekanan_darah` = '$tekanan_darah',
       `nadi`='$nadi', `suhu` ='$suhu', `respirasi` ='$respirasi',`time_update` = CURRENT_TIME()
        WHERE `id_diagnosa`='$id_diagnosa'";
     $query_tanda_vital = mysqli_query ($conn,$insert_tanda_vital);

     $select_diagnosa = "SELECT no_rekam_medis FROM `diagnosa` WHERE id_diagnosa='$id_diagnosa'";
     $query_sel_diagnosa = mysqli_query ($conn, $select_diagnosa);
     $data_diagnosa = mysqli_fetch_array($query_sel_diagnosa);
     $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
     $update_level_pasien = "UPDATE `pasien` SET `level` = '3'
     WHERE `pasien`.`no_rekam_medis` = '$no_rekam_medis'";
     $query_up_pasien = mysqli_query($conn, $update_level_pasien);

     if($query_up_pasien == $query_tanda_vital ){
       header("Location: diagnosa_a.php?jenis_poli=".$jenis_poli."&& id_diagnosa=".$id_diagnosa);
     } else {
      echo"<br><br><center><h3>Error, please try again!</h3></center>";
     }
?>
