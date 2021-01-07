<!DOCTYPE html>
<html>
<?php

include  'build/head.php';
include  'build/menu_petugas_lab.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Petugas LAB</a></li>
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
                              $nomor = 0;
                              $select_diagnosa = "SELECT * FROM `diagnosa`
                                WHERE tanggal_periksa = CURRENT_DATE()
                                ORDER BY tanggal_dibuat DESC";
                              $query_diagnosa = mysqli_query ($conn, $select_diagnosa);
                              while($data_diagnosa = mysqli_fetch_array ($query_diagnosa)) {
                                $no_rekam_medis = $data_diagnosa['no_rekam_medis'];
                                $id_diagnosa = $data_diagnosa['id_diagnosa'];
                                $select_pasien = "SELECT * FROM `pasien` WHERE  level>2 && no_rekam_medis = '$no_rekam_medis' " ;
                                $query_pasien = mysqli_query ($conn, $select_pasien);
                                while ($data_pasien = mysqli_fetch_array ($query_pasien)) {
                                  $level = $data_pasien['level'];
                                  $nama_pasien = $data_pasien['nama_pasien'];
                                  $nomor = $nomor + 1; ?>
                                  <tr>
                                    <td><?php echo $nomor ;?></td>
                                    <td><?php echo $nama_pasien ;?></td>
                                    <?php if ($level == 4) {?>
                                      <td>
                                        <form action="pemeriksaan_petugas_lab.php" method="post">
                                          <input type="hidden" name="id_diagnosa" value="<?php echo "$id_diagnosa"; ?>">
                                          <button type="submit" class="badge bg-green">Belum</button>
                                        </form>
                                      </td>
                                    <?php } elseif ($level == 43) { ?>
                                      <td><span cSlass="badge bg-orange"> Selesai Tes LAB </span></td>
                                    <?php }elseif ($level == 9) { ?>
                                      <td><span class="badge bg-blue"> Selesai </span></td>
                                    <?php } elseif ($level == 5) { ?>
                                      <td><span class="badge bg-orange"> Proses Pembayaran di Kasir </span></td>
                                    <?php } elseif ($level == 6) { ?>
                                      <td><span class="badge bg-orange"> Rujukan </span></td>
                                      <?php }?>
                                  </tr>
                                <?php }
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
