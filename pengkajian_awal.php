<!DOCTYPE html>
<html>
<?php
include  'build/head.php';
include  'connection.php';
include  'build/menu_perawat.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pasien Baru</a></li>
        <li class="active">Pengkajian Awal</li>
      </ol>
    </section>
    <br><br>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <b><span><h2><font color="green">
                Form Input Pengkajian Awal Pasien :</font>
                <a data-dismiss="modal" data-toggle="modal" data-target="#myModalDataPasien">
                  <span class="badge bg-blue">Data Pasien</span>
                </a>
              </h3></span></b>
            </div>
            <section class="content">
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-11">
                  <div>
                    <div >
                      <!-- form start -->
                      <form action="proses_pengkajian_awal.php?jenis_poli=<?php echo "$jenis_poli"; ?>" method="post" class="form-horizontal">
                        <?php
                          $id_diagnosa = $_POST['id_diagnosa'];
                        ;?>
                        <div class="box-body">
                          <input type="hidden" name="id_diagnosa" value="<?php echo "$id_diagnosa";?>">
                          <div class="form-group">
                            <label  class="col-sm-4.5 control-label"><h3>1. Keluhan Utama</h3></label>
                            <div class="col-sm-10">
                              <textarea name="keluhan_utama" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label  class="col-sm-4.5 control-label"><h3>2. Riwayat Penyakit</h3></label>
                            <div class="col-sm-10">
                              <input type="text" name = "riwayat_sekarang"  class="form-control" placeholder="Riwayat Penyakit Sekarang">
                            </div>
                            <div class="col-sm-10">
                              <input type="text" name = "riwayat_dahulu" class="form-control" placeholder="Riwayat Penyakit Dahulu">
                            </div>
                            <div class="col-sm-10">
                              <input type="text" name = "riwayat_keluarga" class="form-control" placeholder="Riwayat Penyakit Keluarga">
                            </div><div class="col-sm-10">
                              <input type="text" name="riwayat_pribadi" class="form-control"
                              placeholder="Riwayat Penyakit Pribadi dan Sosial">
                            </div>
                            <br>
                            </div>
                            <div class="form-group">
                              <label  class="col-sm-4.5 control-label pull-left"><h3>3. Tanda Vital &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></label>
                              <div class="col-sm-10">
                                <table>
                                  <tr>
                                    <td>Tekanan Darah</td>
                                    <td><input type="text" name="tekanan_darah" >mnHg</input></td>
                                  </tr>
                                  <tr>
                                    <td>Nadi</td>
                                    <td><input type="number" name="nadi">kali/menit</input></td>
                                  </tr>
                                  <tr>
                                    <td>Suhu</td>
                                    <td><input type="number" name="suhu">&deg;C</input></td>
                                  </tr>
                                  <tr>
                                    <td>Respirasi</td>
                                    <td><input type="number" name="respirasi">kali/menit</input></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2.5 control-label"><h3>User Perawat &nbsp;&nbsp;</h3></label><br>
                          <div class="col-sm-10">
                            <input type="text" name = "user_perawat"  class="form-control" placeholder="Nama perawat yang menangani">
                          </div>
                        </div>
                        <div class="box-footer">
                          <button type="submit" class="btn btn-info pull-right">Kirim</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                    <!-- /.box-body -->
              </div>
                  <!-- /.box -->
            </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <?php
  include 'build/modal_data_pasien.php';
  include  'build/footer.php';
  ?>
