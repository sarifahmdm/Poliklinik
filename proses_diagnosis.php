<?php
  include 'connection.php';
  $jenis_poli = $_GET['jenis_poli'];
  $id_diagnosa = $_POST['id_diagnosa'];
  $diagnosis = $_POST['diagnosis'];
  $diagnosis_banding = $_POST['diagnosis_banding'];
  $update_diagnosis = "UPDATE `diagnosa` SET `diagnosis` = '$diagnosis',
  `diagnosis_banding` = '$diagnosis_banding' WHERE `diagnosa`.`id_diagnosa` = $id_diagnosa";
  $query_update = mysqli_query($conn,$update_diagnosis);
  if($query_update == 1 ){
    header('Location:diagnosa_d.php?id_diagnosa='.$id_diagnosa.'&& jenis_poli='.$jenis_poli);
  } else {
   echo"<br><br><center><h3>Error, please try again!</h3></center>";
  }
?>
