<!DOCTYPE html>
<html>
<?php
include  'connection.php';
include  'build/head.php';
include  'build/menu_dokter.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dokter</a></li>
        <li class="active">Riwayat Diagnosa</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-10">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <span><h2>Riwayat Diagnosa</h2></span>
            </div>
            <section class="content">
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-10">
                  <div>
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <!-- Left col -->
                        <div class="col-md-10">
                          <div>
                            <div class="box-header with-border">
                              <!-- /.box-header -->
                              <div class="box-body">
                                <table class="table table-bordered">
                                  <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Aksi</th>
                                  </tr>
                                  <?php
                                      $no = 1;
                                      $no_rekam_medis = $_GET['no_rekam_medis'];
                                      $select_diagnosa = "SELECT * FROM `diagnosa` WHERE no_rekam_medis='$no_rekam_medis' ORDER BY tanggal_dibuat DESC";
                                      $query_diagnosa = mysqli_query($conn, $select_diagnosa);
                                      while ($data_diagnosa=mysqli_fetch_array($query_diagnosa)) {
                                        $id_diagnosa = $data_diagnosa['id_diagnosa'];
                                        $tanggal_pembuatan = $data_diagnosa['tanggal_dibuat'];
                                        echo "
                                        <tr>
                                        <td>$no</td>
                                        <td>$tanggal_pembuatan</td>
                                        <td>
                                          <a href='berkas_RM.php?id_diagnosa=$id_diagnosa'><span type='submit' class='badge bg-orange'>Lihat</span></a>
                                        </tr>
                                        ";
                                        $no = $no+1;
                                      }
                                   ?>
                                </table>
                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer clearfix">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                  <li><a href="#">&laquo;</a></li>
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                              </div>
                            </div>
                            <!-- /.box -->
                            </div>
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
  include  'build/footer.php';
  ?>
