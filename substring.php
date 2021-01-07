<?php
 include "connection.php";

 $id_diagnosa = 47;
 $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa=$id_diagnosa";
 $query = mysqli_query($conn, $select_diagnosa);
 $data_diagnosa = mysqli_fetch_array($query);
 $tanggal_periksa = $data_diagnosa['tanggal_periksa'];
 $tahun_diagnosa = substr($tanggal_periksa,0,4);
 $bulan_diagnosa = substr($tanggal_periksa,5,2);
 $tanggal_diagnosa = substr($tanggal_periksa,8,2);
 $select_penanganan = "SELECT * FROM `penanganan` WHERE id_diagnosa=$id_diagnosa";
 $query_pen = mysqli_query($conn,$select_penanganan);
 while ($data_penanganan=mysqli_fetch_array($query_pen)) {
   $id_tindakan = $data_penanganan['id_tindakan'];
   $select_tindakan = "SELECT * FROM `tarif_tindakan` WHERE id_tindakan=$id_tindakan";
   $query_tt = mysqli_query($conn, $select_tindakan);
   while ($data_tt = mysqli_fetch_array($query_tt)) {
     $start_date = $data_tt ['start_date'];
     $end_date = $data_tt ['end_date'];
     $tahun_mulai =substr($start_date,0,4);
     $bulan_mulai =substr($start_date,5,2);
     $tanggal_mulai =  substr($start_date,8,2);
     $tarif = $data_tt['tarif'];
     if ($end_date == null) {
       if ($tahun_mulai <= $tahun_diagnosa && $bulan_mulai <= $bulan_diagnosa) {
         echo "tarif = $tarif";
         echo "<br>";
         break;
       }
     }


   }

 }
?>
