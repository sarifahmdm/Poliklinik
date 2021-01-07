<?php
  include 'connection.php';
  error_reporting(0);
  $jenis_poli=$_GET['jenis_poli'];
  $id_diagnosa = $_GET['id_diagnosa'];
  if ($jenis_poli=="Poli Kia") {
    $jenis_tindakan = "KIA";
  } elseif ($jenis_poli=="Poli Umum") {
    $jenis_tindakan = "POLI UMUM";
  } elseif ($jenis_poli=="Poli Gigi") {
    $jenis_tindakan ="POLI GIGI";
  }
  $select_tindakan = "SELECT * FROM `tindakan` WHERE jenis_tindakan='$jenis_tindakan'";
  $query_tindakan = mysqli_query($conn, $select_tindakan);
  $ipeh = 0;
  while ($data_tindakan = mysqli_fetch_array($query_tindakan)) {
    $nama_tindakan = $data_tindakan['nama_tindakan'];
    $id_tindakan = $data_tindakan['id_tindakan'];
    $data = $_GET[$id_tindakan];
    if ($data==on) {
      $insert_penanganan = "INSERT INTO `penanganan`(`id_diagnosa`, `id_tindakan`)
        VALUES ('$id_diagnosa','$id_tindakan')";
      $query_insert = mysqli_query($conn, $insert_penanganan);
    }
  }

  header('Location:diagnosa_e.php?id_diagnosa='.$id_diagnosa.'&& jenis_poli='.$jenis_poli);


?>
