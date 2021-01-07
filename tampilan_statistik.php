<!DOCTYPE html>
<html>
<?php
include  'build/head.php';
include 'connection.php';
include  'build/menu_manajer.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Manajer</a></li>
        <li class="active"></li>Statistik
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-10">
          <div class="box box-primary">
            <div class="box-body">
              <span><h2>Statistik Data Pasien</h2></span>
            </div>
            <!--data pasien -->
            <?php
              $bulan = $_GET['bulan'];
              $tahun = $_GET['tahun'];
              $pekerjaan = $_GET['pekerjaan'];
              $umur = $_GET['umur'];
              $jenis_penyakit = $_GET['jenis_penyakit'];
              $jumlah = $_GET['jumlah'];

              if ($bulan=='%') {
                $bulan = "Semua";
              }
              if ($tahun=='%') {
                $tahun = "Semua";
              }
              if ($pekerjaan=='%') {
                $pekerjaan = "Semua";
              }
              if ($umur=='%') {
                $umur = "Semua";
              }
              if ($jenis_penyakit=='%') {
                $jenis_penyakit = "Semua";
              }
             ?>
            <div >
              <div >
                <table class="table">
                  <thead>
                    <th>Waktu</th>
                    <th>Pekerjaan</th>
                    <th>Umur</th>
                    <th>Jenis Penyakit</th>
                    <th>Jumlah</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <?php echo "Bulan : $bulan"; ?>
                        <br>
                        <?php echo "Tahun : $tahun"; ?>
                      </td>
                      <td>
                        <?php echo $pekerjaan; ?>
                      </td>
                      <td>
                        <?php echo $umur; ?>
                      </td>
                      <td>
                        <?php echo $jenis_penyakit; ?>
                      </td>
                      <td>
                        <?php echo $jumlah; ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
