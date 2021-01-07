<?php
   include 'connection.php';
   echo "<option value=''>Pilih Provinsi</option>";
    $select_provinsi = "SELECT * FROM `provinsi` ORDER BY nama_provinsi ASC";
    $query_provinsi = mysqli_query($conn, $select_provinsi);
	    while ($row = mysqli_fetch_assoc($query_provinsi)) {
        $id_provinsi = $row['id_provinsi'];
        $nama_provinsi = $row['nama_provinsi'];
		      echo "<option value='$id_provinsi'>$nama_provinsi</option>";
	      }
 ?>
