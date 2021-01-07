<!DOCTYPE html>
<html>
<?php
include 'connection.php';
include  'build/head.php';
include  'build/menu_dokter.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekam Medis</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-10">
          <div class="box box-primary">
            <!--data pasien -->
            <div >
              <table class="table">
                <thead>
                  <th>No Rekam Medis</th>
                  <th>Waktu Pembuatan</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <tr>
                    <td>21123232</td>
                    <td>05/08/2010</td>
                    <td>
                      <a href="rekam_medis.php"><span class="badge bg-green">Lihat</span></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--end data pasien -->
            <!-- /.box-header -->
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
