 <?php
  include 'connection.php';
  $id_diagnosa = $_POST['id_diagnosa'];
  $jenis_poli = $_GET['jenis_poli'];
  $num = $_POST['num'];
  $kepala_dan_leher = $_POST['kepala_dan_leher'];
  $thorax = $_POST['thorax'];
  $abdomen = $_POST['abdomen'];
  $ekstremitas = $_POST['ekstremitas'];
  $status_lokalisasi = $_POST['status_lokalisasi'];
  $user_dokter = $_POST['user_dokter'];

  $update_diagnosa ="UPDATE `diagnosa` SET `user_dokter` = '$user_dokter' WHERE id_diagnosa = '$id_diagnosa'";
  $query_update_diagnosa = mysqli_query($conn, $update_diagnosa);

  if ($num == 1) {
    $update_pemeriksaan_fisik = "UPDATE `pemeriksaan_fisik` SET
      `kepala_dan_leher`='$kepala_dan_leher',`thorax`='$thorax',
      `abdomen`='$abdomen',`ekstremitas`='$abdomen',`status_lokalisasi`='$status_lokalisasi'
      WHERE id_diagnosa = '$id_diagnosa'";
      $query_update = mysqli_query($conn, $update_pemeriksaan_fisik);
      if($query_update == 1 ){
        header('Location:diagnosa_b.php?id_diagnosa='.$id_diagnosa.'&& jenis_poli='.$jenis_poli);
      } else {
       echo"<br><br><center><h3>Error, please try again!</h3></center>";
      }
  } elseif ($num==0) {
    $insert_pemeriksaan_fisik = "INSERT INTO `pemeriksaan_fisik`(
      `kepala_dan_leher`, `thorax`, `abdomen`, `ekstremitas`, `status_lokalisasi`, `id_diagnosa`)
      VALUES ('$kepala_dan_leher','$thorax','$abdomen','$ekstremitas','$status_lokalisasi','$id_diagnosa')";
    $query_insert = mysqli_query($conn,$insert_pemeriksaan_fisik);
    if($query_insert == 1 ){
      header('Location:diagnosa_b.php?id_diagnosa='.$id_diagnosa.'&& jenis_poli='.$jenis_poli);
    } else {
     echo"<br><br><center><h3>Error, please try again!</h3></center>";
    }
   }


?>
