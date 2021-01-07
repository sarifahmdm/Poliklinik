<?php
    include 'connection.php';
    $provinsi = $_POST['provinsi'];
    echo "<option value=''>Pilih Kabupaten/Kota</option>";

    $select_kabupaten = "SELECT * FROM `kabupaten` WHERE id_provinsi =$provinsi ORDER BY nama_kabupaten ASC";
    $query_kabupaten = mysqli_query($conn, $select_kabupaten);
	    while ($row = mysqli_fetch_assoc($query_kabupaten)) {
        $id_kabupaten = $row['id_kabupaten'];
        $nama_kabupaten = $row['nama_kabupaten'];
		      echo "<option value='$id_kabupaten'>$nama_kabupaten</option>";
	      }
 ?>
