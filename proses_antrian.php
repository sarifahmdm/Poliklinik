<?php
     include 'connection.php';
     $no_rekam_medis=$_POST['no_rekam_medis'];
     $jenis_poli=$_POST['jenis_poli'];
     $nama_asuransi=$_POST['nama_asuransi'];
     $nomor_asuransi=$_POST['nomor_asuransi'];

     if ($nama_asuransi!= null && $nomor_asuransi != null) {
       $jenis_pembiayaan = "Asuransi";
     } else {
       $jenis_pembiayaan = "Umum";
     }
     $select_pasien = "SELECT * FROM `pasien` WHERE no_rekam_medis = '$no_rekam_medis'";
     $query_select_pasien = mysqli_query($conn, $select_pasien);
     $data_pasien = mysqli_fetch_array($query_select_pasien);
     $id_pasien = $data_pasien['id_pasien'];
     $tgl_lahir = $data_pasien['tgl_lahir'];
     $tanggal = new DateTime($tgl_lahir);
     $today = new DateTime();
     $y = $today->diff($tanggal)->y;
     $update_pembiayaan = "UPDATE `pembiayaan` SET `jenis_pembiayaan` = '$jenis_pembiayaan' , `nama_asuransi` = '$nama_asuransi',
     `nomor_asuransi` = '$nomor_asuransi' WHERE `pembiayaan`.`id_pasien` =$id_pasien";
     $query3 = mysqli_query ($conn, $update_pembiayaan);

     $select = "SELECT * FROM `user` WHERE jenis_poli = '$jenis_poli' && jabatan='2' " ;
     $query = mysqli_query ($conn, $select);
     $data = mysqli_fetch_array ($query);
     $id_user = $data['id_user'];

     $tambah_diagnosa="INSERT INTO `diagnosa`( `no_rekam_medis`, `id_user`, `jenis_poli`,`tanggal_dibuat`,`tanggal_periksa`,`umur`)
       VALUES ('$no_rekam_medis', '$id_user','$jenis_poli',CURRENT_TIME(),CURRENT_DATE(),'$y')";
     $query1 = mysqli_query($conn,$tambah_diagnosa);
     $select1 = "SELECT * FROM `diagnosa` WHERE no_rekam_medis= '$no_rekam_medis' && tanggal_dibuat = CURRENT_TIME()" ;
     $query2 = mysqli_query ($conn, $select1);
     $data1 = mysqli_fetch_array ($query2);
     $id_diagnosa = $data1['id_diagnosa'];
     $update_level_pasien = "UPDATE `pasien` SET `level` = '2' WHERE `pasien`.`no_rekam_medis` = '$no_rekam_medis'";
     $query_update = mysqli_query($conn,$update_level_pasien);

     if($query1 == 1 ){
       header("Location: antrian.php");
     } else {
      echo"<br><br><center><h3>Error, please try again!</h3></center>";
     }
?>
