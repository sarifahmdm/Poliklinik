<!-- The Modal -->
<div class="modal fade" id="myModalPengkajianAwal">
  <div class="modal-dialogdatapasien ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Data Pengkajian Awal</h3>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="proses_modal_pengkajian_awal_pasien_lama.php">
          <div class="box-body">
            <table class="table table-bordered">
                <thead>
                  <th>Keluhan Utama</th>
                  <th>Riwayat Penyakit</th>
                  <th>Tanda Vital</th>
                </thead>
                <?php
                    $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa = '$id_diagnosa'";
                    $query_select_diagnosa = mysqli_query($conn, $select_diagnosa);
                    $data_diagnosa = mysqli_fetch_array($query_select_diagnosa);
                    $rp_sekarang = $data_diagnosa['rp_sekarang'];
                    $keluhan_utama = $data_diagnosa['keluhan_utama'];
                    $rp_dahulu = $data_diagnosa['rp_dahulu'];
                    $rp_keluarga = $data_diagnosa['rp_keluarga'];
                    $rp_pribadi_sosial = $data_diagnosa['rp_pribadi_sosial'];
                 ?>
                <tbody>
                    <td>
                      <div class="form-group">
                        <div class="col-sm-10">
                          <textarea name="keluhan_utama" class="form-control" rows="3">
                            <?php echo "$keluhan_utama";?></textarea>
                        </div>
                      </div>
                    </td>
                    <td>
                      <table>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Sekarang</td>
                          <td>
                            <div class="col-sm-10">
                              <input type="text" name="rp_sekerang" class="form-control" placeholder="<?php echo "$rp_sekarang"; ?>">
                              </input>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Dulu</td>
                          <td>
                            <div class="col-sm-10">
                              <input type="text" name="rp_dahulu" class="form-control" placeholder="<?php echo "$rp_dahulu";?>">
                              </input>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Keluarga</td>
                          <td>
                            <div class="col-sm-10">
                              <input type="text" name="rp_keluarga" class="form-control" placeholder="<?php echo "$rp_keluarga";?>">
                              </input>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Pribadi dan Sosial</td>
                          <td>
                            <div class="col-sm-10">
                              <input type="text" name="rp_pribadi_sosial" class="form-control" placeholder="<?php echo "$rp_pribadi_sosial";?>">
                              </input>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td>
                      <?php
                        $select_tanda_vital = "SELECT * FROM `tanda_vital` WHERE id_diagnosa = '$id_diagnosa'";
                        $query_select_tanda_vital = mysqli_query($conn, $select_tanda_vital);
                        $data_tanda_vital = mysqli_fetch_array($query_select_tanda_vital);
                        $tekanan_darah = $data_tanda_vital['tekanan_darah'];
                        $nadi= $data_tanda_vital['nadi'];
                        $suhu= $data_tanda_vital['suhu'];
                        $respirasi= $data_tanda_vital['respirasi'];
                     ?>
                      <table>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Tekanan Darah</td>
                          <td>
                            <div class="col-xs-5">
                              <input type="text" name="tekanan_darah" class="form-control" placeholder="<?php echo "$tekanan_darah";?>">
                              </input>
                            </div>
                          </td>
                          <td>mnHg</td>
                        </tr>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Nadi</td>
                          <td>
                            <div class="col-xs-5">
                              <input type="text" class="form-control" placeholder="<?php echo "$nadi";?>">
                              </input>
                            </div>
                          </td>
                          <td>kali/menit</td>
                        </tr>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Suhu</td>
                          <td>
                            <div class="col-xs-5">
                              <input type="text" class="form-control" placeholder="<?php echo "$suhu";?>">
                              </input>
                            </div>
                          </td>
                          <td>&deg;C</td>
                        </tr>
                        <tr>
                          <div class="form-group">
                          </div>
                          <td>Respirasi</td>
                          <td>
                            <div class="col-xs-5">
                              <input type="text" class="form-control" placeholder="<?php echo "$respirasi"; ?>">
                              </input>
                            </div>
                          </td>
                          <td>kali/menit</td>
                        </tr>
                      </table>
                    </td>
                  </form>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-warning">Simpan</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>




<!--ending modal -->
