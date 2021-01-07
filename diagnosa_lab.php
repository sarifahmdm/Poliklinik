<div class="box-body">
  <span><h2><b><font color="green">Data yang harus diperiksa</font></b></h2></span>
</div>
<form method="post" action="proses_diagnosa_lab.php">
  <?php $id_diagnosa = $_POST['id_diagnosa']; ?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Oleh Dokter</th>
        <th>Perlu Diperiksa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
      $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
      $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
      $id_user = $data_diagnosa['id_user'];
      $user_dokter = $data_diagnosa['user_dokter'];

      $select_user = "SELECT * FROM `user` WHERE id_user = '$id_user'";
      $query_select_user = mysqli_query($conn,$select_user);
      $data_user = mysqli_fetch_array($query_select_user);
      $nama_user = $data_user['nama_user'];

      if ($user_dokter != null) {
        $dokter = $user_dokter;
      } else {
        $dokter = $nama_user;
      }

      $select_pemeriksaan_penunjang = "SELECT * FROM `pemeriksaan_penunjang`
        WHERE id_diagnosa = '$id_diagnosa' ORDER BY id_pemeriksaan_penunjang DESC";
      $query_select = mysqli_query($conn,$select_pemeriksaan_penunjang);
          $data_pp = mysqli_fetch_array($query_select);
          $hemoglobin = $data_pp['hemoglobin'];
          $lekosit = $data_pp['lekosit'];
          $LED = $data_pp['led'];
          $trombosit = $data_pp['trombosit'];
          $hemotrocit = $data_pp['hemotrocit'];
          $MCV = $data_pp['mcv'];
          $MCH = $data_pp['mch'];
          $MCHC = $data_pp['mchc'];
          $gula_darah_swaktu = $data_pp['gula_darah_swaktu'];
          $gula_darah_puasa = $data_pp['gula_darah_puasa'];
          $gula_darah_post_prandial = $data_pp['gula_darah_post_prandial'];
          $kolestrol_total = $data_pp['kolestrol_total'];
          $asam_urat = $data_pp['asam_urat'];
          $urea = $data_pp['urea'];
          $creatinine = $data_pp['creatinine'];
          $SGOT = $data_pp['sgot'];
          $SGPT = $data_pp['sgpt'];
          $dengue = $data_pp['dengue'];
          $widal = $data_pp['widal'];
          $PP_test = $data_pp['pp_test'];
          $urine_lengkap = $data_pp['urine_lengkap'];
          echo "<tr>";
            echo "<td>";
            echo "$dokter";
            echo "</td>";
            echo "<td>";
            echo "<table class='table'>";

            if ($hemoglobin == 'on') {
            echo "<tr>
                    <td>Hemoglobin</td>
                    <td> <input type = 'number' name = 'hemoglobin'></td>
                  </tr>
                  ";
                }
            if ($lekosit == 'on') {
              echo "<tr>
                      <td>Lekosit</td>
                      <td><input type = 'number' name = 'lekosit'></td>
                    </tr>
                    ";
            }
            if ($LED == 'on') {
              echo "<tr>
                      <td>LED</td>
                      <td><input type = 'number' name = 'LED'></td>
                    </tr>
                    ";
            }
            if ($trombosit == 'on') {
              echo "<tr>
                      <td>Trombosit</td>
                      <td><input type = 'number' name = 'trombosit'></td>
                    </tr>
                    ";
            }
            if ($hemotrocit == 'on') {
              echo "<tr>
                      <td>Hemotrocit</td>
                      <td><input type = 'number' name = 'hemotrocit'></td>
                    </tr>
                    ";
            }
            if ($MCV == 'on') {
              echo "<tr>
                      <td>MCV</td>
                      <td><input type = 'number' name = 'mcv'></td>
                    </tr>
                    ";
            }
            if ($MCH == 'on') {
              echo "<tr>
                      <td>MCH</td>
                      <td><input type = 'number' name = 'mch'></td>
                    </tr>
                    ";
            }
            if ($MCHC == 'on') {
              echo "<tr>
                      <td>MCHC</td>
                      <td><input type = 'number' name = 'mchc'></td>
                    </tr>
                    ";
            }
            if ($gula_darah_swaktu == 'on') {
              echo "<tr>
                      <td>Gula Darah Swaktu</td>
                      <td><input type = 'number' name = 'gula_darah_swaktu'></td>
                    </tr>
                    ";
            }
            if ($gula_darah_puasa == 'on') {
              echo "<tr>
                      <td>Gula Darah Puasa</td>
                      <td><input type = 'number' name = 'gula_darah_puasa'></td>
                    </tr>
                    ";
            }
            if ($gula_darah_post_prandial == 'on') {
              echo "<tr>
                      <td>Gula Darah Post Prandial</td>
                      <td><input type = 'number' name = 'gula_darah_post_prandial'></td>
                    </tr>
                    ";
            }
            if ($kolestrol_total == 'on') {
              echo "<tr>
                      <td>Kolestrol Total</td>
                      <td><input type = 'number' name = 'kolestrol_total'></td>
                    </tr>
                    ";
            }
            if ($asam_urat == 'on') {
              echo "<tr>
                      <td>Asam Urat</td>
                      <td><input type = 'number' name = 'asam_urat'></td>
                    </tr>
                    ";
            }
            if ($urea == 'on') {
              echo "<tr>
                      <td>Urea</td>
                      <td><input type = 'number' name = 'urea'></td>
                    </tr>
                    ";
            }
            if ($creatinine == 'on') {
              echo "<tr>
                      <td>Creatinine</td>
                      <td><input type = 'number' name = 'creatinine'></td>
                    </tr>
                    ";
            }
            if ($SGOT == 'on') {
              echo "<tr>
                      <td>SGOT</td>
                      <td><input type = 'number' name = 'sgot'></td>
                    </tr>
                    ";
            }
            if ($SGPT == 'on') {
              echo "<tr>
                      <td>SGPT</td>
                      <td><input type = 'number' name = 'sgpt'></td>
                    </tr>
                    ";
            }
            if ($dengue == 'on') {
              echo "<tr>
                      <td>Dengue</td>
                      <td><input type = 'number' name = 'dengue'></td>
                    </tr>
                    ";
            }
            if ($widal == 'on') {
              echo "<tr>
                      <td>Widal</td>
                      <td><input type = 'number' name = 'widal'></td>
                    </tr>
                    ";
            }
            if ($PP_test == 'on') {
              echo "<tr>
                      <td>PP Test</td>
                      <td><input type = 'number' name = 'pp_test'></td>
                    </tr>
                    ";
            }
            if ($urine_lengkap == 'on') {
              echo "<tr>
                      <td>Urine Lengkap</td>
                      <td><input type = 'number' name = 'urine_lengkap'></td>
                    </tr>
                    ";
            }

            echo "</table";
            echo "</td>";
          echo "</tr>";
      ?>
    </tbody>
  </table>
  <input type="hidden" name="id_diagnosa" value="<?php echo $id_diagnosa; ?>"/>
  <div class="box-footer">
    <button type="submit" class="btn btn-info pull-right">Send to Doctor</button>
  </div>
</form>
