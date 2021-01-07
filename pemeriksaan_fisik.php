<div class="box-body">
    <span><h2><b><font color="green">A. Pemeriksaan Fisik</font></b></h2></span>
</div>
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-10">
        <div>
          <!-- Horizontal Form -->
          <div >
            <?php
            $select_pemeriksaan_fisik = "SELECT * FROM `pemeriksaan_fisik` WHERE id_diagnosa = '$id_diagnosa'";
            $query_spf = mysqli_query($conn,$select_pemeriksaan_fisik);
            $num = 0 ;
            while ($data_pf = mysqli_fetch_array ($query_spf)) {
              $num = $num + 1;
              $kepala_dan_leher = $data_pf['kepala_dan_leher'];
              $thorax = $data_pf['thorax'];
              $abdomen = $data_pf['abdomen'];
              $ekstremitas = $data_pf['ekstremitas'];
              $status_lokalisasi = $data_pf['status_lokalisasi'];
            }

            $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
            $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
            $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
            $user_dokter = $data_diagnosa['user_dokter'];


            if ($num == 1) {
              echo "
              <form method='post' action='proses_pemeriksaan_fisik.php?jenis_poli=$jenis_poli' class='form-horizontal'>
                <div class='box-body'>
                  <input type='hidden' name='id_diagnosa' value='$id_diagnosa'>
                  <input type='hidden' name='num' value='$num'>
                  <div class='form-group'>
                    <div class='col-sm-10'>
                      <textarea name='kepala_dan_leher' class='form-control'
                      rows='3' >$kepala_dan_leher</textarea>
                    </div>
                  </div>
                  <div class='form-group'>
                    <div class='col-sm-10'>
                      <textarea name='thorax' class='form-control'
                      rows='3' >$thorax</textarea>
                    </div>
                  </div>
                  <div class='form-group'>
                    <div class='col-sm-10'>
                      <textarea name='abdomen' class='form-control'
                      rows='3'>$abdomen</textarea>
                    </div>
                  </div>
                  <div class='form-group'>
                    <div class='col-sm-10'>
                      <textarea name='ekstremitas' class='form-control'
                      rows='3' >$ekstremitas</textarea>
                    </div>
                  </div>
                  <div class='form-group'>
                    <div class='col-sm-10'>
                      <textarea name='status_lokalisasi' class='form-control'
                      rows='3'>$status_lokalisasi</textarea>
                    </div>
                  </div>";

                  if ($user_dokter != null) {
                    echo "
                    <div class='form-group'>
                      <label  class='col-sm-2.5 control-label'><h3>User Dokter &nbsp;&nbsp;</h3></label><br>
                      <div class='col-sm-10'>
                        <input type='text' name = 'user_dokter'  class='form-control' value = '$user_dokter'>
                      </div>
                    </div>";
                  } else {
                    echo "
                    <div class='form-group'>
                      <label  class='col-sm-2.5 control-label'><h3>User Dokter &nbsp;&nbsp;</h3></label><br>
                      <div class='col-sm-10'>
                        <input type='text' name = 'user_dokter'  class='form-control' placeholder='Nama dokter yang menangani'>
                      </div>
                    </div>";
                  }

                echo "
                </div>
                <!-- /.box-body -->
                <button type='submit' class='btn btn-info pull-right'>Selanjutnya</button>
                <br><br>
                <!-- /.box-footer -->
              </form>
              ";
           } elseif ($num == 0) {
            echo "
            <form method='post' action='proses_pemeriksaan_fisik.php?jenis_poli=$jenis_poli' class='form-horizontal'>
              <div class='box-body'>
                <input type='hidden' name='id_diagnosa' value='$id_diagnosa'>
                <input type='hidden' name='num' value='$num'>
                <div class='form-group'>
                  <div class='col-sm-10'>
                    <textarea name='kepala_dan_leher' class='form-control'
                    rows='3' placeholder='1. Kepala dan Leher'></textarea>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='col-sm-10'>
                    <textarea name='thorax' class='form-control'
                    rows='3' placeholder='2. Thorax'></textarea>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='col-sm-10'>
                    <textarea name='abdomen' class='form-control'
                    rows='3' placeholder='3. Abdomen'></textarea>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='col-sm-10'>
                    <textarea name='ekstremitas' class='form-control'
                    rows='3' placeholder='4. Ekstremitas'></textarea>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='col-sm-10'>
                    <textarea name='status_lokalisasi' class='form-control'
                    rows='3' placeholder='5. Status Lokalisasi'></textarea>
                  </div>
                </div>
                <div class='form-group'>
                  <label  class='col-sm-2.5 control-label'><h3>User Dokter &nbsp;&nbsp;</h3></label><br>
                  <div class='col-sm-10'>
                    <input type='text' name = 'user_dokter'  class='form-control' placeholder='Nama dokter yang menangani'>
                  </div>
                </div>
              </div>
              <button type='submit' class='btn btn-info pull-right'>Selanjutnya</button>
              <br><br>
            </form>
            ";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
