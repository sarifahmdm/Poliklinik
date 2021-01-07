<!DOCTYPE html>
<html>
<?php
include 'connection.php';
include  'build/head.php';
include  'build/menu_kasir.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kasir</a></li>
        <li class="active">Tagihan Aktif</li>
        <li class="active">Cek Bayar</li>
      </ol>
    </section>
    <br><br>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <?php $id_diagnosa = $_POST['id_diagnosa']; ?>
        <!-- Left col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div >
              <div class="box-body">
                <a data-dismiss="modal" data-toggle="modal" data-target="#myModalDataPasien">
                  <span class="badge bg-blue">Data Pasien</span>
                </a>
                <span><h3><b><font color="green">Data Tambahan</font></b></h3></span>
              </div>
              <?php include "data_bantuan.php"; ?>
            </div>
            <!-- /.box-header -->

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
