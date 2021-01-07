<table class="table table-bordered">
  <?php
    $select_pp = "SELECT * FROM `pemeriksaan_penunjang`
      WHERE id_diagnosa = '$id_diagnosa'";
    $query_select_pp = mysqli_query($conn, $select_pp);
    $data_pp = mysqli_fetch_array($query_select_pp);
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
    $p_darah_rutin = 75000;
    $p_glukosa = 40000;
    $sum = 0;
   ?>
        <?php if ($hemoglobin != null){
          echo "<tr>
              <td>Hemoglobin </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        } if ($lekosit !=null) {
          echo "<tr>
              <td>Lekosit </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }if ($LED !=null) {
          echo "<tr>
              <td>LED </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }if ($trombosit !=null) {
          echo "<tr>
              <td>Trombosit </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }if ($hemotrocit !=null) {
          echo "<tr>
              <td>Hemotrocit </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }if ($MCV !=null) {
          echo "<tr>
              <td>MCV </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }if ($MCH !=null) {
          echo "<tr>
              <td>MCH</td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }if ($MCHC !=null) {
          echo "<tr>
              <td>MCHC </td>
              <td>:</td>
              <td>Rp$p_darah_rutin.00</td>
              </tr>";
              $sum = $sum+$p_darah_rutin;
        }?>
        <?php if ($gula_darah_swaktu != null){
          echo "<tr>
              <td>Gula Darah Swaktu </td>
              <td>:</td>
              <td>Rp$p_glukosa.00</td>
              </tr>";
              $sum = $sum+$p_glukosa;
        } if ($gula_darah_puasa !=null) {
          echo "<tr>
              <td>Gula Darah Puasa </td>
              <td>:</td>
              <td>Rp$p_glukosa.00</td>
              </tr>";
              $sum = $sum+$p_glukosa;
        }if ($gula_darah_post_prandial !=null) {
          echo "<tr>
              <td>Gula Darah Post Prandial </td>
              <td>:</td>
              <td>Rp$p_glukosa.00</td>
              </tr>";
              $sum = $sum+$p_glukosa;
        }
        $p_kolestrol = 40000;
        if ($kolestrol_total !=null) {
          echo "<tr>
              <td>Kolestrol Total </td>
              <td>:</td>
              <td>Rp$p_kolestrol.00</td>
              </tr>";
              $sum = $sum+$p_kolestrol;
        }
        $p_asam_urat = 40000;
        if ($asam_urat !=null) {
          echo "<tr>
              <td>Asam Urat </td>
              <td>:</td>
              <td>Rp$p_asam_urat.00</td>
              </tr>";
              $sum = $sum+$p_asam_urat;
        }
        $p_ureum = 40000;
        if ($urea !=null) {
          echo "<tr>
              <td>Urea </td>
              <td>:</td>
              <td>Rp$p_ureum.00</td>
              </tr>";
              $sum = $sum+$p_ureum;
        }if ($creatinine !=null) {
          echo "<tr>
              <td>Creatinine </td>
              <td>:</td>
              <td>Rp$p_ureum.00</td>
              </tr>";
              $sum = $sum+$p_ureum;
        }
        $p_fungsi_hati = 45000;
        if ($SGOT !=null) {
          echo "<tr>
              <td>SGOT </td>
              <td>:</td>
              <td>Rp$p_fungsi_hati.00</td>
              </tr>";
              $sum = $sum + $p_fungsi_hati;
        }if ($SGPT !=null) {
          echo "<tr>
              <td>SGPT </td>
              <td>:</td>
              <td>Rp$p_fungsi_hati.00</td>
              </tr>";
              $sum = $sum + $p_fungsi_hati;
        }
        $p_dengue = 150000;
        if ($dengue !=null) {
          echo "<tr>
              <td>Dengue </td>
              <td>:</td>
              <td>Rp$p_dengue.00</td>
              </tr>";
              $sum = $sum + $p_dengue;
        }
        $p_widal = 55000;
        if ($widal !=null) {
          echo "<tr>
              <td>Widal </td>
              <td>:</td>
              <td>Rp$p_widal.00</td>
              </tr>";
              $sum = $sum + $p_widal;
        }if ($PP_test !=null) {
          echo "<tr>
              <td>PP Test</td>
              <td>:</td>
              <td><td>Rp$p_widal.00</td>
              </tr>";
              $sum = $sum + $p_widal;
        }
        $p_urine_lengkap =200000;
        if ($urine_lengkap !=null) {
          echo "<tr>
              <td>Urine Lengkap</td>
              <td>:</td>
              <td><td>Rp$p_urine_lengkap.00</td>
              </tr>";
              $sum = $sum + $p_urine_lengkap;
        }?>
</table>
