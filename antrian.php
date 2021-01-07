<!DOCTYPE html>
<html>
<?php
include  'connection.php';
include  'build/head.php';
include  'build/menu_admin.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Operator</a></li>
        <li class="active">Antrian Pasien</li>
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
              <span><h2>Antrian Pasien</h2></span>
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
                                    <th>Pasien</th>
                                    <th>Status</th>
                                  </tr>
                                  <?php
                                  $tanggal = date('Y-m-d');
                                  $nomor = 0;
                                    $select_pasien = "SELECT * FROM `pasien`
                                      WHERE level >=0  && tanggal_periksa LIKE '%".$tanggal."%'
                                      ORDER BY tanggal_periksa DESC" ;
                                    $query = mysqli_query($conn,$select_pasien);
                                  while($data = mysqli_fetch_array ($query)) {
                                    $nomor = $nomor + 1 ;
                                    $id_pasien = $data['id_pasien'];
                                    $no_rekam_medis = $data['no_rekam_medis'];
                                    $nama_pasien = $data['nama_pasien'];
                                    $level = $data['level']; ?>
                                    <tr>
                                      <td><?php echo $nomor ;?></td>
                                      <td><?php echo $nama_pasien ;?></td>
                                      <?php if ($level == 0) { ?>
                                        <td>
                                            <button type="submit" class="badge bg-green"
                                            data-toggle="modal" data-target="#myModal_ajukan">Ajukan</button>
                                            <?php
                                            include 'build/modal_ajukan.php';
                                            ?>
                                        </td>
                                      <?php } elseif ($level == 9) { ?>
                                        <td><span class="badge bg-blue"> Selesai </span></td>
                                      <?php } elseif ($level == 2) { ?>
                                        <td><span class="badge bg-blue"> Sedang Pengkajian Awal oleh Perawat </span></td>
                                      <?php }elseif ($level == 3) { ?>
                                        <td><span class="badge bg-blue"> Sedang Diperiksa Dokter </span></td>
                                      <?php }elseif ($level == 43) { ?>
                                        <td><span class="badge bg-blue"> Selesai Tes LAB </span></td>
                                      <?php }elseif ($level == 1) { ?>
                                        <td><span class="badge bg-blue"> Selesai </span></td>
                                      <?php }elseif ($level == 4) { ?>
                                        <td><span class="badge bg-blue"> Sedang Tes LAB </span></td>
                                      <?php } elseif ($level == 5) { ?>
                                        <td><span class="badge bg-red"> Proses Pembayaran di Kasir </span></td>
                                      <?php } elseif ($level == 6) { ?>
                                        <td><span class="badge bg-red"> Rujukan </span></td>
                                      <?php }
                                      ?>
                                    </tr>
                                  <?php }
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
