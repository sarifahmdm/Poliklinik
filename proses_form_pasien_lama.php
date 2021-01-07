<?php
     include 'connection.php';
     $no_rm=$_POST['no_rm'];
     $no_induk=$_POST['no_induk'];
     $nama_lengkap=$_POST['nama_lengkap'];
     $tanggal_lahir=$_POST['tanggal_lahir'];
     $kelurahan=$_POST['kelurahan'];
     $kode_pos=$_POST['kode_pos'];
     $alamat_lengkap=$_POST['alamat_lengkap'];
     $jenis_kelamin=$_POST['jenis_kelamin'];
     $suku_bangsa=$_POST['suku_bangsa'];
     $agama=$_POST['agama'];
     $pekerjaan=$_POST['pekerjaan'];
     $no_telpon=$_POST['no_telpon'];
     $golongan_darah=$_POST['golongan_darah'];
     $pendidikan=$_POST['pendidikan'];
     $status_perkawinan=$_POST['status_perkawinan'];
     $level = 1;
     $select_alamat = "SELECT * FROM `alamat` ORDER BY id_alamat DESC";
     $query_select_alamat = mysqli_query($conn, $select_alamat);
     $data_alamat = mysqli_fetch_array($query_select_alamat);
     $id_alamat_awal = $data_alamat['id_alamat'];

     $id_alamat = $id_alamat_awal + 1;
     $insert_alamat = "INSERT INTO `alamat` (`id_alamat`,`alamat_lengkap`, `id_kelurahan`, `kode_pos`)
      VALUES ('$id_alamat','$alamat_lengkap', '$kelurahan', '$kode_pos')";
    $query_insert_alamat = mysqli_query($conn, $insert_alamat);

     $tambah="INSERT INTO `pasien`(`no_rekam_medis`, `nik`, `nama_pasien`, `tgl_lahir`, `jenis_kelamin`,
       `agama`, `suku`, `nomor_telepon`, `pendidikan_terakhir`, `status_perkawinan`, `golongan_darah`,
       `id_alamat`, `id_pekerjaan`, `level`,`tanggal_periksa`)
       VALUES ('$no_rm','$no_induk','$nama_lengkap','$tanggal_lahir','$jenis_kelamin','$agama','$suku_bangsa','$no_telpon',
          '$pendidikan','$status_perkawinan','$golongan_darah','$id_alamat','$pekerjaan','$level',CURRENT_TIME)";
     $query = mysqli_query($conn,$tambah);

     $select_pasien = "SELECT * FROM `pasien` ORDER BY id_pasien DESC";
     $query_pasien = mysqli_query($conn, $select_pasien);
     $data_pasien =mysqli_fetch_array($query_pasien);
     $id_pasien = $data_pasien['id_pasien'];

     $insert_pembiayaan = "INSERT INTO `pembiayaan` (`jenis_pembiayaan`, `nama_asuransi`,`nomor_asuransi`,`id_pasien`)
      VALUES ('$jenis_pembiayaan','$nama_asuransi','$nomor_asuransi','$id_pasien')";
     $query_insert_p = mysqli_query($conn, $insert_pembiayaan);

     $tambah_rekam_medis = "INSERT INTO `rekam_medis` (`no_rekam_medis`, `tanggal_pembuatan`)
        VALUES ('$no_rm', CURRENT_TIME());";
      $query2 = mysqli_query ($conn, $tambah_rekam_medis);
     if($query){
       header("Location: data_RM_pasien_admin.php");
     } else {
      echo"<br><br><center><h3>Error, please try again!</h3></center>";
     }
?>
