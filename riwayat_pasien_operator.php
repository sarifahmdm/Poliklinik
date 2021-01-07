<!DOCTYPE html>
<html>
<?php
include  'build/head.php';
include  'build/menu_admin.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Operator</a></li>
        <li class="active"></li>Riwayat Pasien
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
                  <th>Nik</th>
                  <th>Nama Pasien</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <tr>
                    <td>180803110201</td>
                    <td>Mr Jhons</td>
                    <td>
                      <button type="submit" class="badge bg-green"
                      data-toggle="modal" data-target="#myModal_ajukan">Ajukan</button>
                      <a href="rekam_medis.php"><span class="badge bg-orange">Lihat Rekam Medis</span></a></td>
                  </tr>
                  <tr>
                    <td>180800000001</td>
                    <td>Mrs Jouy</td>
                    <td>
                      <button type="submit" class="badge bg-green"
                      data-toggle="modal" data-target="#myModal_ajukan">Ajukan</button>
                      <a href="rekam_medis.php"><span class="badge bg-orange">Lihat Rekam Medis</span></a></td>
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
  include 'build/modal_ajukan.php';
  include  'build/footer.php';
  ?>