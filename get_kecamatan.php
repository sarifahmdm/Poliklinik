<?php
    include 'connection.php';
    $kabupaten = $_POST['kabupaten'];
    echo "<option value=''>Pilih Kecamatan</option>";

    $select_kecamatan = "SELECT * FROM `kecamatan` WHERE id_kabupaten =$kabupaten ORDER BY nama_kecamatan ASC";
    $query_kecamatan = mysqli_query($conn, $select_kecamatan);
	    while ($row = mysqli_fetch_assoc($query_kecamatan)) {
        $id_kecamatan = $row['id_kecamatan'];
        $nama_kecamatan = $row['nama_kecamatan'];
		      echo "<option value='$id_kecamatan'>$nama_kecamatan</option>";
	      }
 ?>
