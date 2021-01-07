<?php
    include 'connection.php';
    $kecamatan = $_POST['kecamatan'];
    echo "<option value=''>Pilih Kelurahan</option>";

    $select_kelurahan = "SELECT * FROM `kelurahan` WHERE id_kecamatan =$kecamatan ORDER BY nama_kelurahan ASC";
    $query_kelurahan = mysqli_query($conn, $select_kelurahan);
	    while ($row = mysqli_fetch_assoc($query_kelurahan)) {
        $id_kelurahan = $row['id_kelurahan'];
        $nama_kelurahan = $row['nama_kelurahan'];
		      echo "<option value='$id_kelurahan'>$nama_kelurahan</option>";
	      }
 ?>
