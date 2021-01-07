<?php
     include 'connection.php';
     $no_rekam_medis=$_GET['no_rekam_medis'];
     $level = 0;
     $update_pasien ="UPDATE `pasien` SET `level` = '0',`ajukan` = '1',
     `tanggal_periksa` = CURRENT_TIME() WHERE `pasien`.`no_rekam_medis` = $no_rekam_medis";
     $query_pasien=mysqli_query($conn, $update_pasien);
     if($query_pasien==1){
       header("Location: antrian.php");
     } else {
      echo"<br><br><center><h3>Error, please try again!</h3></center>";
     }
?>
