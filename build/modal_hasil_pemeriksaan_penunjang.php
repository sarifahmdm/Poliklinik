<!-- The Modal -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Hasil Pemeriksaan Penunjang</h3>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <div class="box-body form-group">
            <table class="table table-bordered">
              <thead>
                <th>Kimia Darah</th>
                <th>Darah Rutin</th>
                <th>Serologi</th>
                <th>Urinologi</th>
              </thead>
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
               ?>
              <tbody>
                <td>
                  <table class="table">
                    <?php if ($hemoglobin != null){
                      echo "<tr>
                          <td>Hemoglobin </td>
                          <td>:</td>
                          <td>$hemoglobin</td>
                          </tr>";
                    } if ($lekosit !=null) {
                      echo "<tr>
                          <td>Lekosit </td>
                          <td>:</td>
                          <td>$lekosit</td>
                          </tr>";
                    }if ($LED !=null) {
                      echo "<tr>
                          <td>LED </td>
                          <td>:</td>
                          <td>$LED</td>
                          </tr>";
                    }if ($trombosit !=null) {
                      echo "<tr>
                          <td>Trombosit </td>
                          <td>:</td>
                          <td>$trombosit</td>
                          </tr>";
                    }if ($hemotrocit !=null) {
                      echo "<tr>
                          <td>Hemotrocit </td>
                          <td>:</td>
                          <td>$hemotrocit</td>
                          </tr>";
                    }if ($MCV !=null) {
                      echo "<tr>
                          <td>MCV </td>
                          <td>:</td>
                          <td>$MCV</td>
                          </tr>";
                    }if ($MCH !=null) {
                      echo "<tr>
                          <td>MCH</td>
                          <td>:</td>
                          <td>$MCH</td>
                          </tr>";
                    }if ($MCHC !=null) {
                      echo "<tr>
                          <td>MCHC </td>
                          <td>:</td>
                          <td>$MCHC</td>
                          </tr>";
                    }?>
                  </table>
                </td>
                <td>
                  <table class="table">
                    <?php if ($gula_darah_swaktu != null){
                      echo "<tr>
                          <td>Gula Darah Swaktu </td>
                          <td>:</td>
                          <td>$gula_darah_swaktu</td>
                          </tr>";
                    } if ($gula_darah_puasa !=null) {
                      echo "<tr>
                          <td>Gula Darah Puasa </td>
                          <td>:</td>
                          <td>$gula_darah_puasa</td>
                          </tr>";
                    }if ($gula_darah_post_prandial !=null) {
                      echo "<tr>
                          <td>Gula Darah Post Prandial </td>
                          <td>:</td>
                          <td>$gula_darah_post_prandial</td>
                          </tr>";
                    }
                    if ($kolestrol_total !=null) {
                      echo "<tr>
                          <td>Kolestrol Total </td>
                          <td>:</td>
                          <td>$kolestrol_total</td>
                          </tr>";
                    }
                    if ($asam_urat !=null) {
                      echo "<tr>
                          <td>Asam Urat </td>
                          <td>:</td>
                          <td>$asam_urat</td>
                          </tr>";
                    }
                    if ($urea !=null) {
                      echo "<tr>
                          <td>Urea </td>
                          <td>:</td>
                          <td>$urea</td>
                          </tr>";
                    }if ($creatinine !=null) {
                      echo "<tr>
                          <td>Creatinine </td>
                          <td>:</td>
                          <td>$creatinine</td>
                          </tr>";
                    }
                    if ($SGOT !=null) {
                      echo "<tr>
                          <td>SGOT </td>
                          <td>:</td>
                          <td>$SGOT</td>
                          </tr>";
                    }if ($SGPT !=null) {
                      echo "<tr>
                          <td>SGPT </td>
                          <td>:</td>
                          <td>$SGPT</td>
                          </tr>";
                    }?>
                  </table>
                </td>
                <td>
                  <table class="table">
                    <?php
                    if ($dengue !=null) {
                      echo "<tr>
                          <td>Dengue </td>
                          <td>:</td>
                          <td>$dengue</td>
                          </tr>";
                    }
                    if ($widal !=null) {
                      echo "<tr>
                          <td>Widal </td>
                          <td>:</td>
                          <td>$widal</td>
                          </tr>";
                    }if ($PP_test !=null) {
                      echo "<tr>
                          <td>PP Test</td>
                          <td>:</td>
                          <td>$PP_test</td>
                          </tr>";
                    }?>
                  </table>
                </td>
                <td>
                  <table class="table">
                    <?php
                    if ($urine_lengkap !=null) {
                      echo "<tr>
                          <td>Urine Lengkap</td>
                          <td>:</td>
                          <td>$urine_lengkap</td>
                          </tr>";
                    }
                  ?>
                  </table>
                </td>
              </tbody>
            </table>
          </div>
          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>




<!--ending modal -->
