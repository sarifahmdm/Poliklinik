<?php
  $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
  $query_diagnosa = mysqli_query($conn, $select_diagnosa);
  $data_diagnosa = mysqli_fetch_array($query_diagnosa);
  $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
  $jenis_poli = $data_diagnosa['jenis_poli'];
  $user_dokter = $data_diagnosa['user_dokter'];

  $select_pasien="SELECT * FROM `pasien` WHERE no_rekam_medis = '$no_rekam_medis'";
  $query_pasien = mysqli_query($conn, $select_pasien);
  $data_pasien = mysqli_fetch_array($query_pasien);

  $select_user = "SELECT * FROM `user` WHERE jenis_poli = '$jenis_poli'";
  $query_user = mysqli_query($conn, $select_user);
  $data_user = mysqli_fetch_array($query_user);

  $select_rujukan = "SELECT * FROM `rujukan`  WHERE id_diagnosa = '$id_diagnosa'";
  $query_rujukan = mysqli_query($conn, $select_rujukan);
  $data_rujukan = mysqli_fetch_array($query_rujukan);

  $nama_pasien = $data_pasien['nama_pasien'];
  $nama_user = $data_user['nama_user'];
  $tujuan_rujukan = $data_rujukan['tujuan'];
  $lingkup = $data_rujukan['lingkup'];

  if ($user_dokter!=null) {
    $dokter = $user_dokter;
  } else {
    $dokter = $nama_user;
  }
?>
<div class="box-body">
  <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nama Pasien</th>
          <th>Dirujuk Oleh</th>
          <th>Dirujuk Ke-</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <td><?php echo $nama_pasien ?></td>
        <td><?php echo $dokter ?></td>
        <td><?php echo $tujuan_rujukan ?></td>
        <td>
          <form method="post" action="proses_data_rujukan.php?jenis_poli=<?php echo $jenis_poli; ?>">
            <input type="hidden" name="id_diagnosa" value="<?php echo $id_diagnosa;?>"/>
            <input type="hidden" name="no_rekam_medis" value="<?php echo $no_rekam_medis;?>"/>
            <input type="hidden" name="tujuan_rujukan" value="<?php echo $tujuan_rujukan;?>"/>
            <input type="hidden" name="lingkup" value="<?php echo $lingkup;?>"/>
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Oke</button>
            </div>
          </form>
        </td>
      </tbody>
  </table>
</div>
