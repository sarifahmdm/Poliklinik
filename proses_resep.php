<?php
  include 'connection.php';
  $jenis_poli = $_GET['jenis_poli'];
  $id_diagnosa = $_POST['id_diagnosa'];
  $kode_obat = $_POST['kode_obat'];
  $jumlah = $_POST['jumlah'];
  $pagi = $_POST['pagi'];
  $siang = $_POST['siang'];
  $malam = $_POST['malam'];
  $aturan_pemekaian = "$pagi-$siang-$malam";

  $insert_resep = "INSERT INTO `resep`(`kode_obat`, `jumlah`, `aturan_pemakaian`, `id_diagnosa`)
  VALUES ('$kode_obat','$jumlah','$aturan_pemekaian','$id_diagnosa')";
  $query_insert_resep = mysqli_query($conn, $insert_resep);
  if($query_insert_resep == 1 ){
    header('Location:diagnosa_d.php?id_diagnosa='.$id_diagnosa.'&& jenis_poli='.$jenis_poli);
  } else {
   echo"<br><br><center><h3>Error, please try again!</h3></center>";
  }
?>
