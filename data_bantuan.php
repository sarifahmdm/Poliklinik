<form class="from" method="get" action="kwitansi.php">
  <input type="hidden" name="id_diagnosa" value="<?php echo "$id_diagnosa"; ?>"/>
  <div class="box-body">
    <table class="table table-bordered">
        <thead>
          <th>Oleh Dokter</th>
          <th>Pemeriksaan Penunjang</th>
          <th>Tindakan</th>
          <th>Aksi</th>
        </thead>
        <tbody>
        <?php
            echo "<tr>";
            $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa ='$id_diagnosa'";
            $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
            $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
            $jenis_poli = $data_diagnosa['jenis_poli'];
            $nomor_rekam_medis = $data_diagnosa['no_rekam_medis'];
            $user_dokter = $data_diagnosa['user_dokter'];

            $select_pasien ="SELECT * FROM `pasien` WHERE no_rekam_medis = '$nomor_rekam_medis'";
            $query_pasien = mysqli_query($conn, $select_pasien);
            $data_pasien = mysqli_fetch_array($query_pasien);
            $ajukan = $data_pasien['ajukan'];
            if ($ajukan == 1) {
              $data_ajukan = 25000;
            } else {
              $data_ajukan = 35000;
            }

            $select_user = "SELECT * FROM `user` WHERE jenis_poli='$jenis_poli' && jabatan='2'";
            $query_user = mysqli_query($conn, $select_user);
            $data_user = mysqli_fetch_array($query_user);
            $nama_user = $data_user['nama_user'];
            $tanggal_periksa = $data_diagnosa['tanggal_periksa'];
            $tahun_diagnosa = substr($tanggal_periksa,0,4);
            $bulan_diagnosa = substr($tanggal_periksa,5,2);
            $tanggal_diagnosa = substr($tanggal_periksa,8,2);

            if ($user_dokter != null) {
              $dokter = $user_dokter;
            } else {
              $dokter = $nama_user;
            }

            echo "<td>$dokter</td>";


            echo "<td>";
            include 'data_bantuan_pp.php';
            echo "</td>";

            $select_penanganan = "SELECT * FROM `penanganan` WHERE id_diagnosa = '$id_diagnosa'";
            $query_penanganan = mysqli_query($conn, $select_penanganan);
            $total = 0;
            echo "<td>";
            echo "<table class='table table-bordered'>";
            $total = 0;
            while ($data_penanganan = mysqli_fetch_array($query_penanganan)) {
              $id_tindakan = $data_penanganan['id_tindakan'];
              $select_t = "SELECT * FROM `tindakan` WHERE id_tindakan = $id_tindakan";
              $query_t = mysqli_query($conn, $select_t);
              $data_t = mysqli_fetch_array($query_t);
              $nama_tindakan = $data_t['nama_tindakan'];
              $select_tindakan = "SELECT * FROM `tarif_tindakan` WHERE id_tindakan=$id_tindakan";
              $query_tt = mysqli_query($conn, $select_tindakan);
              while ($data_tt = mysqli_fetch_array($query_tt)) {
                $start_date = $data_tt ['start_date'];
                $end_date = $data_tt ['end_date'];
                $tahun_mulai =substr($start_date,0,4);
                $bulan_mulai =substr($start_date,5,2);
                $tanggal_mulai =  substr($start_date,8,2);
                $tarif = $data_tt['tarif'];
              }
              echo "<tr>";
                echo "<td>$nama_tindakan</td>";
                echo "<td>:</td>";
              if ($end_date == null) {
                if ($tahun_mulai <= $tahun_diagnosa && $bulan_mulai <= $bulan_diagnosa) {
                  $total = $total + $tarif;
                  echo "<td>Rp$tarif,00</td>";
                }
              }
              echo "<tr>";
            }
            echo "</table>";
            echo "</td>";
            echo "<td></td>
            ";
            echo "</tr>";
            echo "<tr>
            <td>Konsultasi dan Obat</td>
            <td></td>
            <td></td>
            <td>Rp$data_ajukan.00</td>
            </tr>
            ";
            echo "<tr>";
            echo "
            <td>Jumlah</td>
            <td>Rp$sum,00</td>
            <td>Rp$total,00</td>";
            $total_sum = $sum + $total+$data_ajukan;
            echo "
            <td>Rp$total_sum.00</td>
            ";
            echo "</tr>";
            echo "<tr>";
            echo "
            <td>Terbilang</td>
            <td>
            <input type='text' name='terbilang' class='form form-control' placeholder = 'Masukkan terbilang'></input>
            </td>
            <td></td>
            <input type='hidden' name='sum' value=$sum>
            <input type='hidden' name='total_sum' value=$total_sum/>
            <td>
              <button type='submit' class='badge bg-green'>Selesai</button>
            </td>
            ";
            echo "</tr>";

        ?>

        </tbody>
    </table>
  </div>
</form>
