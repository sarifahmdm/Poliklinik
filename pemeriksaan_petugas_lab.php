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
        <li><a href="#"><i class="fa fa-dashboard"></i> Lab</a></li>
        <li class="active">Pemeriksaan Penunjang</li>
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
            <section class="content">
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-11">
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
                              <a data-dismiss="modal" data-toggle="modal" data-target="#myModalDataPasien">
                                <span class="badge bg-blue">Data Pasien</span>
                              </a>
                              <?php
                              include "diagnosa_lab.php";
                              ?>
                            </div>
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
  include 'build/modal_data_pasien.php';
  ?>
