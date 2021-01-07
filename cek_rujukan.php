<!DOCTYPE html>
<html>
<?php
include 'connection.php';
include  'build/head.php';
include  'build/menu_perawat.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Perawat</a></li>
        <li class="active">Cek Rujukan</li>
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
                              <?php
                              $id_diagnosa = $_POST['id_diagnosa'];
                              include "data_rujukan.php";
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
  include  'build/footer.php';
  ?>
