<?php
include 'connection.php';
$jenis_poli =$_GET['jenis_poli'];
 $id_resep = $_GET['id_resep'];
 $id_diagnosa = $_GET['id_diagnosa'];
 $delete_obat = "DELETE FROM `resep` WHERE `resep`.`id_resep` ='$id_resep' ";
 $query_delete =mysqli_query($conn,$delete_obat);
  if ($query_delete = 1) {
    header('Location:diagnosa_d.php?id_diagnosa='.$id_diagnosa.'&& jenis_poli='.$jenis_poli);
  }
  else {
    echo "Error, please try again";
  }

 ?>
