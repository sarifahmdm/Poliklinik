<?php
 include 'connection.php';
 $bulan = $_POST['bulan'];
 $tahun = $_POST['tahun'];
 $pekerjaan = $_POST['pekerjaan'];
 $umur = $_POST['umur'];
 $jenis_penyakit = $_POST['jenis_penyakit'];
 $tanggal_periksa = $tahun.'-'.$bulan;
 $jumlah = 0;
 if ($umur != '%') {
   if ($umur=='0-1') {
     $bawah = 0;
     $atas = 1;
   } elseif ($umur=='1-5') {
     $bawah = 1;
     $atas = 5;
   } elseif ($umur=='5-12') {
     $bawah = 5;
     $atas = 12;
   } elseif ($umur=='12-20') {
     $bawah = 12;
     $atas = 20;
   } elseif ($umur=='20-30') {
     $bawah = 20;
     $atas = 30;
   } elseif ($umur=='30-...') {
     $bawah = 30;
     $atas = 120;
   }
   $select_diagnosa =  "SELECT * FROM `diagnosa` WHERE tanggal_periksa LIKE '$tanggal_periksa-%'
    && diagnosis LIKE '$jenis_penyakit' && umur>=$bawah && umur<=$atas";
   $query_diagnosa = mysqli_query($conn, $select_diagnosa);
   while ($data_diagnosa = mysqli_fetch_array($query_diagnosa)) {
     $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
     $select_pasien = "SELECt * FROM `pasien` WHERE no_rekam_medis=$no_rekam_medis && id_pekerjaan LIKE '$pekerjaan'";
     $query_pasien = mysqli_query ($conn, $select_pasien);
     error_reporting(0);
     if ($query_pasien ==1) {
       $jumlah = $jumlah + 1;
     } else {
       $jumlah = $jumlah + 0;
     }
   }

   header("Location:tampilan_statistik.php?jumlah=".$jumlah."&& bulan=".$bulan."&& tahun=".$tahun.
   "&& pekerjaan=".$pekerjaan."&& umur=".$umur."&& jenis_penyakit=".$jenis_penyakit);
 } elseif ($umur=='%') {
   $select_diagnosa =  "SELECT * FROM `diagnosa` WHERE tanggal_periksa LIKE '$tanggal_periksa-%'
    && diagnosis LIKE '$jenis_penyakit'";
   $query_diagnosa = mysqli_query($conn, $select_diagnosa);
   while ($data_diagnosa = mysqli_fetch_array($query_diagnosa)) {
     $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
     $select_pasien = "SELECt * FROM `pasien` WHERE no_rekam_medis=$no_rekam_medis && id_pekerjaan LIKE '$pekerjaan'";
     $query_pasien = mysqli_query ($conn, $select_pasien);
     error_reporting(0);
     if ($query_pasien ==1) {
       $jumlah = $jumlah + 1;
     } else {
       $jumlah = $jumlah + 0;
     }

   }
   header("Location:tampilan_statistik.php?jumlah=".$jumlah."&& bulan=".$bulan."&& tahun=".$tahun.
   "&& pekerjaan=".$pekerjaan."&& umur=".$umur."&& jenis_penyakit=".$jenis_penyakit);


 }

?>
