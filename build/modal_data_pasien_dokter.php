<!-- The Modal -->
<div class="modal fade" id="myModalDataPasien">
  <div class="modal-dialogdatapasien ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Data Pasien</h3>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <div class="box-body">
            <table class="table table-bordered">
                <thead>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Alamat Rumah</th>
                  <th>Jenis Kelamin</th>
                  <th>Suku/Bangsa</th>
                  <th>Agama</th>
                  <th>Pekerjaan</th>
                  <th>Golongan Darah</th>
                  <th>Pendidikan Terakhir</th>
                  <th>Status Perkawinan</th>
                  <th>Jenis Pembiayaan</th>
                </thead>
                <?php
                  $select_diagnosa = "SELECT no_rekam_medis FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
                  $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
                  $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
                  $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
                  $select_pasien = "SELECT * FROM `pasien` WHERE no_rekam_medis = '$no_rekam_medis'";
                  $query_select_pasien = mysqli_query($conn, $select_pasien);
                  $data_pasien = mysqli_fetch_array($query_select_pasien);
                  $tgl_lahir = $data_pasien['tgl_lahir'];
                  $tanggal = new DateTime($tgl_lahir);
                  $today = new DateTime();
                  $y = $today->diff($tanggal)->y;
                  $m = $today->diff($tanggal)->m;
                  $d = $today->diff($tanggal)->d;

                  $nama_pasien = $data_pasien['nama_pasien'];
                  $id_pasien = $data_pasien['id_pasien'];
                  $jenis_kelamin = $data_pasien['jenis_kelamin'];
                  $suku = $data_pasien['suku'];
                  $agama = $data_pasien['agama'];
                  $golongan_darah = $data_pasien['golongan_darah'];
                  $pendidikan_terakhir = $data_pasien['pendidikan_terakhir'];
                  $status_perkawinan = $data_pasien['status_perkawinan'];
                  $id_pekerjaan = $data_pasien['id_pekerjaan'];
                  $id_alamat = $data_pasien['id_alamat'];
                  $select_alamat = "SELECT * FROM `alamat` WHERE id_alamat = '$id_alamat'";
                  $query_select_alamat = mysqli_query($conn, $select_alamat);
                  $data_alamat = mysqli_fetch_array($query_select_alamat);
                  $alamat_rumah = $data_alamat['alamat_lengkap'];

                  $select_pembiayaan = "SELECT * FROM `pembiayaan` WHERE id_pasien = '$id_pasien'";
                  $query_select_pembiayaan = mysqli_query($conn, $select_pembiayaan);
                  $data_pembiayaan = mysqli_fetch_array($query_select_pembiayaan);
                  $jenis_pembiayaan = $data_pembiayaan['jenis_pembiayaan'];
                  $nama_asuransi = $data_pembiayaan['nama_asuransi'];
                  $nomor_asuransi = $data_pembiayaan['nomor_asuransi'];
                ?>
                <tbody>
                  <td><?php echo $nama_pasien; ?></td>
                  <td>
                    <?php
                      echo $y;
                      echo "-tahun-";
                      echo "$m";
                      echo "-bulan-";
                      echo "$d";
                      echo "-hari";

                    ?></td>
                  <td><?php echo $alamat_rumah;?></td>
                  <td><?php echo $jenis_kelamin; ?></td>
                  <td><?php echo $suku; ?></td>
                  <td><?php echo $agama; ?></td>
                  <td><?php echo $id_pekerjaan; ?></td>
                  <td><?php echo $golongan_darah; ?></td>
                  <td><?php echo $pendidikan_terakhir; ?></td>
                  <td><?php echo $status_perkawinan;?></td>
                  <?php if ($jenis_pembiayaan != "Umum"){
                    echo "<td>$jenis_pembiayaan-$nama_asuransi-$nomor_asuransi</td>";
                  } else {
                    echo "<td>$jenis_pembiayaan</td>";
                  }?>
                </tbody>
            </table>
          </div>
          <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>"/>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>




<!--ending modal -->
